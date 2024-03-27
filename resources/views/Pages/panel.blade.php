<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @include('cssLink')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('sidebar')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>
                                <p>تعداد دمین</p>
                            </div>
                            <a href="#" class="small-box-footer">لیست ادمین ها <i
                                    class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>0</h3>
                                <p>تعداد کانال ها</p>
                            </div>
                            <a href="#" class="small-box-footer">لیست کانال ها <i
                                    class="fa fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>0</h3>
                                <p>تعداد گروه ها</p>
                            </div>
                            <a href="#" class="small-box-footer">لیست گروه ها <i
                                    class="fa fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger-gradient">
                            <div class="inner">
                                <h3>0</h3>
                                <p>تعداد افراد خاص</p>
                            </div>
                            <a href="#" class="small-box-footer">لیست افراد خاص <i
                                    class="fa fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card bg-gray">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            لیست کارها
                        </h3>
                        <div class="card-tools">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a href="#" class="page-link" id="previousDay">&laquo; روز قبل</a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link" id="currentDay">امروز</a></li>
                                <li class="page-item"><a href="#" class="page-link" id="nextDay">روز بعد &raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="todo-list">
                            <li>
                                <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">طراحی یک قالب زیبا</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">رسپانسیو کردن قالب مورد نظر</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">ارائه قالب برای استفاده بقیه</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">بهینه سازی بخش های بوجود اومده</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">چک کردن پیام ها و نوتیفیکیشن ها</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                <input type="checkbox" value="" name="">
                                <span class="text">طراحی صفحه ایمیل جدید</span>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> جدید
                        </button>
                    </div>
                </div>
                <div class="row">
                    <section class="col-lg-7 connectedSortable"></section>
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
