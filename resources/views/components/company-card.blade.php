@props(['company'])

{{-- <div class="col-lg-3 col-6">
    <!-- small card -->

    <div class="small-box bg-info">
         
        <div class="inner">
            <h3>{{ $company->name }}</h3>
            <p> {{ $company->email }} </p>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="/company/{{$company->id}}" class="small-box-footer">
            Show Empolyee <i class="fas fa-arrow-circle-right"></i>
        </a>

        <a href="/edit/{{$company->id}}" class="small-box-footer">
            Edit <i class="fas fa-arrow-circle-right"></i>
        </a>

        <form method="POST" action="/delete/{{$company->id}}">
            @csrf
            @method('DELETE')

            <button class="text-red-500">
                <i class="fas fa-trash"></i> Delete
            </button>
        </form>
    </div>
</div> --}}

<div class="card" style="width: 18rem;">
    
    <img src="{{ $company->logo ? asset('storage/'. $company->logo) : asset('/images/AdminLTELogo.png')}}"
    class="img-thumbnail mx-auto" alt="..." style="width:100px; height: 100px;">
    <div class="card-body">
        <form method="POST" action="/delete/{{ $company->id }}">
            @csrf
            @method('DELETE')
            <h5 class="card-title"> {{ $company->name }}</h5>
            <h2 class="card-text">{{ $company->email }}</h2>
            <p><a href="#" class="text-primary">{{ $company->website }}</a></p>
            <br />

            <a href="/company/{{ $company->id }}" class="btn btn-primary btn-sm">
                Show Employees <i class="fas fa-arrow-circle-right"></i>
            </a>

            <a href="/edit/{{ $company->id }}" class="btn btn-secondary btn-sm">
                Edit <i class="fas fa-edit"></i>
            </a>

            <button class="btn-danger btn-sm">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
</div>

