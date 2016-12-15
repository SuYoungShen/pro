function AreaDelete(Place_Name, ViewPoint, Posted, AreaMessage, AreaDate) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "message/area/delete.php",
        data:{
          'Place_Name' : Place_Name,
          'ViewPoint' : ViewPoint,
          'Posted' : Posted,
          'AreaMessage' : AreaMessage,
          'AreaDate' : AreaDate
        },
        success:function(data){
          alerts(data,"user.php");//轉回指定葉面
        },
        error:function(data){
          alerts(data,"user.php");//轉回指定葉面
        }
      });
    } else {
      alert("小心~~~別按錯了!!!");
    }
  });
}

function ForumDelete(Theme, ForumPosted, ForumMessages, ForDate) {//彈跳視窗

  bootbox.confirm("Are you sure?", function(result) {
    if (result) {
      $.ajax({
        type:"POST",
        url: "message/forum/delete.php",
        data:{
          'Theme' : Theme,
          'ForumPosted' : ForumPosted,
          'ForumMessages' : ForumMessages,          
          'ForDate' : ForDate
        },
        success:function(data){
          alerts(data,"user.php");//轉回指定葉面
        },
        error:function(data){
          alerts(data,"user.php");//轉回指定葉面
        }
      });
    } else {
      alert("小心~~~別按錯了!!!");
    }
  });
}
