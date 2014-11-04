@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

    <a href="/admin/event/create" class="button right">Create</a>
    <section class="panel">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
         <ul>
            @if(!$events->isEmpty())
                @foreach($events as $key => $event)
                <li>
                    <a href="{{ URL::to('admin/event/' . $event->id .'/edit' )}}">
                        <i><span>{{ $event->name_en }}</span></i>
                    </a>
                    <p>{{ $event->title_jp }}</p>
                </li>
                @endforeach
            @else
                <li>No item founded.</li>
            @endif
        <div class="pagination-centered">
            {{ $events->links() }} 
        </div>
    </section>
@stop
