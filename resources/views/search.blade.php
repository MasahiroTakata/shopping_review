@extends('layouts.default')
@section('title', '検索結果')
@section('css')
@endsection
@section('content')
{{ csrf_field() }}
{{$data}}
@endsection