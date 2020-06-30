<?php
if (isset($_GET["grade"]) && $_GET["grade"] > 0 && $_GET["grade"] < 3) {
?>

    <div class="section">
        <div class="data-table main-sheet">
            <div class="table-head">
                <table>
                    <thead>
                        <tr>
                            <th colspan="14" rowspan="1">بيانات الطلبة</th>
                            <th colspan="7" rowspan="1">اللغة العربية</th>
                            <th colspan="7" rowspan="1">اللغة الإنجليزية</th>
                            <th colspan="7" rowspan="1">الدراسات الإجتماعية</th>
                            <th colspan="10" rowspan="1">الرياضيات</th>
                            <th colspan="10" rowspan="1">العلوم</th>
                            <th colspan="2" rowspan="1">المجموع الأساسي</th>
                            <th colspan="10" rowspan="1">الأنشطة التربوية</th>
                            <th colspan="7" rowspan="1">التربية الدينية</th>
                            <th colspan="10" rowspan="1">الحاسب الآلي</th>
                            <th colspan="7" rowspan="1">التربية الفنية</th>
                            <th colspan="4" rowspan="1">التربية الرياضية</th>
                        </tr>
                        <tr>
                            <!-- students data -->
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>مسلسل</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>رقم الجلوس</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-3 col-head data             "><span>اسم الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>الفصل</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>الصف</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>النوع</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>حالة القيد</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>الديانة</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-2 col-head data             "><span>تاريخ الميلاد</span></th>
                            <th colspan="3" rowspan="1" class="cell-size-1                           "><span>السن في أول أكتوبر</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>سري 1</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head data rotated-head"><span>سري 2</span></th>

                            <!-- arabic -->
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- english -->
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- socials -->
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- math -->
                            <th colspan="3" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="4" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- sciences -->
                            <th colspan="3" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="4" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- total -->
                            <th colspan="1" rowspan="2" class="cell-size-1-1 col-head rotated-head"><span>مجموع الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1-1 col-head rotated-head"><span>التقدير العام</span></th>

                            <!-- activities -->
                            <th colspan="5" rowspan="1" class="                                 "><span>نشاط 1</span></th>
                            <th colspan="5" rowspan="1" class="                                 "><span>نشاط 2</span></th>

                            <!-- religion -->
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- computer -->
                            <th colspan="3" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="4" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- draw -->
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الأول</span></th>
                            <th colspan="2" rowspan="1" class="                                 "><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>مجموع المادة</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                            <!-- soprts -->
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>التيرم الأول</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>التيرم الثاني</span></th>
                            <th colspan="1" rowspan="2" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="4" class="cell-size-1 col-head rotated-head"><span>التقدير العام للمادة</span></th>

                        </tr>

                        <tr>
                            <!-- student age-->
                            <th colspan="1" rowspan="3" class="cell-size-1 col-head"><span>يوم</span></th>
                            <th colspan="1" rowspan="3" class="cell-size-1 col-head"><span>شهر</span></th>
                            <th colspan="1" rowspan="3" class="cell-size-1 col-head"><span>سنة</span></th>

                            <!-- arabic -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>

                            <!-- english -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>

                            <!-- socials -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>

                            <!-- math -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>جبر</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>هندسة</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>جبر</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>هندسة</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>مجموع الرياضيات</span></th>

                            <!-- sciences -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>عملي</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>عملي</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>مجموع العلوم</span></th>


                            <!-- activities -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات التيرم الأول</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات التيرم الثاني</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>مجموع الفصلين</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head"><span>التقدير العام للنشاط</span></th>

                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات التيرم الأول</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات التيرم الثاني</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>مجموع الفصلين</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>درجة الطالب</span></th>
                            <th colspan="1" rowspan="3" class="cell-size-1 col-head rotated-head"><span>التقدير العام للنشاط</span></th>

                            <!-- religion -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>

                            <!-- computer -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>عملي</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>عملي</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>مجموع الحاسب</span></th>

                            <!-- draw -->
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تقويمات</span></th>
                            <th colspan="1" rowspan="1" class="cell-size-1 col-head rotated-head"><span>تحريري</span></th>

                        </tr>

                        <tr>
                            <!-- arabic -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(80);  ?></th>

                            <!-- english -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(60); ?></th>

                            <!-- socials -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(40); ?></th>

                            <!-- math -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(35); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(35); ?></th>

                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(35); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(35); ?></th>

                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(60); ?></th>

                            <!-- sciences -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(14); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(56); ?></th>

                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(14); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(56); ?></th>

                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(40); ?></th>

                            <!-- total -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(280); ?></th>

                            <!-- activity -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20); ?></th>

                            <!-- activity -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20); ?></th>

                            <!-- religion -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(40);  ?></th>

                            <!-- computer -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(14); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(56); ?></th>

                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(14); ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(56); ?></th>

                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20); ?></th>

                            <!-- draw -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(30);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(70);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(200); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20);  ?></th>

                            <!-- sports -->
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(20);  ?></th>
                            <th colspan="1" rowspan="2"><?php echo convertNumbers(20);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(40);  ?></th>
                        </tr>

                        <tr>
                            <!-- arabic -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(40);  ?></th>

                            <!-- english -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(30);  ?></th>

                            <!-- socials -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20);  ?></th>

                            <!-- math -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(30);  ?></th>

                            <!-- sciences -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20);  ?></th>

                            <!-- total -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(140);  ?></th>

                            <!-- acitvity -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(10);  ?></th>

                            <!-- acitvity -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(10);  ?></th>

                            <!-- religion -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20);  ?></th>

                            <!-- draw -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(10);  ?></th>

                            <!-- computer -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(21);  ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(100); ?></th>
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(10);  ?></th>

                            <!-- soprts -->
                            <th colspan="1" rowspan="1"><?php echo convertNumbers(20);  ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-body">
                <table>
                    <thead>
                        <tr>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-3"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-2"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- arabic -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- english -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- socials -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
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
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- total -->
                            <th colspan="1" class="head-space-holder cell-size-1-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1-1"></th>

                            <!-- act-1 -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- act-2 -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- religion -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
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
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>

                            <!-- sports -->
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                            <th colspan="1" class="head-space-holder cell-size-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM main_sheet WHERE data_grade = 1";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $line = "even";
                        $row_num = 1;

                        // $row = $stmt->fetch(PDO::FETCH_OBJ);
                        // print_r($row)

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $line = $line === "even" ? "odd" : "even";
                            $r = "<tr class='$line'>";
                            $r .= "<td>" . convertNumbers($row_num) . "</td>";
                            foreach ($row as $key => $value) {
                                $r .= "<td ";
                                $r .= "itsvalue='$value'";
                                $r .= " class='";
                                $r .= str_replace("_", " ", $key) . " ";
                                $value = (int)$value === -1? "غ" : $value;
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>