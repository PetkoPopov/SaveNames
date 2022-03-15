
@extends('layouts.app')
<div class="container">
    show period
    <div class="row">
        <div class="col-sm">
            <p><a>последна дата {{$end->date}} с отчетени {{$end->kw}} kw</a>
            </p><!-- comment -->
            <p><a>първата дата {{$start->date}} е с отчетени  {{$start->kw}} kw </a>
            </p>
        </div>
        <div class="col-sm" style="background-color:lavender;"><a> общо {{$total}} kw</a>
        </div>
    </div>
</div>
<div>
    <a href="/kw/create" class="btn btn-info" role="button">Въведи данни</a><!-- comment -->
    ==========
    <a href="/kw/calc" class="btn btn-info" role="button">избери ден</a>
    ==========

    <a href="/showForMonth" class="btn btn-info" role="button">избери месец</a>
    ==========<!-- comment -->
    <a href="/kw/period" class="btn btn-info" role="button">избери период </a><!-- comment -->
    ===========<!-- comment -->
    <a href="/kw/0" class="btn btn-info" role="button"> покажи всички записи</a>
</div>