@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>田中 太郎</h1>
@stop

@section('content')

{{-- ここから下がコンテンツ部分 --}}

<div>
    <h2>{{ $count }}</h2>
  <button class="increment">+</button>
  <button class="decrement">-</button>
</div>


{{-- ここから上がコンテンツ部分 --}}
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')

    <script> console.log('ページごとJSの記述'); </script>
    <script>
      $(document).ready(function() {
        var count = 0;
      
        $('.increment').click(function() {
          count++;
          $('h2').text(count);
        });
      
        $('.decrement').click(function() {
          count--;
          $('h2').text(count);
        });
      });
      </script>
@stop