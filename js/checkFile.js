$(':file').change(function(){  //選取類型為file且值發生改變的
  var file = $(this)[0].files; //定義file=發生改的file
  length = file.length;
 var input = event.target;



   $.each(file,function(index, el) {
     name = input.files[index].name;
     size = input.files[index].size;
     type = input.files[index].type;

     types = (type!='image/png' &&
              type!='image/PNG' &&
              type!='image/jpg' &&
              type!='image/jpeg' &&
              type!='image/JPG' &&
              type!='image/JPEG' &&
              type!= 'image/bmp' &&
              type!='image/gif'
            );

     if(size > 2097152){//檢查檔案大小,不得超過2MB

       alert(name+"檔案已超過2MB");

    }else if(types){

      alert(name+"傳錯檔");

    }
   });

});
