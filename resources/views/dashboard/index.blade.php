@extends('dashboard.layouts.app')

@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="color-dark fw-500 fs-20 mb-0">Dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="row">


                    <!-- Card 1 Start -->
                    <div class="col-xxl-3 col-sm-6 mb-25">
                        <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                            <div class="overview-content w-100">
                                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                    <div class="ap-po-details__titlebar">
                                        <h1 class="color-info">{{ $productCardData['count'] }}</h1>
                                        <p>Number Of Product</p>
                                    </div>
                                    <div class="ap-po-details__icon-area">
                                        <div class="svg-icon order-bg-opacity-primary color-info">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ap-po-details-time">
                                    <span class="color-success">
                                        @if ($productCardData['percentage_increase'] > 0.0)
                                            <i class="las la-arrow-up"></i>
                                            <strong
                                                class="color-success">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] == 0.0)
                                            <strong style="color: #000">0 %</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] < 0.0)
                                            <i class="las la-arrow-down" style="color: red"></i>
                                            <strong
                                                style="color: red">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif

                                        <small>Since last month</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card 1 End  -->


                    <!-- Card 2 Start -->
                    <div class="col-xxl-3 col-sm-6 mb-25">
                        <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                            <div class="overview-content w-100">
                                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                    <div class="ap-po-details__titlebar">
                                        <h1 class="color-info">{{ $productCardData['count'] }}</h1>
                                        <p>Number Of Product</p>
                                    </div>
                                    <div class="ap-po-details__icon-area">
                                        <div class="svg-icon order-bg-opacity-primary color-info">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ap-po-details-time">
                                    <span class="color-success">
                                        @if ($productCardData['percentage_increase'] > 0.0)
                                            <i class="las la-arrow-up"></i>
                                            <strong
                                                class="color-success">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] == 0.0)
                                            <strong style="color: #000">0 %</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] < 0.0)
                                            <i class="las la-arrow-down" style="color: red"></i>
                                            <strong
                                                style="color: red">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif

                                        <small>Since last month</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card 2 End  -->


                    <!-- Card 3 Start -->
                    <div class="col-xxl-3 col-sm-6 mb-25">
                        <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                            <div class="overview-content w-100">
                                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                    <div class="ap-po-details__titlebar">
                                        <h1 class="color-info">{{ $productCardData['count'] }}</h1>
                                        <p>Number Of Product</p>
                                    </div>
                                    <div class="ap-po-details__icon-area">
                                        <div class="svg-icon order-bg-opacity-primary color-info">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ap-po-details-time">
                                    <span class="color-success">
                                        @if ($productCardData['percentage_increase'] > 0.0)
                                            <i class="las la-arrow-up"></i>
                                            <strong
                                                class="color-success">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] == 0.0)
                                            <strong style="color: #000">0 %</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] < 0.0)
                                            <i class="las la-arrow-down" style="color: red"></i>
                                            <strong
                                                style="color: red">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif

                                        <small>Since last month</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card 3 End  -->


                    <!-- Card 4 Start -->
                    <div class="col-xxl-3 col-sm-6 mb-25">
                        <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                            <div class="overview-content w-100">
                                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                    <div class="ap-po-details__titlebar">
                                        <h1 class="color-info">{{ $productCardData['count'] }}</h1>
                                        <p>Number Of Product</p>
                                    </div>
                                    <div class="ap-po-details__icon-area">
                                        <div class="svg-icon order-bg-opacity-primary color-info">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ap-po-details-time">
                                    <span class="color-success">
                                        @if ($productCardData['percentage_increase'] > 0.0)
                                            <i class="las la-arrow-up"></i>
                                            <strong
                                                class="color-success">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] == 0.0)
                                            <strong style="color: #000">0 %</strong>
                                        @endif
                                        @if ($productCardData['percentage_increase'] < 0.0)
                                            <i class="las la-arrow-down" style="color: red"></i>
                                            <strong
                                                style="color: red">{{ $productCardData['percentage_increase'] }}%</strong>
                                        @endif

                                        <small>Since last month</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card 4 End  -->

                </div>
                <div class="row">
                    <!-- Chart 1 Start  -->

                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                Products
                            </div>
                            <div class="card-body">
                                <div>
                                    <canvas id="productBasic"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart 1 End  -->


                    <!-- Chart 2 Start  -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                Orders
                            </div>
                            <div class="card-body">
                                <div>
                                    <canvas id="orderBasic"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart 2 End  -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        exampleAreaChart("orderBasic", "105",
            (data = {!! json_encode($orderChartData['counts']) !!}),
            labels = {!! json_encode($orderChartData['months']) !!},
            "Current period",
            true);
        exampleAreaChart("productBasic", "105",
            (data = {!! json_encode($productChartData['counts']) !!}),
            labels = {!! json_encode($productChartData['months']) !!},
            "Current period",
            true);
    </script>
@endsection
