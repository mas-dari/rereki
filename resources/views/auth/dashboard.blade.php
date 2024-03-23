{{-- <x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Candidateのダッシュボード
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-white">Candidateのダッシュボード</h1>
                    {{ __("You're logged in!") }}

                    <div>{{ Auth::user()->name }}</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 >候補者一覧</h1>
@stop

@section('content')


<div class="card">
    <div class="card-container" style="display: flex; font-weight: bold; ">
        <div class="card-body custom-spacing" style="margin: 0 0 0 0">候補者ID</div>
        <div class="card-body custom-spacing" style="margin: 0 0 0 0px">候補者氏名</div>
        <div class="card-body custom-spacing" style="margin: 0 0 0 25%">ステータス</div>
        <div class="card-body custom-spacing" style="margin: 0 0 0 0">確認期限</div>
        <div class="card-body custom-spacing" style="margin: 0 0 0 0%">担当者</div>

    </div>  
    <a href="/admin/candidate" style="color: inherit;">
        <div class="card-container" style="display: flex; border: 1px solid #ddd;">
            <div class="card-body custom-spacing" style="margin: 0 0 0 0">000001</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 0px">田中 太郎ああああ</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 25%">完了</div>  
            <div class="card-body custom-spacing" style="margin: 0 0 0 0">2024年1月1日</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 0%">田中 太郎</div>
        </div>
    </a>

    <a href="/admin/candidate" style="color: inherit;">
        <div class="card-container" style="display: flex; border: 1px solid #ddd;">
            <div class="card-body custom-spacing" style="margin: 0 0 0 0">000001</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 0px">田中 太郎ああああ</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 25%">完了</div>  
            <div class="card-body custom-spacing" style="margin: 0 0 0 0">2024年1月1日</div>
            <div class="card-body custom-spacing" style="margin: 0 0 0 0%">田中 太郎</div>
        </div>
    </a>



</div>
</div>

@stop

@section('js')
    <script> console.log('ページごとJSの記述'); </script>
@stop