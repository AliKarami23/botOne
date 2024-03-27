<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>user_profile</title>
    @include('cssLink')
</head>
<body class="hold-transition sidebar-mini">
@include('sidebar')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>پروفایل</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">علی کرمی</h3>
                                <h5 class="text-center">ادمین</h5>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">اطلاعات من</h3>
                            </div>
                            <div class="card-body">
                                <strong><i class="fa fa-book mr-1"></i>ایمیل</strong>
                                <p class="text-muted">ali@gmail.com</p>
                                <hr/>
                                <strong><i class="fa fa-pencil mr-1"></i>شماره تماس</strong>
                                <p class="text-muted">09129211086</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
@include('jsLink')
</body>

</html>
