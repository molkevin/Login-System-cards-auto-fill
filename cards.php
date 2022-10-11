<?php require_once 'header.php'; 
$server='Localhost';
$server_username='root';
$server_password='';
$database='php_gyakorlas';

$connect = mysqli_connect($server, $server_username, $server_password, $database);

$sql_query = 'Select * from movies';
$result = mysqli_query($connect, $sql_query); ?>

<div class="container " style="margin-top: 10px">

    <div class="row">

        <?php
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-3">
                <div class="card" style="padding: 5% ";>
                   <img  src="uploadss/images/' . $row['image'] . '" class="card-img-top" alt=' . $row['title'] . ' style=width="400px" height="325px">
    
                    <h5 class="card-title">' . $row['title'] . '</h5>
                    <p class="card-text">' . $row['description'] . '</p>
                    <a href="snowwhite.php" class="btn btn-primary" >Mutass Többet</a>
                </div>
            </div>';
        }

        ?>

    </div>

</div>


<?php require_once 'footer.php'; ?>
?>