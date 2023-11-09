<?php require_once './includes/header.php'?>


<div class="container">
 <h2 class="pt-4">User Update</h2>


 <?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("Location: index.php");
} else {
    $user_id = $_POST['val'];
    $sql = 'SELECT * FROM users WHERE user_id = ?';
    $stmt = mysqli_stmt_init($link);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("Query failed");
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
}
?>


 <form class="py-2">
  <div class="form-group">
   <label for="username">Username</label>
   <input type="text" class="form-control" id="username" placeholder="Desired username">
  </div>
  <div class="form-group">
   <label for="email">Email address</label>
   <input type="email" class="form-control" id="email" placeholder="Desired email address">
  </div>
  <div class="form-group">
   <label for="password">Password</label>
   <input type="password" class="form-control" id="password" placeholder="Enter new password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>


<?php require_once './includes/footer.php'?>