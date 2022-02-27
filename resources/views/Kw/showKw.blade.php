<h4>PAGE Number {{$pageNumber}}</h4> 
@foreach($kwChunk[$pageNumber] as $k)
 <p>
 {{$k->date}}____{{$k->kw}}____{{$k->id}}
 </p>
 
 @endforeach
 <div>
     <a href="/kw/create">Insert new Data</a><!-- comment -->
     ===============
     <a href="/kw/calc"> go to Search Date</a>
 </div>
 <p>PAGES
  @for($i=0;$i<$pages;$i++)
  <a href="/kw/{{$i}}"><small>_/_{{$i}}_/_</small></a>
  @endfor
 </p>