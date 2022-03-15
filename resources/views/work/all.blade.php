
@extends('layouts.app')<!-- comment -->
<ol>
@foreach($workers as $worker )
<p>
    @can('view', $worker)
<li>{{$worker->location }}----{{$worker->date}}---{{$worker->expl}}---{{$worker->wage}}---
    <a role="button" href="/worker/delete/{{$worker->id}}" class="btn btn-danger">delete worker</a></li>
     @endcan
</p>
@endforeach
</ol>
<a href="/home" type="button" class="btn btn-outline-light">go to new worker </a>