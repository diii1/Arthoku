@extends('layout.clientDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="text-white mt-5 mb-3">
                <h1>12-11-2002</h1>
                <div class="row">
                    <div class="col">
                        <h2>Awkoww</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <h2>1200000</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>sadas</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <div class="row">
                            <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-edit edit-icon"></i></a>
                            </div>
                            <div class="col">
                                <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-trash edit-icon"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                    </div>
                </div>
            </div>

            <div class="text-white mt-5 mb-3">
                <h1>12-11-2002</h1>
                <div class="row">
                    <div class="col">
                        <h2>Awkoww</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <h2>1200000</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>sadas</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <div class="row">
                            <div class="col">
                            <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-edit edit-icon"></i></a>
                            </div>
                            <div class="col">
                                <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-trash edit-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection