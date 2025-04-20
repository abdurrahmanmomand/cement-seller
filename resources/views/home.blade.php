@extends('layouts.admin')

@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        {{-- @dd($days) --}}
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-8">
                        <div class="card info-card sales-card">



                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Trucks</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">{{ count($days) }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:10px;">
                                        <h> Profit </h>
                                        <br>
                                        @php
                                            $totalProfit = 0;
                                            $recieved = 0;
                                            $remaining = 0;
                                        @endphp

                                        @foreach ($days as $day)
                                            @php
                                                $totalProfit += $day->profit_per_ton * $day->tuns_in_a_truck;
                                                $recieved += $day->recieved_amount_from_customer;
                                                $remaining += $day->remaining_amount_to_customer;
                                            @endphp
                                        @endforeach

                                        <span class="text-success small pt-1 fw-bold">$ {{ $totalProfit }}</span>


                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Recieved Cash</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $recieved }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Remaining Amount</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $remaining }}</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->


                    <div class="col-xxl-4 col-md-8">
                        <div class="card info-card sales-card">



                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Trucks</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">{{ count($months) }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:10px;">
                                        <h> Profit </h>
                                        <br>
                                        @php
                                            $totalProfitm = 0;
                                            $recievedm = 0;
                                            $remainingm = 0;
                                        @endphp

                                        @foreach ($months as $month)
                                            @php
                                                $totalProfitm += $month->profit_per_ton * $month->tuns_in_a_truck;
                                                $recievedm += $month->recieved_amount_from_customer;
                                                $remainingm += $month->remaining_amount_to_customer;
                                            @endphp
                                        @endforeach

                                        <span class="text-success small pt-1 fw-bold">$ {{ $totalProfitm }}</span>


                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Recieved Cash</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $recievedm }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Remaining Amount</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $remainingm }}</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-8">
                        <div class="card info-card sales-card">



                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Trucks</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">{{ count($years) }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:10px;">
                                        <h> Profit </h>
                                        <br>
                                        @php
                                            $totalProfity = 0;
                                            $recievedy = 0;
                                            $remainingy = 0;
                                        @endphp

                                        @foreach ($years as $year)
                                            @php
                                                $totalProfity += $year->profit_per_ton * $year->tuns_in_a_truck;
                                                $recievedy += $year->recieved_amount_from_customer;
                                                $remainingy += $year->remaining_amount_to_customer;
                                            @endphp
                                        @endforeach

                                        <span class="text-success small pt-1 fw-bold">$ {{ $totalProfity }}</span>


                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Recieved Cash</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $recievedy }}</span>

                                    </div>
                                    <div class="ps-3"
                                        style="border-right: 2px solid rgb(150, 143, 143); padding-right:5px;">
                                        <h>Remaining Amount</h>
                                        <br>
                                        <span class="text-success small pt-1 fw-bold">$ {{ $remainingy }}</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div><!-- End Left side columns -->



        </div>
    </section>
@endsection
