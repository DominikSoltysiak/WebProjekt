function registerFunction(){
  var form = document.getElementById('registerForm');
  var email = form["email"].value;
  var username = form["username"].value;
  var password = form["password"].value;
  var password_rep = form["password_rep"].value;



  var string=JSON.stringify({"id":x.Lenght+1,"username":username,"email":email,"password":password})

}
