@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">

          <table class="table table-striped table-hover">
					<thead> 
          <tr>
          <span><a href="{{url('datatable')}}"><i class="fas fa-arrow-alt-circle-left fa-3x"></i></a>

        
            
                <th><h9>id</h9></th>
                <th><h9>FirstName</h9></th>
                <th><h9>LastName</h9></th>
                <th><h9>Job Title</h9></th>
                
                <th><h9>Website</h9></th>
                <th><h9>Number</h9></th>
                <th><h9>Email</h9></th>
                <th><h9>Address</h9></th>
                <th><h9>PostalCode</h9></th>
                <th><h9>City</h9></th>
                <th><h9>Province</h9></th>
                <th><h9>Country</h9></th>
                <th><h9>Description</h9></th>
                
            </tr>
        </th>
        <tbody>
      
       
            <tr>
                <td>{{  $transactions->id }}</td>
                <td>{{  $transactions->first_name }}</td>
                <td>{{  $transactions->last_name }}</td>
                <td>{{  $transactions->job_title }}</td>
                
                <td>{{  $transactions->website }}</td>
                <td>{{  $transactions->number }}</td>
                <td>{{  $transactions->email }}</td>
                <td>{{  $transactions->address }}</td>
                <td>{{  $transactions->postalcode }}</td>
                <td>{{  $transactions->city }}</td>
                <td>{{  $transactions->province }}</td>
                <td>{{  $transactions->country }}</td>
                <td>{{  $transactions->description }}</td>
               
               

            </tr> 
           
            </tbody>
							
              </table>
              </div>

          </div>
      </div>
  </div>
</div>
</div>
@endsection

