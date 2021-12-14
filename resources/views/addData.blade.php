@extends('layout.appDashboard')

@section('content')
    <div class="container bg-dark mt-5 bg-container">
        <div class="row">
            <div class="col-3 col-sidenav">
                <div class="container px-5">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logo <span>Arthoku</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Add Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recommendation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Setting</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 col-sidenav-right">
                <div class="container">
                    <div class="text-white title-page">Add Data</div>
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
        </div>
    </div>
@endsection