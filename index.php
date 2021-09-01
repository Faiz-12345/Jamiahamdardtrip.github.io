<php?
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed ".
        mysqli_connect_error());

    }
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `faiz trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('testname', 'this is good', '23', 'male', 'faizakhtar376@', '9999999999', 'this is book', '2021-09-01 14:59:25.000000');";

?>