<?php

include 'connect.php';


if (isset($_GET['usern'])){
    $username = $_GET['usern'];

    $sql = "SELECT fname, lname, username,email, datetime FROM createaccount WHERE username = '$username'";

    $result = mysqli_query($con, $sql);
    

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['datetime'] ?></td>
            </tr>
  <?php  
    }
}
else{
    echo"<h5 class='text-danger'>No Data Found</h5>";
}
}
?>