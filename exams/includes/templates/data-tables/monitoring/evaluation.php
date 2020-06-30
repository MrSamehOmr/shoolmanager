<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if ($_GET["target"] === "first-semester") {
        $semester = "first_semester";
    } elseif ($_GET["target"] === "second-semester") {
        $semester = "second_semester";
    }
    $semester .= "_evaluation";
?>
    <div class="section">
        <div class="section-header">
            <div class="section-header-name">
                <div>
                    <span class="class-name"><?php echo isset($grade_name) ? $grade_name : ""; ?></span>
                    <span><?php echo isset($section_name) ? "|" : ""; ?></span>
                    <span class="table-name"><?php echo isset($section_name) ? $section_name : ""; ?></span>
                </div>
            </div>
            <div class="section-header-data monitoring-summary">
                <table>
                    <thead>
                        <tr>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                            <th class="head-space-holder cell-size-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr rowname="monitoring">
                            <td>رصد</td>
                            <td colname="arabic"></td>
                            <td colname="english"></td>
                            <td colname="socialStudies"></td>
                            <td colname="math"></td>
                            <td colname="sciences"></td>
                            <td colname="activity_1"></td>
                            <td colname="activity_2"></td>
                            <td colname="religion"></td>
                            <td colname="computer"></td>
                            <td colname="draw"></td>
                            <td colname="sports"></td>
                        </tr>
                        <tr rowname="absence">
                            <td>غياب</td>
                            <td colname="arabic"></td>
                            <td colname="english"></td>
                            <td colname="socialStudies"></td>
                            <td colname="math"></td>
                            <td colname="sciences"></td>
                            <td colname="activity_1"></td>
                            <td colname="activity_2"></td>
                            <td colname="religion"></td>
                            <td colname="computer"></td>
                            <td colname="draw"></td>
                            <td colname="sports"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="data-table">
            <div class="table-head">
                <table>
                    <thead>
                        <tr>
                            <th class="cell-size-1 rotated-head serial" rowspan="2"><span>مسلسل</span></th>
                            <th class="cell-size-1 rotated-head sitting" rowspan="2"><span>رقم الجلوس</span></th>
                            <th class="cell-size-3 std-name" rowspan="2"><span>اسم الطالب</span></th>
                            <th class="cell-size-1 rotated-head class-number" rowspan="2"><span>الفصل</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>اللغة العربية</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>اللغة الإنجليزية</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>الدراسات</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>الرياضيات</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>العلوم</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>نشاط <?php echo convertNumbers(1); ?></span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>نشاط <?php echo convertNumbers(2); ?></span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>التربية الدينية</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>الحاسب الآلي</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>التربية الفنية</span></th>
                            <th class="cell-size-1 rotated-head" rowspan="1"><span>التربية الرياضية</span></th>
                        </tr>
                        <tr>
                            <?php
                            $degres = [30, 30, 30, 30, 30, 100, 100, 30, 30, 30, 20];
                            foreach ($degres as $d) {
                                echo "<th>";
                                echo convertNumbers($d);
                                echo "</th>";
                            }

                            ?>

                    </thead>
                </table>
            </div>
            <div class="table-body">
                <table>
                    <thead>
                        <th class="head-space-holder cell-size-1 rotated-head serial"></th>
                        <th class="head-space-holder cell-size-1 rotated-head sitting"></th>
                        <th class="head-space-holder cell-size-3 std-name"></th>
                        <th class="head-space-holder cell-size-1 rotated-head class-number"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                        <th class="head-space-holder cell-size-1 rotated-head"></th>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT 
                    students_data.studentId,
                    students_data.studentId AS sittingNumber,
                    students_data.studentName,
                    students_data.classNumber,
                    $semester.arabic,
                    $semester.english,
                    $semester.socialStudies,
                    $semester.math,
                    $semester.sciences,
                    $semester.activity_1,
                    $semester.activity_2,
                    $semester.religion,
                    $semester.computer,
                    $semester.draw,
                    $semester.sports
                    FROM students_data 
                    LEFT JOIN $semester
                    ON students_data.studentId = $semester.studentId 
                    WHERE grade = ?
                    ORDER BY students_data.studentId;";

                        $stmnt = $conn->prepare($sql);
                        $stmnt->execute([$_GET["grade"]]);
                        $rows = $stmnt->rowCount();
                        $row_num = 1;
                        $showRow = "odd";

                        $not_editable = ["", "sittingNumber", "studentName", "classNumber"];
                        while ($row = $stmnt->fetch(PDO::FETCH_ASSOC)) {
                            $col_num = 1;
                            echo "<tr ";
                            echo "class='" . $showRow . "'";
                            echo ">";
                            $showRow = $showRow === "odd" ? "even" : "odd";

                            echo "<td>" . convertNumbers($row_num) . "</td>";
                            foreach ($row as $key => $value) {
                                if ($key === "studentId") {
                                    echo "<td class='studentId' hidden>";
                                    echo $value;
                                    echo "</td>";
                                } else {
                                    echo "<td ";
                                    if (array_search($key, $not_editable)) {
                                        echo "contenteditable='false'";
                                    } else {
                                        echo "contenteditable='true' colname='$key'";
                                        echo " class='";
                                        if ((float) $value < 0) {
                                            $value = "غ";
                                            echo "warning ";
                                        }

                                        echo " col-$col_num'";
                                        $col_num++;
                                    }
                                    echo ">";


                                    echo convertNumbers($value);
                                    echo "</td>";
                                }
                            }

                            $row_num++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>