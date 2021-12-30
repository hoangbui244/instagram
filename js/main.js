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