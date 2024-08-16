<!DOCTYPE html>
<html lang="en">

<head>
   <title>Discuss Project</title>
   <?php include('./client/commonFiles.php') ?>
</head>

<body>
   <?php
   session_start();
   include('./client/header.php');

   if (isset($_GET['signup']) && !$_SESSION['user']['username']) {
      include('./client/signup.php');

   } else if (isset($_GET['login']) && !$_SESSION['user']['username']) {
      include('./client/login.php');
   } else  if($_GET['ask']){
      include('./client/ask.php');

   } else  if($_GET['q-id']){
      $qid=$_GET['q-id'];
      include('./client/question-details.php');
   }else{
      include('./client/questions.php');
   }
   ?>
</body>

</html>