<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Group\StoreGroupRequest;
use App\Http\Requests\Dashboard\Group\UpdateGroupRequest;
use App\Services\Dashboard\GroupManagementService;
use App\Services\Dashboard\SectionManagementService;
use App\Traits\ResponseMessageTrait;

class GroupController extends Controller
{
    protected $groupManagementService;
    protected $sectionManagmentService;
    use ResponseMessageTrait;
    protected $name = "المجموعة";

    public function __construct(GroupManagementService $groupManagementService, SectionManagementService $sectionManagmentService)
    {
        $this->groupManagementService = $groupManagementService;
        $this->sectionManagmentService = $sectionManagmentService;
    }

    public function index($sectionId)
    {
        $groups =  $this->groupManagementService->getPaginatedgroupsInSection($sectionId);
        $section = $this->sectionManagmentService->findSectionById($sectionId);
        return view("dashboard.pages.groups.index", compact("groups", "section"));
    }

    public function create($sectionId)
    {
        return view("dashboard.pages.groups.create", compact("sectionId"));
    }

    public function store(StoreGroupRequest $request)
    {
        $data = $request->validated();
        $group = $this->groupManagementService->createNewgroup($data);
        if (!$group) {
            return redirect()->route("dashboard.groups.create", $group->section_id)->with("error", $this->errorResponse($this->name, 1));
        }
        return redirect()->route("dashboard.groups.index", parameters: $group->section_id)->with("success", $this->successResponse($this->name, 1));
    }

    public function edit($id)
    {
        $group = $this->groupManagementService->findgroupById($id);
        return view("dashboard.pages.groups.edit", compact("group"));
    }

    public function update(UpdateGroupRequest $request, $id)
    {
        $data = $request->validated();
        $group = $this->groupManagementService->updategroupById($id, $data);
        if (!$group) {
            return redirect()->route("dashboard.groups.edit", $id)->with("error", $this->errorResponse($this->name, 2));
        }
        return redirect()->route("dashboard.groups.index", $group->section_id)->with("success", $this->successResponse($this->name, 2));
    }

    public function destroy($id)
    {
        $group = $this->groupManagementService->deletegroupById($id);
        if (!$group) {
            return response()->json([
                'success' => false,
                'message' => $this->errorResponse($this->name, 3)
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => $this->successResponse($this->name, 3)
        ]);
    }
}
