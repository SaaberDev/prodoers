$("#signIn").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});

//
const checkBox=document.getElementById('gridCheck')
const checkoutBtn=document.getElementById('checkout-btn')

checkoutBtn.setAttribute('disabled','');
checkBox.addEventListener('click',(e)=>{


  if(e.target.checked){
    checkoutBtn.removeAttribute('disabled','');
  }else{
    checkoutBtn.setAttribute('disabled','');
  }

})