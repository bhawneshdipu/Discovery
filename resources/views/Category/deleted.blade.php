<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body style="color: black">
@include('layout.adminnav')

<div class="container" style="margin-top: 180px;width: 100%;">
    <div class="col-lg-12">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">

@if(isset($employee))
<h1 style="font-size: xx-large"> Welcome {{$employee->name}}</h1>
@endif
<table border="1px" class="table table-responsive table-bordered ">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Picture</th>

        <th>Manager_ID</th>
        <th>Desc</th>
        <th>Action</th>
    </tr>
    @if(isset($categories))
    @foreach($categories as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td><img src="/storage/{{$cat->pic}}" class="img-thumbnail" width="150px" height="90px"></td>
            <td>{{$cat->manager_id}}</td>
            <td>{{$cat->desc}}</td>
            <td><a class="btn btn-warning" href="/category/recover/{{$cat->id}}">Recover</a></td>
        </tr>
        @endforeach
        @endif
</table>

        </div>
    </div>
</div>
</body>

</html>