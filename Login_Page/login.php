<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<script src = "../Server/request.js"> </script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: url('Background.png');
  background-repeat: no-repeat;
  background-size: cover;
}

#username, #password{
  float: left;
}

form {
    background-color: white;
    margin: 7% 0 0 30%;
    border: 3px solid rgb(0, 0, 0);
    width: 40%;
    text-align: center;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid gray;
  box-sizing: border-box;
}

button {
  background-color: #FF5722;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: 30%;
  padding: 10px 18px;
  background-color: gray;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 0 16px 0 16px;
}

@media screen and (max-width: 767px) {
  .cancelbtn {
     width: 100%;
  }
  form{
    width: 100%;
    margin: 50% 0 0 0;
  }
}
</style>
</head>
<body>
<form id="loginForm">
  <div class="imgcontainer">
    <img src="img_avatar2.jpeg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname" id="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw" id="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button id="loginButton">Login</button>
  </div>
  <div class="container">
    <a href="../index.html"><button type="button" class="cancelbtn" >Cancel</button></a>
  </div>
</form>
	<script>
	function gotoAdmin() {
		window.location.href = "../Admin_Page/admin_page.php";
	}
	
	isLoggedIn().then(function(data) {
            if(data['value'])
            {
                console.log("Already logged in.");
                gotoAdmin();
            }
        });
		
	$(document).ready(function() {
		$('#loginForm').submit(function () {
            let formData = objectifyForm($(this).serializeArray());
            console.log(formData);
            login(formData['username'], formData['password']).then(function(data) {
                                                                    if(data['value'])
                                                                        gotoAdmin();
                                                                    else
                                                                        console.log(data['details']);
                                                              });
			return false; //Don't let html do anything if user submits form. We want jquery to do the work
		});
    });
	</script>
</body>
</html>
