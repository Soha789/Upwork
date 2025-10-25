<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Profile | Upwork Clone</title>
<style>
body{font-family:'Segoe UI';margin:0;background:#f9f9f9;}
header{background:#14A800;color:white;padding:15px 40px;display:flex;justify-content:space-between;}
nav a{color:white;margin:0 12px;text-decoration:none;}
.container{padding:30px;max-width:500px;margin:auto;background:white;margin-top:50px;border-radius:10px;box-shadow:0 0 5px rgba(0,0,0,0.1);}
h2{color:#14A800;text-align:center;}
input,textarea{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;}
button{background:#14A800;color:white;border:none;padding:10px 20px;border-radius:6px;cursor:pointer;}
button:hover{background:#128f00;}
</style>
</head>
<body>
<header>
  <div><strong>Upwork Clone</strong></div>
  <nav>
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<div class="container">
  <h2>Edit Profile</h2>
  <input id="name" placeholder="Full Name">
  <textarea id="bio" placeholder="Your bio..."></textarea>
  <button onclick="save()">Save</button>
</div>
<script>
let u=JSON.parse(localStorage.getItem('user'));
if(!u){window.location.href='login.php';}
document.getElementById('name').value=u.name;
document.getElementById('bio').value=u.bio||'';
function save(){
 u.name=document.getElementById('name').value;
 u.bio=document.getElementById('bio').value;
 localStorage.setItem('user',JSON.stringify(u));
 alert('Profile updated!');
}
</script>
</body>
</html>
