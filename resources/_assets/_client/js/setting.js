 //Header Area JS
document.querySelector(".dropdown-menu").addEventListener("click",(e)=>{
    e.stopPropagation();                 
  })
  document.querySelector(".dropdown-profile .dropdown-menu").addEventListener("click",(e)=>{
    e.stopPropagation();                 
  })
 //Profile Image preview
 const profileImg=document.getElementById("profile-img");
    profileImg.addEventListener("change",(event)=>{
        var image = document.getElementById('profile-image');
        image.src = URL.createObjectURL(event.target.files[0]);
    });