<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>change_password</title>
    @include('cssLink')
</head>
<body class="hold-transition login-page">
@include('sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تغییر رمز عبور</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">فرم تغییر رمز عبور</h3>
                    </div>
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="current_password">رمز عبور فعلی</label>
                                <input type="password" class="form-control" id="current_password"
                                       placeholder="رمز عبور فعلی را وارد کنید"/>
                            </div>
                            <div class="form-group">
                                <label for="new_password">رمز عبور جدید</label>
                                <input type="password" class="form-control" id="new_password"
                                       placeholder="رمز عبور جدید را وارد کنید"/>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">تکرار رمز عبور جدید</label>
                                <input type="password" class="form-control" id="confirm_password"
                                       placeholder="رمز عبور خود را دوباره وارد بکنید"/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">تایید</button>
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
