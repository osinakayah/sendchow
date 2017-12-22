SendChow.OrderMenu = function () {
    let getRestaurantProducts = (restaurantId)=>{
        "use strict";
        $.ajax({
            url:'/restaurants/order_menu/'+restaurantId+'/products',
            success:  (response) => {
                window.products = response;
            }
        });
    };
    let addProductToCart = (menuId, quantity)=>{
        quantity = quantity || 1;
        "use strict";
        $.ajax({
            url:'/cart/addToCart/'+menuId+'/'+quantity,
            success:  (response) => {
                appendCartContentsToView(response);
            }
        });
    };
    let appendCartContentsToView = (response)=>{
        "use strict";
        if(response.count && response.count > 0){
            $('#cart-total-checkout').removeClass('gone');
            let rows = '';
            let items = response.items;
            for (var key in items) {
                if (items.hasOwnProperty(key)) {
                    let item = items[key];
                    rows = rows+'<tr class="cart-item" product-id="'+items.id+'"><td class="cart-item-name"><p>'+item.name+'</p></td><td class="cart-item-price">₦'+item.subtotal+'</td><td class="cart-item-count" colspan="2"><span>'+item.qty+'x</span></td><td class="td-con"><div class="btn-group" product-id="'+item.id+'"><button class="btn btn-info btn-sm add"> <i class="now-ui-icons ui-1_simple-add"></i></button><span>'+item.qty+'</span><button class="btn btn-info btn-sm minus"><i class="now-ui-icons ui-1_simple-delete"></i> </button></div></td><td class="td-actions"><button type="button" class="btn btn-neutral remove" product-id="'+item.id+'"><i class="now-ui-icons ui-1_simple-remove"></i></button></td></tr>';
                }
            }
            let table = $('#cart_table_body');
            table.html(rows);
            $('#sub_total_price').html(response.subtotal);
            $('#items_tax').html(response.tax);
            $('#total_price').html(response.total);
        }
    };
    let getCartContents = ()=>{
        "use strict";
        $.ajax({
            url:'/cart',
            success: (response)=>{
                appendCartContentsToView(response)
            }
        });

    };
    return {

        attachEvent:()=>{
            "use strict";
            $(".menu-variation button.btn.btn-neutral").click(function (e) {
                e.stopImmediatePropagation();
                addProductToCart($(this).attr('product-id'));
            });

            let currentUrl = window.location.href;
            if(currentUrl.includes('/restaurants/order_menu/')){
                getCartContents();
            }
        }
    };
}();
