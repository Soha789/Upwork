<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upwork Clone</title>
<style>
body {
  margin:0; font-family:'Segoe UI',sans-serif; background:#fff; color:#222;
}
header {
  background:#14A800; color:white; padding:15px 40px;
  display:flex; justify-content:space-between; align-items:center;
}
header h1 { font-size:24px; margin:0; }
header nav a {
  color:white; margin:0 12px; text-decoration:none; font-weight:500;
}
.hero {
  text-align:center; padding:100px 20px; background:#f9f9f9;
}
.hero h2 { font-size:36px; color:#14A800; }
.hero p { font-size:18px; margin:20px auto; max-width:600px; }
button {
  background:#14A800; color:white; border:none; padding:12px 28px;
  font-size:16px; border-radius:6px; cursor:pointer;
}
button:hover { background:#128f00; }
footer {
  text-align:center; padding:30px; font-size:14px; color:#666;
}
</style>
</head>
<body>
<header>
  <h1>Upwork Clone</h1>
  <nav>
    <a href="#" onclick="goLogin()">Login</a>
    <a href="#" onclick="goSignup()">Sign Up</a>
  </nav>
</header>

<section class="hero">
  <h2>Hire the best freelancers for your projects</h2>
  <p>Connect with talented professionals and bring your ideas to life. Build, grow, and succeed together — just like on Upwork.</p>
  <button onclick="goSignup()">Get Started</button>
</section>

<footer>© 2025 Upwork Clone. All rights reserved.</footer>

<script>
function goSignup(){ window.location.href='signup.php'; }
function goLogin(){ window.location.href='login.php'; }
</script>
</body>
</html>
