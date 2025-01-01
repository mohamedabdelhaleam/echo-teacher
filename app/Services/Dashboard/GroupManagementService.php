<?php

namespace App\Services\Dashboard;

use App\Models\group;

class GroupManagementService
{
    /**
     * Retrieve a paginated list of groups.
     */
    public function getPaginatedgroupsInSection($sectionId)
    {
        return group::where('section_id', $sectionId)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    }

    /**
     * Retrieve a single group by its ID.
     */
    public function findgroupById($id)
    {
        return group::find($id);
    }

    /**
     * Create a new group with the provided data.
     */
    public function createNewgroup(array $data)
    {
        return group::create($data);
    }

    /**
     * Update an existing group with the given data.
     */
    public function updategroupById($id, array $data)
    {
        $group = group::find($id);
        $group->update($data);
        return $group;
    }

    /**
     * Change the active status of a group.
     */

    public function changegroupActive($id)
    {
        $group = group::find($id);
        $group->active = !$group->active;
        return $group->save();
    }

    /**
     * Delete a group by its ID.
     */
    public function deletegroupById($id)
    {
        return group::find($id)->delete();
    }
}
