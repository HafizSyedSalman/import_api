<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Phone Book</title>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#mytable tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });
	});
	</script>


<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
	.dropdown-toggle{
		height: 33px;
    background: #5cb85c;
    border-radius: 2px;
	}
	.dropdown-toggle:hover{
    background: #489948;
	}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <div class="container">
		
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-6">
							<h2>Contact <b>Record</b></h2>
						</div>
						<div class="col-6 d-flex">
							<div class="row ml-auto">
								<div class="col-5">
									<div>
										<input class="form-control" id="myInput" type="text" placeholder="Search..">
									</div>
								</div>
								<div class="col-7 d-flex">
									<div>
										<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Contacts</span></a>
									</div>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											More
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#importEmployeeModal" data-toggle="modal"><b>Import File</b></a>
										<a class="dropdown-item" href="#downloadEmployeeModal" data-toggle="modal"><b>Download</b></a>
										<a class="dropdown-item" href="#sendEmailEmployeeModal" data-toggle="modal"><b>Email</b></a>
										
								
                                          
										 
                                          <a class="dropdown-item" href="{{ url('logout') }}"> Logout </a>
                                      
										</div>
									  </div>
								</div>
							</div>					
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
                            </th>
                            <th>id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>PostalCode</th>
                            <th>City</th>
                            <th>Country</th>
                            <th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody id="mytable">

                    @foreach ($transactions as $transaction)
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td>{{ $transaction->id }} </td>
							<td> {{ $transaction->first_name }} </td>
							<td> {{ $transaction->last_name }}</td>
							<td> {{ $transaction->number }}</td>
                            <td> {{ $transaction->email }}</td>
							<td> {{ $transaction->address }}</td>
							<td> {{ $transaction->postalcode }}</td>
							<td> {{ $transaction->city }}</td>
							<td> {{ $transaction->country }}</td>
						
                        
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" data-attr="{{route('edit',$transaction->id)}}" id="editRecord" title="Edit">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" data-attr="{{route('destroy',$transaction->id)}}" id="deleteRecord" title="Delete">&#xE872;</i></a>
								<a href="{{route('user_record',$transaction->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
							</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
				{!! $transactions->links() !!}
					<!-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination"> 
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
						</ul> -->
				</div>
			</div>
		</div>        
    </div>
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
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form action="{{route('delete')}}" method="post" >
				@csrf
				<input type="hidden" name="id" id="DeleteID">	
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						    <input type="submit" class="btn btn-success" value="Delete">
					    </div>
				</form>
			</div>
		</div>
	</div>


    <!-- Import Modal HTML -->
	<div id="importEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<form  action="{{ route('importExcel') }}"  method="post" enctype="multipart/form-data">
			@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Import File</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body d-flex">					
					<div>
					{{ csrf_field() }}
					<input type="file" name="import_file" />
					</div>
					<div class="ml-auto">
					<span><a href="http://localhost/import_api/public/api/contact/import/google"><i class="fab fa-google fa-2x"></i></a></span>
					<span><a href=""><i class="fab fa-facebook fa-2x"></i></a></span>
					
					</div>
					</div>
					    <div class="modal-footer">
						    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						    <input type="submit" class="btn btn-success" value="Import File">
					    </div>
				</form>
			</div>
		</div>
	</div>

	<!-- Download Modal HTML -->
	<div id="downloadEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<form  action="{{ route('exportExcel','xls','xlsx','csv') }}"  >
			@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Download File</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
					<div class="d-flex">
					<input type="radio" name="select" >
					<p class="ml-3 mt-1">Download-Excel xlsx File</p>
					</div>
					<div class="d-flex">
					<input type="radio" name="select" >
					<p class="ml-3 mt-1">Download-Excel xls File</p>
					</div>
					<div class="d-flex">
					<input type="radio" name="select" >
					<p class="ml-3 mt-1">Download CSV File</p>
					</div>
					</div>
					    <div class="modal-footer">
						    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						    <input type="submit" class="btn btn-success" value="Sumbit File">
					    </div>
				</form>
			</div>
		</div>
	</div>
	


<!-- Send Email Modal HTML -->
<div id="sendEmailEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
		
					<center><span><a href="{{url('sendEmail')}}"><h3> Email </h3><i class="fas fa-envelope fa-2x"></i></a></span></center>
					<center><span><a href="{{url('sendEmailfile')}}"><h3>Bulk Email </h3><i class="fas fa-envelope fa-2x"></i></a></span></center>
 					<center><span><a href="{{url('')}}"><h3> Email History</h3><i class="fas fa-envelope fa-2x"></i></a></span></center>
					<center><span><a href="{{url('emailsetting')}}"><h3> Email Setting </h3><i class="fas fa-envelope fa-2x"></i></a></span></center>
					
					
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
	<script>
        $(document).on('click','#deleteRecord', function(event){
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                success: function(result) {
                    $('#DeleteID').val(result.id);
                },
            }); 
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>