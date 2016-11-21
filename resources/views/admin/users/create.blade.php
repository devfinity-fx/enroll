@extends('app')


@section('content1')
<form method="POST" action="/users" class="block">
    {!! csrf_field() !!}

            <!-- Textfield with Floating Label -->

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample1" name="name">
            <label class="mdl-textfield__label" for="sample1">Name</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="sample2" name="email">
            <label class="mdl-textfield__label" for="sample2">Email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="password" id="sample3" name="password">
            <label class="mdl-textfield__label" for="sample3">Password</label>
        </div>

    {{--<input type="text" name="name">--}}
    {{--<input type="email" name="email">--}}
    {{--<input type="password" name="password">--}}
    {{--<input type="submit" value="Create">--}}
    <button type="submit" value="Create" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
        <i class="material-icons">add</i>
    </button>
</form>

@endsection