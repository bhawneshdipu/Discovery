<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body style="color: black">
@include('layout.adminnav')

<div class="container" style="margin-top: 180px;width: 100%;">
    <div class="col-lg-12">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">

@if($employee)
<h1 style="font-size: xx-large"> Welcome {{$employee->name}}</h1>
@endif
<table border="1px" class="table table-responsive table-bordered ">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Manager_ID</th>

        <th>Desc</th>
        <th>Is Super</th>
        <th>Action</th>
    </tr>
    @foreach($employees as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <td>{{$emp->name}}</td>
            <td>{{$emp->password}}</td>
        <td>{{$emp->email}}</td>
        <td>{{$emp->mobile}}</td>
        <td>{{$emp->manager_id}}</td>
        <td>{{$emp->desc}}</td>
        <td>{{$emp->is_super}}</td>
       <td><a class="btn btn-warning" href="/employee/edit/{{$emp->id}}">Edit</a><a class="btn btn-danger" href="/employee/delete/{{$emp->id}}">Delete</a></td>
        </tr>
        @endforeach
</table>

        </div>
    </div>
</div>
</body>

</html>