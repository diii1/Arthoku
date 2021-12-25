@extends('layout.clientDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="text-white mt-5 mb-5">
                <h1 class="setting-title">Nama</h1>
                <div class="row">
                    <div class="col">
                        <h2 class="font-setting">{{ Auth::user()->name }}</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-edit edit-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-white mb-5">
                <h1 class="setting-title">Average monthly income</h1>
                <div class="row">
                    <div class="col">
                        <h2 class="font-setting">{{ Auth::user()->avg_income }}</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a data-bs-toggle="modal" data-bs-target="#editAvgIncome" href="#editAvgIncome"><i class="fas fa-edit edit-icon"></i></a>
                    </div>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger px-4 py-2 submit">Sign Out</button>
            </form>
        </div>
    </div>

    <!-- Modal edit name -->
    <div class="modal fade" id="editName" tabindex="-1" aria-labelledby="signInLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-card edit">
                <div class="modal-header d-flex justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white">
                    <h1 class="modal-title text-white text-center" id="exampleModalLabel">Edit</h1>
                    <form action="/settings/updateName/{id}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Edit Name" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="buttonSignIn d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-signIn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit average income -->
    <div class="modal fade" id="editAvgIncome" tabindex="-1" aria-labelledby="signInLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-card edit">
                <div class="modal-header d-flex justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white">
                    <h1 class="modal-title text-white text-center" id="exampleModalLabel">Edit</h1>
                    <form action="/settings/updateAverage/{id}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Average Income</label>
                            <input name="avg_income" type="number" class="form-control" placeholder="Edit Average Income" value="{{ Auth::user()->avg_income }}" required>
                        </div>
                        <div class="buttonSignIn d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-signIn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection