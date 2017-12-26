<!DOCTYPE html>
<html lang="en">

@include('Welcome.head')
@include('Welcome.headernav')

<div class="container bgimg-menu" style="width: 100%">
    <div class="bgimg-menu"  style="margin-top: 75px;margin-left: 0px;margin-right: 0px;padding: 0px;padding-top: 25px;">
        <div class="col-lg-6 bgimg-menu">
            <h1 class="text-center" style="font-size: 75px;letter-spacing:5px;color: whitesmoke">Menu</h1>


          @if(isset($categories))
              @foreach($categories as $cat)
            <div class="col-lg-6">
                <div class="thumbnail-1" onclick="show_items('{{$cat->id}}')">
                    <img src="/storage/{{$cat->pic}}" alt="" />
                    <div class="caption">
                        <h3 id='category_name_{{$cat->id}}' class="">{{$cat->name}}</h3>
                    </div>
                </div>
            </div>
              @endforeach
            @endif


        </div>
        <div class="col-lg-6 bgimg-menu detail-menu"style="color: white;font-size: larger;letter-spacing: 2px">
            <input type="hidden" id="cart_json_data" name="cart_json_data" value="[]">
            <h1 class="text-center" style="font-size: 75px;letter-spacing:5px;color: whitesmoke">Cart</h1>
                <div id="div_cart">

                </div>

        </div>

    </div>
</div>

<div class="modal fade " style="background-color: transparent!important;background: transparent!important;" id="show_items_modal" tabindex="-1" role="dialog" aria-labelledby="show_items">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="show_item_modal_title"> </h4>

        </div>
        <div class="modal-body" id="show_item_modal_body">

        </div>
    </div>
</div>
</div>



@include('Welcome.footernav')
@include('Welcome.footnav')
</body>
</html>