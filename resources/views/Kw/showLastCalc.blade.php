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

<p>
<a href="/kw/calc">new Search</a>
</p>
<p>
    <a href="showForMonth">Montly </a>
</p>

<div>
    <a href="/kw/0">Покажи всичко</a>
</div>