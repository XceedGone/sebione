
@foreach ($employee as $emp)
    <div class="col-12 col-sm-6 col-md-3">
        <!--Information boxex-->
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">{{ $emp->firstname }}</span>
                <span class="info-box-number">
                    <small>{{ $emp->phone }}</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
@endforeach
