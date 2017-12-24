<!DOCTYPE html>
<html lang="en">
    @include('layout.header')

    <body>
    @include('layout.nav')
    <br>
    <div class="container" style="margin-top: 80px;width: 100%;">
        <div class="col-lg-12">
            <h1 class="text-center">Create New Employee</h1>
            <div class="col-lg-9">
    <form class="form-horizontal" action="/employee" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" >


        <div class="form-group">

            <label for="name" class="col-sm-3">Name:</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name"/>
            </div>
            </div>

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
        <div class="form-group">
            <label for="mobile" class="col-sm-3">Mobile:</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="mobile" name="mobile"/>
            </div>
            </div>
        <div class="form-group">
            <label for="gov_id" class="col-sm-3">Government ID:</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="gov_id" name="gov_id"/>
        </div>
        </div>
        <div class="form-group">
            <label for="gov_id_type" class="col-sm-3">ID Type:</label>
            <div class="col-sm-9">
            <select name="gov_id_type" id="gov_id_type" class="form-control">
                <option value="aadhar">Aadhar</option>
                <option value="voterid">Voter ID</option>
                <option value="drivinglicence">Driving Licence</option>
                <option value="passport">Passport</option>
            </select>
            </div>

        </div>
        <input type="hidden" class="form-control" id="manager_id" name="manager_id" value="{{$manager_id}}"/>
        <div class="form-group">
            <label for="desc" class="col-sm-3">Description:</label>
            <div class="col-sm-9">
            <textarea id="desc" class="form-control" name="desc" rows="3"></textarea>
        </div>
        </div>
        <div class="form-group">
            <label for="is_supper" class="col-sm-3">Is Super Employee:</label>
            <div class="col-sm-9">
            <select name="is_super" id="is_supper" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
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