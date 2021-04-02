if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
var products = [];
function ready(){
    let getProdTocartBtn = document.querySelector(' .prod-desc-add');
    console.log(getProdTocartBtn);
    getProdTocartBtn.addEventListener("click",descToCart);
    

    
}
function descToCart(){
    let t = document.querySelector(' .item-title').innerText;
    let p = document.querySelector(' .item-price').innerText;
    let isrc = document.querySelector(' .item-image').src;
    console.log(t,p,isrc);
    products.push({
        name: t,
        prc: p,
        imgsrc: isrc,
        inct: 0
    })
    
    console.log(" products= ",products);

    setls(products);
    console.log(products.name)
}
function setls(products){
    let citems = {products};
    localStorage.setItem('prodInC',JSON.stringify(citems))

}
//////////////////////

function cartNumbers(products){
    console.log("the Product clicked is  ",products);
    let prodNumbers = localStorage.getItem('cartNumbers')   
  //  console.log(prodNumbers);  
    prodNumbers = parseInt(prodNumbers);
  //  console.log(typeof prodNumbers)
    if(prodNumbers){
        localStorage.setItem('cartNumbers',prodNumbers+1);
       // document.querySelector('.in-cart-rn span').textContent = prodNumbers+1;
    }
    else{
         localStorage.setItem('cartNumbers',1);
      //   document.querySelector('.in-cart-rn span').textContent = 1;
    }
   // getProdDetails();
    setItems(products);
  
}
function setItems(products){
  
    let citems = localStorage.getItem('ProductsinCart');
    citems  =  JSON.parse(citems);
    console.log(" my citems =>",citems);
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