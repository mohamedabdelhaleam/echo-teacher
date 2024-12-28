<?php

namespace App\Services\Dashboard;

use App\Models\section;

class SectionManagementService
{
    /**
     * Retrieve a paginated list of Sections.
     */
    public function getPaginatedSections($userId)
    {
        return section::where('teacher_id', $userId)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    }

    /**
     * Retrieve a single Section by its ID.
     */
    public function findSectionById($id)
    {
        return Section::find($id);
    }

    /**
     * Create a new Section with the provided data.
     */
    public function createNewSection(array $data)
    {
        return Section::create($data);
    }

    /**
     * Update an existing Section with the given data.
     */
    public function updateSectionById($id, array $data)
    {
        return Section::find($id)->update($data);
    }

    /**
     * Change the active status of a Section.
     */

    public function changeSectionActive($id)
    {
        $section = Section::find($id);
        $section->active = !$section->active;
        return $section->save();
    }

    /**
     * Delete a Section by its ID.
     */
    public function deleteSectionById($id)
    {
        return Section::find($id)->delete();
    }
}
