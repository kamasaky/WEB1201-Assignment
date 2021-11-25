//Delete items from cart
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

updateCartTotal()
function ready() {
    var removeCartItemButtons = document.getElementsByClassName("remove-btn")
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
    }
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal()
}

function updateCartTotal() {
    var cartEntityContainer = document.getElementsByClassName("cart")[0]
    var cartEntities = cartEntityContainer.getElementsByClassName("cart-entity");
    var total = 0
    for (var i = 0; i < cartEntities.length; i++) {
        var cartEntity = cartEntities[i]
        var priceElement = cartEntity.getElementsByClassName("cost")[0]
        var quantity = 1
        var price = parseFloat(priceElement.innerText.replace("RM", ""))
        total += price * quantity
    }
    document.getElementsByClassName("total")[0].innerText = "RM " + total;
}