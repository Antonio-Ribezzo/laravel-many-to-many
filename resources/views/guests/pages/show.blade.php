@extends ('layouts.app')

@section('content')
<div class='container d-flex flex-column align-items-center justify-content-center mt-5 position-relative'>   

        {{-- @php dd($project) @endphp --}}
        <div class="card p-3 mb-2">
            <img src="{{asset('storage/'. $project->cover_image)}}" class="card-img-top" alt="{{$project->title . 'cover'}}">
        </div>
        <h2 class>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <p>
            @if($project->type)
                {{ $project->type->name_type }}
            @else
                none
            @endif
        </p>
        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Buyer</span>: {{ $project->buyer }}</h6>
        <h6 class="card-subtitle my-2 text-body-secondary"><span class="text-decoration-underline">Link</span>:<a href="{{$project->link}}" target="_blank" class="ms-1 card-link">Click here!</a></h6>
        
        <a class="mt-2 btn btn-outline-light rounded-circle position-absolute" href="{{route('portfolio.index')}}" style="top:-4rem; left:10rem;">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
</div>
@endsection