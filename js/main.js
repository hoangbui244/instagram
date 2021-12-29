function menuProfile() {
    var x = document.getElementById("menu-profile");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
   
  }
  const wrapper = document.querySelector(".wrapper");
  const defaultBtn = document.querySelector("#default-btn");
  const customBtn = document.querySelector("#custom-btn");
  const cancelBtn = document.querySelector("#cancel-btn i");
  const img = document.querySelector(".image_show");
  const modal_need_hidden = document.querySelector(".modal_need_hidden");
  var modal = document.getElementById("myModal");
  var model_push = document.getElementById("model_push");
  const image_push_modal = document.querySelector(".image_push_modal");

  var btn_continude = document.getElementById("btn_continude");
  btn_continude.onclick = function(){
  modal.style.display = "none";
  model_push.style.display = "block";
  document.body.style['overflow-y'] = 'hidden';
  document.body.style.overflowY = "hidden";
 image_push_modal.src = result;
  }


  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0]; //X 1
  var span2 =document.getElementsByClassName("close")[1]; // X2
  span2.onclick = function(){
    model_push.style.display = "none";
  }
  
 
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
 
    modal.style.display = "none";
    document.body.style['overflow-y'] = "scroll";
    document.body.style.overflowY = "scroll";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal || event.target == model_push) {
      modal.style.display = "none";
      model_push.style.display = "none";
      document.body.style['overflow-y'] = "scroll";
      document.body.style.overflowY = "scroll";
      img.style.display = "none"
      modal_need_hidden.style.display = "block"
    }
    
  }

  //Load anh

  var result
  let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
  function defaultBtnActive(){
    defaultBtn.click();
  }
  defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
      const reader = new FileReader();
      reader.onload = function(){
        result = reader.result;
        img.src = result;
        img.style.display = "block"
        modal_need_hidden.style.display = "none"
        wrapper.classList.add("active");
        
      }
      cancelBtn.addEventListener("click", function(){
        img.src = "";
        wrapper.classList.remove("active");
      })
      reader.readAsDataURL(file);
    }
    if(this.value){
      let valueStore = this.value.match(regExp);
     
    }
    btn_continude.style.visibility = "visible"
});
 // When the user clicks the button, open the modal 
 btn.onclick = function() {
  modal.style.display = "block";
  document.body.style['overflow-y'] = 'hidden';
  document.body.style.overflowY = "hidden";
  
  }