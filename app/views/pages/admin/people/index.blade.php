@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

    <a href="/admin/people/create" class="button right">Create</a>
    <section class="panel">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
         <ul>
            @foreach($people as $key => $person)
            <li>
                <a href="{{ URL::to('admin/people/' .$person->id .'/edit' )}}">
                    <i><span>{{ $person->name_en }}</span></i>
                </a>
                <p>{{ $person->title_jp }}</p>
            </li>
            @endforeach
        <div class="pagination-centered">
            {{ $people->links() }} 
        </div>
    </section>
@stop
