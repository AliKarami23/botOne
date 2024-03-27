<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لیست کابران</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cssLink')
</head>
<body class="hold-transition sidebar-mini">
@include('sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>لیست کاربران</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>نام و نام خانوادگی</th>
                                        <th>ایمیل</th>
                                        <th>موبایل</th>
                                        <th>رمز</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>علی کرمی</td>
                                        <td>ali.gmail.com</td>
                                        <td>09301908224</td>
                                        <td>123456</td>
                                        <td>123456</td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm">ویرایش</button>
                                            <button class="btn btn-outline-danger btn-sm">حذف</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-tools">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a href="#" class="page-link" data-action="1">۱</a></li>
                                <li class="page-item"><a href="#" class="page-link" data-action="2">۲</a></li>
                                <li class="page-item"><a href="#" class="page-link" data-action="3">۳</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('jsLink')
</body>
</html>
