var loginButton = $(".navbar-nav li .btn-primary");
var verticalDivider = $("li.nav-item span");
var select = $(".select");


var vendorNav = $(".restaurant-page .vendor-list .vendor a.vendor-nav");
var selectVendorForwardIcon = $(".restaurant-page .vendor .vendor-nav .vendor-forward-icon");

var mobileCartItem = $(".cart-basket, .cart-price");
var mobileCart = $(".cart-bottom");
var cartContainer = $("#cart-container");
var mobileHeader = $("#mobile-header");
var emptyCart = $(".cart-empty");
var priceCheckout = $(".cart-total-checkout");

var cartBackButton = $(".mobile-header .header-title i");
var cart = $(".cart");
var addToCartButton = $(".menu-variation button.btn.btn-neutral");

var totalDesktop = $(".td-price");
var totalMobile = $(".td-price-mobile");
var cartItemCountDisplay = $(".total-cart-item-count");

var mobileCartFirstClick = true;

var totalPrice = 0;
var cartItemCount = 0;

//var vendorLocation = { lat: 6.4530906, lng: 3.5318009 };


var products = [
    { productId: "0001", price: 2000, item: "Chicken", qty: 0 },
    { productId: "0002", price: 2500, item: "Jollof Rice", qty: 0 },
    { productId: "0003", price: 1000, item: "Fried Rice", qty: 0 },
    { productId: "0004", price: 3500, item: "Burger", qty: 0 },
    { productId: "0005", price: 2600, item: "Asun", qty: 0 },
    { productId: "0006", price: 1300, item: "Beef", qty: 0 },
    { productId: "0007", price: 4000, item: "Goat Meat", qty: 0 },
    { productId: "0008", price: 2700, item: "Lamb Stew", qty: 0 },
    { productId: "0009", price: 1800, item: "Egusi Soup", qty: 0 },
    { productId: "0010", price: 3700, item: "Potatoe Chips", qty: 0 }
];

var cartItems = [];



var options = [];


//
// addToCartButton.on("click", function() {
//     if (cartItemCount == 0) {
//         emptyCart.addClass("gone");
//         mobileCart.removeClass("gone");
//         priceCheckout.removeClass("gone");
//     }
//     addItemToCart($(this));
//     totalPrice = calculateTotalPrice();
//     cartItemCount++;
//     updateCart();
// });

$(".cart").on("click", ".btn-group button.add", function(e) {

    //alert("CLicked");
    e.stopPropagation();
    addItemToCart($(this).parent());
    totalPrice = calculateTotalPrice();
    cartItemCount++;
    updateCart();
});

$(".cart").on("click", ".btn-group button.minus", function(e) {
    //alert("CLicked");
    e.stopPropagation();
    removeItemFromCart($(this).parent(), false);
    totalPrice = calculateTotalPrice();
    updateCart();
    if (cartItemCount == 0) {
        if ($(window).width() < 991) {
            toggleMobileCart();
        }
        emptyCart.removeClass("gone");
        mobileCart.addClass("gone");
        priceCheckout.addClass("gone");
    }
});

$(".cart").on("click", ".td-actions button.remove", function(e) {
    //alert("CLicked");
    e.stopPropagation();
    removeItemFromCart($(this), true);
    totalPrice = calculateTotalPrice();
    updateCart();
    if (cartItemCount == 0) {
        if ($(window).width() < 991) {
            toggleMobileCart();
        }
        emptyCart.removeClass("gone");
        mobileCart.addClass("gone");
        priceCheckout.addClass("gone");
    }
});

$(document).ready(function() {
    pageInit();
});

$(".button-container button.btn-icon").on("click", function(e) {

    $(".select.order-location").toggleClass("gone");
    $(".button-container button.btn-icon i").toggleClass("spin");

});

// $(window).resize(function() {

// });

