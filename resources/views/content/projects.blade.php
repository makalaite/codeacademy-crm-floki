@extends('main')

@section('content')
    <div>Total records: {{ $totalCount }}</div>
@endsection

<ul>
    @foreach($projects as $project)
        <li>
            {{$project['name']}}
            <ul>
                @foreach($client['projects'] as $project)
                    <li>
                        {{$project['name']}}
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

@section('title', trans('app.projects'))
    @endsection
