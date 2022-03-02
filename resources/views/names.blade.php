<div style="display:flow;flex-flow: wrap">
   
        <a style='background-color: yellow;' href="/names/sortByAge/{{$page}}">sort by Age</a>
        <a style='background-color: yellow;' href="/names/sortById/{{$page}}">sort by Id</a>
        <a style='background-color: yellow;' href="/names/sortByName/{{$page}}">sort by Name</a>
        <a style='background-color: yellow;' href="/names/sortByOcupation/{{$page}}">sort by Ocupation</a>
        <a style='background-color: yellow;' href="create">Add new name</a>
        <div>Pages
        @for($p= 0 ; $p<$pages;$p++ )
        <a href="/names/{{$p}}"> /--{{$p}}--/ </a>      
        @endfor
        </div>
</div>
<p></p>
<div>
@foreach( $allNames as $name )

<center><a href="/name/{{ $name->id }}">{{$name->name}}---age are {{$name->age}}---ocupation  {{$name->ocupation}}---{{$name->id}}</a></center>
<br>
@endforeach
</div>
<div>Pages
    @for($p= 0 ; $p<$pages;$p++ )<!-- comment -->
    @if(isset($sortBy))
    
        <a href="/names/{{$sortBy}}/{{$p}}"> /--{{$p}}--/ </a>      
        
    @else
    
        <a href="/names/{{$p}}"> /--{{$p}}--/ </a>      
        
    @endif
         
        @endfor
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