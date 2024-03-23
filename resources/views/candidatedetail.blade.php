@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div></div>
    <div>
        <h1 class="" >田中 太郎 様</h1>
    </div>

    <div>
        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
            <div class="col-span-11">

            </div>

        <div class="col-span-1">
            <a href="/commentdetail">
                <button type="submit" class=" text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-1 rounded justify-items-end">コメント追加</button>
            </a>
        </div>
    </div>
@stop

@section('content')
{{-- 背景適応 --}}
<div style="background: #f4f6f9;">
{{-- 背景適応 --}}

{{-- 基本情報/職務経歴の選択 --}}
<div class="container mx-auto max-w-full grid grid-cols-12">
    <a href="http://localhost/candidate">
        <button id="basic" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-sm font-normal font-['Noto Sans JP'] tracking-wide ">基本情報</div>
        </button>
    </a>
    <a href="http://localhost/candidatedetail">
        <button id="detail" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-sm font-normal font-['Noto Sans JP'] tracking-wide">職務経歴</div>
        </button>
    </a>
</div>

{{-- ここから下がコンテンツ部分 --}}

{{-- 企業1基本情報 --}}
<div>
    <div class="container mx-auto min-h-[10px]">
        <div class=" bg-white  border">
            <div class="px-4 py-4 border-l-4 border-secondary">
                <div>
                    <div class="flex items-center ">
                        <p class="text-bace font-bold">株式会社○○○○○</p>
                        <p class="pl-4">2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>現在</p>
                        <p class="pl-4"><p>雇用形態：</p><p>正社員</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">事業内容：</p><p class="my-0 py-0">インターネットサービスの開発、運営</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">資本金：</p><p class="my-0 py-0">1000万円</p>
                        <p class="my-0 py-0"><p class="pl-4 my-0 py-0">従業員数：</p><p class="my-0 py-0">100</p><p class="my-0 py-0">人</p>
                    </div>

                    <div class="flex items-center">
                        <p class="my-0 py-0">HP:</p>
                        <p class="my-0 py-0">
                            <a href="https://gsacademy.jp/">https://gsacademy.jp/</a>  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 企業1-プロジェクト1 --}}
    <div class="mt-1">
        <div class="container mx-auto min-h-[10px] ">
            <div class="bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2022</p><p>年</p><p>01</p><p>月〜</p><p>現在</p><p>）</p>
                        <p>人事本部・人事部・人材開発グループ・リーダー</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            新卒採用計画立案、面接官、面接評価、内定者フォロー<br>
                            <br>
                            ・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br>
                            ・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。
                        </p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    {{-- 企業1-プロジェクト2 --}}
    <div class="mt-1">
        <div class="container mx-auto min-h-[10px] ">
            <div class=" bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2021</p><p>年</p><p>01</p><p>月〜</p<p>2021</p><p>年</p><p>12</p><p>月</p><p>）</p>
                        <p>人事本部・人事部・労務管理グループ</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            ・150名の給与計算業務<br>
                            ・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br>
                            ・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br>
                            ・労基署対応（是正等届け出）
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- 企業2基本情報 --}}
<div>
    <div class="container mx-auto min-h-[10px] pt-4">
        <div class=" bg-white border">
            <div class="px-4 py-4 border-l-4 border-secondary">
                <div>
                    <div class="flex items-center ">
                        <p class="text-bace font-bold">株式会社○○○○○</p>
                        <p class="pl-4">2019</p><p>年</p><p>12</p><p>月〜</p><p>2020</p><p>年</p><p>12</p><p>月
                        <p class="pl-4"><p>雇用形態：</p><p>正社員</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">事業内容：</p><p class="my-0 py-0">インターネットサービスの開発、運営</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">資本金：</p><p class="my-0 py-0">1000万円</p>
                        <p class="my-0 py-0"><p class="pl-4 my-0 py-0">従業員数：</p><p class="my-0 py-0">100</p><p class="my-0 py-0">人</p>
                    </div>

                    <div class="flex items-center">
                        <p class="my-0 py-0">HP:</p>
                        <p class="my-0 py-0">
                            <a href="https://gsacademy.jp/">https://gsacademy.jp/</a>  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- 企業2-プロジェクト1 --}}
    <div class="mt-1">
        <div class="container mx-auto min-h-[10px] ">
            <div class=" bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2020</p><p>年</p><p>06</p><p>月〜</p<p>2020</p><p>年</p><p>12</p><p>月</p><p>）</p>
                        <p>人事本部・人事部・人材開発グループ・リーダー</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            新卒採用計画立案、面接官、面接評価、内定者フォロー<br>
                            <br>
                            ・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br>
                            ・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。
                        </p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    {{-- 企業2-プロジェクト2 --}}
    <div>
        <div class="container mx-auto min-h-[10px] ">
            <div class=" bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2019</p><p>年</p><p>12</p><p>月〜</p<p>2020</p><p>年</p><p>05</p><p>月</p><p>）</p>
                        <p>人事本部・人事部・労務管理グループ</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            ・150名の給与計算業務<br>
                            ・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br>
                            ・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br>
                            ・労基署対応（是正等届け出）
                        </p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

