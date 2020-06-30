<?php
if (
    isset($_SESSION['groupId']) &&
    ($_SESSION["groupId"] == 0 || $_SESSION["groupId"] == 3)
) {
?>


    <div class="content">

        <!-- The Header of the page -->
        <div class="page-header">
            <div class="page-data">
                <span class="grade-name">الكنترول</span>
                <!-- <span class="sebrator">|</span> -->
                <!-- <span class="page-name">تقويمات التيرم الاول</span> -->
            </div>

            <div class="menu-bar">

                <div class="menu">
                    <span class="menu-title">الصف</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <a href="?page=exams&grade=1" class="menu-btn">الأول</a>
                            <a href="?page=exams&grade=2" class="menu-btn">الثاني</a>
                        </div>
                    </div>
                </div>

                <?php
                function createAnchorLink($current, $params)
                {
                    if ($current == "" || (count($params) == 0)) return "";
                    else {
                        foreach ($params as $key => $value) {
                            $current .= "&" . $key . "=" . $value;
                        }
                        return $current;
                    }
                }
                $url_grade = "";
                if (isset($_GET["grade"])) {
                    $url_grade = "?page=exams&grade=" . $_GET["grade"];
                }
                ?>

                <div class="menu">
                    <span class="menu-title">رصد الدور الأول</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <div class="sub-menu">
                                <span class="sub-menu-title">التيرم الأول</span>
                                <div class="sub-menu-content">
                                    <div class="wrapper">
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "first-semester", "view" => "evaluation"]) ?>" class="menu-btn">التقويمات</a>
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "first-semester", "view" => "practical"]) ?>" class="menu-btn">العملي</a>
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "first-semester", "view" => "written"]) ?>" class="menu-btn">التحريري</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-menu">
                                <span class="sub-menu-title">التيرم الثاني</span>
                                <div class="sub-menu-content">
                                    <div class="wrapper">
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "second-semester", "view" => "evaluation"]) ?>" class="menu-btn">التقويمات</a>
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "second-semester", "view" => "practical"]) ?>" class="menu-btn">العملي</a>
                                        <a href="<?php echo createAnchorLink($url_grade, ["section" => "monitoring", "target" => "second-semester", "view" => "written"]) ?>" class="menu-btn">التحريري</a>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="menu-btn">تقارير الرصد</a>
                        </div>
                    </div>
                </div>

                <div class="menu">
                    <span class="menu-title">الشهادات</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <a href="" class="menu-btn">نصف العام</a>
                            <a href="" class="menu-btn">آخر العام</a>
                        </div>
                    </div>
                </div>

                <div class="menu">
                    <span class="menu-title">الشيتات</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <a href="<?php echo createAnchorLink($url_grade, ["section" => "sheets", "target" => "first-semester"]) ?>" class="menu-btn" class="menu-btn">نصف العام</a>
                            <a href="<?php echo createAnchorLink($url_grade, ["section" => "sheets", "target" => "second-semester"]) ?>" class="menu-btn">آخر العام</a>
                            <a href="" class="menu-btn">ناجح</a>
                            <a href="" class="menu-btn">له دور ثان</a>
                        </div>
                    </div>
                </div>

                <div class="menu">
                    <span class="menu-title">كشوف</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <div class="sub-menu">
                                <span class="sub-menu-title">العشرة الأوائل</span>
                                <div class="sub-menu-content">
                                    <div class="wrapper">
                                        <a href="" class="menu-btn">التيرم الأول</a>
                                        <a href="" class="menu-btn">آخر العام</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-menu">
                                <span class="sub-menu-title">نتيجة إجمالية</span>
                                <div class="sub-menu-content">
                                    <div class="wrapper">
                                        <a href="" class="menu-btn">التيرم الأول</a>
                                        <a href="" class="menu-btn">آخر العام</a>
                                        <a href="" class="menu-btn">بعد الدور الثاني</a>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="menu-btn">ناجحون دور أول و ثان</a>
                            <a href="" class="menu-btn">راسب و باق للإعادة</a>
                            <a href="" class="menu-btn">محول مهني</a>
                        </div>
                    </div>
                </div>

                <div class="menu">
                    <span class="menu-title">إحصاءات</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <a href="" class="menu-btn">التيرم الأول</a>
                            <a href="" class="menu-btn">آخر العام</a>
                            <a href="" class="menu-btn">بعد الدور الثاني</a>
                        </div>
                    </div>
                </div>

                <div class="menu">
                    <span class="menu-title last">الدور الثاني</span>
                    <div class="menu-content">
                        <div class="wrapper">
                            <a href="" class="menu-btn">كشوف المناداة</a>
                            <a href="" class="menu-btn">دليل الدور الثاني</a>
                            <a href="" class="menu-btn">توقيع الدور الثاني</a>
                        </div>
                    </div>
                </div>

                <div class="menu" id="options">
                    <span class="show-hide-colors menu-title">إخفاء الألوان</span>
                </div>
            </div>
        </div>


        <!-- end of page header -->

        <!-- This Sectino will contain the data that will be in the bage -->
        <div class="data">
            <?php
            if (isset($_GET["grade"]) && ($_GET["grade"] > 0 && $_GET["grade"] < 3)) {
                $grade = $_GET["grade"];
                $grade_name = $grade == 1 ? "الصف الأول" : "الصف الثاني";

                // Targeting the section
                if (isset($_GET["section"])) {
                    switch ($_GET["section"]) {
                        case ("monitoring"):
                            if (isset($_GET["target"])) {
                                switch ($_GET["target"]) {
                                    case ("first-semester"):
                                        if (isset($_GET["view"])) {
                                            switch ($_GET["view"]) {
                                                case ("evaluation"):
                                                    $section_name = "تقويمات التيرم الأول";
                                                    include "../exams/includes/templates/data-tables/monitoring/evaluation.php";
                                                    break;
                                                case ("practical"):
                                                    $section_name = "عملي التيرم الأول";
                                                    include "../exams/includes/templates/data-tables/monitoring/practical.php";
                                                    break;
                                                case ("written"):
                                                    $section_name = "تحريري التيرم الأول";
                                                    include "../exams/includes/templates/data-tables/monitoring/written.php";
                                                    break;
                                            }
                                        }
                                        break;
                                    case ("second-semester"):
                                        if (isset($_GET["view"])) {
                                            switch ($_GET["view"]) {
                                                case ("evaluation"):
                                                    $section_name = "تقويمات التيرم الثاني";
                                                    include "../exams/includes/templates/data-tables/monitoring/evaluation.php";
                                                    break;
                                                case ("practical"):
                                                    $section_name = "عملي التيرم الثاني";
                                                    include "../exams/includes/templates/data-tables/monitoring/practical.php";
                                                    break;
                                                case ("written"):
                                                    $section_name = "تحريري التيرم الثاني";
                                                    include "../exams/includes/templates/data-tables/monitoring/written.php";
                                                    break;
                                            }
                                        }
                                        break;
                                    case ("montiring-reports"):
                                        if (isset($_GET["view"])) {
                                            switch ($_GET["view"]) {
                                                case ("evaluation"):
                                                    break;
                                                case ("pratical"):
                                                    break;
                                                case ("written"):
                                                    break;
                                                case ("all"):
                                                    break;
                                            }
                                        }
                                        break;
                                }
                            }
                            break;

                        case ("certificates"):
                            if (isset($_GET["semester"])) {
                                switch ($_GET["semester"]) {

                                    case ("first-semester"):
                                        break;

                                    case ("second-semester"):
                                        break;
                                }
                            }
                            break;

                        case ("sheets"):
                            if (isset($_GET["target"])) {
                                switch ($_GET["target"]) {

                                    case ("first-semester"):
                                        $sheet_name = "شيت الفصل الدراسي الأول";
                                        include "../exams/includes/templates/data-tables/sheets/first-semester.php";
                                        break;

                                    case ("second-semester"):
                                        $sheet_name = "الشيت الرئيسي";
                                        include "../exams/includes/templates/data-tables/sheets/main-sheet.php";
                                        break;

                                    case ("successful"):
                                        break;

                                    case ("failuer"):
                                        break;
                                }
                            }
                            break;

                        case ("statistics"):
                            if (isset($_GET["target"])) {
                                switch ($_GET["target"]) {

                                    case ("first-semester"):
                                        break;

                                    case ("second-semester"):
                                        break;

                                    case ("post-second-round"):
                                        break;
                                }
                            }
                            break;

                        case ("statements"):

                            if (isset($_GET["target"])) {
                                switch ($_GET["target"]) {

                                    case ("top-ten"):
                                        if (isset($_GET["semester"])) {
                                            switch ($_GET["semester"]) {

                                                case ("first-semester"):
                                                    break;

                                                case ("second-semester"):
                                                    break;
                                            }
                                        }
                                        break;

                                    case ("overall-results"):
                                        if (isset($_GET["semester"])) {
                                            switch ($_GET["semester"]) {

                                                case ("first-semester"):
                                                    break;

                                                case ("second-semester"):
                                                    break;
                                            }
                                        }
                                        break;

                                    case ("successful"):
                                        break;

                                    case ("failuer"):
                                        break;

                                    case ("vocational"):
                                        break;
                                }
                            }
                            break;

                        case ("second-round"):
                            break;
                    }
                }
            }
            ?>
        </div>
    </div>
<?php
}
