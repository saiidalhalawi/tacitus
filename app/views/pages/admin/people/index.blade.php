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
            <ul class="pagination">
                <li class="arrow unavailable"><a href="">&laquo;</a></li>
                <li class="current"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li class="unavailable"><a href="">&hellip;</a></li>
                <li><a href="">12</a></li>
                <li><a href="">13</a></li>
                <li class="arrow"><a href="">&raquo;</a></li>
            </ul>
        </div>
    </section>
@stop
