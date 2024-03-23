<x-app-layout>
    <div>
        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
            <div class="col-span-11">

            </div>

        <div class="col-span-1 pt-6">
            <a href="http://localhost/admin/comment">
                <button type="submit" class=" text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-1 rounded justify-items-end">コメント確認</button>
            </a>
        </div>
    </div>

{{-- 基本情報/職務経歴の選択 --}}
<div class="container mx-auto grid grid-cols-12 ">
    <a href="http://localhost/admin/dashboard">
        <div id="basic" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide ">基本情報</div>
        </div>
    </a>
    <a href="http://localhost/admin/detail">
        <div id="detail" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">職務経歴</div>
        </div>
    </a>
</div>

{{-- プロフィール基本情報 --}}
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

</x-app-layout>
