<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Section\StoreSectionRequest;
use App\Http\Requests\Dashboard\Section\UpdateSectionRequest;
use App\Services\Dashboard\SectionManagementService;
use App\Traits\ResponseMessageTrait;

class SectionController extends Controller
{
    protected $sectionManagmentService;
    use ResponseMessageTrait;
    protected $name = "الصف الدراسي";

    public function __construct(SectionManagementService $sectionManagmentService)
    {
        $this->sectionManagmentService = $sectionManagmentService;
    }

    public function index()
    {
        $sections = $this->sectionManagmentService->getPaginatedSections();
        return view("dashboard.pages.sections.index", compact("sections"));
    }

    public function create()
    {
        return view("dashboard.pages.sections.create");
    }

    public function store(StoreSectionRequest $request)
    {
        $data = $request->validated();
        $section = $this->sectionManagmentService->createNewSection($data);
        if (!$section) {
            return redirect()->route("dashboard.sections.create")->with("error", $this->errorResponse($this->name, 1));
        }
        return redirect()->route("dashboard.sections.index")->with("success", $this->successResponse($this->name, 1));
    }

    public function edit($id)
    {
        $section = $this->sectionManagmentService->findSectionById($id);
        return view("dashboard.pages.sections.edit", compact("section"));
    }

    public function update($id, UpdateSectionRequest $request)
    {
        $data = $request->validated();
        $section = $this->sectionManagmentService->updateSectionById($id, $data);
        if (!$section) {
            return redirect()->route("dashboard.sections.edit", $id)->with("error", $this->errorResponse($this->name, 2));
        }
        return redirect()->route("dashboard.sections.index")->with("success", $this->successResponse($this->name, 2));
    }

    public function changeActive($id)
    {
        $section = $this->sectionManagmentService->changeSectionActive($id);
        if (!$section) {
            return redirect()->route("dashboard.sections.index")->with("error", $this->errorResponse($this->name, 4));
        }
        return redirect()->route("dashboard.sections.index")->with("success", $this->successResponse($this->name, 4));
    }

    public function destroy($id)
    {
        $section = $this->sectionManagmentService->deleteSectionById($id);
        if (!$section) {
            return redirect()->route("dashboard.sections.index")->with("error", $this->errorResponse($this->name, 3));
        }
        return redirect()->route("dashboard.sections.index")->with("success", $this->successResponse($this->name, 3));
    }
}
