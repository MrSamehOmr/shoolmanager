<?php


if (isset($_SESSION['userId'])) {
    if ($_SESSION['groupId'] == 0 || $_SESSION['groupId'] == 1) {
?>

        <div class="content">
            <div class="page-header"></div>
            <div class="sidbar">
                <div class="slide-menu">
                    <span class="btn deopdown-btn">الصف</span>
                    <ul class="select-grade slide-menu-content">
                        <li><a class="btn" href="?page=students&action=view&grade=1">الصف الأول</a></li>
                        <li><a class="btn" href="?page=students&action=view&grade=2">الصف الثاني</a></li>
                        <li><a class="btn" href="?page=students&action=view&grade=3">الصف الثالث</a></li>
                        <li><a class="btn" href="?page=students&action=view&grade=all">كل الطلبة</a></li>
                    </ul>
                </div>

                <div class="slide-menu">
                    <span class="btn deopdown-btn">الفصل</span>

                    <ul class="select-class slide-menu-content">
                        <?php
                        if (isset($_GET['grade']) && ($_GET['grade'] > 0 || $_GET['grade'] <= 3)) {
                            $grade = $_GET['grade'];
                            $classStmnt = "SELECT count(distinct classNumber) as classesCount FROM students_data WHERE grade = ?";
                            $classStmnt = $conn->prepare($classStmnt);
                            $classStmnt->execute([$_GET['grade']]);
                            $count = $classStmnt->fetch()['classesCount'];

                            for ($i = 0; $i < $count; $i++) {
                                $classNumber = $i + 1;
                                echo "<li>";
                                echo "<a class=\"btn\" href='?page=students&action=view&grade=$grade&classNumber=$classNumber'>";
                                echo $classNumber;
                                echo "</a>";
                                echo "</li>";
                            }
                            if ($count != 0) {
                                echo "<li><a class='btn' href='?page=students&action=view&grade=$grade'>كل الصف</a></li>";
                            }
                        }
                        ?>
                    </ul>

                </div>
                <a href="?page=students&action=new-student" class="btn" style="border-top: 5px solid #FFF;"><i class="fa fa-plus" style="margin-left: 5px;"></i>طالب جديد</a>
                <div class="more-options">
                    <span class="btn show-hide">خيارات اخرى</span>
                    <form action="" class="hidden" method="GET">
                        <input type="hidden" name="page" value="students">
                        <input type="hidden" name="action" value="view">
                        <input type="hidden" name="grade" value="<?php echo $grade ?>">
                        <?php
                        if (isset($_GET["classNumber"])) {
                            echo "<input type='hidden' name='classNumber' value=" . $_GET["classNumber"] . ">";
                        }

                        ?>

                        <fieldset>
                            <span class="field-title">اختيار حالة القيد</span>
                            <label for="noob" class="radio-container">مستجد
                                <input type="radio" name="enrollment" value="1" id="noob">
                                <span class="radio-check"></span>
                            </label>

                            <label for="stayer" class="radio-container">معيد
                                <input type="radio" name="enrollment" value="2" id="stayer">
                                <span class="radio-check"></span>
                            </label>
                        </fieldset>

                        <fieldset>
                            <span class="field-title">اختيار الديانة</span>
                            <label for="muslim" class="radio-container">مسلم
                                <input type="radio" name="religion" value="1" id="muslim">
                                <span class="radio-check"></span>
                            </label>

                            <label for="christian" class="radio-container">مسيحي
                                <input type="radio" name="religion" value="2" id="christian">
                                <span class="radio-check"></span>
                            </label>
                        </fieldset>

                        <fieldset>
                            <span class="field-title">اختيار النوع</span>
                            <label for="male" class="radio-container">بنون
                                <input type="radio" name="sex" value="1" id="male">
                                <span class="radio-check"></span>
                            </label>

                            <label for="female" class="radio-container">بنات
                                <input type="radio" name="sex" value="2" id="female">
                                <span class="radio-check"></span>
                            </label>
                        </fieldset>


                        <input type="submit" value="عرض" class="">
                    </form>
                </div>
            </div>

            <!-- Add New Student -->
            <?php
            if (isset($_GET['action']) && $_GET['action'] == "new-student") {

            ?>
                <div class="new-student-container">
                    <h3 class="form-title">إضافة طالب جديد</h3>
                    <span id="calc-date-on">تاريخ حساب السن<span>2019/10/1</span></span>
                    <form class="add-student-form" action="" method="POST">
                        <fieldset>
                            <div>
                                <label for="student-name">اسم الطالب</label>
                                <input type="text" name="studentName" id="student-name">
                            </div>

                            <div>
                                <label for="student-code">كود الطالب</label>
                                <input type="text" name="studentCode" id="student-code">
                            </div>

                            <div>
                                <label for="national-id">الرقم القومي</label>
                                <input type="text" name="nationalId" id="national-id">
                            </div>

                            <div class="religion-part">
                                <label for="religion">الديانة</label>
                                <select name="religion" id="religion">
                                    <option value="مسلم">مسلم</option>
                                    <option value="مسيحي">مسيحي</option>
                                </select>
                            </div>
                        </fieldset>

                        <fieldset class="from-national">

                            <div class="type-part">
                                <label for="sex">النوع</label>
                                <input type="text" name="sex" id="sex" readonly>
                            </div>

                            <div class="pirth-date-part">
                                <label for="pirth-date">تاريخ الميلاد</label>
                                <input type="text" name="pirthDate" id="pirth-date" readonly>
                            </div>


                            <div class="age-container">
                                <span class="age-title">سن الطالب في<span>2019/10/1</span></span>
                                <div class="age-data">
                                    <div class="age-item">
                                        <label for="pirth-day">يوم</label>
                                        <input type="text" name="day" id="pirth-day" readonly>
                                    </div>

                                    <div class="age-item">
                                        <label for="pirth-month">شهر</label>
                                        <input type="text" name="month" id="pirth-month" readonly>
                                    </div>

                                    <div class="age-item">
                                        <label for="pirth-year">سنة</label>
                                        <input type="text" name="year" id="pirth-year" readonly>
                                    </div>
                                </div>
                            </div>

                            <div id="from-national-message">
                                <p>
                                    هذه البيانات يتم استخراجها من الرقم القومي .<br> لذلك من أجل
                                    للتأكد من صحة إدخالك للرقم القومي الصحيح يرجى مراجعة بيانات هذا الجزء من شهادة الميلاد !!
                                </p>
                            </div>
                        </fieldset>

                        <fieldset id="schooler-data">
                            <div>
                                <label for="class-number">الفصل</label>
                                <input type="text" name="classNumber" id="class-number">
                            </div>
                            <div>
                                <label for="grade">الصف</label>
                                <select name="grade" id="grade">
                                    <option value="1">الأول</option>
                                    <option value="2">الثاني</option>
                                    <option value="3">الثالث</option>
                                </select>
                            </div>

                            <div>
                                <label for="enrollment-status">حالة القيد</label>
                                <select name="enrollemntStatus" id="enrollment-status">
                                    <option value="مستجد">مستجد</option>
                                    <option value="معيد">معيد</option>
                                </select>
                            </div>
                        </fieldset>

                        <div id="form-buttons">
                            <i class="fa fa-save"></i>
                            <input type="submit" value="حفظ بيانات الطالب">
                            <i class="fa fa-remove"></i>
                            <input type="reset" value="تفريغ البيانات">
                        </div>
                    </form>
                </div>
        </div>
    <?php
            } else if (isset($_GET['action']) && $_GET['action'] == 'view' && isset($_GET['grade'])) {
    ?>
        <div class="data">
            <div class="table-head">
                <table class="students-data data-header">
                    <thead>
                        <tr>
                            <th rowspan="2" dataName="studentId">مسلسل</th>
                            <th rowspan="2" dataName="studentName">اسم الطالب</th>
                            <th rowspan="2" dataName="classNumber">الفصل</th>
                            <th rowspan="2" dataName="enrollmentStatus">حالة القيد</th>
                            <th rowspan="2" dataName="religion">الديانة</th>
                            <th rowspan="2" dataName="sex">النوع</th>
                            <th rowspan="2" dataName="nationalId">الرقم القومي</th>
                            <th rowspan="2" dataName="pirthDate">تاريخ الميلاد</th>
                            <th colspan="3" dataName="">السن</th>
                            <th rowspan="2" dataName="grade">الصف</th>
                            <!-- <th rowspan="2" dataName="grade">الصف</th> -->
                        </tr>
                        <tr>
                            <th dataName="day">يوم</th>
                            <th dataName="month">شهر</th>
                            <th dataName="year">سنة</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-body">
                <table class="students-data">
                    <tbody>
                        <?php
                        $viewStudents = "SELECT studentId, studentName, classNumber, enrollmentStatus, religion, sex, nationalId, pirthDate, day, month, year
                        FROM students_data WHERE grade = ?";

                        $params = [$grade];
                        if (isset($_GET["classNumber"])) {
                            $classNumber = $_GET["classNumber"];
                            $viewStudents .= " AND classNumber = ?";
                            $params[] = $classNumber;
                        }
                        $viewStudents .= ";";

                        $stmnt = $conn->prepare($viewStudents);
                        $stmnt->execute($params);

                        $data = $stmnt->fetchAll();
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td contenteditable='false' dataName='studentId'>";
                            echo $row["studentId"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='studentName'>";
                            echo $row["studentName"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='classNumber'>";
                            echo $row["classNumber"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='enrollmentStatus'>";
                            echo $row["enrollmentStatus"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='religion'>";
                            echo $row["religion"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='sex'>";
                            echo $row["sex"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='nationalId'>";
                            echo $row["nationalId"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='pirthDate'>";
                            echo $row["pirthDate"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='day'>";
                            echo $row["day"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='month'>";
                            echo $row["month"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='year'>";
                            echo $row["year"];
                            echo "</td>";

                            echo "<td contenteditable='true' dataName='grade'>";
                            echo $grade;
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <!-- add new student -->
<?php
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $studentName     = $_POST["studentName"] !== "" ? $_POST["studentName"] : null;
                $nationalId       = $_POST["nationalId"] !== "" ? $_POST["nationalId"] : null;
                $religion         = $_POST["religion"] !== "" ? $_POST["religion"] : null;
                $sex              = $_POST["sex"] !== "" ? $_POST["sex"] : null;
                $pirthDate        = $_POST["pirthDate"] !== "" ? $_POST["pirthDate"] : null;
                $day              = $_POST["day"] !== "" ? $_POST["day"] : null;
                $month            = $_POST["month"] !== "" ? $_POST["month"] : null;
                $year             = $_POST["year"] !== "" ? $_POST["year"] : null;
                $classNumber      = $_POST["classNumber"] !== "" ? $_POST["classNumber"] : null;
                $grade            = $_POST["grade"] !== "" ? $_POST["grade"] : null;
                $enrollemntStatus = $_POST["enrollemntStatus"] !== "" ? $_POST["enrollemntStatus"] : null;

                if (
                    $studentName &&
                    $nationalId &&
                    $religion &&
                    $sex &&
                    $pirthDate &&
                    $day &&
                    $month &&
                    $year &&
                    $classNumber &&
                    $grade &&
                    $enrollemntStatus
                ) {

                    try {
                        $sql = "INSERT INTO students_data VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                        $stmnt = $conn->prepare($sql);
                        $stmnt->execute([
                            null,
                            $studentName,
                            $enrollemntStatus,
                            $classNumber,
                            $religion,
                            $sex,
                            $nationalId,
                            $pirthDate,
                            $day,
                            $month,
                            $year,
                            $grade,
                            "---"
                        ]);
                        echo $stmnt->rowCount();
                    } catch (PDOException $ex) {
                        echo "no";
                    }

                    // var_dump($stmnt);
                }
            }
        }
    }
?>