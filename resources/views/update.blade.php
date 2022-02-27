
    <form action="update" method='post'>
        
        @csrf
    <p></p>
    NAME:
    <input type='text' name='name' value="{{$name->name}}" />
    <p></p>
    EXPL:
    <input type='text' name='explenation' value="{{$name->explenation}}"/>
    <p></p>
    OCUPA:
    <input type='text' name='ocupation' value="{{$name->ocupation}}"/>
    <p></p>
    Quote:
    <input type='text' name='quote' value="{{$name->quote}}"/>
    <p></p>
    AGE:
    <input type='number' name='age' value="{{$name->age}}"/>
    <p></p>
    <input type="hidden" name="id" value="{{$name->id}}"/>
        <input type="submit" value="XCUTTER"/>
    
</form>