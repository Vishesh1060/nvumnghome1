<?php

if(isset($_POST['name']) or isset($_POST['password'])){
        echo '<p>Entered: <strong>'.$_POST['name'].'</strong></p>';
        echo '<p>Entered: <strong>'.$_POST['password'].'</strong></p>';        
     }
?>