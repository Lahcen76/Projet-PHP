<?php
if (session_status() == PHP_SESSION_NONE) session_start();
$cptChoiceSubject = 0;
setcookie('myMessageSend', "Vos nouveaux paramètres ont bien été envoyés.");
if (isset($_POST['myChoiceParams'])) {
} elseif (!empty($_POST['submitButton'])) {
   if (isset($_POST['choiceDesign'])) {
      setcookie('myChoiceDesign', $_POST['choiceDesign']);
   }
   if (isset($_POST['choiceNumberPerPage'])) {
      setcookie('myChoiceNumberPerPage', $_POST['choiceNumberPerPage']);
   }
   if (isset($_POST['subject1'])) {
      setcookie('mySubject1', $_POST['subject1']);
   }
   if (isset($_POST['subject2'])) {
      setcookie('mySubject2', $_POST['subject2']);
   }
   if (isset($_POST['subject3'])) {
      setcookie('mySubject3', $_POST['subject3']);
   }
   if (isset($_POST['subject4'])) {
      setcookie('mySubject4', $_POST['subject4']);
   }
   if (isset($_POST['subject5'])) {
      setcookie('mySubject5', $_POST['subject5']);
   }
   header("Location: ../views/modal.php");
       } 
?>