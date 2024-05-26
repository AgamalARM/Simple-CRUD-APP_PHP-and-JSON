<?php
include 'partials/header.php' ;
require __DIR__.'/users.php';

if (!isset($_GET['id'])) {
    include 'partials/not_found.php';
    exit;
}

$userId = $_GET['id'];
$user = getUserById($userId);

if (!$user) {
    include 'partials/not_found.php';
    exit;
}



?>


Name : <?php echo $user['name'] ?> <br><hr>
User Name : <?php echo $user['username'] ?> <br><hr>
Email : <?php echo $user['email'] ?> <br><hr>


<?php  include 'partials/footer.php' ?>