{{-- 企業3基本情報 --}}
<div>
    <div class="container mx-auto min-h-[10px] pt-4">
        <div class=" bg-white border">
            <div class="px-4 py-4 border-l-4 border-secondary">
                <div>
                    <div class="flex items-center ">
                        <p class="text-bace font-bold">株式会社○○○○○</p>
                        <p class="pl-4">2019</p><p>年</p><p>04</p><p>月〜</p><p>2019</p><p>年</p><p>06</p><p>月
                        <p class="pl-4"><p>雇用形態：</p><p>正社員</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">事業内容：</p><p class="my-0 py-0">インターネットサービスの開発、運営</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="my-0 py-0">資本金：</p><p class="my-0 py-0">1000万円</p>
                        <p class="my-0 py-0"><p class="pl-4 my-0 py-0">従業員数：</p><p class="my-0 py-0">100</p><p class="my-0 py-0">人</p>
                    </div>

                    <div class="flex items-center">
                        <p class="my-0 py-0">HP:</p>
                        <p class="my-0 py-0">
                            <a href="https://gsacademy.jp/">https://gsacademy.jp/</a>  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- 企業3-プロジェクト1 --}}
    <div class="mt-1">
        <div class="container mx-auto min-h-[10px] ">
            <div class=" bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2019</p><p>年</p><p>05</p><p>月〜</p<p>2019</p><p>年</p><p>06</p><p>月</p><p>）</p>
                        <p>人事本部・人事部・人材開発グループ・リーダー</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            新卒採用計画立案、面接官、面接評価、内定者フォロー<br>
                            <br>
                            ・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br>
                            ・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。
                        </p>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    {{-- 企業3-プロジェクト2 --}}
    <div class="mt-1">
        <div class="container mx-auto min-h-[10px]">
            <div class=" bg-white px-4 py-4 border ml-1">
                <div>
                    <div class="flex items-center border-b">
                        <p>（</p><p>2019</p><p>年</p><p>04</p><p>月〜</p<p>2019</p><p>年</p><p>05</p><p>月</p><p>）</p>
                        <p>人事本部・人事部・労務管理グループ</p>
                    </div>

                    <div class="flex items-center ">
                        <p class="px-2 my-0 pt-2">
                            ・150名の給与計算業務<br>
                            ・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br>
                            ・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br>
                            ・労基署対応（是正等届け出）
                        </p>
                    </div>
                    </div>
                </div>
            </div>
    </div>


{{-- 背景適応 --}}
</div>
{{-- 背景適応 --}}

{{-- ここから上がコンテンツ部分 --}}
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')



    <script> console.log('ページごとJSの記述'); </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script>
        $(document).ready(function() {
        $('#basic').click(function() {
            $(this).text('AA');
        });
        $('#detail').click(function() {
            $(this).text('BB');
        });
        });
    </script> --}}

@stop