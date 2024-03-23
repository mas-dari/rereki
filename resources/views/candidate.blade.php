@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <div>
        <h1 class="" >田中 太郎 様</h1>
    </div>


    <div>
        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
            <div class="col-span-11">

            </div>

        <div class="col-span-1">
            <a href="/comment">
                <button type="submit" class=" text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-1 rounded justify-items-end">コメント追加</button>
            </a>
        </div>
    </div>

@stop

@section('content')

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

{{-- プロフィール基本情報 --}}
<div>
    {{-- プロフィールコンテンツ --}}
    <div class="container mx-auto min-h-[10px]">
        <div class=" bg-white px-4 py-4 border">
            <div>
                <div class="flex items-center">
                    <p class="text-lg font-bold">田中 太郎（30歳）</p>
                    <p>1993年12月12日生/男性</p>
                </div>
                <p>〒150-0001<br>東京都渋谷区神宮前6-35-3 JUNCTION harajuku 011</p>
                <p>090-1234-5678</p>
                <p>abcdefghijklmnopqrstuvwsyz@gmail.com</p>
            </div>
        </div>
</div>

{{-- 職務要約 --}}
<div class="mt-2">
    {{-- プロフィールコンテンツ --}}
    <div class="container mx-auto min-h-[10px]">
        <div class=" bg-white px-4 py-4 border">
            <div>
                <div class="flex items-center">
                    <p class="text-bace font-bold">職務要約</p>
                </div>
                <p>株式会社○○○○○に入社後、人事部門に配属となり、主に採用業務を行っています。20xx年以降は教育業務も並行して担当し、研修の運営やカリキュラム策定にも尽力しました。また、採用方針や教育方針の企画・策定業務にも携わり、採用フローの見直しや研修の強化を行い離職率の低減に努めました。加えて、営業向け研修を新たに企画し、営業成績の改善にも貢献しています。</p>
            </div>
        </div>
</div>

{{-- 職歴 --}}
<div class="mt-2">
    {{-- 職歴コンテンツ --}}
    <div class="container mx-auto min-h-[10px]">
        <div class=" bg-white px-4 py-4 border">
            <div class="flex items-center">
                <p class="text-bace font-bold">職歴</p>
            </div>
            <div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>現在　　</p>
                    <p class="pl-4">株式会社○○○○○</p>
                </div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>2021</p><p>年</p><p>01</p>
                    <p class="pl-4">株式会社○○○○○</p>
                </div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>2021</p><p>年</p><p>01</p>
                    <p class="pl-4">株式会社○○○○○</p>
                </div>
            </div>
        </div>
</div>

{{-- 学歴 --}}
<div class="mt-2">
    {{-- 職歴コンテンツ --}}
    <div class="container mx-auto min-h-[10px] ">
        <div class=" bg-white px-4 py-4 border">
            <div class="flex items-center">
                <p class="text-bace font-bold">学歴</p>
            </div>
            <div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>2021</p><p>年</p><p>01</p>
                    <p class="pl-4"><p> ○○○○○大学大学院 ○○○○○学研究科 ○○○○○学専攻修士課程</p>
                </div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>2021</p><p>年</p><p>01</p>
                    <p class="pl-4">○○○○○大学 ○○○○○学部 ○○○○○学科</p>
                </div>
                <div class="flex items-center ">
                    <p>2021</p><p>年</p><p>01</p><p>月</p><p>〜</p><p>2021</p><p>年</p><p>01</p>
                    <p class="pl-4">○○○○○高校○○○○○科</p>
                </div>
            </div>
        </div>
</div>

{{-- 資格 --}}
<div class="mt-2">
    {{-- 資格コンテンツ --}}
    <div class="container mx-auto min-h-[10px] ">
        <div class=" bg-white px-4 py-4 border">
            <div class="flex items-center">
                <p class="text-bace font-bold">資格</p>
            </div>
            <div>
                <div class="flex items-center ">
                    <p>TOEIC 900</p><p>（</p><p>2020</p><p>）</p>
                </div>
                <div class="flex items-center ">
                    <p>実用英語技能検定準1級合格</p><p>（</p><p>2020</p><p>）</p>
                </div>
                <div class="flex items-center ">
                    <p>普通自動車第一種運転免許</p><p>（</p><p>2012</p><p>）</p>
                </div>
            </div>
        </div>
