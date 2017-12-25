<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
@include('layout.adminnav')

<div class="container" style="margin-top: 180px;width: 100%;">
    <div class="col-lg-12">
        <h1 class="text-center">Delete Employee</h1>
        <div class="col-lg-9">
            <form class="form-horizontal" action="/employee/destroy/{{$emp->id}}" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                <input type="hidden" class="form-control" id="id" name="id" value="{{$emp->id}}"/>

                <div class="form-group">


                    <label for="name" class="col-sm-3">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" value="{{$emp->name}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3">Email address:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" value="{{$emp->email}}"/>
                    </div>
                </div>
                <input type="hidden" class="form-control" id="password" name="password" value="{{$emp->password}}"/>

                <div class="form-group">
                    <label for="mobile" class="col-sm-3">Mobile:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$emp->mobile}}"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-danger pull-right">Delete</button>
            </form>

        </div>

    </div>
</div>
</body>
@include('layout.footer')
</html>