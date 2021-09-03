<?php
    require_once './assets/users/users.php';

    $users = getUsers();
?>

<?php include_once './assets/partials/header.php' ?>
<div style="height: 100%"
class="container-fluid mt-5 px-5">
    <h3 class="title">
        CRUD
    </h3>
    <a href="create.php" class="btn btn-success">Create new user</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Image</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <th class="serial">1</th>
                    <td>
                        <?php if(isset($user['extension'])):  ?>
                            <img style="width: 50px; height: 50px" src="<?php echo"./assets/images/{$user['id']}.{$user['extension']}"; ?>" alt="">
                        <?php else: ?>
                            <img style="width: 50px; height: 50px" src="./assets/images/default_avatar.jpg" alt="">
                        <?php endif ?>    
                    </td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td>
                        <a target="_blank" href="https://<?php echo $user['website'] ?>">
                            <?php echo $user['website'] ?>
                        </a>
                    </td>
                    <td>
                        <form style="display: inline-block" action="view.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button class="btn btn-primary">View</button>
                        </form>
                        <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
                        <!-- <form style="display: inline-block" action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button class="btn btn-secondary">Update</button>
                        </form> -->
                        <form style="display: inline-block" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</div>
<?php include_once './assets/partials/footer.php' ?>

   
