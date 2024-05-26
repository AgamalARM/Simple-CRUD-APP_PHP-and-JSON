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
<div class="container">
<div class="card">
    <div class="card-header">
        <h3>View User:<?php echo $user['name'] ?></h3>
    </div>
    <table>
        <tr>
            <th>Name :</th>
            <td><?php echo $user['name'] ?> </td>
        </tr>
        <tr>
            <th>User Name :</th>
            <td><?php echo $user['username'] ?></td>
        </tr>
        <tr>
            <th>Email :</th>
            <td> <?php echo $user['email'] ?></td>
        </tr>
        <tr>
            <th>Phone :</th>
            <td><?php echo $user['phone'] ?></td>
        </tr>
        <tr>
            <th>Website :</th>
            <td>
              <a inline='true' href="http://<?php echo $user['website']?>" target="_blank">
                <?php echo $user['website']?>
              </a>
            </td>
        </tr>
    </table>
    

</div>
</div>




<?php  include 'partials/footer.php' ?>

