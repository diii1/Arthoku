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
                 @foreach($users as $ac)
                            <tr>
                                <td>{{ $ac->id}}</td>
                                <td>{{ $ac->name}}</td>
                                <td>{{ $ac->email}}</td>
                                <td>{{ $ac->password}}</td>
                                <td> 
                                    
                                    <a href="/admin/client/delete/{{ $ac->id }}" class="btn btn-danger">Hapus</a>
                                    <form method="POST" action="/admin/client/update/{{ $ac->id }}"> 
                                    @csrf
                                    <button type = "submit" class="btn btn-success">isAdmin</button> 
                                    </form>
                                    
                                </td>
                            </tr>
                @endforeach
                </tbody>
            </table>
           

            
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection
