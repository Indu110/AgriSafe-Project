<!-- loginpage.php -->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Agrisafe</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="profileModal" class="modal" style="display:block;">
  <div class="modal-content">
    <h2>Welcome to Agrisafe</h2>
    <div class="modal-tabs">
      <button class="tab-btn active" data-tab="login">Login</button>
      <button class="tab-btn" data-tab="signup">Sign Up</button>
    </div>

    <div class="tab-content active" id="login">
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
      </form>
    </div>

    <div class="tab-content" id="signup">
      <form action="signup.php" method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>

<script>
const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(function(btn){
  btn.addEventListener('click', function(){
    tabBtns.forEach(b => b.classList.remove('active'));
    tabContents.forEach(c => c.classList.remove('active'));

    btn.classList.add('active');
    document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
  });
});
</script>

</body>
</html>
