@extends('layouts.app')
<div>
<h4>PAGE Number </h4> 
@foreach( $kws as $k )
<h3>{{$k->id}}___{{$k->kw}}</h3>

@endforeach


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
 <p>PAGES
<span>{{$kws->links()}}</span> 
 </p>
