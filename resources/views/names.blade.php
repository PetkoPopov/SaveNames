<div style="display:flow;flex-flow: wrap">
   
        <a style='background-color: yellow;' href="sortByAge">sort by Age</a>
        <a style='background-color: yellow;' href="sortById">sort by Id</a>
        <a style='background-color: yellow;' href="sortByName">sort by Name</a>
        <a style='background-color: yellow;' href="sortByOcupation">sort by Ocupation</a>
   
</div>
<p></p>
<div>
@foreach( $allNames as $name )
<center><a href="/age">{{$name}}</a></center>
<br>

@endforeach
</div>