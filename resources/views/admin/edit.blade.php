<!DOCTYPE html>
<html>
<style>

input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
div {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><h2>Edit Record </h2></center>

                    </div>
                    <div class="card-body">
                        <center><form action="/update/{{$transactions->id }}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label >FirstName</label>
                                    <input type="text" name="first_name" value="{{$transactions->first_name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >LastName</label>
                                    <input type="text" name="last_name" value="{{$transactions->last_name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Job Title</label>
                                    <input type="text" name="job_title" value="{{$transactions->job_title}}" class="form-control">
                                    <div class="form-group">
                                    <label >Company</label>
                                    <input type="text" name="company" value="{{$transactions->company}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Industry</label>
                                    <input type="text" name="industry" value="{{$transactions->industry}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Website</label>
                                    <input type="text"  name="website" value="{{$transactions->website}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Number</label>
                                    <input type="text" name="number" value="{{$transactions->number}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" name="email" value="{{$transactions->email}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Address</label>
                                    <input type="text" name="address" value="{{$transactions->address}}" class="form-control"> 
                                </div>
                                <div class="form-group">
                                    <label >PostalCode</label>
                                    <input type="text" name="postalcode" value="{{$transactions->postalcode}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >City</label>
                                    <input type="text" name="city" value="{{$transactions->city}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Province</label>
                                    <input type="text" name="province" value="{{  $transactions->city}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Country</label>
                                    <input type="text" name="country" value="{{ $transactions->country }}" class="form-control">
                                </div>
                                <label >Description</label>
                                    <input type="text" name="description" value="{{ $transactions->description }}" class="form-control">
                                </div>
                    
                                <br>

                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/view">Cancel</a>
                                </br>

                            </form></center>
                    </div>
                </div>
            </div>
        </div>
    </div>


</html>
</head>
