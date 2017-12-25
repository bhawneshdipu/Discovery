<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
@include('layout.adminnav')

<div class="container" style="margin-top: 180px;width: 100%;">
    <div class="col-lg-12">
        <h1 class="text-center">Recover Employee</h1>
        <div class="col-lg-9">
            <form class="form-horizontal" action="/employee/recover/{{$emp->id}}" method="post">

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
                <div class="form-group">
                    <label for="gov_id" class="col-sm-3">Government ID:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="gov_id" name="gov_id" value="{{$emp->gov_id}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gov_id_type" class="col-sm-3">ID Type:</label>
                    <div class="col-sm-9">
                        <select name="gov_id_type" id="gov_id_type" class="form-control">
                            <option value="aadhar" @if($emp->gov_id_type='aadhar'){{'selected'}}@endif>Aadhar</option>
                            <option value="voterid" @if($emp->gov_id_type='voterid'){{'selected'}}@endif>Voter ID</option>
                            <option value="drivinglicence" @if($emp->gov_id_type='drivinglincence'){{'selected'}}@endif>Driving Licence</option>
                            <option value="passport" @if($emp->gov_id_type='passport'){{'selected'}}@endif>Passport</option>
                        </select>
                    </div>

                </div>
                <input type="hidden" class="form-control" id="manager_id" name="manager_id" value="{{$emp->manager_id}}"/>
                <div class="form-group">
                    <label for="desc" class="col-sm-3">Description:</label>
                    <div class="col-sm-9">
                        <textarea id="desc" class="form-control" name="desc" rows="3">{{$emp->desc}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="is_supper" class="col-sm-3">Is Super Employee:</label>
                    <div class="col-sm-9">
                        <select name="is_super" id="is_supper" class="form-control">
                            <option value="1" @if($emp->is_super=1){{'selected'}}@endif>Yes</option>
                            <option value="0" @if($emp->is_super=0){{'selected'}}@endif>No</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg pull-right">Recover</button>
            </form>

        </div>

    </div>
</div>
</body>
@include('layout.footer')
</html>