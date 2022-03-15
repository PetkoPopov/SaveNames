@extends('layouts.app')

<form action="/kw/calcPeriod">
    <p>
   от дата: <input type="date" name="periodStart"/><!-- comment -->
    </p><!-- comment -->
   до  дата: <input type="date"  name="periodEnd"/>
    <input type="submit"/>
    
</form>


<div class="container">
    <div class="row">
        
        <div class="col">
    <a href="/showForMonth" class="btn btn-info" role="button">Избери друг месец</a>
        </div><div class="col">
    <a href="/kw/create" class="btn btn-info" role="button">Въведи данни</a>
        </div><div class="col">
    <a href="/kw/calc" class="btn btn-info" role="button"> покажи за определен ден</a>
</div>
        <div class="col  ">
    <a href="/kw/0" class="btn btn-info" role="button">Покажи всичко</a>
</div>