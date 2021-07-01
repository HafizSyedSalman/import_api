@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Send</title>

    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('Bulkemailimport') }}"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            
                <input type="file" name="import_file" />
                <button class="btn btn-primary" >Import File</button>
            </form>
            <!--  <form  action=""  method="" enctype="multipart/form-data">
            @csrf -->
                   <!--  <div class="modal-header">
                                <div class="step-pane" id="step2">
                                    <div class="form-group no-padding">
                                        <div class="col-sm-7">
                                            <h3 class="hthin">Compose Email</h3>
                                        </div>
                                    </div>
                    
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="summernote"></textarea>
                        </div>
                                
                                
                                    <div class="form-group">

                                        <button type="submit" class="btn btn-info btn-block " name="submit"><i class="fa fa-mail-forward"></i>Confirm And Send</button>
                                    </div>
                                
                                </div> -->
                            </form>
                            <!-- summernote css/js -->
<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
 -->
           
<form  action=""  method="" enctype="multipart/form-data">
      @csrf
                        <div class="form-group">
                        </div>
                        <table class="table table-striped table-hover">
					   <thead>
						<tr>
                            <th></th>
                            <th>ID</th>
                            <th>Email</th>
                
						</tr>
					</thead>
					<tbody>
                   
                    @foreach($bulkemail as $bulkemail)
                    <tr>
                        <td><input type="checkbox" name="email[]"  value=""/></td>
                        <td></td>
                    
                        <td>{{$bulkemail->id}}</td>
                        <td>{{$bulkemail->email}}</td>

                        </tr>
                         @endforeach
                   
                   
                     </tbody>
                
							
                    </table>
                     <div class="modal-header">
                                <div class="step-pane" id="step2">
                                    <div class="form-group no-padding">
                                        <div class="col-sm-7">
                                            <h3 class="hthin">Compose Email</h3>
                                        </div>
                                    </div>
                    
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="summernote"></textarea>
                        </div>
                                
                                
                                    <div class="form-group">

                                        <button type="submit" class="btn btn-info btn-block " name="submit"><i class="fa fa-mail-forward"></i>Confirm And Send</button>
                                    </div>
                                
                                </div>
                            

                   
</form>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
