/*
function add_to_cart(product_id,product_name,options){
    $.post(site_url+'Main/add_to_cart',
            {
                product_id : product_id,
                product_name : product_name,
                options : options
            },
            function(response){
                alert(response);
            },
            "JSON");
}
*/

function delete_cart(index){
    $.post(site_url+'Main/delete_cart',
    {
        index : index
    },
    function(response){
       refresh_cart();
    });
}

function refresh_cart(){
    $.get(site_url+"Main/refresh_cart",function(response){
        $("#cart_count").html(response.data.counter);
        $("#header_cart").html(response.data.cart);
    },'JSON');
}