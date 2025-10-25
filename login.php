<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login | Upwork Clone</title>
<style>
body{font-family:'Segoe UI';background:#f9f9f9;margin:0;}
.container{
width:380px;background:white;padding:30px;margin:100px auto;
border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);
}
h2{color:#14A800;text-align:center;}
input{width:100%;padding:12px;margin:10px 0;border:1px solid #ccc;border-radius:6px;}
button{
width:100%;padding:12px;background:#14A800;color:white;border:none;
font-size:16px;border-radius:6px;cursor:pointer;
}
button:hover{background:#128f00;}
</style>
</head>
<body>
<div class="container">
  <h2>Login</h2>
  <input id="email" placeholder="Email">
  <input id="password" type="password" placeholder="Password">
  <button onclick="login()">Login</button>
</div>
<script>
function login(){
 let email=document.getElementById('email').value;
 let pass=document.getElementById('password').value;
 let user=JSON.parse(localStorage.getItem('user'));
 if(user && user.email===email && user.pass===pass){
   localStorage.setItem('loggedIn',true);
   window.location.href='home.php';
 }else alert('Invalid credentials');
}
</script>
</body>
</html>
