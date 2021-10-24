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

const checkBox2=document.getElementById('gridCheck2');
const checkoutBtn2=document.getElementById('checkout-btn2');

checkoutBtn2.setAttribute('disabled','');

checkBox2.addEventListener('click',(e)=>{


  if(e.target.checked){
    checkoutBtn2.removeAttribute('disabled','');
  }else{
    checkoutBtn2.setAttribute('disabled','');
  }

})