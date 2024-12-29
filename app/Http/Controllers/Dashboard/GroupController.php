<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Group\StoreGroupRequest;
use App\Http\Requests\Dashboard\Group\UpdateGroupRequest;
use App\Services\Dashboard\GroupManagementService;

class GroupController extends Controller
{
    protected $groupManagementService;
    protected $name = "المجموعة";

    public function __construct(GroupManagementService $groupManagementService)
    {
        $this->groupManagementService = $groupManagementService;
    }

    public function index($sectionId)
    {
        $groups =  $this->groupManagementService->getPaginatedgroupsInSection($sectionId);
        return view("dashboard.groups.index", compact("groups"));
    }

    public function show($id)
    {
        $group = $this->groupManagementService->findgroupById($id);
        return view("dashboard.groups.show", compact("group"));
    }

    public function create()
    {
        return view("dashboard.groups.create");
    }

    public function store(StoreGroupRequest $request)
    {
        $data = $request->validated();
        $group = $this->groupManagementService->createNewgroup($data);
        if (!$group) {
            return redirect()->route("dashboard.groups.create")->with("error", $this->errorResponse($this->name, 1));
        }
        return redirect()->route("dashboard.groups.index")->with("success", $this->successResponse($this->name, 1));
    }

    public function edit($id)
    {
        $group = $this->groupManagementService->findgroupById($id);
        return view("dashboard.groups.edit", compact("group"));
    }

    public function update(UpdateGroupRequest $request, $id)
    {
        $data = $request->validated();
        $group = $this->groupManagementService->updategroupById($id, $data);
        if (!$group) {
            return redirect()->route("dashboard.groups.edit", $id)->with("error", $this->errorResponse($this->name, 2));
        }
        return redirect()->route("dashboard.groups.index")->with("success", $this->successResponse($this->name, 2));
    }

    public function destroy($id)
    {
        $group = $this->groupManagementService->deletegroupById($id);
        if (!$group) {
            return redirect()->route("dashboard.groups.index")->with("error", $this->errorResponse($this->name, 3));
        }
        return redirect()->route("dashboard.groups.index")->with("success", $this->successResponse($this->name, 3));
    }
}
