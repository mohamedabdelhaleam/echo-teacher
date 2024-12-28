<?php

namespace App\Traits\Chart;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

trait ChartTrait
{
    public function getMonthlyChartCounts(string $modelClass): array
    {
        $startDate = Carbon::now()->subMonths(11)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        // Prepare all months with null values
        $allMonths = [];
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addMonth()) {
            $allMonths[$date->format('Y-m')] = null;
        }

        // Query for counts grouped by month
        $monthlyCounts = $modelClass::select(
            DB::raw('COUNT(id) as count'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get()
            ->mapWithKeys(function ($item) {
                $month = $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
                return [$month => $item->count];
            });

        // Merge with all months, replacing missing values with null or 0
        $completeCounts = collect($allMonths)->merge($monthlyCounts);

        // Extract counts and months
        $countsArray = array_values($completeCounts->toArray());
        $monthsArray = array_keys($completeCounts->toArray());

        // Replace null values with 0
        $countsArray = array_map(function ($count) {
            return $count === null ? 0 : $count;
        }, $countsArray);

        return [
            'months' => $monthsArray,
            'counts' => $countsArray,
        ];
    }
}
