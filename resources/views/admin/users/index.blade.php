@extends('app')

@section('content')
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp full-width">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>
            @foreach($allUsers as $usr)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ $usr->id }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->email }}</td>
                    <td>{{ $usr->password }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection