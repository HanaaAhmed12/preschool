@extends('layout.mainDashboard')

@section('head')
@include('dashincludes.head')
@endsection


@section('sideBar')
@include('dashincludes.sidebar2')
@include('dashincludes.topBar2')
@endsection

       @section('content')
       @include('dashincludes.chartsContent')
       @endsection

@section('java')
@include('dashincludes.javaScript2')
@endsection



