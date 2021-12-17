@extends('layout.appDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }}</div>
            <div class="row">
                <div class="col">
                    <div class="container form-income">
                        <div class="cards card-title text-center">
                            Add Expense
                        </div>
                        <div class="cards add-body">
                            <form action="">
                                <div class="form-group mt-3 mb-3">
                                    <label for="ammount">Ammount</label>
                                    <input type="number" class="form-control" placeholder="100000">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="">
                                        <option value="" selected disabled hidden>Select</option>
                                        <option value="">Investment</option>
                                        <option value="">Education</option>
                                        <option value="">Health</option>
                                        <option value="">Hobby</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" placeholder="12/11/2021">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="note">Note</label>
                                    <input type="text" class="form-control" placeholder="buy laptop">
                                </div>

                                <button type="submit" class="btn btn-success btn-add w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container form-expense">
                        <div class="cards card-title text-center">
                            Add Income
                        </div>
                        <div class="cards add-body">
                            <form action="">
                                <div class="form-group mt-3 mb-3">
                                    <label for="ammount">Ammount</label>
                                    <input type="number" class="form-control" placeholder="100000">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="">
                                        <option value="" selected disabled hidden>Select</option>
                                        <option value="">Salary</option>
                                        <option value="">Bonus</option>
                                        <option value="">Gift</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" placeholder="12/11/2021">
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="note">Note</label>
                                    <input type="text" class="form-control" placeholder="wages">
                                </div>

                                <button type="submit" class="btn btn-success btn-add w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection