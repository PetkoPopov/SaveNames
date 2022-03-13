
<div>
<h4>PAGE Number </h4> 
@foreach( $kws as $k )
<h3>{{$k->id}}___{{$k->kw}}</h3>

@endforeach


</div>
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
<span>{{$kws->links()}}</span> 
 </p>
