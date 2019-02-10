@extends('photoTemplate')

@section('content')
    <div style="text-align:center">
        <a class="btn btn-primary " href="/LetcurerSchedule" role="button">Для викладачів</a>
        <a class="btn btn-primary " href="/GroupSchedule" role="button">Для студентів </a>
    </div>


    <div style="text-align:center;margin: 30px">
        <form action="/index" method="post">
            @csrf
            <input name="number"  style="width: 10%" placeholder="Введіть номер групи"> <br>
            <br>
            <button type="submit" class="btn btn-primary mb-2 text-center"> Показати розклад </button>
        </form>
    </div>





























@stop