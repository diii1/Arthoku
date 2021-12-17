@extends('layout.appDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="text-white mt-5 mb-3">
                <h1>Nama</h1>
                <div class="row">
                    <div class="col">
                        <h2>Awkoww</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a data-bs-toggle="modal" data-bs-target="#editName" href="#editName"><i class="fas fa-edit edit-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-white mb-3">
                <h1>Average monthly income</h1>
                <div class="row">
                    <div class="col">
                        <h2>999999999999</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a data-bs-toggle="modal" data-bs-target="#editAvgIncome" href="#editAvgIncome"><i class="fas fa-edit edit-icon"></i></a>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger px-4 py-2 submit">Log Out</button>
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
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Edit Name" required>
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
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Average Income</label>
                            <input type="number" class="form-control" placeholder="Edit Average Income" required>
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