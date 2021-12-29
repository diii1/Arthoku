@extends('layout.clientDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="row">
                <div class="col">
                    <div class="container card1">
                        <div class="cards card-title text-center">
                            Total Balance
                        </div>
                        <div class="cards card-body text-center">
                            {{ $balance }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container card2">
                        <div class="cards card-title text-center">
                            Graph
                        </div>
                        <div class="cards text-center">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="container card3">
                        <div class="cards card-title text-center">
                            Total Expense
                        </div>
                        <div class="cards card-body text-center">
                            {{ $dataExpense }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container card4">
                        <div class="cards card-title text-center">
                            Total Income
                        </div>
                        <div class="cards card-body text-center">
                            {{ $dataIncome }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.client.chart')
@endsection