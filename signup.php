<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Signup | Upwork Clone</title>
<style>
body{font-family:'Segoe UI';background:#f9f9f9;margin:0;}
.container{
width:380px;background:white;padding:30px;margin:100px auto;
border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);
}
h2{color:#14A800;text-align:center;}
input{
width:100%;padding:12px;margin:10px 0;border:1px solid #ccc;border-radius:6px;
}
button{
width:100%;padding:12px;background:#14A800;color:white;border:none;
font-size:16px;border-radius:6px;cursor:pointer;
}
button:hover{background:#128f00;}
p{text-align:center;}
a{color:#14A800;text-decoration:none;}
</style>
</head>
<body>
<div class="container">
  <h2>Create Account</h2>
  <input id="name" placeholder="Full Name">
  <input id="email" placeholder="Email">
  <input id="password" type="password" placeholder="Password">
  <button onclick="signup()">Sign Up</button>
  <p>Already have an account? <a href="login.php">Login</a></p>
</div>
<script>
function signup(){
 let name=document.getElementById('name').value.trim();
 let email=document.getElementById('email').value.trim();
 let pass=document.getElementById('password').value.trim();
 if(!name||!email||!pass){alert('Please fill all fields');return;}
 localStorage.setItem('user',JSON.stringify({name,email,pass,bio:"",jobs:[],earnings:0}));
 alert('Signup successful!');
 window.location.href='login.php';
}
</script>
</body>
</html>
