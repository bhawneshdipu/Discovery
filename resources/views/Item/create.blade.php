<!DOCTYPE html>
<html lang="en">
    @include('layout.header')

    <body>
    @include('layout.adminnav')
    <br>
    <div class="container" style="margin-top: 80px;width: 100%;">
        <div class="col-lg-12">
            <h1 class="text-center">Create New Item</h1>
            <div class="col-lg-9">
    <form class="form-horizontal" action="/item" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" >


        <div class="form-group">

            <label for="name" class="col-sm-3">Name:</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name"/>
            </div>
            </div>
        <div class="form-group">

            <label for="name" class="col-sm-3">Half Price:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="half_price" name="half_price" step="0.01"/>
            </div>
        </div>

        <div class="form-group">

            <label for="name" class="col-sm-3">Full Price:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="full_price" name="full_price" step="0.01"/>
            </div>
        </div>


        <div class="form-group">
            <label for="is_supper" class="col-sm-3">Picture:</label>
            <div class="col-sm-9">
                <input type="file" class="form-control " name="pic" id="pic"/>
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-sm-3">Category ID:</label>
            <div class="col-sm-9">
                <select name="category_id" id="category_id" class="form-control">

                    @if(isset($categorylist))

                    @foreach($categorylist as $cat)
                        <option value="{{$cat->id}}" >{{$cat->name}}</option>
                    @endforeach
                    @endif

                </select>
            </div>
        </div>

        <input type="hidden" class="form-control" id="manager_id" name="manager_id" value="{{$employee->id}}"/>
        <div class="form-group">
            <label for="desc" class="col-sm-3">Description:</label>
            <div class="col-sm-9">
            <textarea id="desc" class="form-control" name="desc" rows="3"></textarea>
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