</div>



{{-- 試し編集ここまで --}}



    {{-- <div class="w-auto h-[1303px] relative bg-white">
        <div class="w-auto h-[181px] left-[52px] top-[750px] absolute border border-gray-300">
            <div class="w-[568px] h-[34px] left-[16px] top-[8px] absolute text-sky-950 text-base font-bold font-['Noto Sans JP'] tracking-wide">資格</div>
            <div class="w-[1064px] h-[115px] left-[16px] top-[50px] absolute"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">TOEIC 900（2020）<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">実用英語技能検定準1級合格（2020）<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">普通自動車第一種運転免許（2012）</span></div>
        </div>
        <div class="w-[1096px] h-[181px] left-[52px] top-[561px] absolute border border-gray-300">
            <div class="w-[568px] h-[34px] left-[16px] top-[8px] absolute text-sky-950 text-base font-bold font-['Noto Sans JP'] tracking-wide">学歴</div>
            <div class="w-[1064px] h-[115px] left-[16px] top-[50px] absolute"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2017年04月〜2019年03月     ○○○○○大学大学院 ○○○○○学研究科 ○○○○○学専攻修士課程<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2012年12月〜2017年03月     ○○○○○大学 ○○○○○学部 ○○○○○学科<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2009年04月〜2012年03月     ○○○○○高校 ○○○○○科</span></div>
        </div>
        <div class="w-[1096px] h-[181px] left-[52px] top-[372px] absolute border border-gray-300">
            <div class="w-[568px] h-[34px] left-[16px] top-[8px] absolute text-sky-950 text-base font-bold font-['Noto Sans JP'] tracking-wide">職歴</div>
            <div class="w-[1064px] h-[115px] left-[16px] top-[50px] absolute"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2021年01月〜現在                  株式会社○○○○○<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2019年12月〜2020年12月     株式会社○○○○○<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"><br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2019年04月〜2019年06月     株式会社○○○○○</span></div>
        </div>
        <div class="w-[1096px] h-[135px] left-[52px] top-[229px] absolute border border-gray-300">
            <div class="w-[568px] h-[34px] left-[16px] top-[8px] absolute text-sky-950 text-base font-bold font-['Noto Sans JP'] tracking-wide">職務要約</div>
            <div class="w-[1064px] h-[69px] left-[16px] top-[50px] absolute text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">株式会社○○○○○に入社後、人事部門に配属となり、主に採用業務を行っています。20xx年以降は教育業務も並行して担当し、研修の運営やカリキュラム策定にも尽力しました。また、採用方針や教育方針の企画・策定業務にも携わり、採用フローの見直しや研修の強化を行い離職率の低減に努めました。加えて、営業向け研修を新たに企画し、営業成績の改善にも貢献しています。</div>
        </div>
        <div class="w-[518px] h-[205px] left-[52px] top-[16px] absolute border border-gray-300">
            <div class="w-[568px] left-[16px] top-[166px] absolute text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">abcdefghijklmnopqrstuvwsyz@gmail.com</div>
            <div class="w-[568px] left-[16px] top-[135px] absolute text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">090-1234-5678</div>
            <div class="w-[568px] left-[16px] top-[58px] absolute text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">〒150-0001<br/>東京都渋谷区神宮前6-35-3<br/>JUNCTION harajuku 011</div>
            <div class="w-[486px] h-[34px] left-[16px] top-[16px] absolute"><span style="text-sky-950 text-xl font-bold font-['Noto Sans JP'] tracking-wide">田中 太郎（30歳）</span><span style="text-sky-950 text-xl font-normal font-['Noto Sans JP'] tracking-wide">               </span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">1993年12月12日生/男性</span></div>
        </div>
    </div> --}}

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
            $(this).text('基本情報');
        });
        $('#detail').click(function() {
            $(this).text('BB');
        });
        });
    </script> --}}
@stop