@extends('layouts.app')

@section('content')

<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Dashboard</h2>
                   
                </div>
            </div>
        </div>

        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="text">
                                <h2>{{ number_format($customers_count) }}</h2>
                                <span>Customers</span>
                            </div>
                        </div>
                       <!--  <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-accounts"></i>
                            </div>
                            <div class="text">
                                <h2>{{ number_format($suppliers_count) }}</h2>
                                <span>Suppliers</span>
                            </div>
                        </div>
                        <!-- <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-file"></i>
                            </div>
                            <div class="text">
                                <h2>{{ number_format($products_count) }}</h2>
                                <span>Products</span>
                            </div>
                        </div>
                        <!-- <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-info"></i>
                            </div>
                            <div class="text">
                                <h2>1,060,386</h2>
                                <span>Today total sales</span>
                            </div>
                        </div>
                        <!-- <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
