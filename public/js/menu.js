function show_items(id){


    $.ajax({
       type:"GET",
        url:"/showItems",
        data:{"id":id},
        success:function(res){
            console.log(res);
            res=JSON.parse(res);
            var body_modal="";
            res.forEach(function (t) {
                body_modal+='<div class="row">'+
                    '<div class="col-sm-2">'+
                    '<img src="/storage/'+t.pic+'" class="img-thumbnail" width="70px" height="40px">'+
                    '</div><div class="col-sm-2">'+
                    '<p>'+t.name+'</p>'+
                '</div><div class="btn-group col-sm-4" role="group" aria-label="half">'+
                    '<button type="button" class="btn btn-sm " data-item-id="'+t.id+'" data-item-name="'+t.name+'" onclick="substract_half(this);" data-item-price="'+t.half_price+'">&minus;</button>'+
                   '<button type="button" class="btn btn-sm btn-link" disabled="disabled"> &#8377;'+t.half_price+'</button>'+
                '<button type="button" class="btn btn-sm" data-item-id="'+t.id+'" data-item-name="'+t.name+'" onclick="add_half(this);" data-item-price="'+t.half_price+'">&plus;</button>'+
                    '</div><div class="btn-group col-sm-4" role="group" aria-label="full">'+
                    '<button type="button" class="btn btn-sm" data-item-id="'+t.id+'" data-item-name="'+t.name+'" onclick="substract_full(this);" data-item-price="'+t.full_price+'">&minus;</button>'+
                    '<button type="button" class="btn btn-sm btn-link" disabled="disabled"> &#8377;'+t.full_price+'</button>'+
                    '<button type="button" class="btn btn-sm" data-item-id="'+t.id+'" data-item-name="'+t.name+'" onclick="add_full(this);" data-item-price="'+t.full_price+'">&plus;</button></div></div>';

            });
            console.log(body_modal);
            console.log(id);
            $('#show_item_modal_body').html(body_modal);
            $('#show_item_modal_title').html($('#category_name_'+id).html());

            $('#show_items_modal').modal('toggle');

        },
        error:function(res){
            console.log(res);
        }

    });
}
function add_half(id){
    var json_data=$('#cart_json_data').val();
    json_data=JSON.parse(json_data);
    console.log(json_data);
    if(json_data!=null && json_data[$(id).attr('data-item-id')]!=null  && json_data.hasOwnProperty($(id).attr('data-item-id'))){
        var temp_json=json_data[$(id).attr('data-item-id')];
        if(temp_json.hasOwnProperty('half_unit')) {
            temp_json.half_unit = parseInt(temp_json.half_unit) + 1;
        }else{
            temp_json.half_unit=1;
        }
        if(temp_json.hasOwnProperty('price')) {

            temp_json.price = parseFloat(Number(parseFloat(Number(temp_json.price).toFixed(2)) + parseFloat(Number($(id).attr('data-item-price')).toFixed(2))).toFixed(2));
        }else{
            temp_json.price = parseFloat(Number($(id).attr('data-item-price')).toFixed(2));
        }
    }else{
        var temp_json={};
        temp_json.half_unit=1;
        temp_json.item_id=$(id).attr('data-item-id');
        temp_json.item_name=$(id).attr('data-item-name');
        temp_json.price = parseFloat(Number($(id).attr('data-item-price')).toFixed(2));
        temp_json.half_price=parseFloat(Number($(id).attr('data-item-price')).toFixed(2));
    }
    json_data[$(id).attr('data-item-id')]=temp_json;
    console.log(json_data);

    console.log(temp_json);
    $('#cart_json_data').val(JSON.stringify(json_data));

    update_div_cart();
}
function add_full(id) {
    var json_data=$('#cart_json_data').val();
    json_data=JSON.parse(json_data);
    if(json_data!=null && json_data[$(id).attr('data-item-id')]!=null && json_data.hasOwnProperty($(id).attr('data-item-id'))){
        console.log("if");
        var temp_json=json_data[$(id).attr('data-item-id')];
        console.log(temp_json);
        if(temp_json.hasOwnProperty('full_unit')) {
            temp_json.full_unit = parseInt(temp_json.full_unit) + 1;
        }else{
            temp_json.full_unit=1;
        }
        if(temp_json.hasOwnProperty('price')) {
            console.log('if price');
            temp_json.price = parseFloat(Number(parseFloat(Number(temp_json.price).toFixed(2)) + parseFloat(Number($(id).attr('data-item-price')).toFixed(2))).toFixed(2));
        }else{
            console.log('else price');
            temp_json.price = parseFloat(Number($(id).attr('data-item-price')).toFixed(2));
        }
    }else{
        console.log("else");
        var temp_json={};
        temp_json.full_unit=1;
        temp_json.item_id=$(id).attr('data-item-id');
        temp_json.item_name=$(id).attr('data-item-name');
        temp_json.price=parseFloat($(id).attr('data-item-price'));
        temp_json.full_price=parseFloat(Number($(id).attr('data-item-price')).toFixed(2));

    }
    json_data[$(id).attr('data-item-id')]=temp_json;
    console.log(json_data);

    console.log(temp_json);
    $('#cart_json_data').val(JSON.stringify(json_data));

    update_div_cart();
}
function substract_half(id) {
    var json_data=$('#cart_json_data').val();
    json_data=JSON.parse(json_data);
    if(json_data!=null && json_data[$(id).attr('data-item-id')]!=null && json_data.hasOwnProperty($(id).attr('data-item-id'))){
        var temp_json=json_data[$(id).attr('data-item-id')];
        if(temp_json.half_unit>=1) {
            temp_json.half_unit = parseInt(temp_json.half_unit) - 1;
            temp_json.price = parseFloat(Number(parseFloat(Number(temp_json.price).toFixed(2)) - parseFloat(Number($(id).attr('data-item-price')).toFixed(2))).toFixed(2));
        }
    }
    json_data[$(id).attr('data-item-id')]=temp_json;
    console.log(json_data);

    console.log(temp_json);
    $('#cart_json_data').val(JSON.stringify(json_data));

    update_div_cart();
}
function substract_full(id) {
    var json_data=$('#cart_json_data').val();
    json_data=JSON.parse(json_data);
    if(json_data!=null && json_data[$(id).attr('data-item-id')]!=null && json_data.hasOwnProperty($(id).attr('data-item-id'))){
        var temp_json=json_data[$(id).attr('data-item-id')];
        if(temp_json.full_unit>=1) {
            temp_json.full_unit = parseInt(temp_json.full_unit) - 1;
            temp_json.price = parseFloat(Number(parseFloat(Number(temp_json.price).toFixed(2)) - parseFloat(Number($(id).attr('data-item-price')).toFixed(2))).toFixed(2));
        }
    }
    json_data[$(id).attr('data-item-id')]=temp_json;
    console.log(json_data);
    console.log(temp_json);
    $('#cart_json_data').val(JSON.stringify(json_data));
    update_div_cart();
}

