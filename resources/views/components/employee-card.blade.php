@props(['employee', 'company'])

<div class="col-md-4">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-warning">
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('images/AdminLTELogo.png') }}"
                    alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">{{$employee->firstname}} {{$employee->lastname }}</h3>
            <h5 class="widget-user-desc">Lead Developer</h5>
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Projects <span class="float-right badge bg-primary">31</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{$company->name}} <span class="float-right badge bg-primary">31</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.widget-user -->
</div>