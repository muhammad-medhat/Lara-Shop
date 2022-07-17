
@extends('layout')

@section('content')
<h3>single category</h3>
    <x-category-card :category="$category" />
@endsection
