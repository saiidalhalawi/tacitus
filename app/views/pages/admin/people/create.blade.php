@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

	<section class="panel">
        {{ Form::open(array('url' => '/admin/people')) }}
            <div class="row">
                <div class="large-8 columns">
                    <label>type :
                        <select>
                            @foreach($PERSON_TYPES as $ID => $PERSON_TYPE)
                                <option value="{{{$ID}}}">{{{ strtolower($PERSON_TYPE['en']) }}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>name_en :
                        <input name="name_en" type="text" value="" placeholder="Please enter a person'sname here" required>
                    </label>
                    <label>name_jp :
                        <input name="name_jp" type="text" value="" placeholder="名前を入力してください" required>
                    </label>
                    <label>state :
                        <select name="state_id">
                            @foreach($states as $state)
                                <option value="{{{$state->id}}}">{{{ $state->name_en }}}&nbsp;</option>
                            @endforeach
                        </select>
                    </label>
                    <label>birth_year :
                        <input name="birth_year" type="number" value="" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;<input name="birth_year_fixed" type="checkbox" checked required>
                    </label>
                    <label>death_year :
                        <input name="death_year" type="number" value="" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;<input name="death_year_fixed" type="checkbox" checked required>
                    </label>
                    <label>region :
                        <select>
                            <option value="-">-</option>
                        </select>
                    </label>
                    <label>title_en :
                        <input name="title_en" type="text" value="" placeholder="Please enter a title here">
                    </label>
                    <label>title_jp :
                        <input name="title_jp" type="text" value="" placeholder="タイトルを入力してください">
                    </label>
                    <label>explanation_en :</label>
                        <textarea name="explanation_en" value="" placeholder="Please enter a explanation here" required ></textarea>
                    <label>explanation_jp :</label>
                        <textarea name="explanation_jp" value="" placeholder="説明を入力してください" required></textarea>
                </div>
            </div>
        {{ Form::submit('Submit', array('class' => 'button')); }}
        <a href="/admin/people" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
