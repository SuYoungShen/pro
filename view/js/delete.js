function Deletess(Deletes) {//單選刪除
  $(".table-header a[name='Delete']").on(ace.click_event, function() {
    bootboxs(Deletes);//彈跳視窗
  });//大垃圾桶
}

function bootboxs(Deletes) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "view/place/delete.php",
        data:{'DeViewpoints[]':Deletes},
        success:function(data){
          alerts(data,"view.php");//轉回指定葉面
        },
      });
    } else {
      alert("小心~~~別按錯了!!!");
    }
  });


}
