
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function ready(){
    var removeCartItemsBtn = document.getElementsByClassName('btn-danger')
    console.log(removeCartItemsBtn+"this works")
    for(var i=0;i<removeCartItemsBtn.length;i++){
        var button = removeCartItemsBtn[i]
        button.addEventListener('click',removeCartItem)
           
    }
    
    var addToCartbtn = document.getElementsByClassName('add-button')
for(var i=0;i<addToCartbtn.length;i++){
    var button = addToCartbtn[i]
    button.addEventListener('click', addToCartClicked)
}


}
function addToCartClicked(event){
    var button = event.target
    var shopItem =  button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('item-title')[0].innerText
    var price = shopItem.getElementsByClassName('item-price')[0].innerText
    var imagesrc = shopItem.getElementsByClassName('item-image')[0].src
    
    addItemToCart(title, price, imagesrc)
    console.log(title, price,imagesrc)

}
function addItemToCart(title, price, imagesrc){
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
  var cartItems = document.getElementsByClassName('cart-items')[0]
  console.log("second"+title,price,imagesrc)
  var cartItemNames =  cartItems.getElementsByClassName('cart-item-title')
  for(var i=0;i<cartItemNames.length;i++)
  {
      if(cartItemNames[i].innerText== title){
          alert('You Have Already Added This Item')
          return
      }
  }
  var cartRowContents = ` 
  
  <div class="cart-item cart-column">
  <img class="cart-item-image" src="${imagesrc}" width="100" height="100">
  <span class="cart-item-title">${title}</span>
  </div>
<span class="cart-price cart-column">${price}</span>
<div class="cart-quantity cart-column">
  <input class="cart-quantity-input" type="number" value="1">
  <button class="btn btn-danger" type="button">REMOVE</button>
</div>

`

//console.log("third"+title,price,imagesrc)
    cartRow.innerHTML = cartRowContents
   // console.log("4"+title,price,imagesrc)
    cartItems.append(cartRow)
   // console.log("4"+title,price,imagesrc)
   cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem)
}
function removeCartItem(event){
    var buttonClicked=event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function updateCartTotal(){
    var cartitemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartitemContainer.getElementsByClassName('cart-row')
    console.log("works?")
    var tots= 0
    for(var i = 0; i < cartRows.length; i++){
        console.log("1works?")
        var cartRow = cartRows[i]
        var pr = cartRow.getElementsByClassName('cart-price')[0]
        var qt = cartRow.getElementsByClassName('cart-quantity-input')[0]
        console.log("below this")
        console.log(pr,qt)
        console.log("works?")
        var pric =parseFloat(pr.innerText.replace('$', ''))
        var quant= qt.value
        console.log(pric*quant)
        tots=tots+pric*quant
        console.log("tots="+tots)
    }
    document.getElementsByClassName('cart-total-price').innerText=tots
}
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

