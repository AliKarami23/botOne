<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('panel')}}" class="brand-link">
        <img src="{{ asset('Assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: 0.8"/>
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <div class=" mt-2">
                <div class="info">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item has-treeview">
                            <a class="nav-link mr-2">
                                <p>
                                    علی کرمی
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    پروفایل
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('edit.profile') }}" class="nav-link">
                                        <i class="fa fa-circle nav-icon"></i>
                                        <p>ویرایش پروفایل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('change.pass') }}" class="nav-link">
                                        <i class="fa fa-circle nav-icon"></i>
                                        <p>تغییر رمز عبور</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle nav-icon"></i>
                                        <p>خروج</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                ادمین ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('add.admin') }}" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>اضافه کردن ادمین جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.list') }}" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>لیست ادمین ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-stack-exchange"></i>
                            <p>
                                افراد خاص
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('add.special.people') }}" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>اضافه کردن فرد جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('special.people.list') }}" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>لیست افراد خاص</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('group.list') }}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>لیست گروه ها</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('channel.list') }}" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>لیست کانال ها</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('send.notification') }}" class="nav-link">
                            <i class="nav-icon fa fa-envelope"></i>
                            <p>
                                ارسال پیام
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
