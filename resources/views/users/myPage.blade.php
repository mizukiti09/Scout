@extends('layouts.app')

@section('content')
<div id="app">
    <my-page-component :cast="{{ $cast }}"></my-page-component>
</div>
@endsection
Ï