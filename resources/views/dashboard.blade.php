<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
    <link href="{{ asset('css/login-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dhtml-horiz.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prompt.css') }}" rel="stylesheet">
    <title>جامعة البلقاء التطبيقية</title>
    <script>
        var errorCode = "";
    </script>

    <script language="javascript" type="text/javascript" src="/reg_new/actions/scripts"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/common.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/announcements.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/reg.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/marks.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/password.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/reports.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/payment.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/questions.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/transfer.js"></script>
    <script language="javascript" type="text/javascript" src="/reg_new/js/equalization.js"></script>

</head>

<body onload="doOnLoad();" cz-shortcut-listen="true">
    <div id="prompt_workspace" style="width:100%;height:100%;z-index: 100;position:absolute;display:none;"></div>
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td height="100%" align="center" valign="top">
                    <div class="pageWrapper" style="height:100%">
                        <div class="pageLayout" style="height:100%">
                            <table width="960" height="100%" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td valign="top">


                                            <div class="header">
                                                <h1><a href="#"><img src="{{ asset('images/bau-logo.png') }}"
                                                            alt=" " border="0"></a></h1>
                                            </div>
                                            <div class="mainFlash-dashboard">
                                                <div class="menubar">

                                                    <ul id="navmenu">
                                                        <li><a href="#">الاعلانات</a></li>
                                                        <li><a href="#">محاسبة التسجيل</a></li>
                                                        <li><a href="#">التسجيل</a></li>
                                                        <li><a href="#">الخطة
                                                                المفرغة</a></li>
                                                        <li><a href="#">كشف العلامات</a>
                                                        </li>
                                                        <li><a href="#">خدمات التسجيل</a></li>
                                                        <li><a href="#">استفسارات التعليم
                                                                الالكتروني</a></li>
                                                        <li><a href="#">تغيير كلمة
                                                                المرور</a></li>
                                                        <li><a href="#">طلب تحويل</a></li>
                                                        <li><a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();">خروج</a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="workspace" height="100%" valign="top">
                                            <div id="" class="info">
                                                <h2>معلومات الطالب</h2>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><label class="title" style="color:red">رقم
                                                                    الطالب:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">{{ auth()->user()->student_number }}</label>
                                                            </td>
                                                            <td><label class="title" style="color:red">اسم
                                                                    الطالب:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">{{ auth()->user()->name }}</label>
                                                            </td>
                                                            <td><label class="title" style="color:red">الحالة
                                                                    الاكاديمية:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">
                                                                    @if (auth()->user()->student_number == 32214016561)
                                                                        على مقاعد
                                                                        الدراسة
                                                                    @else
                                                                        مفصول اكاديمي
                                                                    @endif
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" id="english_name_section"><label
                                                                    class="title" style="color:red">الاسم
                                                                    بالانجليزية:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">
                                                                    @if (auth()->user()->student_number == 32214016561)
                                                                        j
                                                                    @else
                                                                        a
                                                                    @endif
                                                                </label>
                                                            </td>
                                                            <td><label class="title" style="color:red">المبلغ المطلوب
                                                                    للمالية:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;"></label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" id="english_place_section"><label
                                                                    class="title" style="color:red">مكان الولادة
                                                                    بالانجليزية:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">QATAR</label>
                                                            </td>
                                                            <td id="arabic_place_section"><label class="title"
                                                                    style="color:red">مكان الولادة بالعربية:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;"
                                                                    id="arb_born_val">قطر</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" id="national_no_section"><label
                                                                    class="title" style="color:red">الرقم
                                                                    الوطني:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;">
                                                                    @if (auth()->user()->student_number == 32214016561)
                                                                        null
                                                                    @else
                                                                        01533378
                                                                    @endif
                                                                </label>
                                                            </td>
                                                            <td id="arabic_place_section"><label class="title"
                                                                    style="color:red">حالة التسجيل:</label>
                                                                <label class="det"
                                                                    style="font-size:14px; color: blue;"
                                                                    id="arb_born_val"> </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <br>
                                            <div id="" class="info">
                                                <h2>الرجاء اكمال المعلومات المطلوبة لغايات البطاقة الذكية</h2>
                                                <center><label class="title" style="color:red">الاسم باللغة
                                                        الانجليزية من اربع مقاطع:</label>&nbsp;<input type="text"
                                                        id="name1" style="normal_text_name"
                                                        placeholder="الاسم الأول">&nbsp;<input type="text"
                                                        id="name2" style="normal_text_name"
                                                        placeholder="الاسم الثاني">&nbsp;<input type="text"
                                                        id="name3" style="normal_text_name"
                                                        placeholder="الاسم الثالث">&nbsp;<input type="text"
                                                        id="name4" style="normal_text_name"
                                                        placeholder="الاسم الرابع"><br><label class="title"
                                                        style="color:red">رقم الموبايل:</label>&nbsp;<input
                                                        type="text" id="mobile_no" style="normal_text_name"
                                                        placeholder="رقم الموبايل">&nbsp;&nbsp;<label class="title"
                                                        style="color:red">البريد الالكتروني:</label>&nbsp;<input
                                                        type="text" id="email" style="long_text_name"
                                                        placeholder="البريد الإلكتروني"><br><br><input type="button"
                                                        style="width:250px;height:50px;font-size: 15pt;"
                                                        value="اعتماد" onclick="doSubmitInfo();"></center>
                                            </div>
                                            <br>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2025-01-01 17:31:30.0</h2>
                                                <p></p>
                                                <h1 align="center">
                                                    <font color="red"> رقم الهاتف المعتمد لتأكيد الخدمات الالكترونية
                                                        هو : </font>
                                                    <font color="blue">
                                                        @if (auth()->user()->student_number == 32214016561)
                                                            0799394548
                                                        @else
                                                            0799394547
                                                        @endif
                                                    </font>
                                                </h1><br>
                                                <h1 align="center">
                                                    <font color="black"> في حال الرغبة بتغيير رقم الهاتف يرجى مراجعة
                                                        القبول و التسجيل </font>
                                                </h1><br>
                                                <p></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2025-01-01 17:30:47.0</h2>
                                                <p></p>
                                                <h1 align="center">
                                                    <font color="black"> مواعيد الامتحانات <br><br> </font>
                                                </h1>
                                                <center>
                                                    <table border="1" width="85%" align="center">
                                                        <tbody>
                                                            <tr align="center" height="40" bgcolor="#CFCFCF"
                                                                style="font-size:12pt; font-weight:bold;">
                                                                <th>اسم المادة
                                                                </th>
                                                                <th>موعد الامتحان النصفي
                                                                </th>
                                                                <th>موعد الامتحان النهائي
                                                                </th>
                                                                <th>ملاحظات</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </center>
                                                <p></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2025-01-01 17:30:03.0</h2>
                                                <p></p>
                                                <h1 align="center">
                                                    <font color="blue"> علامات الطالب الفصلية <br><br> </font>
                                                </h1>
                                                <center>
                                                    <table border="1" width="85%" align="center">
                                                        <tbody>
                                                            <tr align="center" height="40" bgcolor="#CFCFCF"
                                                                style="font-size:12pt; font-weight:bold;">
                                                                <th>رقم المادة
                                                                </th>
                                                                <th>اسم المادة
                                                                </th>
                                                                <th>المحادثة او الاعمال الاخرى
                                                                </th>
                                                                <th>الامتحان النصفي
                                                                </th>
                                                                <th>المشاركة
                                                                </th>
                                                                <th>التقارير
                                                                </th>
                                                                <th>عدد الغيابات
                                                                </th>
                                                                <th>ملاحظات
                                                                </th>
                                                            </tr>
                                                            @if (auth()->user()->student_number == 32214016561)
                                                                <tr>
                                                                    <td>30513212</td>
                                                                    <td>تحليل وتصميم أنظمة المعلومات (2)</td>
                                                                    <td>-</td>
                                                                    <td>30/28</td>
                                                                    <td>7</td>
                                                                    <td>9</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513313</td>
                                                                    <td>ادارة قواعد البيانات</td>
                                                                    <td>-</td>
                                                                    <td>30/24</td>
                                                                    <td>7</td>
                                                                    <td>8</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513252</td>
                                                                    <td>التجارة الالكترونية</td>
                                                                    <td>-</td>
                                                                    <td>30/20</td>
                                                                    <td>8</td>
                                                                    <td>8</td>
                                                                    <td>0</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A30513334</td>
                                                                    <td>نظم تخطيط موارد المشتقات</td>
                                                                    <td>-</td>
                                                                    <td>30/21</td>
                                                                    <td>8</td>
                                                                    <td>7</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513254</td>
                                                                    <td>نظم الوسائط المتعددة</td>
                                                                    <td>-</td>
                                                                    <td>30/26</td>
                                                                    <td>8</td>
                                                                    <td>8</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A30513424</td>
                                                                    <td>ادارة عمليات الاعمال</td>
                                                                    <td>-</td>
                                                                    <td>30/25</td>
                                                                    <td>8</td>
                                                                    <td>8</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            @else
                                                                <tr>
                                                                    <td>30513212</td>
                                                                    <td>تحليل وتصميم أنظمة المعلومات (2)</td>
                                                                    <td>-</td>
                                                                    <td>30/16</td>
                                                                    <td>6</td>
                                                                    <td>4</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513313</td>
                                                                    <td>ادارة قواعد البيانات</td>
                                                                    <td>-</td>
                                                                    <td>30/20</td>
                                                                    <td>5</td>
                                                                    <td>6</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513252</td>
                                                                    <td>التجارة الالكترونية</td>
                                                                    <td>-</td>
                                                                    <td>30/19</td>
                                                                    <td>4</td>
                                                                    <td>9</td>
                                                                    <td>0</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A30513334</td>
                                                                    <td>نظم تخطيط موارد المشتقات</td>
                                                                    <td>-</td>
                                                                    <td>30/17</td>
                                                                    <td>5</td>
                                                                    <td>6</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30513254</td>
                                                                    <td>نظم الوسائط المتعددة</td>
                                                                    <td>-</td>
                                                                    <td>30/22</td>
                                                                    <td>5</td>
                                                                    <td>6</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A30513424</td>
                                                                    <td>ادارة عمليات الاعمال</td>
                                                                    <td>-</td>
                                                                    <td>30/17</td>
                                                                    <td>3</td>
                                                                    <td>8</td>
                                                                    <td>1</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </center>
                                                <p></p>
                                            </div>
                                            @if (auth()->user()->student_number == 32214016561)
                                                <div id="" class="info">
                                                    <h2>إعلان بتاريخ 2025-01-01 17:28:37.0</h2>
                                                    <p><b> بريدك الخاص بك هو </b></p>
                                                    <p dir="ltr" style="text-align:right"><b>
                                                            <font color="blue">32214016561@std.bau.edu.jo</font>
                                                        </b></p><b> <br> وكلمة المرور الخاصة بك هي
                                                        <font color="red"> Bau@3626</font><br> كلمة المرور الخاصة
                                                        <br>
                                                        للدخول الى البريد الاليكتروني
                                                        <a href="http://mail.office365.com" target="blank">
                                                            http://mail.office365.com </a>
                                                        <br>
                                                        و لا يجوز تغيير كلمة المرور
                                                        <br>
                                                        تعليمات استخدام البريد الالكتروني
                                                        <a href="https://live.bau.edu.jo/BauLivePortal/attch/8582_1.pdf"
                                                            target="blank">
                                                            https://live.bau.edu.jo/BauLivePortal/attch/8582_1.pdf </a>
                                                    </b>
                                                    <p></p>
                                                </div>
                                                <div id="" class="info">
                                                    <h2>إعلان بتاريخ 2025-01-01 17:28:37.0</h2>
                                                    <p><b> معلومات البطاقة التي تم ادخالها <font color="blue"
                                                                size="4">Jassem Mohammad Jassem Fakhro</font>
                                                        </b>
                                                    </p>
                                                </div>
                                            @else
                                                <div id="" class="info">
                                                    <h2>إعلان بتاريخ 2025-01-01 17:38:33.0</h2>
                                                    <p><b> بريدك الخاص بك هو </b></p>
                                                    <p dir="ltr" style="text-align:right"><b>
                                                            <font color="blue">32214016562@std.bau.edu.jo</font>
                                                        </b></p><b> <br> وكلمة المرور الخاصة بك هي
                                                        <font color="red"> Bau@2197</font><br> كلمة المرور الخاصة
                                                        <br>
                                                        للدخول الى البريد الاليكتروني
                                                        <a href="http://mail.office365.com" target="blank">
                                                            http://mail.office365.com </a>
                                                        <br>
                                                        و لا يجوز تغيير كلمة المرور
                                                        <br>
                                                        تعليمات استخدام البريد الالكتروني
                                                        <a href="https://live.bau.edu.jo/BauLivePortal/attch/8582_1.pdf"
                                                            target="blank">
                                                            https://live.bau.edu.jo/BauLivePortal/attch/8582_1.pdf </a>
                                                    </b>
                                                    <p></p>
                                                </div>
                                                <div id="" class="info">
                                                    <h2>إعلان بتاريخ 2025-01-01 17:38:33.0</h2>
                                                    <p><b> معلومات البطاقة التي تم ادخالها <font color="blue"
                                                                size="4">AHMED MOHAMED J O FAKHROO </font> </b>
                                                    </p>
                                                </div>
                                            @endif
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2025-01-01 17:28:37.0</h2>
                                                <p>اسم المرشد الاكاديمي :د دجانه "محمد قدري" داود بدر</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-12-24 12:12:58.0</h2>
                                                <p>تقديم عذر الغياب عن الامتحان النهائي للفصل الاول 2024/2025 سواء مرضي
                                                    او قهري الكترونيا من صفحة الطالب فقط خلال 72 ساعة من تاريخ الامتحان
                                                    مع ارفاق وثيقة العذر</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-12-12 09:03:45.0</h2>
                                                <p>موعد الامتحان النصفي الغير مكتمل للفصل الاول يوم الاربعاء
                                                    18/12/2024الساعة 9 صباحا مواد الكلية ويوم الخميس 19/12/2024 مواد
                                                    وحدة التقييم</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-10-08 14:06:21.0</h2>
                                                <p>موعد الامتحان التكميلي للفصل الاول والثاني مواد وحدة التقييم يوم
                                                    الثلاثاء 8/10/2024 الساعة 10صباحا ومواد الكلية يوم الخميس 10/10/2024
                                                    الساعة 10 صباحا</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-10 12:39:32.0</h2>
                                                <p>تم فتح شعبة 1 من مادة إدارة نظم المعلومات لكم </p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-10 12:39:09.0</h2>
                                                <p>تم فتح شعبة 2 من مادة تطبيقات حاسوبية في العلوم الادارية والمالية لكم
                                                </p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-03 13:40:56.0</h2>
                                                <p>موعد امتحان غير المكتمل لمواد الكلية يوم الاربعاء 10/7/2024 الساعة 10
                                                    صباحا مبنى القاعات</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-03 13:40:00.0</h2>
                                                <p>موعد امتحان غير المكتمل لماد الكلية بوم الاربعاء 10/7/2024 الساعة 10
                                                    صباحا مبنى القاعات</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-03 12:19:13.0</h2>
                                                <p>موعد امتحان غير المكتمل يوم الثلاثاء 9/7/2024 الساعة 10 صباحا في
                                                    مختبرات الكلية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-07-03 12:17:50.0</h2>
                                                <p>موعد امتحان غير المكتمل لمواد وحدة التقييم يوم الثلاثاء 9/7/2024 من
                                                    الساعة 10 صباحا في مختبرات الكلية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-05-20 13:33:51.0</h2>
                                                <p>الدخول الى قاعة الامتحان النهائي سيكون على الهوية الجامعية لمن يحملها
                                                    وجواز السفر فقط لمن لا يحمل الهوية الجامعية راجيا الالتزام بذلك</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-04-30 16:04:06.0</h2>
                                                <p>امتحان الغير مكتمل للامتحان النصفي الفصل الثاني 2023/2024 يوم
                                                    الثلاثاء 7/5/2024 ويوم الاربعاء 8/5/2024</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-04-30 16:01:19.0</h2>
                                                <p>موعد امتحان الغير مكتمل للامتحان النصفي الفصل الثاني 2023/2024
                                                    للمقبوله اعذارهم يوم الثلاثاء 7/5/2024 مواد وحدة التقييم ويوم
                                                    الاربعاء 8/5/2024 مواد الكليه</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-03-25 13:26:13.0</h2>
                                                <p>الطلبة المقبولين فصل ثاني 2024/2023 موعد امتحان المستوى الخميس
                                                    28/3/2024 للطلبة ال\ين لم يتقدموا للامتحان</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-03-25 13:23:21.0</h2>
                                                <p>امتحان مستوى يوم الخميس 28/3/2024 للطلبة المقبولين فصل ثاني 2024/2023
                                                    ولم يتقدم للامتحان</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-02-20 09:25:40.0</h2>
                                                <p>موعد امتحان غير المكتمل لمواد وحدة التقييم الاربعاء 28/2/2024 الساعة
                                                    10 مختبرات الكلية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-02-20 07:44:34.0</h2>
                                                <p>موعد امتحان غير المكتمل الخميس 29/2/2024 الساعة 10 قاعة B302
                                                    ادارية-محاسبية-محوسبة</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2024-02-20 07:42:29.0</h2>
                                                <p>موعد امتحان غير المكتمل يوم الاربعاء 28/2/2024 الساعة 10 قاعة B301
                                                    ادارة -مالية-اساسية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-11 07:56:10.0</h2>
                                                <p>امتحان غير المكتمل النصفي يوم 13/12و14/12 (10-11) حسب الاعلان من
                                                    الاقسام الاكاديمية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-10 14:17:54.0</h2>
                                                <p>موعد امتحان الغير مكتمل يوم الاربعاء والخميس 1313و14/12 (10-11 حسب
                                                    الاعلان لكل تخصص</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 12:22:09.0</h2>
                                                <p>موعد امتحان غير المكتمل يوم الاحد 2023/12/10 الساعة 9 صباحا في
                                                    مختبرات الكلية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:09:25.0</h2>
                                                <p>القطرية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:09:22.0</h2>
                                                <p>القطرية</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:08:56.0</h2>
                                                <p>موعد امتحان الغير مكتمل لمواد وحدة التقييم يوم الاحد 2023/12/10 من
                                                    الساعة 9-10</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:07:31.0</h2>
                                                <p>1</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:07:27.0</h2>
                                                <p>1</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2023-12-07 08:07:19.0</h2>
                                                <p>1</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-10-26 15:59:30.0</h2>
                                                <p><b><br>
                                                        <font color="red" size="5"> الطلبة الاعزاء ضرورة
                                                            الاطلاع على محتويات هذا الدليل و الالتزام بكافة الانظمة و
                                                            التعليمات الواردة <br><br></font>
                                                        <font color="blue" size="6"> دليل الطالب <a
                                                                href="https://www.bau.edu.jo/media/dalel/mobile/index.html"
                                                                target="blank">
                                                                https://www.bau.edu.jo/media/dalel/mobile/index.html</a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-09-24 06:33:34.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-09-22 19:08:59.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-05-31 16:49:16.0</h2>
                                                <p><b>
                                                        <font color="blue" size="5"> الرابط الخاص بتقديم اعذار
                                                            الغياب عن الامتحانات او المشاكل الفنية <a
                                                                href="http://reg.amman.bau.edu.jo:7777/obligation/login.jsp"
                                                                target="blank">
                                                                http://reg.amman.bau.edu.jo:7777/obligation/login.jsp
                                                            </a></font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-11 22:38:04.0</h2>
                                                <p><b>
                                                        <font color="black" size="5"> يرجى الدخول إلى بوابة
                                                            البلقاء و تعبئة الاستبيان الخاص بمستوى رضا الطلبة ولن يتم
                                                            اعتماد التسجيل إلا بعد تعبئة الاستبيان <a
                                                                href="https://www.bau.edu.jo/UserPortal/UserProfile/Login.aspx"
                                                                target="blank">
                                                                https://www.bau.edu.jo/UserPortal/UserProfile/Login.aspx
                                                            </a></font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-09 14:32:03.0</h2>
                                                <p>يرجى تحديد طبيعة العلامات ناجح او راسب كونة اخر موعد 2021/2/10</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-09 14:31:53.0</h2>
                                                <p>يرجى تحديد طبيعة العلامات ناجح او راسب كونة اخر موعد 2021/2/10</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-09 09:05:30.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-09 08:50:25.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2021-02-09 08:47:58.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2020-11-25 14:01:31.0</h2>
                                                <p>يرجى الدخول إلى بوابة البلقاء و تعبئة الاستبيان الخاص بمركز الجودة
                                                    للضرورة</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2020-11-25 13:51:35.0</h2>
                                                <p><b><br>
                                                        <font color="red" size="5"> الطلبة الاعزاء ضرورة
                                                            الاطلاع على محتويات هذا الدليل و الالتزام بكافة الانظمة و
                                                            التعليمات الواردة <br><br></font>
                                                        <font color="blue" size="6"> دليل الطالب <a
                                                                href="https://www.bau.edu.jo/media/BAU/mobile/index.html"
                                                                target="blank">
                                                                https://www.bau.edu.jo/media/BAU/mobile/index.html</a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2020-06-17 08:30:01.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> الرابط الخاص بتحديد الية
                                                            احتساب العلامات <a
                                                                href="http://app.amman.bau.edu.jo:7777/requests/index.jsp"
                                                                target="blank">
                                                                http://app.amman.bau.edu.jo:7777/requests/index.jsp </a>
                                                        </font>
                                                    </b></p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2018-12-31 21:35:41.0</h2>
                                                <p><b>
                                                        <font color="blue" size="4"> طلابنا الأعزاء يسرنا
                                                            اعلامكم بأن دفع الرسوم الجامعية يتم
                                                            من خلال خدمة اي فواتيركم ، المتوفرة في جميع بنوك المملكة
                                                            ومحلات الصرافة المعتمدة، بالاضافة الى انه يمكنك الدفع اون
                                                            لاين
                                                            إذا كان لديك حساب بنكي. لمزيد من المعلومات الاتصال على
                                                            065504142
                                                        </font>
                                                    </b> </p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-07-24 07:43:39.0</h2>
                                                <p>قرر المسجل العام تاجيل موعد تسجيل مواد الاول 2018/2017</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-06-14 02:45:50.0</h2>
                                                <p>الطالب الذي تغيب عن الامتحان الثاني بعذر مقبول التاكد ان علامته غير
                                                    مكتمل (غ م )</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-06-14 02:44:59.0</h2>
                                                <p>تم طرح المواد البديلة للطلبة الخريجين على الصيفي 2017/2016 وغير ذلك
                                                    راجع التسجيل</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-06-01 21:12:29.0</h2>
                                                <p>يرجى من جميع الطلبة مراجعة مواد الصيفي 2017/2016حيث تم الغاء طرح بعض
                                                    المواد</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-05-29 16:39:18.0</h2>
                                                <p>السحب والاضافة صيفي 2017/2016 من 2017/5/30 حتى 2017/6/1حسب المستوى
                                                </p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-05-22 19:01:24.0</h2>
                                                <p>على جميع طلبة البكالوريوس المطلوب منهم اللغة العربية والانجليزية 099
                                                    ضرورة تسجيل المادة</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-05-22 19:00:11.0</h2>
                                                <p>تبدأ مراجعة علامة مواد الفصل الثاني 202017 من 22/5/2017 حتى 31/5/2017
                                                    لجميع الطلبة</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2017-03-15 01:00:08.0</h2>
                                                <p>اسرة الكلية تبارك للطلبة المستجدين وتتمنى لكم كل التوفيق</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2016-03-17 08:33:07.0</h2>
                                                <p>يرجى من جميع الطلبة التدقيق على صحة المعلومات الخاصة بهم على صفحتهم
                                                    الخاصة</p>
                                            </div>
                                            <div id="" class="info">
                                                <h2>إعلان بتاريخ 2015-02-27 12:07:51.0</h2>
                                                <p>صفحة الكلية على الفيس بوك www.facebook.com/aucabu عمادة كلية عمان
                                                    الجامعية</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">

                                            <div class="footer">
                                                <p>جامعة البلقاء التطبيقية Al-Salt, Jordan Tel: (+962-5) 3491111, Fax:
                                                    (+962-5) 3491111 P.O.Box: Al-Salt 19117, Jordan E-Mail:
                                                    info@bau.edu.jo </p>
                                                <ul>
                                                    <li><a href="http://www.bau.edu.jo"> موقع الجامعة
                                                            www.bau.edu.jo</a></li>
                                                </ul>
                                                <p>جامعة البلقاء التطبيقية @ 2012 Al-Balqa' Applied University. all
                                                    right reserved</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div id="temp" style="display:none"></div>

</body>

</html>
