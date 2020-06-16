<title><?php echo getTitle();?></title>
</head>

<body>
    <nav class="admin-nav">
        <div class="user dropdown">
            <span class="dropdown-btn btn">
                <i class="fa fa-user"></i>
                <span class="user-name"><?php echo $_SESSION["fullName"] ?></span>
                <i class="fa fa-angle-down"></i>
            </span>
            <ul class="dropdown-content">
                <li>
                    <a href="../logout.php" class="btn">
                        <i class="fa fa-sign-out"></i>
                        تسجيل الخروج
                    </a>
                </li>
            </ul>
        </div>
        <ul class="admin-links">
            <li><a href="?page=users&action=view" class="btn">
                    <i class="fa fa-users"></i>
                    إدارة المستخدمين
                </a></li>
            <li><a href="?page=students&action=view" class="btn">
                    <i class="fa fa-child"></i>
                    شئون الطلبة
                </a></li>
            <li><a href="?page=employees&action=view" class="btn">
                    <i class="fa fa-user-secret"></i>
                    شئون العاملين
                </a></li>
            <li><a href="?page=exams" class="btn">
                    <i class="fa fa-graduation-cap"></i>
                    شئون الإمتحانات
                </a></li>
        </ul>
    </nav>
    <div class="nav-holder"></div>