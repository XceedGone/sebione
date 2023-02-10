@props(['company'])


<div class="card" style="width: 18rem;">
  
    <img src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('/images/AdminLTELogo.png') }}"
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

            <button onclick="return confirm('Are you sure you want to delete?')" class="btn-danger btn-sm">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
</div>


