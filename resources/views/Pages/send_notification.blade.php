<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>send_notification</title>
    @include('cssLink')
</head>
<body class="hold-transition login-page">
@include('sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ارسال پیام</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">فرم ارسال پیام</h3>
                    </div>
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="group_channel">انتخاب گروه یا کانال</label>
                                <select class="form-control" id="group_channel">
                                    <option value="group1">گروه 1</option>
                                    <option value="group2">گروه 2</option>
                                    <option value="group2">کانال 1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="text">متن مورد نظر</label>
                                <textarea type="text" class="form-control" id="text" placeholder="در اینجا متن مورد نظر خود را وارد کنید"></textarea>
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="file_upload">بارگذاری عکس یا ویدیو</label>
                                <input type="file" class="form-control-file" id="file_upload" accept="image/*, video/*">
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
