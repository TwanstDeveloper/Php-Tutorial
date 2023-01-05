<?php
include 'nav.php';
?>
<?php
$error=['result'=>''];
if(isset($_POST['btn'])){

   $us=htmlspecialchars($_POST['u']);
   $pass=htmlspecialchars($_POST['p']);
   if(empty($us) || empty($pass)){
    $error['result']="Tkaia xanakan Prbkawa";
   }
 elseif (!filter_var($us, FILTER_VALIDATE_EMAIL)) {
    $error['result'] = "Invalid email format";
}
else{
    echo "success";
}

}

?>
<form action="inddex.php" method="post">
    <p class="alert alert-white text-danger"><?php $error=['result'];?></p>
        <input type="email" placeholder="userame" name="u" ><br>
        <input type="pass" placeholder="Password" name="p"><BR>
        <button name="btn">Login</button>
    </form>