function update_div_cart() {
var div_html="";
var json_data=$('#cart_json_data').val();
json_data=JSON.parse(json_data);
    div_html+='<table class="table table-hover text-center">';
    div_html+='<thead ><tr><th width="20%" class="text-center">Food Item</th><th width="30%" class="text-center">Half </th><th width="30%" class="text-center">Full </th><th width="20%" class="text-center">Price</th></tr></thead>';

     div_html+='<tbody>';

     json_data.forEach(function (t) {
        if(t!=null && parseInt(t.price)>0) {
            div_html += '<tr>';
            div_html += '<td>' + t.item_name + '</td>';
            if(t.half_unit!==undefined) {

            div_html+='<td><div class="btn-group col-sm-12" role="group" aria-label="half">'+
                '<button type="button" class="btn btn-warning " data-item-id="'+t.item_id+'" data-item-name="'+t.item_name+'" onclick="substract_half(this);" data-item-price="'+t.half_price+'">&minus;</button>'+
                '<button type="button" class="btn btn-lg btn-link text-capitalize" disabled="disabled" style="color: white">'+t.half_unit+'</button>'+
                '<button type="button" class="btn btn-warning" data-item-id="'+t.item_id+'" data-item-name="'+t.item_name+'" onclick="add_half(this);" data-item-price="'+t.half_price+'">&plus;</button>'+
                '</div></td>';

            }else{
                div_html += '<td>' + 0 + '</td>';
            }
            if(t.full_unit!==undefined) {
                div_html+='<td><div class="btn-group col-sm-12" role="group" aria-label="full">'+
                    '<button type="button" class="btn btn-warning " data-item-id="'+t.item_id+'" data-item-name="'+t.item_name+'" onclick="substract_full(this);" data-item-price="'+t.full_price+'">&minus;</button>'+
                    '<button type="button" class="btn btn-lg btn-link text-capitalize " style="color: white;font-weight: bolder" disabled="disabled"> '+t.full_unit+'</button>'+
                    '<button type="button" class="btn btn-warning" data-item-id="'+t.item_id+'" data-item-name="'+t.item_name+'" onclick="add_full(this);" data-item-price="'+t.full_price+'">&plus;</button>'+
                    '</div></td>';

            }else{
                div_html += '<td>' + 0 + '</td>';
            }
            div_html += '<td>' +'<label> &#8377;'+ t.price + '</label></td>';
            div_html+='</tr>';
        }
     });
     div_html+='</tbody>';
    div_html+='</table>';

    div_html+='<div> <form action="/menu/order" method="post">';
    div_html+='<input type="hidden" value="'+$('#cart_json_data').val()+'" id="cart_json_data" name="cart_json_data"/>';
    div_html+='<button type="submit" id="submit" name="submit" class="btn btn-lg btn-warning pull-right">Order Now</button>';

    div_html+='</form></div>';
$('#div_cart').html(div_html);
}


