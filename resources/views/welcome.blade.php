@extends('app')
@section('content')
    <h1 class="heading__primary padding-small text-center margin-bottom-medium">Students</h1>
    <div class="card">
        <img src="https://lorempixel.com/640/480/?29754" alt="" class="card__img">
        <a class="card__description" href="/student/1">
            <span class="card__description--id">1</span>
            <span class="card__description--title">Rahul Ramcharan Bharati</span>
            <span class="card__description--dob">23/04/1998</span>
            <span class="card__description--course">Web Designing</span>
        </a>
    </div>
@endsection
