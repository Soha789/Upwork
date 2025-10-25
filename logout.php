<?php ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Logout</title></head>
<body>
<script>
localStorage.removeItem('loggedIn');
window.location.href='index.php';
</script>
</body>
</html>
