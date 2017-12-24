$(window).scroll(function() {
    console.log($(document).scrollTop());

    if ($(document).scrollTop() > 50) {
        console.log("height:55px");
        $('#nav-container').css({'height':'50px','margin-top':'7px','margin-bottom':'0px'});
        //$('#nav-container').css('height','55px');
        //$('#nav-container').parent().removeClass('bgimg-0');


    } else if($(document).scrollTop()<=50){
        console.log("height:75px");

        $('#nav-container').css({'height':'75px','margin-top':'15px','margin-bottom':'5px'});
        //$('#nav-container').parent().addClass('bgimg-0');


    }
});
small-carousel

function fun(id){
    var select="";
    var button='<button class="btn btn-sm btn-primary">add</button>';
    var data='  <h2>Item Detals'+id+'</h2>\n' +
        '  <p>These many item are available</p>            \n' +
        '  <table class="table table-hover">\n' +
        '    <thead>\n' +
        '      <tr>\n' +
        '        <th>Food'+id+'</th>\n' +
        '        <th>Price'+id+'</th>\n' +
        '        <th>Action'+id+'</th>\n' +
        '      </tr>\n' +
        '    </thead>\n' +
        '    <tbody>\n' +
        '      <tr>\n' +
        '        <td>Food1</td>\n' +
        '        <td>100</td>\n' +
        '        <td>'+button+'</td>\n' +

        '      </tr>\n' +
        '      <tr>\n' +
        '        <td>Food2</td>\n' +
        '        <td>200</td>\n' +
        '        <td>'+button+'</td>\n' +
        '      </tr>\n' +
        '      <tr>\n' +
        '        <td>Food3</td>\n' +
        '        <td>300</td>\n' +
        '        <td>'+button+'</td>\n' +
        '      </tr>\n' +
        '    </tbody>\n' +
        '  </table>\n';

    data+="<hr>";
    data+="<div class='col-lg-12'><label id='price' class='btn btn-warning btn-lg col-lg-12 '><label class='col-lg-6 '>Total Price</label> Rs.1000</label></div>";
    data+="<div class='col-lg-12'><button id='price' class='btn btn-success btn-lg col-lg-12 text-center'>Goto Zomatoo</button></div>";

    $('.detail-menu').html(data);

}

var x=0;
$(document).ready(function () {
    //Disable full page
 /*   $("body").on("contextmenu",function(e){
    /!*    var x=Math.random();
        x=x*100;
        x=parseInt(x);
        x=x%14;
        x=x+1;
        x=parseInt(x);
        *!/
    x=x+1;
    if(x>11){
        x=1;
    }
    $('.bgimg-0').css("background-image","url('./background/"+x+".jpg')");
        $('.bgimg-menu').css("background-image","url('./background/"+x+".jpg')");

        //$('#bodyimage').attr('src',"./background/"+x+".jpg");

        return false;

    });

    //Disable part of page
    $("#id").on("contextmenu",function(e){
        return false;
    });*/
});
