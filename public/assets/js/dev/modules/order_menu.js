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
    return {
        getRestaurantProducts: getRestaurantProducts
    };
}();