function addItemToCart(cartItem) {
    var productId = cartItem.attr("product-id");
    products.forEach(function(item) {
        if (productId === item.productId) {
            if (isItemInCart(item)) {
                cartItems[cartItems.indexOf(item)].qty += 1;
                $('.cart tr[product-id="' + item.productId + '"]')
                    .html(cartItemHTMLUpdate(item.item, formatPrice(item.price * item.qty), item.productId, item.qty));
            } else {
                cartItems.push(item);
                cartItems[cartItems.indexOf(item)].qty += 1;
                cart.append(cartItemHTML(item.item, formatPrice(item.price), item.productId, item.qty));
            }
        }
    });
}

function removeItemFromCart(cartItem, isDelete) {
    var productId = cartItem.attr("product-id");
    cartItems.forEach(function(item, index) {
        if (productId === item.productId && isDelete == true) {
            cartItemCount -= item.qty;
            item.qty = 0;
            cartItems.splice(index, 1);
            $('.cart tr[product-id="' + item.productId + '"]').remove();
        } else if (productId === item.productId && isDelete == false) {
            if (item.qty === 1) {
                cartItemCount -= item.qty;
                item.qty = 0;
                cartItems.splice(index, 1);
                $('.cart tr[product-id="' + item.productId + '"]').remove();
            } else {
                cartItems[index].qty -= 1;
                $('.cart tr[product-id="' + item.productId + '"]')
                    .html(cartItemHTMLUpdate(item.item, formatPrice(item.price * item.qty), item.productId, item.qty));
                cartItemCount--;
            }
        }
    });
}

function formatTotal() {
    return totalPrice.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}

function formatPrice(price) {
    return "₦" + price.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}

function calculateSubTotalPrice() {

    var subtotal = 0;
    cartItems.forEach(function(product) {
        subtotal += (product.price * product.qty);
    });
    return subtotal;
}

function calculateVAT() {
    return calculateSubTotalPrice() - (calculateSubTotalPrice() / 1.05);
}

function calculateServiceCharge() {
    var charge = 0.10 * calculateSubTotalPrice();
    if (charge <= 800) {
        return charge;
    } else {
        return 800;
    }
}

function calculateTotalPrice() {
    return calculateSubTotalPrice() + calculateServiceCharge();
}

function isItemInCart(cartItem) {
    if (cartItems.length === 0) {
        return false;
    }
    for (var i = 0; i < cartItems.length; i++) {
        if (cartItems[i] === cartItem) {
            return true;
        }
    }

    return false;
}

// function initMap() {
//     var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 16,
//         center: vendorLocation
//     });
//     var marker = new google.maps.Marker({
//         position: vendorLocation,
//         map: map
//     });
// }

function cartItemHTML(itemTitle, itemPrice, itemID, itemQty) {
    var titleHTML = '<tr class="cart-item" product-id="' + itemID + '"><td class="cart-item-name"><p>' + itemTitle + '</p></td>';
    var priceHTML = '<td class="cart-item-price">' + itemPrice + '</td>';
    var itemCountHtml = '<td class="cart-item-count" colspan="2"><span>' + itemQty + 'x</span></td>';
    var plusMinusBtnHTML = '<td class="td-con"><div class="btn-group" product-id="' + itemID + '"><button class="btn btn-info btn-sm add"> <i class="now-ui-icons ui-1_simple-add"></i></button><span>' + itemQty + '</span><button class="btn btn-info btn-sm minus"><i class="now-ui-icons ui-1_simple-delete"></i> </button></div></td>';
    var removeBtnHTML = '<td class="td-actions"><button type="button" class="btn btn-neutral remove" product-id="' + itemID + '"><i class="now-ui-icons ui-1_simple-remove"></i></button></td></tr>';

    return titleHTML + priceHTML + itemCountHtml + plusMinusBtnHTML + removeBtnHTML;
}

