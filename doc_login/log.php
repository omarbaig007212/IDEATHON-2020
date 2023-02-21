<!DOCTYPE html>
<html>
<head>
  <!-- Start of frickbrainshelp Zendesk Widget script -->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=4b6f1b9c-6e8d-4f81-8371-1505b4f98714"> </script>
  <!-- End of frickbrainshelp Zendesk Widget script -->
  <title>login and password page</title>
  <link rel="stylesheet" href="syle.css">
  <link rel="stylesheet" href="  https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="form-box">
    <div class="row">
    <div class="col-md-6">
      <h2>login here</h2>
      <form action="validation.php" method="post">
        <div class="input-box">
          <label>email</lable>
          <i class="fa fa-envelope"></i>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="input-box">
          <label>password</lable>
          <i class="fa fa-key"></i>
          <input type="password" name="password" class="form-control"  id="myinput" required>
          <span class="eye" onclick="myFunction()">
          <i id="hide1" class="fa fa-eye"></i>
          <i id="hide2" class="fa fa-eye-slash"></i>
      </span>
      <script>
                function myFunction(){
                  var x =document.getElementById("myinput");
                  var y =document.getElementById("hide1");
                  var z =document.getElementById("hide2");
                  if(x.type === 'password'){
                    x.type = "text";
                    y.style.display="block";
                    z.style.display="none";
                  }
                  else {
                    x.type = "password";
                    y.style.display="none";
                    z.style.display="block";
                  }
                }
          </script>
    </div>
        </div>
        <button type="submit" class="login-btn"> login </button>
  </body>
  </html>
