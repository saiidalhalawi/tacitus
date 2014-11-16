@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

    <a href="/admin/invention/create" class="button right">Create</a>
    <section class="panel">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
         <ul>
            @if(!$inventions->isEmpty())
                @foreach($inventions as $key => $invention)
                <li>
                    <a href="{{ URL::to('admin/invention/' . $invention->id .'/edit' )}}">
                        <i><span>{{ $invention->name_en }}</span></i>
                    </a>
                </li>
                @endforeach
            @else
                <li>No item found.</li>
            @endif
        <div class="pagination-centered">
            {{ $inventions->links() }}
        </div>
    </section>
@stop
