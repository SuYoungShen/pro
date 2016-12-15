$(document).ready(function() {
  //刪除視窗
  $("td a[name='Delete']").on(ace.click_event, function() {
    Deplace_name();
  });
});

function OnlyDelete() {

  $(".table-header a[name='Delete']").on(ace.click_event, function() {
    Deplace_name();
  });
}

function Deplace_name(){
  var Deplace_names=[];
  var Deplace_name = $("input[name='Deplace_name[]']").val();
  Deplace_names.push(Deplace_name);

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "about/place/delete.php",
        data:{'Deplace_name[]':Deplace_names},
        success:function(data){
          alerts(data,"about.php");//轉回指定葉面
        }
      });
    } else {
      alert("小心~~~別按錯了!!!");
    }
  });
}
