<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>massage</title>
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
                    <h1>لیست پیام های علی کرمی</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="جستجو بر اساس نام گروه" aria-label="جستجو بر اساس نام گروه" aria-describedby="basic-addon2">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="جستجو بر اساس نام فرد" aria-label="جستجو بر اساس نام فرد" aria-describedby="basic-addon2">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="جستجو بر اساس آیدی بله" aria-label="جستجو بر اساس آیدی بله" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 offset-md-4">
                            <button class="btn btn-primary btn-block" type="button">اعمال فیلتر</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
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
                                        <th>آیدی بله</th>
                                        <th>گروه و کانال پیام گذاشته</th>
                                        <th>شماره تماس</th>
                                        <th>رمز</th>
                                        <th>پیام ها</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>علی کرمی</td>
                                        <td>245178</td>
                                        <td>ali.gmail.com</td>
                                        <td>09301908224</td>
                                        <td>123456</td>
                                        <td><a href="#">مشاهده</a></td>
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
