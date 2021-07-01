@extends('admin.partials.layout')
@section('content')

<div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>Add New Group</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="all-groups.php">All Groups</a></li>
                <li class="active">Add New Group</li>
            </ol>
        </div>
        <div class="cl-mcont">

            
            <div class="row">


                <div class="col-sm-12 col-md-12">
                    <div class="block-flat">
                        <div class="header">
                            <h3>Add New Group</h3>
                        </div>
                        <div class="content">


                            <form class="form-horizontal group-border-dashed"   parsley-validate novalidate action="{{route('store_group')}}" method="post">
                            	@csrf
                                <div class="form-group">
                                    <label for="gname" class="col-sm-3 control-label">Group Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" required  class="form-control" id="gname" placeholder="Group Name" name="group">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary" name="submit" >Add Group</button>
                                        <button class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


</div>


@endsection