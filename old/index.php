
<?php
        function initialize($test=false){
            session_start();
            $boostrapcss="<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>";
            $style="<link rel='stylesheet' href='style.css'>";
            echo $boostrapcss;
            echo $style;
            if ($test==true){
               echo "<p>Initialize was loaded</p>";
            }
        }
        function terminate($test=false){
            echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'></script>";
        }

?>

<?php
    initialize();
    require_once('tutorial.php');
    require_once('post.php');
?>

<div id="form">
    <div class="row my-5">
        <div class="col">
            <h1>LOGIN</h1>
            <h1>PHP</h1>
        </div>
        <div class="col">
            <form method="POST" action="/post.php">
                <p class="form-label">Username</p>
                <input type="text" class="form-control" name="name"/>
                <p class="form-label">Password</p>
                <input type="password" class="form-control" name="password"/>
                <br>
                <input type="submit"/>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php
    terminate();
    session_unset();
?>