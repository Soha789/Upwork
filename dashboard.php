<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard | Upwork Clone</title>
<style>
body{font-family:'Segoe UI';margin:0;background:#f9f9f9;}
header{background:#14A800;color:white;padding:15px 40px;display:flex;justify-content:space-between;}
nav a{color:white;margin:0 12px;text-decoration:none;}
.container{padding:30px;}
.job{background:white;padding:20px;margin:15px 0;border-radius:8px;box-shadow:0 0 5px rgba(0,0,0,0.05);}
h2{color:#14A800;}
</style>
</head>
<body>
<header>
  <div><strong>Upwork Clone</strong></div>
  <nav>
    <a href="home.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>
<div class="container">
  <h2>Your Dashboard</h2>
  <p><strong>Total Earnings:</strong> $<span id="earn"></span></p>
  <div id="jobs"></div>
</div>
<script>
let u=JSON.parse(localStorage.getItem('user'));
if(!u){window.location.href='login.php';}
document.getElementById('earn').innerText=u.earnings||0;
let div=document.getElementById('jobs');
if(u.jobs && u.jobs.length){
 u.jobs.forEach(j=>{
   div.innerHTML+=`<div class='job'><h3>${j.title}</h3><p>${j.desc}</p><p>$${j.budget}</p></div>`;
 });
}else div.innerHTML="<p>No jobs yet.</p>";
</script>
</body>
</html>
