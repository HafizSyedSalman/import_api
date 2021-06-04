<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
      <center><h1>Contact All Record</h1></center>
      <a href="datatable"><h1><b>Back</b></h1></a>
      <center><table style="width:0%">

        
            <tr>
                <th><h3>id</h3></th>
                <th><h3>FirstName</h3></th>
                <th><h3>LastName</h3></th>
                <th><h3>Job Title</h3></th>
                <th><h3>Company</h3></th>
                <th><h3>Industry</h3></th>
                <th><h3>Website</h3></th>
                <th><h3>Number</h3></th>
                <th><h3>Email</h3></th>
                <th><h3>Address</h3></th>
                <th><h3>PostalCode</h3></th>
                <th><h3>City</h3></th>
                <th><h3>Province</h3></th>
                <th><h3>Country</h3></th>
                <th><h3>Description</h3></th>
                <th><h3>Created_at</h3></th>
                <th><h3>Updated_at</h3></th>
                <!-- <th colspan="2"><h3>Action</h3></th> -->
            </tr>
        </th>
        <tbody>
       @foreach ($transactions as $transaction)
       
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->first_name }}</td>
                <td>{{ $transaction->last_name }}</td>
                <td>{{ $transaction->job_title }}</td>
                <td>{{ $transaction->company }}</td>
                <td>{{ $transaction->industry }}</td>
                <td>{{ $transaction->website }}</td>
                <td>{{ $transaction->number }}</td>
                <td>{{ $transaction->email }}</td>
                <td>{{ $transaction->address }}</td>
                <td>{{ $transaction->postalcode }}</td>
                <td>{{ $transaction->city }}</td>
                <td>{{ $transaction->province }}</td>
                <td>{{ $transaction->country }}</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->created_at }}</td>
                <td>{{ $transaction->updated_at }}</td>
               
                <!-- <td><a href="edit/{{$transaction->id}}"><b>Edit</b></a></td> -->
                <!-- <td><a href="destroy/{{$transaction->id}}"><b>Delete</b></a></td> -->

            </tr> 
            @endforeach
        </tbody>
    </table></center>
</body>
</html>
