<ol>
@foreach($workers as $worker )
<p>
    @can('view', $worker)
<li>{{$worker->location }}----{{$worker->date}}---{{$worker->expl}}---{{$worker->wage}}---<a href="/worker/delete/{{$worker->id}}">delete worker</a></li>
     @endcan
</p>
@endforeach
</ol>
<a href="/home">go to new worker </a>