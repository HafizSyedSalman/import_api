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
      <center><h1>Contact Record</h1></center>
      <a href="/import_api/public/datatable"><h1><b>Back</b></h1></a>
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
                
            </tr>
        </th>
        <tbody>
      
       
            <tr>
                <td>{{  $transactions->id }}</td>
                <td>{{  $transactions->first_name }}</td>
                <td>{{  $transactions->last_name }}</td>
                <td>{{  $transactions->job_title }}</td>
                <td>{{  $transactions->company }}</td>
                <td>{{  $transactions->industry }}</td>
                <td>{{  $transactions->website }}</td>
                <td>{{  $transactions->number }}</td>
                <td>{{  $transactions->email }}</td>
                <td>{{  $transactions->address }}</td>
                <td>{{  $transactions->postalcode }}</td>
                <td>{{  $transactions->city }}</td>
                <td>{{  $transactions->province }}</td>
                <td>{{  $transactions->country }}</td>
                <td>{{  $transactions->description }}</td>
                <td>{{  $transactions->created_at }}</td>
                <td>{{  $transactions->updated_at }}</td>
               
               

            </tr> 
           
        </tbody>
    </table></center>
</body>
</html>
