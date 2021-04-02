
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
var title 
var price
var imagesrc
var pr
var qtrec
 var products=[];
 

 function ready(){
    onLoadCartNum();
    


    
    let carts = document.querySelectorAll(' .add-button')
    
        for(let i=0 ; i < carts.length; i++){
        title = document.getElementsByClassName('item-title')[i].innerText
        pr = document.getElementsByClassName('item-price')[i].innerText
        imagesrc = document.getElementsByClassName('item-image')[i].src
         qtrec= document.getElementsByClassName('.item-qty-rec').value
        
         console.log("qty sel==>",qtrec)
        price = parseFloat( pr.replace('$',''))
       
            products.push({
            name: title,
            prc: price,
            imgsrc: imagesrc,
            inct: 0,
            
        })
        }
console.log(products);
for(let i=0 ; i < carts.length; i++){
    carts[i].addEventListener('click',()=>{
        cartNumbers(products[i]);
        title = document.getElementsByClassName('item-title')[i].innerText
        price = document.getElementsByClassName('item-price')[i].innerText
        imagesrc = document.getElementsByClassName('item-image')[i].src
       // addToLS(title,price,imagesrc);
        totCost(products[i]);
       // console.log("prCost = ",products.prc)
    })
    
}


dispCartItems(products);

}
function addToLS(title,price,imagesrc){
    let prodinLS= localStorage.getItem('prodClicked');
    if(prodinLS){
        
    }
    let tit=JSON.stringify(title);
    let name
    
    localStorage.setItem('ProdClicked',name=name+tit  );//left here 
}
function onLoadCartNum(){
    let prodNumbers = localStorage.getItem('cartNumbers')   
    if(prodNumbers){
        document.querySelector('.in-cart-rn span').textContent = prodNumbers;  
    }
}

function cartNumbers(products){
    console.log("the Product clicked is  ",products);
    let prodNumbers = localStorage.getItem('cartNumbers')   
  //  console.log(prodNumbers);  
    prodNumbers = parseInt(prodNumbers);
  //  console.log(typeof prodNumbers)
    if(prodNumbers){
        localStorage.setItem('cartNumbers',prodNumbers+1);
        document.querySelector('.in-cart-rn span').textContent = prodNumbers+1;
    }
    else{
         localStorage.setItem('cartNumbers',1);
         document.querySelector('.in-cart-rn span').textContent = 1;
    }
   // getProdDetails();
    setItems(products);
  
}
function setItems(products){
  
    let citems = localStorage.getItem('ProductsinCart');
    citems  =  JSON.parse(citems);
    console.log(" setItems =>",citems);
    if(citems !=null){
        if(citems[products.name]== undefined){
            citems = {
                ...citems,
                [products.name]: products
            }
        }
        citems[products.name].inct += 1;
    }else{
        products.inct = 1;
     citems={
        [products.name]:products
    }
    }
   
    
    localStorage.setItem("ProductsinCart",JSON.stringify(citems));
}

function totCost(products){
   
    let cartCost = localStorage.getItem('TotalCost');
     console.log("Cart Cost is", cartCost)
     console.log(typeof cartCost)
     if(cartCost != null){
         cartCost = parseInt(cartCost)
        localStorage.setItem("TotalCost", cartCost + products.prc)
     }else{
         localStorage.setItem("TotalCost",products.prc)
     }
    
}
function dispCartItems(products){
    let cartItems = localStorage.getItem("ProductsinCart");
    console.log("cart beofre json parse",cartItems)
    
    cartItems = JSON.parse(cartItems)
    var jsonCartArr = []
    Object.values(cartItems).map(item =>{
    jsonCartArr.push({
        title: item.name,
        imgs : item.imgsrc,
        qt : item.inct,
        price : item.prc

    })
    })
    console.log("json array==>",jsonCartArr);
    
    let productCont =  document.querySelector(".shopping-cart-items-wrapper-box");
    console.log(productCont,"Running")
    if( cartItems && productCont){
        console.log("Running inside if")
        productCont.innerHTML= '';
        Object.values(cartItems).map(item =>{
            productCont.innerHTML += `
            <div class="shopping-cart-items-wrapper-box">
            <div class="shopping-cart-items-wrapper">
        <div class="shopping-cart-image">
            <img src="${item.imgsrc}" alt="">
        </div>
        <div class="shopping-cart-item-details">
            <h4 class="shopping-cart-item-title">${item.name}</h4>
            <h4 class="shopping-cart-item-qty">Qty: <span class="shopping-cart-item-qty-text">${item.inct}</span><button  class="increaseQty">+</button> </h4>
            <h4 class="shopping-cart-item-price">$${item.prc}</h4>
        </div>
        </div>
        </div>
        
            `
        })
        let tots = localStorage.getItem('TotalCost')
        let totbx = document.querySelector(".checkout-total-span")
        tots = JSON.parse(tots)
        totbx.innerHTML= `
        <span class="checkout-total-span">$${tots}</span>
        `
        let qtyUp = document.querySelectorAll(".increaseQty")
console.log("QtyUp==>",qtyUp)
for(let i=0;i<qtyUp.length;i++){
    qtyUp[i].addEventListener('click', ()=>{
        let ct = localStorage.getItem('ProductsinCart')
        ct = JSON.parse(ct)
        if(ct !=null){
            if(ct[products.name]== undefined){
                ct = {
                    ...ct,
                    [products.name]: products
                }
            }
            ct[products.name].inct += 1;
        }
        localStorage.setItem("ProductsinCart",JSON.stringify(ct));
        console.log("this is working===",ct)
    });
}


        // console.log( "==>", productCont.innerHTML)
    }
    console.log( "Cartitems==>", cartItems)

    Object.values(cartItems).map(item =>{
       
      
    })
    console.log("jc arr i===>",jsonCartArr[1].name)
    document.getElementById('test').setAttribute('value',jsonCartArr[2].name);
    console.log(cartItems[2])
    for(let i =0; i<cartItems.length;i++){
          
    }
    var newobj = {
        table:[]
    }
    newobj.table.push(cartItems);
    var fs = require('fs');
    fs.writeFile()
}


incQ();




