<div class="content">
    <div class="data">
        <form>
            <table class="users-data">
                <thead>
                    <tr>
                        <th>مسلسل</th>
                        <th>اسم المستخدم</th>
                        <th>الاسم بالكامل</th>
                        <th>كلمة السر</th>
                        <th>المجموعة</th>
                        <th>خيارات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = $conn->prepare(
                        "SELECT userId, userName, fullName, password, groupId 
                           FROM users"
                    );
                    $sql->execute();
                    while ($row = $sql->fetchObject()) {
                        echo "<tr>";
                            echo "<td>$row->userId</td>";
                            echo "<td>$row->userName</td>";
                            echo "<td>$row->fullName</td>";
                            echo "<td>$row->password</td>";
                            echo "<td>$row->groupId</td>";
                            echo "<td><a href='#' class='edit-user'>تعديل</a> <a href='#' class='delete-user'>حذف</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
        <a href='#' class="add-btn"><i class="fa fa-plus"></i>مستخدم جديد</a>
    </div>
</div>