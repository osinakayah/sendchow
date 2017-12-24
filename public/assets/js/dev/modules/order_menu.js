SendChow.OrderMenu = function () {
    let cartTableWrapper = $('#cart_table_div_wrapper');
    let removeItemFromCart = (rowId)=>{
        "use strict";
        cartTableWrapper.addClass('processing');
        $.ajax({
            url:'/cart/removeItem/'+rowId,
            success:  (response) => {
                appendCartContentsToView(response);
            }
        });
    };
    let updateProductInCart = (rowId, quantity)=>{
        "use strict";
        cartTableWrapper.addClass('processing');
        $.ajax({
            url:'/cart/updateCart/'+rowId+'/'+quantity,
            success:  (response) => {
                appendCartContentsToView(response);
            }
        });
    };

    let addProductToCart = (menuId, quantity)=>{
        "use strict";
        cartTableWrapper.addClass('processing');
        quantity = quantity || 1;
        $.ajax({
            url:'/cart/addToCart/'+menuId+'/'+quantity,
            success:  (response) => {
                appendCartContentsToView(response);
            }
        });
    };
    let appendCartContentsToView = (response)=>{
        "use strict";
        cartTableWrapper.removeClass('processing');
        let table = $('#cart_table_body');
        let mobileTable = $('#mobile-cart_table_body');
        if(response.count && response.count > 0){

            $('#cart-total-checkout').removeClass('gone');
            $('#mobile_cart_bottom_summary').removeClass('gone');
            let rows = '';
            let items = response.items;
            for (var key in items) {
                if (items.hasOwnProperty(key)) {
                    let item = items[key];
                    rows = rows+'<tr data-qty = "'+item.qty+'" data-rowId = "'+key+'" class="cart-item" product-id="'+item.id+'"><td class="cart-item-name"><p>'+item.name+'</p></td><td class="cart-item-price">&#x20A6;'+item.subtotal+'</td><td class="cart-item-count" colspan="2"><span>'+item.qty+'x</span></td><td class="td-con"><div class="btn-group" product-id="'+item.id+'"><button product-id="'+item.id+'" class="btn-alter-cart-qty btn btn-info btn-sm add"> <i class="now-ui-icons ui-1_simple-add"></i></button><span>'+item.qty+'</span><button product-id="'+item.id+'"class="btn-alter-cart-qty btn btn-info btn-sm minus"><i class="now-ui-icons ui-1_simple-delete"></i> </button></div></td><td class="td-actions"><button type="button" class="btn-remove-all-this-item btn btn-neutral remove" product-id="'+item.id+'"><i class="now-ui-icons ui-1_simple-remove"></i></button></td></tr>';
                }
            }

            table.html(rows);
            mobileTable.html(rows);
            $('#sub_total_price').html(response.subtotal);
            $('#items_tax').html(response.tax);
            $('#total_price').html(response.total);
            $('#moble_sub_total_price').html(response.subtotal);
            $('#mobile_items_tax').html(response.tax);
            $('#mobile_total_price').html(response.total);
            $('#mobile_cart_bottom_summary .td-price-mobile').html(response.total);
            $('#mobile_cart_bottom_summary .total-cart-item-count').html(response.count);
        }else{
            if($('#mobile-header').is(':visible')){
                toggleMobileCart();
            }
            $('#cart-total-checkout').addClass('gone');
            $('#mobile_cart_bottom_summary').addClass('gone');
            table.empty();
            mobileTable.empty();
            table.html(`<tr class="cart-empty"><td class="empty-bag"><div class="empty-bag-bg"><i class="icon-bag"></i></div><div class="empty-bag-text"><p>Your food basket is empty, add food items.</p></div> </td></tr>`);
        }
    };
    let getCartContents = ()=>{
        "use strict";

        cartTableWrapper.addClass('processing');
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


            let currentUrl = window.location.href;
            if(currentUrl.includes('/restaurants/order_menu/')){
                getCartContents();
                $(".menu-variation button.btn.btn-neutral").click(function (e) {
                    e.stopImmediatePropagation();
                    addProductToCart($(this).attr('product-id'));
                });

                $(document).on('click', '.btn-remove-all-this-item', function (e) {
                    e.stopImmediatePropagation();
                    let rowId = $(this).closest('tr').attr('data-rowId');
                    removeItemFromCart(rowId);
                });

                $(document).on('click', '.btn-alter-cart-qty', function (e) {
                    e.stopImmediatePropagation();

                    let action = 'add';
                    let row = $(this).closest('tr');
                    let rowId = row.attr('data-rowId');
                    let quantity = Number(row.attr('data-qty'));

                    if($(this).hasClass('minus')){
                        action = 'minus';
                    }
                    switch (action){
                        case 'add':
                            quantity += 1;
                            break;
                        case 'minus':
                            quantity -= 1;
                            break;
                    }
                    if(quantity === 0){
                        removeItemFromCart(rowId);
                    }else{
                        updateProductInCart(rowId, quantity);
                    }
                });
            }
        }
    };
}();
