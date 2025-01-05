<?php


namespace App\Repositories\Interfaces;

interface YearRepositoryInterface
{
    public function getYears($userId);
    public function findYear($id);
    public function createYear(array $data);
    public function updateYear($id, array $data);
    public function deleteYear($id);
}
