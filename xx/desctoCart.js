
let itemName = document.querySelector('.item-title').innerText

document.getElementById('title').setAttribute('value', itemName);
document.getElementById('title')
console.log("Input value",title.value)
let itemPrice = document.querySelector('.item-price').innerText

document.getElementById('prc').setAttribute('value',itemPrice)
console.log("Input price",prc.value )
let cont = document.querySelector('.user-info-get');
console.log(cont);



function checkUID(){
    let uid = localStorage.getItem('userid');
let disableButton = document.getElementsByClassName('.prod-desc-add');
console.log("uid1=>",uid)
if(uid == null){
    console.log("uid=>",uid)
    window.location.href = "userLogin.php";
    disableButton.disabled = true
}
else{
    disableButton.disabled = false
    document.getElementById('uid').setAttribute('value', uid);
}

}
checkUID();

