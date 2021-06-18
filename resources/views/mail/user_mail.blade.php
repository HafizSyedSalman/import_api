@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form class="form-horizontal" method="post" actions="{{url('send/mail')}}">
                        @csrf

                        <div class="form-group">
                        <input id="name" type="hidden" name="email" value="{{auth()->user()->email}}">
</div>
                        <table class="table table-striped table-hover">
					   <thead>
						<tr>
                            <span><a href="{{url('datatable')}}"><i class="fas fa-arrow-alt-circle-left fa-3x"></i></a>

                            <th></th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Mobile</th>
                            <th>Email</th>
                
						</tr>
					</thead>
					<tbody>
                    @if(count($users) > 0)
                    @foreach($users->all() as $user)
                    <tr>
                        <td><input type="checkbox" name="email[]"  value="{{$user->email}}"/></td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                    @endif
                        
                     </tbody>
							
                    </table>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div type="submit" class="btn btn-primary" value="submit">
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
