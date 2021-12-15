@extends('layout.appDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="row">
                <div class="col">
                    <div class="container form-income">
                        <div class="cards card-title text-center">
                            Add Income
                        </div>
                        <div class="cards add-body">
                            12000
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container form-expense">
                        <div class="cards card-title text-center">
                            Add Expense
                        </div>
                        <div class="cards add-body">
                            Ini Graph
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection