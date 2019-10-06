<?php 
$usr = $_POST['username'];
$pass = $_POST['password'];
if ($usr == "admin" and $pass =="admin") {
    header('Location: editor.html');
} else {
    echo "<div class='alert alert-danger' role='alert'>Credentials wrong! <a href='edit.html'>Try again</a></div>";
};
?>