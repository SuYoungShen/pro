$(document).ready(function() {

   $("form[name='place']").validate({
     rules:{
       placeName:"required",
       Introduction:"required"
     },
     messages:{
       placeName:"(必填)",
       Introduction:"(必填)"
     }
   });
   
});

function Edit(placeName, Introduction, picDir, pic_name) {
  document.getElementById("placeName").value = placeName;
  document.getElementById("Introduction").value = Introduction;
  document.getElementById("pic").innerHTML = "<img src='"+picDir+pic_name+"'  class='col-xs-8'>";

}
