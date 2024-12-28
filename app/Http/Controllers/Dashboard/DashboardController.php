<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\Chart\ChartTrait;
use App\Traits\Chart\StatisticsCardTrait;

class DashboardController extends Controller
{
    use ChartTrait , StatisticsCardTrait;

    public function index()
    {
        ############################## Start Cards Data ###############################
        $productCardData = $this->getCardData(Product::class);
        ############################## End Cards Data ################################

        ############################## Start Charts Data ###############################

        $orderChartData = $this->getMonthlyChartCounts(Order::class);
        $productChartData = $this->getMonthlyChartCounts(Product::class);

        ############################## End Charts Data ###############################

        return view('dashboard.index', compact(
            'productCardData',
            'orderChartData',
            'productChartData',
        ));
    }
}
