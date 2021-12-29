@extends('layout.clientDashboard')

@section('content')
    <div class="col-9 col-sidenav-right">
        <div class="container">
            <div class="text-white title-page">{{ $routeName }} Income</div>
            @foreach($data as $ci)               
            <div class="text-white mt-5 mb-3">
                <h1 class="setting-title1">{{ $ci->date }}</h1>
                <div class="row">
                    <div class="col">
                        <h2>{{ $ci->categoryIncome->name }}</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <h2>Rp{{ $ci->amount }}</h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="setting-title1">{{ $ci->note }}</h2>
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <div class="row">
                            <div class="col">
                            <button class="btn btn-primary-outline btn-icon" data-bs-toggle="modal" data-bs-target="#incomeModalEdit_{{ $ci->id }}"><i class="fas fa-edit edit-icon"></i></button>
                            </div>
                            <div class="col">
                                <a href="/income/delete/{{ $ci->id }}"><i class="fas fa-trash edit-icon"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Modal edit History Income -->
    @foreach($data as $datas)
        <div class="modal fade" id="incomeModalEdit_{{ $datas->id }}" tabindex="-1" aria-labelledby="editHistoryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-card edit">
                    <div class="modal-header d-flex justify-content-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-white">
                        <h1 class="modal-title text-white text-center" id="exampleModalLabel">Edit Data Income</h1>
                        <form action="income/update/{{ $datas->id }}" method = "POST">   
                            @csrf
                            <div class="form-group mt-3 mb-3">
                                <label for="amount">Amount</label>
                                <input name ="amount" type="number" class="form-control" placeholder="Input Your Income"  value ="{{ $datas->amount}}" required>
                            </div>
                        
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="form-control" name="cat_income_id" id="">
                                    <option value="" selected disabled hidden>Select</option>
                                    @foreach($category_income as $xi)
                                        @if($xi->id == $datas->cat_income_id)
                                            <option value="{{ $xi->id }}" selected>{{ $xi->name }}</option>
                                        @else
                                            <option value="{{ $xi->id }}">{{ $xi->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="date">Date</label>
                                <input name ="date" type="date" class="form-control" placeholder="Chose Date ..." value ="{{ $datas->date}}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="note">Note</label>
                                <input name ="note"  type="text" class="form-control" placeholder="Note ..." value ="{{ $datas->note}}" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-add w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection