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
                    <form action="{{ route('send.massage') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="groups">انتخاب گروه‌ها</label>
                                <select multiple class="form-control" name="groups[]" id="groups">
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="channels">انتخاب کانال‌ها</label>
                                <select multiple class="form-control" name="channels[]" id="channels">
                                    @foreach ($channels as $channel)
                                        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="text">متن مورد نظر</label>
                                <textarea type="text" class="form-control" name="text" id="text"
                                          placeholder="در اینجا متن مورد نظر خود را وارد کنید"></textarea>
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="file_upload">بارگذاری عکس یا ویدیو</label>
                                <input type="file" class="form-control-file" name="file" id="file_upload"
                                       accept="image/*, video/*">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ارسال پیام</button>
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
