@extends('layouts.app')

    <form action="/calculate">

        <div class="row">
          
        <div class="col-sm bg-warning">Insert Date:
         <input type="date" name="date"  />
        </div>

        <div class="col-sm">    <input type="submit" class="btn btn-dark"/> 
        </div>


    </form>
</div>
<div class="row">
    <div class="col-sm">
        <a href="/kw/0" class="btn btn-info" role="button">Покажи всичко</a>
    </div><!-- comment -->
    <div class="col-sm">
        <a href="/showForMonth" class="btn btn-info" role="button">Montly</a>
    </div>
</div>