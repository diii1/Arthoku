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
                                    <button data-toggle="modal" data-target="#usersModalEdit_{{ $ac->id }}" class="btn btn-warning">Edit</button>
                                    <a href="/admin/users/delete/{{ $ac->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                @endforeach
                </tbody>
            </table>
           
             <!-- Modal Untuk Edit  -->
             @foreach($accounts as $data)
                <div class="modal fade " id="usersModalEdit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data User Arthoku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="users/update/{{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">NAME</label>
                                        <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">EMAIL</label>
                                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email" value="{{ $data->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">PASSWORD</label>
                                        <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter New Password" >
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
