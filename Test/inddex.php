<?php
include 'nav.php';
?>
<?php
$errors=['email'=>'','password'=>''];
if(isset($_POST['btn'])){

   $email=htmlspecialchars($_POST['email']);
   $password=htmlspecialchars($_POST['password']);
  if(empty($email)){
    $errors['email']="xanaka batalla";
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email']= "Invalid email format";
  }
  if(empty($password)){
    $errors['password']="xanaka batalla";
  }elseif($password>=8){
$errors['password']="paswwordakat la waza";
  }
  if(!array_filter($errors)){
    header("location:about.php");
  }

}

?>
<form action="inddex.php" method="post">
        <input type="email" placeholder="userame" name="email" ><br>
        <p class="alert alert-white text-danger"><?php $errors=['email']; ?></p>
        <input type="pass" placeholder="Password" name="password"><BR>
        <p class="alert alert-white text-danger"><?php $errors=['password'];?></p>
        <button name="btn">Login</button>
    </form>