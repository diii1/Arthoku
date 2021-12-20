@extends('layout.admin.admin')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User Accounts</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                 @foreach($accounts as $ac)
                            <tr>
                                <td>{{ $ac->id}}</td>
                                <td>{{ $ac->name}}</td>
                                <td>{{ $ac->email}}</td>
                                <td>{{ $ac->password}}</td>
                                <td> 
                                    <a href="#update/{{ $ac->id }}"  data-toggle="modal" data-target="#incomeModalEdit" class="btn btn-warning">Edit</a>
                                    <a href="/admin/categoryIncome/delete/{{ $ac->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                @endforeach
                </tbody>
            </table>
           
            
             <!-- Modal Untuk Edit  -->
             <div class="modal fade " id="incomeModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data User Accounts</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="categoryIncome/insert" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>









            
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection