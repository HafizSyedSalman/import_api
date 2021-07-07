 @extends('admin.partials.layout')
@section('content')

 <div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>Email History</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Email History</li>
            </ol>
        </div>
        <div class="cl-mcont">
                        <div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">
                            <h3>Email History</h3>
                        </div>
                        <div class="content">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable" >
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <td>There Have no Email History</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection