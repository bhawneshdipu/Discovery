<nav class="navbar navbar-default navbar-fixed-top" id="mynav" style="margin-bottom: 0px;" >
    <div class="container-fluid" id="nav-container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="#" style="padding-top: 0px;"><img class="img-round" src="{{URL::to('/')}}/logo/Discovery%20Logo.jpg" width="200px" height="50px"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav ">
                <li class="active"><a href="/admin/home">Home</a></li>
                <li><a href="employee/show">Show Employee</a></li>

            </ul>

            @if($employee)

            <ul class="nav navbar nav-pills pull-right">

            <li class="active"><label style="font-size: larger;margin-right:20px">{{$employee->name}}</label></li>
            <li><button href="employee/logout" class="btn btn-sm btn-default">logout</button></li>
            </ul>
            @endif
        </div>

    </div>
</nav>
