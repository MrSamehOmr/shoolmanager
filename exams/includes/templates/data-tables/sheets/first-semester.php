<?php

$sql ="SELECT * FROM fs_sheet WHERE data_grade = 1";

$stmnt = $conn->prepare($sql);
$stmnt->execute();
?>

<div class="section">
    <div class="data-table fs" style="width: 100%">
        <div class="table-head" style="width: 100%;">
            <table>
                <thead>
                    <tr>
                        <th colspan="6" rowspan="1">بيانات الطلبة</th>
                        <th colspan="4" rowspan="1">اللغة العربية</th>
                        <th colspan="4" rowspan="1">اللغة الإنجليزية</th>
                        <th colspan="4" rowspan="1">الدراسات الإجتماعية</th>
                        <th colspan="5" rowspan="1">الرياضيات</th>
                        <th colspan="5" rowspan="1">العلوم</th>
                        <th colspan="2" rowspan="1">المجموع الأساسي</th>
                        <th colspan="2" rowspan="1">نشاط</th>
                        <th colspan="2" rowspan="1">نشاط</th>
                        <th colspan="4" rowspan="1">التربية الدينية</th>
                        <th colspan="5" rowspan="1">الحاسب الآلي</th>
                        <th colspan="4" rowspan="1">التربية الفنية</th>
                    </tr>
                    <tr>
                        <!-- students data-->
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head data rotated-head"> <span class="col-text">مسلسل</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head data rotated-head"> <span class="col-text">رقم الجلوس</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-3 col-head data">              <span class="col-text">اسم الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head data rotated-head"> <span class="col-text">الفصل</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head data rotated-head"> <span class="col-text">حالة القيد</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head data rotated-head"> <span class="col-text">الصف</span></th>

                        <!-- arabic -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- english -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- socials -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- math -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">جبر</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">هندسة</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- sciences -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">عملي</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- total -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- activity 1 -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- activity 2 -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- religion -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- computer -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">عملي</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                        <!-- draw -->
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تقويمات</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head">      <span class="col-text">تحريري</span></th>
                        <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head total"><span class="col-text">درجة الطالب</span></th>
                        <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head grade"><span class="col-text">التقدير</span></th>

                    </tr>
                    <tr>
                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(40);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(20);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(30);?></span></th>
                        
                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(35);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(35);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(30);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(14);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(56);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(20);?></span></th>

                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(140);?></span></th>

                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(10);?></span></th>

                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(10);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(20);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(14);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(56);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(10);?></span></th>

                        <th rowspan="2"><span><?php echo convertNumbers(30);?></span></th>
                        <th rowspan="2"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="max-deg"><span><?php echo convertNumbers(10);?></span></th>
                    </tr>
                    <tr>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(20);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(15);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(10);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(15);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(10);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(70);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(5);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(5);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(10);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(5);?></span></th>
                        <th rowspan="1" class="min-deg"><span><?php echo convertNumbers(5);?></span></th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="table-body" style="width: 100%;">
            <table>
                <thead>
                <tr>
                        <!-- students data-->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-3"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- arabic -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- english -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- socials -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- math -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- sciences -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- total -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- activity 1 -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- activity 2 -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- religion -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- computer -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                        <!-- draw -->
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>
                        <th colspan="1" class="head-space-holder cell-size-1"></th>

                    </tr>
                </thead>
                <tbody>
                </tbody>
                <?php
                $line = "even";
                while ($row = $stmnt->fetch(PDO::FETCH_ASSOC)) {
                    $line = $line === "even"? "odd": "even";
                    $r = "<tr class='$line'>";
                    foreach ($row as $key => $value) {
                        $r .= "<td class='";
                        $r .= str_replace("_", " ", $key) . " ";
                        if ($value == "غ" || $value == "غائب") {
                            $r .= "warning";
                        } elseif ($value === "دون المستوى" || $value === "معيد") {
                            $r .= "wrong";
                        }
                        $r .= "'>";
                        $r .= convertNumbers($value);
                        $r .= "</td>";
                    }
                    $r .= "</tr>";
                    echo $r;
                }
                ?>
            </table>
        </div>
    </div>
</div>