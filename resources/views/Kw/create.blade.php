@if(isset($msg))
{{$msg}}
<form  method="post" action="store">
        @csrf
    <p>
        input KW:
    <input type="text" name="kw" value="{{$kw}}"/>
    </p><!-- comment -->
    <p>  input DATE:
        <input type="date" name="date" /></p><!-- comment -->
    <p>
        <input type="submit" value="calc"/>
    </p>
        
    
    
</form>
@else
<form  method="post" action="store">
        @csrf
    <p>
        input KW:
    <input type="text" name="kw" value="1"/>
    </p><!-- comment -->
    <p>  input DATE:
        <input type="date" name="date" /></p><!-- comment -->
    <p>
        <input type="submit" value="calc"/>
    </p>
        
    
    
</form>
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