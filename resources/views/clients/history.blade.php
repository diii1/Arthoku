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
                            <a data-bs-toggle="modal" data-bs-target="#editHistory" href="#editHistory"><i class="fas fa-edit edit-icon"></i></a>
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

    <!-- Modal edit name -->
    <div class="modal fade" id="editHistory" tabindex="-1" aria-labelledby="editHistoryLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-card edit">
                <div class="modal-header d-flex justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white">
                    <h1 class="modal-title text-white text-center" id="exampleModalLabel">Edit</h1>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Ammount</label>
                            <input type="number" class="form-control" placeholder="10000" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-control" id="">
                                <option value="" selected disabled hidden>Select</option>
                                <option value="">Investment</option>
                                <option value="">Education</option>
                                <option value="">Health</option>
                                <option value="">Hobby</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" placeholder="HH/BB/TTTT" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Note</label>
                            <input type="note" class="form-control" placeholder="This note.." required>
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