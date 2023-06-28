@extends ('layouts.app')

@section('content')
<div class='container d-flex justify-content-between align-items-start flex-wrap mt-5'>

    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">n°</th>
            <th scope="col">Project Name</th>
            <th scope="col">Type of Project</th>
            <th scope="col">Project Link</th>
            <th scope="col">Go</th>
            <th scope="col">Technologies</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($projects as $key=>$el)
            <tr>
                <th scope="row" class="align-middle">{{$key + 1}}</th>
                <td class="align-middle">{{ $el->title }}</td>
                <td class="align-middle">{{ $el->type->name_type }}</td>
                <td class="align-middle">
                    <a href="{{$el->link}}" target="_blank"> 
                        Click here!
                    </a>
                </td>
                <td class="align-middle">
                    <a href="{{ route('admin.project.show',$el) }}" type="button" class="btn btn-outline-success">To Project</a>
                </td>
                <td class="align-middle">
                {{-- technologies  --}}
                @if($el->technologies)
                    <div class="my-3">
                        @foreach ($el->technologies as $el)
                            <span class="badge rounded-pill text-bg-light">{{$el->name }}</span>        
                        @endforeach
                    </div>
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection