@extends('admin.partials.layout')
@section('content')

    <div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>All Clients</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">All Clients</li>
            </ol>
        </div>
        <div class="cl-mcont">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-flat">
                        <div class="header">
                            <h3>All Clients</h3>

                        </div>
                        <div class="content">

                            <div class="table-responsive">
                            <table class="table table-striped table-hover">
					<thead>
						<tr>
                            <th>id</th>
                            <th>FirstName</th>
                            <th>Company</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Created_at</th>
                            <th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>

                    @foreach ($transactions as $transaction)
						<tr>
							<td>{{ $transaction->id }} </td>
							<td> {{ $transaction->first_name }} </td>
							<td> {{ $transaction->company }}</td>
                            <td> {{ $transaction->number }}</td>
							<td> {{ $transaction->email }}</td>
							<td> {{ $transaction->country }}</td>
							<td> {{ $transaction->created_at }}</td>
			                <td>
								
                            <a href="{{route('edit_client',$transaction->id)}}"  class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i>Edit </a>
                            <a href="{{route('destroy',$transaction->id)}}"  class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i>Delete </a>
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

@endsection