@extends('../../base')
<h4>PAGE Number {{$pageNumber}}</h4> 
@foreach($kwChunk[$pageNumber] as $k)
 <p>
     <a href="/kw/calc">{{$k->date}}____{{$k->kw}}____{{$k->id}}</a>
 </p>
 
 @endforeach
 <div>
     <a href="/kw/create">Въведи данни</a><!-- comment -->
     ==========
     <a href="/kw/calc">избери ден</a>
     ==========
        
     <a href="/showForMonth">избери месец</a>
     ==========<!-- comment -->
     <a href="/kw/period">избери период </a><!-- comment -->
     ===========<!-- comment -->
     <a href="/kw/0"> покажи всички записи</a>
      </div>
 <p>PAGES
  @for($i=0;$i<$pages;$i++)
  <a href="/kw/{{$i}}"><small>_/_{{$i}}_/_</small></a>
  @endfor
 </p>
