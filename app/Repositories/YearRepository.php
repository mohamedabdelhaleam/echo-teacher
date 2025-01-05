<?php

namespace App\Repositories;

use App\Models\Year;
use App\Repositories\Interfaces\YearRepositoryInterface;

class YearRepository implements YearRepositoryInterface
{
    public function getYears($userId)
    {
        return Year::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function findYear($id)
    {
        return Year::find($id);
    }

    public function createYear(array $data)
    {
        return Year::create($data);
    }

    public function updateYear($id, array $data)
    {
        $year = Year::find($id);
        $year->update($data);
        return $year;
    }

    public function deleteYear($id)
    {
        return Year::find($id)->delete();
    }
}
