@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

	<section class="panel">
        {{ Form::open(array('url' => '/admin/event/' .$event->id ,'method' => 'PUT')) }}
            <div class="row">
                <div class="large-6 columns">
                    <span>ID:{{$event->id}}</span>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>name_en :
                        <input name="name_en" type="text" value="{{ $event->name_en }}" placeholder="Please enter a event'sname here" required>
                    </label>
                    <label>name_jp :
                        <input name="name_jp" type="text" value="{{ $event->name_jp }}" placeholder="名前を入力してください" required>
                    </label>
                    <label>occured year :
                        <input name="occured_year" type="number" value="{{ $invention->occured_year }}" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;<input name="is_occured_year_fixed" type="checkbox" checked required>
                    </label>
                    <label>explanation_en :</label>
                        <textarea name="explanation_en" placeholder="Please enter a explanation here" required > {{ $event->explanation_en }}</textarea>
                    <label>explanation_jp :</label>
                        <textarea name="explanation_jp" placeholder="説明を入力してください" required> {{ $event->explanation_jp }}</textarea>
                </div>
            </div>
        {{ Form::submit('Update', array('class' => 'button')); }}
        <a href="/admin/event" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
