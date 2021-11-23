@extends('layouts.app')

@section('content')
<div id="app">
    <my-page-component 
    :not_decided="{{ $not_d_cast }}"
    :decided="{{ $d_cast }}"
    ></my-page-component>

</div>

@endsection
