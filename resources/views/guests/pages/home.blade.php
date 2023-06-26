@extends ('layouts.app')

@section('content')
<div class='container d-flex justify-content-between align-items-start flex-wrap mt-5'>
    @foreach ($projects as $key=>$el)
        {{-- @php dd($el) @endphp --}}

            <div class="card-index card p-3 mx-2 mb-5" style="width:calc(95% / 2);  height: 35rem">
                <a href="{{ route('portfolio.show',$el) }}" style="text-decoration:none;">
                    <img src="{{asset('storage/'. $el->cover_image)}}" class="card-img-top" alt="{{$el->title . 'cover'}}">
                    <div class="card-body">
                        <h2 class="card-title mb-3 text-center text-white">{{ $el->title }}</h2>
                        {{-- technologies  --}}
                        @if($el->technologies)
                            <div class="my-3 text-center">
                                @foreach ($el->technologies as $el)
                                    <span class="badge rounded-pill text-bg-light">{{ $el->name }}</span>        
                                @endforeach
                            </div>
                        @endif
                        <h6 class="card-subtitle mt-0 mb-2 text-body-secondary text-center">Project numero: {{ $key + 1}}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Type</span>:
                        @if($el->type)
                            {{ $el->type->name_type }}
                        @else
                            none
                        @endif
                        </h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Description</span>: {{ $el->description }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Buyer</span>: {{ $el->buyer }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-body-secondary">Link:</span><a href="{{$el->link}}" target="_blank" class="ms-1 card-link">Click here!</a></h6>
                    </div>
                </a>
            </div>
    @endforeach
</div>
@endsection