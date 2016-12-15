function Edit(account, password, email, name) {
  document.getElementById("account").value = account;
  document.getElementById("password").value = password;
  document.getElementById("email").value = email;
  document.getElementById("name").value = name;
}

$(document).ready(function() {
    // var email=/^[\w]+\@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,4}$/;
  var email=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
  $("input[name='email']").blur(function(){
    var emailVal = $(this).val();

     if(email.test(emailVal)){
         $(this).css("border-color","green");
     }else {
      //  alert("請填入正確格式");
       $(this).css("border-color","red");
     }
  });//email
  
});
