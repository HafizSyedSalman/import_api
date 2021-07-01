@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form class="form-horizontal" actions="" method="">
                        @csrf

                        <div class="form-group">
</div>
                        <table class="table table-striped table-hover">
					   <thead>
						<tr>
                        <th>
								<span class="custom-checkbox">
									<input type="checkbox" id="#selectAll">
									<label for="selectAll"></label>
								</span>
                            </th>
                            <span><a href=""><i class="fas fa-arrow-alt-circle-left fa-3x"></i></a>

                            <!-- <th></th> -->
                            <th>ID</th>
                           
                            <th>Email</th>
                
						</tr>
					</thead>
					<tbody>
                   
                    <tr>
                        <td><input type="checkbox" name="email[]"  value=""/></td>
                        <td>{{id}}</td>
                    
                        <td>{{email}}</td>
                        </tr>
                   
                     </tbody>
							
                    </table>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary" value="submit">
                                Send Email
                                </button>
                                
                            </div>
                        </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
