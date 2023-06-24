@extends ('layouts.app')

@section('content')
<div class='container d-flex justify-content-between align-items-start flex-wrap mt-5'>
    @foreach ($projects as $key=>$el)
        {{-- @php dd($el) @endphp --}}

        <a href="{{ route('portfolio.show',$el) }}" style="text-decoration:none;">
            <div class="card-index card p-3 mx-2 mb-5" style="width:calc(95% / 2);">
                <img src="{{asset('storage/'. $el->cover_image)}}" class="card-img-top" alt="{{$el->title . 'cover'}}">
                <div class="card-body">
                    <h2 class="card-title mb-3 text-center text-white">{{ $el->title }}</h2>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-center">Project numero: {{ $key + 1}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Type</span>:
                        @if($el->type)
                            {{ $el->type->name_type }}
                        @else
                            none
                        @endif
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Description</span>: {{ $el->description }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Buyer</span>: {{ $el->buyer }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Technologies</span>: {{ $el->programming_languages }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-body-secondary">Link:</span><a href="{{$el->link}}" target="_blank" class="ms-1 card-link">Click here!</a></h6>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection