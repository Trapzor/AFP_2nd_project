function showRating(value) {
    const ratingBlock = document.getElementById("rating");
    for (i = 0; i < 5; i++) {
        var star = document.createElement("i");
        if (i < value) {
            star.classList.add("fa", "fa-star", "checked");
        } else {
            star.classList.add("fa", "fa-star");
        }
        ratingBlock.appendChild(star);
    }
}

function cartSetup() {
    var cartItemQuantityPanel = document.getElementsByClassName('cart-quantity-panel');
    for (var i = 0; i < cartItemQuantityPanel.length; i++) {
        var plusButton = cartItemQuantityPanel[i].getElementsByClassName('plus')[0];
        var minusButton = cartItemQuantityPanel[i].getElementsByClassName('minus')[0];
        plusButton.addEventListener('click', IncreaseQuantity);
        minusButton.addEventListener('click', DecreaseQuantity);
    }
}

function IncreaseQuantity(event) {
    var clickedCartItem = event.target;
    var quantityPanel = clickedCartItem.parentElement.parentElement.getElementsByClassName('cart-quantity')[0];
    var quantity = parseInt(quantityPanel.innerHTML);
    quantity = quantity+1;
    quantityPanel.innerHTML = quantity;
    updatePrice();
}

function DecreaseQuantity(event) {
    var clickedCartItem = event.target;
    var quantityPanel = clickedCartItem.parentElement.parentElement.getElementsByClassName('cart-quantity')[0];
    var quantity = parseInt(quantityPanel.innerHTML);
    quantity = quantity-1;
    quantityPanel.innerHTML = quantity;
    updatePrice();
}

function updatePrice() {
    var cart = document.body.getElementsByClassName('cart-outline')[0];
    var cartItems = document.body.getElementsByClassName('item');
    var total = 0;
    
    for (var i = 0; i < cartItems.length; i++) {
        var cartItem = cartItems[i];
        var cartItemPriceElement = cartItem.getElementsByClassName('itemprice')[0];
        var cartItemQuantity = cartItem.getElementsByClassName('cart-quantity')[0];
        var price = parseInt(cartItemPriceElement.innerHTML.replace("Ft",""));
        var quantity = parseInt(cartItemQuantity.innerHTML);
        total = total + (price * quantity);
    }
    document.getElementsByClassName('cart-items-price')[0].innerHTML = total + 'Ft';
}

