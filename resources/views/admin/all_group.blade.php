@extends('admin.partials.layout')
@section('content')


 <div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>All Groups</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">All Groups</li>
            </ol>
        </div>
        <div class="cl-mcont">
                        <div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">
                            <h3>All Groups</h3>
                        </div>
                        <div class="content">

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>id</th>
                            <th>Group Name</th>
                            <th>Client Count</th>
                            
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($client_group as $client_group)
                    
                        <tr>
                            <td>{{ $client_group->id }}</td>
                            <td>{{ $client_group->id }}</td>
                            <td>{{ $client_group->group }}  </td>
                            <td>{{}} </td>
                            
                            
                            <td>
                                
                            <a href="{{route('edit_group',$client_group->id)}}"  class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i>Edit </a>
                            <a href="{{route('delete',$client_group->id)}}"  class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i>Delete </a>
                            <!-- <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                            </td>
                        </tr>
                        @endforeach
                       
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