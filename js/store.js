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

    var addToCartButtons = document.getElementsByClassName("add-to-cart")
    for (var i = 0; i < addToCartButtons.length; i++) {
        var addToCartButton = addToCartButtons[i]
        addToCartButton.addEventListener('click', addToCartClicked);
    }

}

function addToCartClicked(event) {
    var button = event.target;
    var cartItem = button.parentElement;
    var itemTitle = cartItem.getElementsByClassName("item-title")[0].innerText
    var itemPrice = cartItem.getElementsByClassName("cost")[0].innerText.replace("RM", "")
    var itemImage = cartItem.getElementsByClassName("item-img")[0].src;
    addItemToCart(itemTitle, itemPrice, itemImage)
}

function addItemToCart(itemTitle, itemPrice, itemImage) {
    var cartRow = document.createElement("div")
    var cart = document.getElementsByClassName("cart")[0]
    var cartRowContents = `
    <div class="cart-entity">
      <button class="remove-btn"><span class="fas fa-times"></span></button>
      <img src="${itemImage}" alt="Mazero coffee">
      <div class="product">
        <h3>${itemTitle}</h3>
        <div class="cost">RM ${itemPrice}</div>
      </div>
    </div>`
    cartRow.innerHTML = cartRowContents
    cart.append(cartRow)
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