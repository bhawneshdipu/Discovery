
<nav class="navbar navbar-default navbar-fixed-top" id="mynav" style="margin-bottom: 0px;" >
    <div class="container-fluid" id="nav-container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="#" style="padding-top: 0px;"><img class="img-round" src="/logo/Discovery%20Logo.jpg" width="200px" height="50px"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li {!! request()->is('/') ? ' class="active"' : '' !!}><a href="home">Home</a></li>
                <li {!! request()->is('photos') ? ' class="active"' : '' !!}><a href="photos">Photos</a></li>
                <li {!! request()->is('menu') ? ' class="active"' : '' !!}><a href="menu">Menu</a></li>
                <li {!! request()->is('bookcatering') ? ' class="active"' : '' !!}><a href="book">Book Catering</a></li>
                <li {!! request()->is('findus') ? ' class="active"' : '' !!}><a href="findus">Find us on Map</a></li>
            </ul>
        </div>
    </div>
</nav>
