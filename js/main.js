function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
var elems = document.getElementsByClassName('modal_pick_image')
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
    
    document.getElementById('profileDisplay' ).style.display = 'block';
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.display = 'none';
    }
  }
}


//open modal
var modal = document.getElementById("mymodal")
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "flex";
  document.body.style['overflow-y'] = "hidden";
  document.body.style.overflowY = "hidden";
}
span.onclick = function() {
  modal.style.display = "none";
  document.body.style['overflow-y'] = "scroll";
  document.body.style.overflowY = "scroll";
  
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.style['overflow-y'] = "scroll";
  document.body.style.overflowY = "scroll";
  }
}



