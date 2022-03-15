@extends('layouts.app')
@if(isset($msg))
<h2>{{$msg}}</h2>
@else
<div>
    <span>За месец {{$month}} първия запис е на дата {{$dateStart->date}} и е {{$dateStart->kw}} кв</span>
    <p>
        <span>последния запис е на дата {{$dateEnd->date}} и е {{$dateEnd->kw}} кв</span>
    </p>
    <p>
            <span>За месец {{$month}} потреблението е {{$total}} кв</span>

    </p>
    
</div>
@endif
<div>
    <a href="/showForMonth" class="btn btn-info" role="button">Избери друг месец</a>
</div><div>
    <a href="/kw/create" class="btn btn-info" role="button">Въведи данни</a>
</div><div>
    <a href="/kw/calc" class="btn btn-info" role="button"> покажи за определен ден</a>
</div>
<div>
    <a href="/kw/0" class="btn btn-info" role="button">Покажи всичко</a>
</div>