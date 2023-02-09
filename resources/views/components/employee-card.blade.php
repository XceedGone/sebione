@props(['employee'])

<div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-blue-400">
            <h3 class="widget-user-username">{{ $employee->firstname }} {{ $employee->lastname }}</h3>

            <h5 class="widget-user-desc">{{ $employee->comp->name }}</h5>

        </div>
        <div class="widget-user-image">
            <img class="img-circle elevation-2"
                src="{{ $employee->comp->logo ? asset('storage/' . $employee->comp->logo) : asset('/images/AdminLTELogo.png') }}"
                alt="User Avatar" style="width:100px; height: 100px;">
        </div>
        <div class="card-footer">
            {{-- <div class="description-block">
                <x-tag :link='$employee->company' :tag='$employee->comp->name' />
            </div> --}}
            <div class="description-block">
                <span class="description-text">Contact Number</span>
                <h5 class="description-header">{{ $employee->phone }}</h5>

            </div>

            <div class="description-block">
                <span class="description-text">Email</span>
                <h5 class="description-header mx-auto text-info" style="width: 15rem;">{{ $employee->email }}</h5>

            </div>
            <!-- /.row -->
        </div>
        <div class="card-body mx-auto">
            <form method="POST" action="/deleteEmp/{{ $employee->id }}">
                @csrf
                @method('DELETE')
                <a href="/editEmp/{{ $employee->id }}" class="btn btn-secondary btn-sm">
                    Edit <i class="fas fa-edit"></i>
                </a>
                <button onclick="return confirm('Are you sure you want to delete?')" class="btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- /.widget-user -->
</div>
