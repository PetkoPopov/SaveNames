@extends('layouts.app')
<form action="/kw/calcForMonth" >
   <label> Избери Месец </label>
   <input type="month" name="month"/>
    <input type="submit" value="show"/>        
    
    
    
</form>
 <div>
     <a href="/kw/create" class="btn btn-info" role="button">Въведи данни</a><!-- comment -->
     ==========
     <a href="/kw/calc" class="btn btn-info" role="button">избери ден</a>
     ==========
        
     <a href="/showForMonth" class="btn btn-info" role="button">избери месец</a>
     ==========<!-- comment -->
     <a href="/kw/period" class="btn btn-info" role="button">избери период </a><!-- comment -->
     ===========<!-- comment -->
     <a href="/kw/0" class="btn btn-info" role="button"> покажи всички записи</a>
      </div>