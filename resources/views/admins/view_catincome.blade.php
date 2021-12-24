@extends('layout.admin')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $routeName }}</h6>
    </div>
    <div class="card-body">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('pesan') }}.
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="d-flex justify-content-start mb-3">
                            <a href="#" data-toggle="modal" data-target="#incomeModal" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text"> Add Data Category Income</span>
                            </a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($category_income as $ci)
                        <tr>
                            <td>{{ $ci->id}}</td>
                            <td>{{ $ci->name}}</td>
                            <td>{{ $ci->description}}</td>
                            <td> 
                                <button data-toggle="modal" data-target="#incomeModalEdit_{{ $ci->id }}" class="btn btn-warning">Edit</button>
                                <a href="/admin/categoryIncome/delete/{{ $ci->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal Untuk Add Data Income -->
            <div class="modal fade" id="incomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data Category Income</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="categoryIncome/insert" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" >
                                </div>
                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- Modal Untuk Edit  -->
            @foreach($category_income as $data)
                <div class="modal fade " id="incomeModalEdit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Category Income</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="categoryIncome/update/{{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">NAME</label>
                                        <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ $data->description }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach         
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection
