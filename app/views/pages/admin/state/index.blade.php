@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

    <a href="/admin/state/create" class="button right">Create</a>
    <section class="panel">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
         <ul>
            @if(!$states->isEmpty())
                @foreach($states as $key => $state)
                <li>
                    <a href="{{ URL::to('admin/state/' . $state->id .'/edit' )}}">
                        <i><span>{{ $state->name_en }}</span></i>
                    </a>
                    <p>{{ $state->title_jp }}</p>
                </li>
                @endforeach
            @else
                <li>No item found.</li>
            @endif
        <div class="pagination-centered">
            {{ $states->links() }}
        </div>
    </section>
@stop
