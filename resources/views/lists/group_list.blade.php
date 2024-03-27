<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لیست گروه ها</title>
    <!-- Tell the browser to be responsive to screen width -->
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
                        <h1>لیست گروه ها</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="جستجو بر اساس نام گروه" aria-label="جستجو بر اساس نام گروه" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">اعمال فیلتر</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                                <th>نام گروه</th>
                                                <th>شماره آیدی گروه</th>
                                                <th>تعداد عضو</th>
                                                <th>مشاهده عضو ها</th>
                                                <th>مشاهده</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>گروه 1</td>
                                                <td>25419</td>
                                                <td>74</td>
                                                <td><a href="#">مشاهده</a></td>
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