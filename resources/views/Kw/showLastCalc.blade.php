@if(isset($msg))
{{$msg}}
@else
до днес {{$kwToday[0]->date}} потреблението е {{$kwToday[0]->kw}} 
<p>-------------------------</p>

последния ден на отчитане е  {{$prevDate[0]->date}} до тогава е имало потребление {{$prevDate[0]->kw}}
<p>
    разликата в потреблението е <h2>{{$total}}</h2> [kw]
</p>
@endif
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