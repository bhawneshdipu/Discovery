<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
@include('layout.adminnav')
<br>
<div class="container" style="margin-top: 80px;width: 100%;">
    <div class="col-lg-12">
        <h1 class="text-center">Recover Item</h1>
        <div class="col-lg-9">
            <form class="form-horizontal" action="/item/recover/{{$item->id}}" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                <input type="hidden" name="id" id="id" value="{{ $item->id }}" >


                <div class="form-group">

                    <label for="name" class="col-sm-3">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}"/>
                    </div>
                </div>

                <input type="hidden" class="form-control" id="manager_id" name="manager_id" value="{{$employee->id}}"/>
                <div class="form-group">
                    <label for="desc" class="col-sm-3">Description:</label>
                    <div class="col-sm-9">
                        <textarea id="desc" class="form-control" name="desc" rows="3">{{$item->desc}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg  btn-primary pull-right">Recover</button>
            </form>

        </div>
    </div>
</div>

</body>
@include('layout.footer')
</html>