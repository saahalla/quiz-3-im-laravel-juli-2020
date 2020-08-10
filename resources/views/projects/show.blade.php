@extends('layouts.master')
@section('content')
<div class="mt-3 ml-3 mr-3">
    <h4> {{$project->nama}} </h4>
    <p> {{$project->deskripsi}} </p>
    <p> {{$project->tanggal_mulai}} </p>
    <p> {{$project->tanggal_deadline}} </p>
    <p> {{$project->status}} </p>
</div>
@endsection