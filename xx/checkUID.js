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
