<?php
if (!empty($_POST)) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } elseif (isset($_POST['submitButton'])) {
        setcookie('myChoiceDesign', $_POST['choiceDesign']);
        setcookie('myChoiceNumberPerPage', $_POST['choiceNumberPerPage']);
        setcookie('mySubject1', $_POST['subject1']);
        setcookie('mySubject2', $_POST['subject2']);
        setcookie('mySubject3', $_POST['subject3']);
        setcookie('mySubject4', $_POST['subject4']);
        setcookie('mySubject5', $_POST['subject5']);
    } else {
        setcookie('myChoiceDesign', '', time() - 3600);
        setcookie('myChoiceNumberPerPage', '', time() - 3600);
        setcookie('mySubject1', '', time() - 3600);
        setcookie('mySubject2', '', time() - 3600);
        setcookie('mySubject3', '', time() - 3600);
        setcookie('mySubject4', '', time() - 3600);
        setcookie('mySubject5',  '', time() - 3600);
    }
}
?>