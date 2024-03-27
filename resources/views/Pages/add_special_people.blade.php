<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>add_special_people</title>
    @include('cssLink')
</head>
<body class="hold-transition login-page">
@include('sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>اضافه کردن افراد خاص</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">اضافه کردن افراد خاص</h3>
                    </div>
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="text">نام و نام خانوادگی</label>
                                <input type="text" class="form-control" id="current_password"
                                       placeholder="نام و نام خانوادگی را وارد کنید"/>
                            </div>
                            <div class="form-group">
                                <label for="number">آیدی بله</label>
                                <input type="number" class="form-control" id="new_password"
                                       placeholder="آیدی بله را وارد کنید"/>
                            </div>
                            <div class="form-group">
                                <label for="number">شماره تماس</label>
                                <input type="phone_number" class="form-control" id="phone_number"
                                       placeholder="شماره تماس را وارد کنید"/>
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
