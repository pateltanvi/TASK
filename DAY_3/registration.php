<html>
<head>
<title>  User Registration </title>
</head>
<body>

<div>
  <?php 
   if(isset($_POST['create'])){
     echo 'User submitted';
	 }
	 ?>
	 </div>
<div> 
  <form action="regis.php" method="post">
  <div class="container">
    <h1>Registration</h1>
	
	<br><label for="firstname"><b>First Name</b></label>
    <input type="text" name="firstname" required>

<br><label for="lastname"><b>Last Name</b></label>
    <input type="text" name="Lastname" required>

<br><label for="email"><b>Email Address</b></label>
    <input type="email" name="email" required>

<br><label for="phone number"><b>Phone Number</b></label>
    <input type="text" name="number" required>

<br><label for="password"><b>password</b></label>
    <input type="password" name="password" required>

<br><input type="submit" name="create" value="submit">

</div>
</form>
</div>
</body>
</html>	