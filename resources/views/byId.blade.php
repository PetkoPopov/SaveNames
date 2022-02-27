<x-alert/><!-- comment -->
<p>
    {{$name->name}}
</p><p>
    {{    $name->ocupation }}
</p><p>
    {{    $name->explenation }}
</p><p>
    {{  $name->quote }}
</p><p>
    {{    $name->age  }}
</p>
<a href="/update/{{$name->id}}" >Update {{$name->name}}</a>