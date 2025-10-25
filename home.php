<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home | Upwork Clone</title>
<style>
body{font-family:'Segoe UI';margin:0;background:#fff;}
header{background:#14A800;color:white;padding:15px 40px;display:flex;justify-content:space-between;}
nav a{color:white;margin:0 12px;text-decoration:none;font-weight:500;}
.jobs{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;padding:30px;}
.job{border:1px solid #eee;padding:20px;border-radius:8px;box-shadow:0 0 5px rgba(0,0,0,0.05);}
.job h3{color:#14A800;margin-top:0;}
button{background:#14A800;color:white;border:none;padding:8px 20px;border-radius:6px;cursor:pointer;}
button:hover{background:#128f00;}
</style>
</head>
<body>
<header>
  <div><strong>Upwork Clone</strong></div>
  <nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<section class="jobs" id="jobs"></section>

<script>
const jobList=[
 {title:"Web Developer Needed",desc:"Build responsive website",budget:500},
 {title:"Logo Designer",desc:"Create brand logo",budget:100},
 {title:"Content Writer",desc:"Write blog posts",budget:200}
];
const container=document.getElementById('jobs');
jobList.forEach((j,i)=>{
 container.innerHTML+=`
 <div class='job'>
 <h3>${j.title}</h3>
 <p>${j.desc}</p>
 <p><strong>Budget:</strong> $${j.budget}</p>
 <button onclick='apply(${i})'>Apply</button>
 </div>`;
});
function apply(i){
 let u=JSON.parse(localStorage.getItem('user'));
 if(!u){alert('Please login first');return;}
 if(!u.jobs)u.jobs=[];
 u.jobs.push(jobList[i]);
 u.earnings=(u.earnings||0)+jobList[i].budget;
 localStorage.setItem('user',JSON.stringify(u));
 alert('Applied successfully!');
}
</script>
</body>
</html>
