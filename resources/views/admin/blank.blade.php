
@extends('layout.mainDashboard')


@section('head')
@include('dashincludes.headPages')
@endsection


@section('sideBar')
@include('dashincludes.sidebar2')

@include('dashincludes.topBar2')
@endsection


@section('content')
@include('dashincludes.blankContent')
@endsection


@section('java')
@include('dashincludes.javaScriptPages')
@endsection



