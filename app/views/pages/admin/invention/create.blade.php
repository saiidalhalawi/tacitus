@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

	<section class="panel">
        {{ Form::open(array('url' => '/admin/invention')) }}
            <div class="row">
                <div class="large-8 columns">
                    <label>type :
                        <select>
                            <option value="-">-</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>name_en :
                        <input name="name_en" type="text" value="{{ $invention->name_en }}" placeholder="Please enter a invention's name here" required>
                    </label>
                    <label>name_jp :
                        <input name="name_jp" type="text" value="{{ $invention->name_jp }}" placeholder="名前を入力してください" required>
                    </label>
                    <label>occured year :
                        <input name="occured_year" type="number" value="{{ $invention->occured_year }}" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;<input name="is_occured_year_fixed" type="checkbox" checked required>
                    </label>
                    <label>state :
                        <select name="state_id">
                            @foreach($states as $state)
                                <option value="{{{$state->id}}}">{{{ $state->name_en }}}&nbsp;</option>
                            @endforeach
                        </select>
                    </label>
                    <label>explanation_en :</label>
                        <textarea name="explanation_en" placeholder="Please enter a explanation here" required > {{ $invention->explanation_en }}</textarea>
                    <label>explanation_jp :</label>
                        <textarea name="explanation_jp" placeholder="説明を入力してください" required> {{ $invention->explanation_jp }}</textarea>
                </div>
            </div>
        {{ Form::submit('Submit', array('class' => 'button')); }}
        <a href="/admin/invention" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
