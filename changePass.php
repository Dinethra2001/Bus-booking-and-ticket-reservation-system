<?php
require 'connection.php';

$userID = $_GET["id"];

if (isset($_POST['submit'])) {
    $Cpassword = $_POST['cpass'];
    $Npassword = $_POST['newpass'];

    $sql = "SELECT * FROM registration WHERE id = '$userID'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];

        if ($password == $Cpassword) {
            $updatesql = "UPDATE registration SET password = '$Npassword' WHERE id = '$userID'";
            $updateresult = mysqli_query($conn, $updatesql);

            if ($updateresult) {
                echo "<script>alert('Password updated successfully!');</script>";
                echo "<script>window.location.href = 'profile.php';</script>";
            } else {
                echo "<script>alert('Failed to update password. Please try again.');</script>";
                echo "<script>window.location.href = 'forgot.php?id=$userID';</script>";
            }
        } else {
            echo "<script>alert('Incorrect current password. Please try again.');</script>";
            echo "<script>window.location.href = 'forgot.php?id=$userID';</script>";
        }
    } else {
        echo "<script>alert('User not found.');</script>";
        echo "<script>window.location.href = 'forgot.php?id=$userID';</script>";
    }
}
?>
