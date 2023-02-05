@props(['company'])

<div class="col-12 col-sm-6 col-md-3">
    <!--Information boxex-->
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        <div class="info-box-content">
            <a href="/company/{{ $company->id }}"><span class="info-box-text">{{ $company->name }}</span></a>
            <span class="info-box-number">
                <small>{{ $company->email }}</small>
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>