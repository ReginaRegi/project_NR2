<?php 
if(isset($_POST['submit'])) {
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

if(!empty($email) && !empty($subject) && !empty($message)) {
     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $from = '$email';
         $to = "jodko.regina@gmail.com";
         $subjectName = "Nauja zinute";
         $zinute = htmlspecialchars($message);
         mail($to, $subjectName, $zinute, $from);
         echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
     }
    }
include('db.php');
}
?>
