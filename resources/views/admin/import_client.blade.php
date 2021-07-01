@extends('admin.partials.layout')
@section('content')

<div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>Export And Import Client</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Export And Import Client</li>
            </ol>
 </div>
    <div class="cl-mcont">
            
         <div class="row">


            <div class="col-sm-12 col-md-12">
                <div class="block-flat">
                    <div class="header">
                            <h3>Export And Import Client</h3>
                    </div>
                        <div class="content">


        <form class="form-horizontal group-border-dashed" role="form"  parsley-validate novalidate action="{{ route('importExcel') }}" method="post" enctype="multipart/form-data">
        @csrf
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Export File</label>
                         <div class="col-sm-6">
                                        
                         <a href="{{ route('exportExcel', 'csv') }}" class="btn btn-success  btn-large md-trigger "><i class="fa fa-list"></i> Export CSV</a>
                         <a href="{{route('exportExcel', 'xls')}}" class="btn btn-primary  btn-large md-trigger "><i class="fa fa-list"></i> Export xls</a>
                         <a href="{{route('exportExcel', 'xlsx')}}" class="btn btn-success btn-large md-trigger "><i class="fa fa-list"></i> Export xlsx</a>
                        </div>
                     </div>


                    <div class="form-group">
                <label class="col-sm-3 control-label">Import File</label>
                        <div class="col-sm-6">
                          <div>
                          <input type="file" name="import_file" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
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