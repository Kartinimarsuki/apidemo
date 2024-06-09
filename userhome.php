<?php

session_start();

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demografi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $uname;
        $_SESSION['pwd'] = $pwd;
    } else {
        echo "login gagal";die;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Generate API Key</title>
</head>

<body>

    HAI
    <?php echo $_SESSION['uname']; ?> !!!

    <!-- <form action="user_generate_key.php" method="post">
        <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>" id="">
        <input type="hidden" name="pwd" value="<?php echo $_SESSION['uname']; ?>" id="">

        <input type="submit" name="submit" value="Generate API Key">

    </form> -->

    <a href="user_generate_key.php?uname=<?php echo $_SESSION['uname']; ?>&pwd=<?php echo $_SESSION['pwd']; ?>">
        Generate API Key
    </a>

</body>

</html>