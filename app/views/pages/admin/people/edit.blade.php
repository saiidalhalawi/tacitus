@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

	<section class="panel">
        {{ Form::open(array('url' => '/admin/people/' .$person->id ,'method' => 'PUT')) }}
            <div class="row">
                <div class="large-6 columns">
                    <span>ID:{{$person->id}}</span>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>name_en :
                        <input name="name_en" type="text" value="{{ $person->name_en }}" placeholder="Please enter a person'sname here" required>
                    </label>
                    <label>name_jp :
                        <input name="name_jp" type="text" value="{{ $person->name_jp }}" placeholder="名前を入力してください" required>
                    </label>
                    <label>birth_year :
                        <input name="birth_year" type="number" value="{{ $person->birth_year }}" placeholder="yyyy or yyyymmdd" required>
                    </label>
                    <label>death_year :
                        <input name="death_year" type="number" value="{{ $person->death_year }}" placeholder="yyyy or yyyymmdd" required>
                    </label>
                    <label>title_en :
                        <input name="title_en" type="text" value="{{ $person->title_en }}" placeholder="Please enter a title here" required>
                    </label>
                    <label>title_jp :
                        <input name="title_jp" type="text" value="{{ $person->title_jp }}" placeholder="タイトルを入力してください" required>
                    </label>
                    <label>explanation_en :</label>
                        <textarea name="explanation_en" placeholder="Please enter a explanation here" required > {{ $person->explanation_en }}</textarea>
                    <label>explanation_jp :</label>
                        <textarea name="explanation_jp" placeholder="説明を入力してください" required> {{ $person->explanation_jp }}</textarea>
                </div>
            </div>
        {{ Form::submit('Update', array('class' => 'button')); }} 
        <a href="/admin/people" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
