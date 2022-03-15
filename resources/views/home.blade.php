
@extends('layouts.app')

@section('content')

<div style="background-color: #1299DA" class="container">
    <div class="row">

        <a href="/kw/create"  class="btn btn-info" role="button"> go to KW insert DATA</a>
        <a href="/names/0/id" class="btn btn-info" role="button"> go to Names </a>
        <a href="/worker/all" class="btn btn-info" role="button"> work </a>
        <div class="card-header">{{ __('Dashboard') }}</div>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @can('create', \App\Model\Worker::class)

        <a href="/worker/new" class="btn btn-success" role="button"> You authorise to create worker</a>

        @endcan

        <div>{{ __('You are logged in!') }}</div>
    </div><!-- comment -->
</div>
@endsection
