@extends('layout.admin.admin')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Category Expense</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="d-flex justify-content-start mb-3">
                            <a href="#" data-toggle="modal" data-target="#expenseModal" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data Category Expense</span>
                            </a>
                        </div>
                    </div>
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
                 @foreach($category_expense as $ce)
                            <tr>
                                <td>{{ $ce->name}}</td>
                                <td>{{ $ce->description}}</td>
                                <td> 
                                    <a href="/catExpense/edit/{{ $ce->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/catExpense/hapus/{{ $ce->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data Category Income</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input type="description" class="form-control" id="description" placeholder="Enter Description">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
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
