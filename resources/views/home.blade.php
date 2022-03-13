
@extends('layouts.app')

@section('content')

<div style="background-color: #1299DA" class="container">
    <div class="row">
        <div class="col-md-4">
        <a href="/kw/create"> go to KW insert DATA</a></div>
          <div class="col-md-4"><a href="/names/0/id"> go to Names </a></div>
          <div class="col-md-4"><a href="/worker/all"> work </a></div>
        <div class="card-header">{{ __('Dashboard') }}</div>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @can('create', \App\Model\Worker::class)

        <a href="/worker/new" style='background-color: lightgreen;'> You authorise to create worker</a>

        @endcan

        <div>{{ __('You are logged in!') }}</div>
    </div><!-- comment -->
</div>
@endsection
