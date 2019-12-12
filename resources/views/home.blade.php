@extends('layout')

@section('title')
Home
@endsection

@section('content')
  <h1> welcome! </h1>
@endsection

@section('data')
<ul>
<?php foreach ($tasks as $task): ?>
  <li>{{$task}}</li>
<?php endforeach; ?>
</ul>
@endsection
