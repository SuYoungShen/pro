function getNowTime(){
  var timeDate= new Date();
  var tMonth = (timeDate.getMonth()+1) > 9 ? (timeDate.getMonth()+1) : '0'+(timeDate.getMonth()+1);
  var tDate = timeDate.getDate() > 9 ? timeDate.getDate() : '0'+timeDate.getDate();
  var tHours = timeDate.getHours() > 9 ? timeDate.getHours() : '0'+timeDate.getHours();
  var tMinutes = timeDate.getMinutes() > 9 ? timeDate.getMinutes() : '0'+timeDate.getMinutes();
  var tSeconds = timeDate.getSeconds() > 9 ? timeDate.getSeconds() : '0'+timeDate.getSeconds();
  return timeDate= timeDate.getFullYear()+'/'+ tMonth +'/'+ tDate +' '+ tHours +':'+ tMinutes +':'+ tSeconds;
}
