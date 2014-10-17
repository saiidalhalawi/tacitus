@extends('ancestors.admin.base')


<title>@section('title')Management</title>

@section('body')

	<section class="panel">
        {{ Form::open(array('url' => '/admin/people/create')) }}
            <div class="row">
                <div class="large-8 columns">
                    <label>type :
                        <input type="radio" name="person_type_id" value="1" id="politician" ><label for="politician">Politician</label>
                        <input type="radio" name="person_type_id" value="2" id="musician" ><label for="musician">musician</label>
                        <input type="radio" name="person_type_id" value="2" id="writer" ><label for="writer">writer</label>
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
                </div>
            </div>
        {{ Form::submit('Submit', array('class' => 'button')); }}
        <a href="/admin/people" class="button secondary">Back</a>
        {{ Form::close() }}
    </section>
@stop
