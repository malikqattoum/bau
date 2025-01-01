@extends('layouts.app')

@section('content')

    <head>
        <link href="{{ asset('css/login-style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dhtml-horiz.css') }}" rel="stylesheet">
        <link href="{{ asset('css/prompt.css') }}" rel="stylesheet">
    </head>
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="100%" align="center" valign="top">
                <div class="pageWrapper" style="height:100%">
                    <div class="pageLayout" style="height:100%">
                        <table width="960" height="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td valign="top">
                                    <div class="header">
                                        <h1>
                                            <a href="#"><img src="{{ asset('images/bau-logo.png') }}" alt=" "
                                                    border="0"></a>
                                        </h1>
                                    </div>
                                    <div class="mainFlash mb-4">
                                        <div class="menubar"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td id="workspace" height="100%" valign="top">
                                    <table width="100%" cellspacing="5">
                                        <tr>
                                            <td width="40%" align="right" valign="top">
                                                <div class="info" style="width:95%;height:220px;">
                                                    <h2 style="margin-bottom: 10px">
                                                        <font face="Traditional Arabic" color="#FF0000" size="6" style="font-weight:bold">
                                                            دخول الطلاب :
                                                        </font>
                                                        <font face="Traditional Arabic" color="#0000FF" style="font-weight:bold; font-size:20px">
                                                            كلية عمان
                                                        </font>
                                                    </h2>
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="login-form">
                                                            <div class="form-group">
                                                                <label for="student_number" class="form-label" style="font-weight:bold; font-size:20px; margin-right:10px">رقم الطالب <span class="mr-2">:</span></label>
                                                                <input type="text" id="student_number" name="student_number" value="{{ old('student_number') }}" style="height:20px;width:50%;margin-right:20px">
                                                                @error('student_number')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mt-2">
                                                                <label for="password" class="form-label" style="font-weight:bold; font-size:20px; margin-right:10px">كلمة المرور :</label>
                                                                <input type="password" id="password" name="password" style="height:20px;width:50%;margin-right:20px">
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group text-center mt-2">
                                                                <button type="submit" style="border:1px solid; padding:0px 20px; background-color: #E5E5E5; margin-left:52px">دخول</button>
                                                            </div>

                                                            <div class="form-group text-center mt-2">
                                                                <p>
                                                                   <span style="color:#0000FF;font-size:1.17em">الدخول إلى بوابة البلقاء </span> <a href="https://www.bau.edu.jo/UserPortal/UserProfile/Login.aspx" class="text-link">اضغط هنا</a>
                                                                </p>
                                                                <p>
                                                                    <span style="color:#0000FF;font-size:1.17em">هل نسيت كلمة المرور؟ </span> <a href="http://app.amman.bau.edu.jo:7777/stpass/getstpwd.jsp" class="text-link">اضغط هنا</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td width="60%" align="right" valign="top">
                                                <div class="info" style="width:99%; height:220px;">
                                                    <h2 align="center">
                                                        <font color="#000080" size="6" face="Traditional Arabic" style="font-weight:bold">
                                                            نظام التسجيل الالكتروني
                                                        </font>
                                                    </h2>
                                                    <h2 align="center" class="mb-4">
                                                        <font color="#FF0000">
                                                            <strong style="font-weight: 400">
                                                                <font size="2" face="Tahoma">
                                                                    <span lang="ar-jo">كلية عمان الجامعية</span>
                                                                </font>
                                                            </strong>
                                                        </font>
                                                    </h2>
                                                    <p align="center">
                                                        <font color="#0000FF" style="font-size: 15px">
                                                            <span lang="ar-jo">
                                                                الاستبانة الخاصة بهيئة الاعتماد لقياس مستوى رضى الطلبة على
                                                                الرابط:
                                                            </span>
                                                        </font>
                                                    </p>
                                                    <p align="center">
                                                        <font color="#0000FF">
                                                            <a href="https://www.bau.edu.jo/UserPortal/UserProfile/Login.aspx"
                                                                style="text-decoration: none">
                                                                https://www.bau.edu.jo/UserPortal/UserProfile/Login.aspx
                                                            </a>
                                                        </font>
                                                    </p>
                                                    <p align="center">
                                                        <font face="Tahoma" size="1" color="#000000"><span
                                                                lang="ar-jo" style="font-weight:bold">للدخول إلى موقع تقييم المدرسين</span>
                                                            <a href="http://eval.bau.edu.jo"
                                                                style="text-decoration: none">http://Eval.bau.edu.jo </a>
                                                        </font>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="footer">
                                        <p>
                                            جامعة البلقاء التطبيقية Al-Salt, Jordan Tel: (+962-5) 3491111, Fax: (+962-5)
                                            3491111 P.O.Box: Al-Salt 19117, Jordan E-Mail: info@bau.edu.jo
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="http://www.bau.edu.jo">موقع الجامعة www.bau.edu.jo</a>
                                            </li>
                                        </ul>
                                        <p>
                                            جامعة البلقاء التطبيقية @ 2012 Al-Balqa' Applied University. all right reserved
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
@endsection
