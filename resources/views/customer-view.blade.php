<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control" placeholder="Search by Name or Email" value="{{$search}}">
            </div>
            <br>
            <button class="btn btn-warning">Search</button>
        </form>
        <a href="{{route('customer.create')}}"><button class="btn btn-primary d-inline-block m-2 float-left">Add</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>EmpId</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Hobbies</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                
            </tr>
</thead>
<tbody>
    @foreach($custom as $value)
            <tr>
                <td>{{$value->emp_id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>
                @if($value->gender =="M")
                Male
                @elseif($value->gender =="F")
                Female
                @else
                Other
                @endif
            </td>
                <td>{{get_formatted_date($value->dob,"d-M-Y")}}</td>
                <td>{{$value->hobby}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->city}}</td>
                <td>{{$value->state}}</td>
                <td>
                    <a href="{{route('customer.delete',['id' => $value->emp_id])}}"><button class="btn btn-danger">Delete</button><a></td>
                <td>
                    <a href="{{route('customer.edit',['id' => $value->emp_id])}}"><button class="btn btn-primary">Edit</button></a></td>
            </tr>
        @endforeach
</tbody>
</table>             
                
                
</body>
</html>