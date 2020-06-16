<?php 
    session_start();
    include "general/includes/sql/connector.php";
    
    if(isset($_SESSION['userId'])){
        header("location: home/");;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $hdpassword = sha1($password);

        $conn->query("SET NAMES 'utf8'");
        $conn->query('SET CHARACTER SET utf8');
        $sql = $conn->prepare("SELECT userId, userName, fullName, groupId FROM users WHERE userName = ? AND password = ?");
        $sql->execute([$userName, $password]);
        $user = $sql->fetch();
        
        if($sql->rowCount() > 0){
            $_SESSION['userId']   = $user["userId"];
            $_SESSION['userName'] = $user["userName"];
            $_SESSION["fullName"] = $user["fullName"];
            $_SESSION["groupId"]  = $user["groupId"];

            $users = ["admin", "students", "employees", "exams"];
            echo $users[$_SESSION["groupId"]] . "/";
            
            header("location: home/");
        }
    }
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset='uft8'>
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <h2>مرحبا بك في برنامج الإدارة المدرسية</h2>
    <form class="login-form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            <input class="userName" type="text" name="userName" id="userName" placeholder="اسم المستخدم" autocomplete="off">
            <input class="password" type="password" name="password" id="password" placeholder="كلمة المرور" autocomplete="new-password">
            <input class="submit" type="submit" value="تسجيل الدخول">
    </form>

    <script src="js/index.js"></script>
</body>

</html>