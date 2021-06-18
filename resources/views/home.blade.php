@extends('layouts.app')

@section('content')
<div class="container-fluid" style=" padding-left: 20px !important; padding-right: 80px !important;">
    <div class="row">
        <div class="col-md-12">
            <div class="cards">
				<div class="d-flex">
				<div>
										<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Contacts</span></a>
									</div>
									<div class="dropdown ml-auto">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											More
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#importtEmployeeModal" data-toggle="modal"><b>Import File</b></a>

										<a class="dropdown-item" href="#sentEmailEmployeeModal" data-toggle="modal"><b>Send Email</b></a>
										</div>
				</div>
</div>
</div>
</div>
</div>
</div>
</div>
                

                        <table class="table table-striped table-hover" style="margin-right: 20px; margin-left: 20px; width:97% !important">
					<thead>
						<tr>
							
                                <th><h6>id</h6></th>
                                <th><h6>FirstName</h6></th>
                                <th><h6>LastName</h6></th>
                                <th><h6>Job Title</h6></th>
           						<th><h6>Number</h6></th>
                                <th><h6>Email</h6></th>
                                <th><h6>Address</h6></th>
                                <th><h6>PostalCode</h6></th>
                                <th><h6>City</h6></th>
                                <th><h6>Province</h6></th>
                                <th><h6>Country</h6></th>
								<th colspan="1">Action</th>
                
						</tr>
					</thead>
					<tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                                <td>{{  $transaction->id }}</td>
                                <td>{{  $transaction->first_name }}</td>
                                <td>{{  $transaction->last_name }}</td>
                                <td>{{  $transaction->job_title }}</td>
                               
                                <td>{{  $transaction->number }}</td>
                                <td>{{  $transaction->email }}</td>
                                <td>{{  $transaction->address }}</td>
                                <td>{{  $transaction->postalcode }}</td>
                                <td>{{  $transaction->city }}</td>
                                <td>{{  $transaction->province }}</td>
                                <td>{{  $transaction->country }}</td>
								<td><a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" data-attr="{{route('edit',$transaction->id)}}" id="editRecord" title="Edit">&#xE254;</i></a>
								</td>

                        </tr>
                    @endforeach


                    <!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 80%;">
			<div class="modal-content">
				<form  action="add_contact" method="POST">
				@csrf
				<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
					<div class="modal-header">						
						<h4 class="modal-title">Add Contact</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<div class="row">
					<div class="col-6">
					<div class="form-group">
							<label>FirstName</label>
							<input type="text" name="first_name"  class="form-control" >
						</div>
						<div class="form-group">
							<label>Job Title</label>
							<input type="text" name="job_title" class="form-control" >
						</div>
						<div class="form-group">
							<label>Industry</label>
							<input type="text" name="industry" class="form-control" >
						</div>
						<div class="form-group">
							<label>Number</label>
							<input type="text" name="number" class="form-control" >
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea  name="address"  class="form-control" ></textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" name="city" class="form-control" >
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" name="country" class="form-control" >
						</div>
					</div>
					<div class="col-6">
					<div class="form-group">
							<label>LastName</label>
							<input type="text" name="last_name" class="form-control" >
						</div>
						<div class="form-group">
							<label>Company</label>
							<input type="text" name="company" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Website</label>
							<input type="text" name="website" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input type="email" name="email"  class="form-control" >
						</div>
                        <div class="form-group">
							<label>PostalCode</label>
							<input type="text" name="postalcode" class="form-control" >
						</div>
						<div class="form-group">
							<label>Province</label>
							<input type="text" name="province" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Description</label>
							<input type="text" name="description" class="form-control" >
						</div>
					</div>
					</div>
					</div>
					    <div class="modal-footer">
						    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						    <input type="submit" class="btn btn-success" value="Add">
					    </div>
				</form>
			</div>
		</div>
	</div>


	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{route('update')}}" method="POST" >
				@csrf
                <div class="modal-body">
				<input type="hidden" name="id" id="EditID">					
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="first_name" id="firstName"  class="form-control"   >
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="last_name"  id="lastName" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Job Title</label>
							<input type="text" name="job_title"  id="Jobtitle" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Company</label>
							<input type="text" name="company"  id="company" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Industry</label>
							<input type="text" name="industry"  id="industry" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Website</label>
							<input type="text" name="website"  id="website" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Number</label>
							<input type="text" name="number"  id="number" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input type="email" name="email"  id="email" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Address</label>
							<textarea id="address" name="address"  class="form-control" ></textarea>
						</div>
                        <div class="form-group">
							<label>PostalCode</label>
							<input type="text" name="postalcode"  id="postalcode" class="form-control" >
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" name="city"  id="city" class="form-control" >
						</div>
						<div class="form-group">
							<label>Province</label>
							<input type="text" name="province"  id="province" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Country</label>
							<input type="text" name="country"  id="country" class="form-control" >
						</div>
                        <div class="form-group">
							<label>Description</label>
							<input type="text" name="description"  id="description" class="form-control" >
						</div>			
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- Import Modal HTML -->
	<div id="importtEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<form  action="importExcel"  method="post" enctype="multipart/form-data">
    
			
               <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
			   @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Import File</h4>
                      
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body d-flex">					
					<div>
                
					<input type="file" class="form-control" name="import_file">
                    
					</div>
					    <div class="modal-footer">
						    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						    <input type="submit" class="btn btn-success" value="Import File">
					    </div>
				</form>
			</div>
		</div>
	</div>



	<!-- Send Email Modal HTML -->
<div id="sentEmailEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
		
					<span><a href="{{url('index')}}"><h3>Send Email </h3><i class="fas fa-envelope fa-2x"></i></a></span>
					
					
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Edit JavaScript -->

    <script>
        $(document).on('click','#editRecord', function(event){
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                success: function(result) {
                    
					$('#EditID').val(result.id);
                    $('#firstName').val(result.first_name);
                    $('#lastName').val(result.last_name);
					$('#Jobtitle').val(result.job_title);
					$('#company').val(result.company);
					$('#industry').val(result.industry);
					$('#website').val(result.website);
					$('#number').val(result.number);
					$('#email').val(result.email);
					$('#address').val(result.address);
					$('#postalcode').val(result.postalcode);
					$('#city').val(result.city);
					$('#province').val(result.province);
					$('#country').val(result.country);
					$('#description').val(result.description);
        		},
            }); 
        });
    </script>
                        
                     </tbody>
							
                    </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
