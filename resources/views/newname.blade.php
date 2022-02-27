<form action="create" method='post'>
    @csrf
    <p></p>
    NAME:
    <input type='text' name='name'/>
    <p></p>
    EXPL:
    <input type='text' name='explenation'/>
    <p></p>
    OCUPA:
    <input type='text' name='ocupation'/>
    <p></p>
    Quote:
    <input type='text' name='quote'/>
    <p></p>
    AGE:
    <input type='number' name='age'/>
    <p></p>
    <input type="submit" value="XCUTTER"/>    
</form>
<div>
     <a href="names">All Names</a></div>