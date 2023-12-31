@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="container">
        <h1>Контент</h1>
        @auth
            <p class="m-0">Автаризован</p>
            <p class="m-0">{{ Auth::user()->email }}</p>
        @endauth

        @guest('web')
            <p class="m-0">Не Автаризован</p>
        @endguest
    </div>

@endsection
