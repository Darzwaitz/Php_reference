<?php
echo 'Processing....';

//check for POST variable
if(isset($_POST['name'])) {
    echo 'POST: Your name iz '.$_POST['name'];
}

//check for GET variable
if(isset($_GET['name'])) {
    echo 'GET: Your name iz '.$_GET['name'];
}

