@props(['company'])

<div class="col-lg-3 col-6">
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
</div>