function cartItemHTMLUpdate(itemTitle, itemPrice, itemID, itemQty) {
    var titleHTML = '<td class="cart-item-name"><p>' + itemTitle + '</p></td>';
    var priceHTML = '<td class="cart-item-price">' + itemPrice + '</td>';
    var itemCountHtml = '<td class="cart-item-count" colspan="2"><span>' + itemQty + 'x</span></td>';
    var plusMinusBtnHTML = '<td class="td-con"><div class="btn-group" product-id="' + itemID + '"><button class="btn btn-info btn-sm add"> <i class="now-ui-icons ui-1_simple-add"></i></button><span>' + itemQty + '</span><button class="btn btn-info btn-sm minus"><i class="now-ui-icons ui-1_simple-delete"></i> </button></div></td>';
    var removeBtnHTML = '<td class="td-actions"><button type="button" class="btn btn-neutral remove" product-id="' + itemID + '"><i class="now-ui-icons ui-1_simple-remove"></i></button></td>';

    return titleHTML + priceHTML + itemCountHtml + plusMinusBtnHTML + removeBtnHTML;
}

function updateCart() {
    totalDesktop.text(formatTotal());
    totalMobile.text(formatTotal());
    cartItemCountDisplay.text(cartItemCount);
    $(".sub-price").text(formatPrice(calculateSubTotalPrice()));
    $(".service-charge").text(formatPrice(calculateServiceCharge()));
    $(".vat").text(formatPrice(calculateVAT()));
}

mobileCartItem.click(
    function() {
        //hide its submenu
        if (mobileCartFirstClick) {
            mobileHeader.addClass("active");
            cartContainer.addClass("open");
            cartContainer.css("display", "none");
            mobileHeader.css("display", "none");
            mobileCartFirstClick = false;
            toggleMobileCart();
        } else {
            toggleMobileCart();
        }

    }
);

cartBackButton.click(function() {
    toggleMobileCart();
});

$(window).on('resize', function() {

    if ($(window).width() < 991) {
        verticalDivider.removeClass("vertical-divider");
        loginButton.addClass("login-btn-collapse");
    } else {
        verticalDivider.addClass("vertical-divider");
        loginButton.removeClass("login-btn-collapse");
    }

    if ($(window).width() < 768) {
        select.css("display", "block");

    } else {

        select.css("display", "inline-table");

    }

    if ($(window).width() < 430) {

        vendorNav.each(function() {
            if (parseInt($(this).css("height")) > 100) {
                $(this).children(".vendor-forward-icon").css("margin-top", "-50px");
            } else {
                $(this).children(".vendor-forward-icon").css("margin-top", "-40px");
            }
        });
    } else {
        selectVendorForwardIcon.css("margin-top", "-40px");
    }
    //on resize done...
    // clearTimeout($.data(this, 'resizeTimer'));
    // $.data(this, 'resizeTimer', setTimeout(function() {
    //     $(".select.order-location").slideToggle(function() {
    //         $(".button-container button.btn-icon i").removeClass("spin");
    //     });
    // }, 200));
});


function pageInit() {
    if ($(window).width() < 991) {
        verticalDivider.removeClass("vertical-divider");
        loginButton.addClass("login-btn-collapse");
    } else {
        verticalDivider.addClass("vertical-divider");
        loginButton.removeClass("login-btn-collapse");
    }

    if ($(window).width() < 768) {
        select.css("display", "block");
    } else {
        select.css("display", "inline-table");
    }

    if ($(window).width() < 431) {

        vendorNav.each(function() {
            if (parseInt($(this).css("height")) > 100) {
                $(this).children(".vendor-forward-icon").css("margin-top", "-50px");
            } else {
                $(this).children(".vendor-forward-icon").css("margin-top", "-40px");
            }
        });
    } else {
        selectVendorForwardIcon.css("margin-top", "-40px");
    }
}

function toggleMobileCart() {
    cartContainer.slideToggle();
    mobileHeader.slideToggle();
}

var offset = 75;

$('.category-links li a').click(function(event) {

    if (this.hash !== "") {
        event.preventDefault();
        //$($(this).attr('href'))[0].scrollIntoView();
        //scrollBy(0, -offset);
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top - offset
        }, 800, function() {});

    }
});