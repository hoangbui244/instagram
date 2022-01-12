<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
    $("#live_search").keyup(function(){
        var input = $(this).val();
        if(input != ""){
            $("#searchresult").css("display","flex");
            $.ajax({
                url:"livesearch.php",
                method:"POST",
                data:{input:input},
                success:function(data){
                    $("#searchresult").html(data);
                }
            });
        }else{
            $("#searchresult").css("display","none");
        }
    });
   
   
});     
function menuProfile() {
  var x = document.getElementById("menu-profile");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>