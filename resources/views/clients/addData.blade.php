@extends('layout.clientDashboard')

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
                        @if (session('pesan'))
                                <h6 class="text-success"><i class="icon fa fa-check"></i> Success!</h6>
                                <h6 class="text-success"> {{ session('pesan') }}.</h6>
                                
                        @endif
                     
                            <form action="{{ route('AddDataIncome') }}" method = "POST">
                                @csrf
                                <div class="form-group mt-3 mb-3">
                                    <label for="amount">Amount</label>
                                    <input name ="amount" type="number" class="form-control" placeholder="Input Your Income">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="cat_income_id" id="">
                                        <option value="" selected disabled hidden>Select</option>
                                        @foreach($category_income as $ci)
                                            <option value="{{ $ci->id }}">{{ $ci->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="date">Date</label>
                                    <input name ="date" type="date" class="form-control" placeholder="Chose Date ...">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="note">Note</label>
                                    <input name ="note"  type="text" class="form-control" placeholder="Note ...">
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