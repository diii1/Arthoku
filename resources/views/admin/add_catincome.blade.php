@extends('layout.admin.admin')

@section('content')
    
           <!-- Begin Page Content -->
           <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <div class="d-flex ml-auto">
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Data Category Income</span>
                    </a>
                   </div>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </tfoot>
                <tbody>
                 @foreach($category_income as $ci)
                            <tr>
                                <td>{{ $ci->name}}</td>
                                <td>{{ $ci->description}}</td>
                                <td> 
                                    <a href="/income/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/income/hapus/{{ $g->id }}" class="btn btn-danger">Hapus</a>
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
