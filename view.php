<?php
require_once './assets/users/users.php';
include_once './assets/partials/header.php';

$userId = $_POST['id'] ?? '';
if(!$userId) {
    include_once './assets/partials/not_found.php';
    exit;
}

$user = getUserById($userId);

?>


<div style="height: 100%" class="container d-flex align-items-center justify-content-center">
    <div class="card">
        <div class="card-header">
            <h3>View: <?php echo $user['name'] ?></h3>
        </div>
        <div class="card-body">
            <form style="display: inline-block" action="#" method="post">
                <button class="btn btn-secondary">Update</button>
            </form>
            <form style="display: inline-block" action="#" method="post">
                <button class="btn btn-danger">Delete</button>
            </form>
            <a href="index.php" class="btn btn-success">Back to list</a>

            <table class="table table-bordered mt-3">
                <tr>
                    <th>Name: </th>
                    <td><?php echo $user['name'] ?></td>
                </tr>

                <tr>
                    <th>Username: </th>
                    <td><?php echo $user['username'] ?></td>
                </tr>

                <tr>
                    <th>Email: </th>
                    <td><?php echo $user['email'] ?></td>
                </tr>

                <tr>
                    <th>Phone: </th>
                    <td><?php echo $user['phone'] ?></td>
                </tr>

                <tr>
                    <th>Website: </th>
                    <td><?php echo $user['website'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include_once './assets/partials/footer.php' ?>