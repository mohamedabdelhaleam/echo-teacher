<?php


namespace App\Repositories\Interfaces;

interface SectionRepositoryInterface
{
    public function getPaginatedSections($userId);
    public function findSectionById($id);
    public function createNewSection(array $data);
    public function changeSectionActive($id);
    public function updateSectionById($id, array $data);
    public function deleteSectionById($id);
}
