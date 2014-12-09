@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

    <section class="panel">
        {{ Form::open(array('url' => '/admin/state')) }}
            <div class="row">
                <div class="large-6 columns">
                    <label>region :
                        <select name="region_id">
                            @foreach($REGIONS as $ID => $REGION)
                                <option value="{{{$ID}}}">{{{ strtolower($REGION['en']) }}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label>name_en :
                        <input name="name_en" type="text" value="{{{ $state->name_en }}}" placeholder="Please enter a event'sname here" required>
                    </label>
                    <label>name_jp :
                        <input name="name_jp" type="text" value="{{{ $state->name_jp }}}" placeholder="名前を入力してください" required>
                    </label>
                    <label>rise year :
                        <input name="rise_year" type="number" value="{{{ $state->rise_year }}}" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;
                        @if($state->is_rise_year_fixed)
                            <input name="is_rise_year_fixed" type="checkbox" checked>
                        @else
                            <input name="is_rise_year_fixed" type="checkbox">
                        @endif
                    </label>
                    <label>fall year :
                        <input name="fall_year" type="number" value="{{{ $state->fall_year }}}" placeholder="yyyy or yyyymmdd" required>
                        <span>is fixed?</span>&nbsp;
                        @if($state->is_fall_year_fixed)
                            <input name="is_fall_year_fixed" type="checkbox" checked>
                        @else
                            <input name="is_fall_year_fixed" type="checkbox">
                        @endif
                    </label>
                    <label>explanation_en :</label>
                        <textarea name="explanation_en" value="" placeholder="Please enter a explanation here" required >{{{ $state->explanation_en }}}</textarea>
                    <label>explanation_jp :</label>
                        <textarea name="explanation_jp" value="" placeholder="説明を入力してください" required>{{{ $state->explanation_jp }}}</textarea>
                    <label>capital_name_en :
                        <input name="capital_name_en" type="text" value="{{{ $state->capital_name_en }}}" placeholder="Please enter a event'sname here" required>
                    </label>
                    <label>capital_name_jp :
                        <input name="capital_name_jp" type="text" value="{{{ $state->capital_name_jp }}}" placeholder="名前を入力してください" required>
                    </label>
                </div>
            </div>
        {{ Form::submit('Submit', array('class' => 'button')); }}
        <a href="/admin/event" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
