<?php

namespace App\Traits\Chart;

use Carbon\Carbon;

trait StatisticsCardTrait
{
    public function getCardData(string $modelClass)
    {
        $currentMonth = Carbon::now()->startOfMonth();
        $lastMonth = (clone $currentMonth)->subMonth();

        $count = $modelClass::count();

        $currentMonthCount = $modelClass::where('created_at', '>=', $currentMonth)->count();
        $lastMonthCount = $modelClass::where('created_at', '>=', $lastMonth)
            ->where('created_at', '<', $currentMonth)
            ->count();

        if ($lastMonthCount == 0) {
            $percentageIncrease = $currentMonthCount * 100;
        } else {
            $percentageIncrease = (($currentMonthCount - $lastMonthCount) / $lastMonthCount) * 100;
        }

        return [
            'count' => $count,
            'percentage_increase' => round($percentageIncrease, 2),
        ];
    }
}
