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
        </div>
    </div>
</div>
</body>

</html>