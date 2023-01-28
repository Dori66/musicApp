<?php 

require_once "../test/config.php";


session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../test/login.php");
    exit;
}






$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

$sql1 = "SELECT * FROM messages";
$result1 = $mysqli->query($sql1);


if (!empty($_GET['id'])) {
  $id = $_GET['id'];

}
if (isset($_GET['id'])){
  $delete = mysqli_query($mysqli,"DELETE FROM users WHERE `id`='$id'");

  if($delete){
    header("Location: dashboard.php");
  }else{
    echo "Error Deleting";
  }
}


if (!empty($_GET['messageId'])) {
  $messageId = $_GET['messageId'];

}
if (isset($_GET['messageId'])){
  $delete = mysqli_query($mysqli,"DELETE FROM messages WHERE `messageId`='$messageId'");

  if($delete){
    header("Location: dashboard.php");
  }else{
    echo "Error Deleting";
  }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
  </head>
  <body>
    <header>
      <h1>Admin Dashboard</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#users">Users</a></li>
        <li><a href="../test/reset-password.php" class="btn btn-warning">Reset Your Password</a></li>
        <li><a href="../test/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></li>
      </ul>
    </nav>
    <main>
      <section id="users">
        <h2>Users</h2>
        
        <table>
          <th>Id</th>
          <th>Name</th>
          <th>Action</th>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>";
                echo "<a href='dashboard.php?id=".$row["id"]."'>Delete</a>";  
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found in the database.</td></tr>";
        }
        ?>
        </table>
       <h3></h3>
      </section>
      <section id="settings">
        <h2>Messages</h2>
        <p>The requests or problems, from Users</p>
        <table>
          <th>Name</th>
          <th>Message</th>
          <th>Action</th>

        <?php
        if ($result1->num_rows > 0) {
            while($row1 = $result1->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row1["name"] . "</td>";
                echo "<td>" . $row1["ms"] . "</td>";
                echo "<td>";
                echo "<a href='dashboard.php?messageId=".$row1["messageId"]."'>Delete</a>";  
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No Messages found in Database.</td></tr>";
        }
        ?>
        </table>
      </section>
    </main>
  </body>
</html>
