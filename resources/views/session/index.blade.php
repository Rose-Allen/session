@extends('layouts.app')
@section('content')
    <div class="container col-10">
        <h2>Active Session</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Ip address</th>
                <th>USer agent</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sessions as $session)
                <tr>
                    <td>{{$session->username}}</td>
                    <td>{{$session->ip_address}}</td>
                    <td>{{$session->user_agent}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <form method="POST" action="{{ route('logout.all') }}">
        @csrf
        <button type="submit">Завершить все сессии</button>
    </form>
    <form method="POST" action="{{ route('logoutAll.NotOne') }}">
        @csrf
        <button type="submit">Зевершить все кроме этой сессии</button>
    </form>


@endsection
