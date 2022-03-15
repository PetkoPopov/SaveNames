@extends('layouts.app')
<div class="container-fluid">
    <div class="row">
        @if(isset($msg))
        {{$msg}}
        @else
        <div class="col">
            до днес {{$kwToday[0]->date}} потреблението е {{$kwToday[0]->kw}} 
            <p>-------------------------</p>

            последния ден на отчитане е  {{$prevDate[0]->date}} до тогава е имало потребление {{$prevDate[0]->kw}}
            <p>
        </div>
        <div class="col">
            разликата в потреблението е <h2>{{$total}}</h2> [kw]
            </p>
            @endif
        </div>
    </div><!-- comment -->
</div>
<div>
    <a href="/kw/create" class="btn btn-info" role="button">Въведи данни</a><!-- comment -->
    ==========
    <a href="/kw/calc" class="btn btn-info" role="button">избери ден</a>
    ==========

    <a href="/showForMonth" class="btn btn-info" role="button">избери месец</a>
    ==========<!-- comment -->
    <a href="/kw/period"class="btn btn-info" role="button">избери период </a><!-- comment -->
    ===========<!-- comment -->
    <a href="/kw/0" class="btn btn-info" role="button"> покажи всички записи</a>
</div>