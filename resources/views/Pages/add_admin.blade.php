<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>add_admin</title>
    @include('cssLink')
</head>
<body class="hold-transition login-page">
@include('sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>اضافه کردن ادمین</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافه کردن ادمین</h3>
                    </div>
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام و نام خانوادگی</label>
                                <input type="text" class="form-control" id="name"/>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">شماره تماس</label>
                                <input type="number" class="form-control" id="phone_number"/>
                            </div>
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="email" class="form-control" id="email"/>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">رمز عبور</label>
                                <input type="password" class="form-control" id="confirm_password"/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include('jsLink')
</body>
</html>
