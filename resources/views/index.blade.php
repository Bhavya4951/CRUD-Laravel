<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th,td {
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

    @if(Session::has('message'))

    <p>{{Session::get('message')}}</p>
@endif
<a href="{{url('add-student')}}">Add New Record</a>
<h2>Student Record</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>action</th>

  </tr>
  @foreach($data as $sdt)
  <tr>
    <td>{{$sdt->id}}</td>
    <td>{{$sdt->name}}</td>
    <td>{{$sdt->email}}</td>
    <td>{{$sdt->phone}}</td>
    <td>{{$sdt->address}}</td>
  <td><a href="{{url('edit-student/'.$sdt->id)}}">Edit</a> | 
    <a href="{{url('delete-student/'.$sdt->id)}}">Delete
    </a>
  </td>
  </tr>
  @endforeach
</table>

</body>
</html>