<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
@include('layout.nav')

<div class="container" style="margin-top: 180px;width: 100%;">
    <div class="col-lg-12">
        <h1 class="text-center">Login</h1>
<div class="col-lg-3"></div>
        <div class="col-lg-6">

            <div class="text-center"> {{$error}}</div>
            <form class="form-horizontal" action="/employee/login" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" >



                <div class="form-group">
                    <label for="email" class="col-sm-3">Email address:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
@include('layout.footer')
</html>