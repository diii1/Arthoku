@extends('layout.clientDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="row">
                <div class="col">
                    <div class="container card1">
                        <div class="cards card-title text-center">
                            Rule
                        </div>
                        <div class="cards card-body text-center">
                            50/30/20 rule
                            <h4>Rp{{ Auth::user()->avg_income }}</</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container card2">
                        <div class="cards card-title text-center">
                            Needs (50%)
                        </div>
                        <div class="cards card-body text-center">
                            {{ $needs }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="container card3">
                        <div class="cards card-title text-center">
                            Wants (30%)
                        </div>
                        <div class="cards card-body text-center">
                            {{ $wants }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container card4">
                        <div class="cards card-title text-center">
                            Saving (20%)
                        </div>
                        <div class="cards card-body text-center">
                            {{ $savings }}
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
@endsection