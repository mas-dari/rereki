<x-app-layout>
{{-- ここから下に書く --}}

<div>
    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-11">
        </div>

    <div class="col-span-1 pt-6">
        <a href="/admin/detail">
            <button type="submit" class=" text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-1 rounded justify-items-end">コメント終了</button>
        </a>
    </div>
</div>

{{-- 基本情報/職務経歴の選択 --}}
<div class="container mx-auto grid grid-cols-12 ">
    <a href="/admin/comment">
        <div id="basic" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide ">基本情報</div>
        </div>
    </a>
    <a href="/admin/commentdetail">
        <div id="detail" class="w-auto h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
            <div class="w-auto text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">職務経歴</div>
        </div>
    </a>
</div>
{{-- 企業1情報 --}}
<div>
    {{-- 企業1情報 --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white border">
            <div class="px-4 py-4 border-l-4 border-gray-500">
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

    {{-- 企業1情報コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        {{-- <form method="post" action="{{route('comment.store')}}">
            @csrf
            @if (isset($comments['profile']) && count($comments['profile']) > 0)
                <ul>
                    @foreach ($comments['profile'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['aprofile']) && count($comments['aprofile']) > 0)
                <ul>
                    @foreach ($comments['aprofile'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="profile">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
            
        </form> --}}
    </div>
</div>


{{-- 企業1-プロジェクト1 --}}
<div class="mt-1">
    {{-- 企業1-プロジェクト1コンテンツ --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
    {{-- 企業1-プロジェクト1コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj11']) && count($comments['pj11']) > 0)
                <ul>
                    @foreach ($comments['pj11'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj11']) && count($comments['apj11']) > 0)
                <ul>
                    @foreach ($comments['apj11'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj11">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>

  {{-- 企業1-プロジェクト2 --}}
<div class="mt-1">
     {{-- 企業1-プロジェクト2コンテンツ --}}
     <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
     {{-- 企業1-プロジェクト2コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj12']) && count($comments['pj12']) > 0)
                <ul>
                    @foreach ($comments['pj12'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj12']) && count($comments['apj12']) > 0)
                <ul>
                    @foreach ($comments['apj12'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj12">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>

{{-- 企業2情報 --}}
<div>
    {{-- 企業2情報 --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12 pt-4">
        <div class="col-span-9 bg-white border">
            <div class="px-4 py-4 border-l-4 border-gray-500">
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

    {{-- 企業2情報コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        {{-- <form method="post" action="{{route('comment.store')}}">
            @csrf
            @if (isset($comments['profile']) && count($comments['profile']) > 0)
                <ul>
                    @foreach ($comments['profile'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['aprofile']) && count($comments['aprofile']) > 0)
                <ul>
                    @foreach ($comments['aprofile'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="profile">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
            
        </form> --}}
    </div>
</div>


{{-- 企業2-プロジェクト1 --}}
<div class="mt-1">
    {{-- 企業1-プロジェクト1コンテンツ --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
    {{-- 企業2-プロジェクト1コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj21']) && count($comments['pj21']) > 0)
                <ul>
                    @foreach ($comments['pj21'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj21']) && count($comments['apj21']) > 0)
                <ul>
                    @foreach ($comments['apj21'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj21">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>

  {{-- 企業2-プロジェクト2 --}}
<div class="mt-1">
     {{-- 企業2-プロジェクト2コンテンツ --}}
     <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
     {{-- 企業2-プロジェクト2コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj22']) && count($comments['pj22']) > 0)
                <ul>
                    @foreach ($comments['pj22'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj22']) && count($comments['apj22']) > 0)
                <ul>
                    @foreach ($comments['apj22'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj22">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>

{{-- 企業3情報 --}}
<div>
    {{-- 企業3情報 --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12 pt-4">
        <div class="col-span-9 bg-white border">
            <div class="px-4 py-4 border-l-4 border-gray-500">
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

    {{-- 企業3情報コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        {{-- <form method="post" action="{{route('commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj11']) && count($comments['pj11']) > 0)
                <ul>
                    @foreach ($comments['pj11'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj11']) && count($comments['apj11']) > 0)
                <ul>
                    @foreach ($comments['apj11'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="apj11">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form> --}}
    </div>
</div>


{{-- 企業3-プロジェクト1 --}}
<div class="mt-1">
    {{-- 企業3-プロジェクト1コンテンツ --}}
    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
    {{-- 企業3-プロジェクト1コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj31']) && count($comments['pj31']) > 0)
                <ul>
                    @foreach ($comments['pj31'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj31']) && count($comments['apj31']) > 0)
                <ul>
                    @foreach ($comments['apj31'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj31">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>

  {{-- 企業3-プロジェクト2 --}}
<div class="mt-1">
     {{-- 企業1-プロジェクト2コンテンツ --}}
     <div class="container mx-auto min-h-[10px] grid grid-cols-12">
        <div class="col-span-9 bg-white px-4 py-4 border ml-1">
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
     {{-- 企業3-プロジェクト2コメント --}}
    <div class="col-span-3 bg-gray-200 px-2 py-4 border">
        <form method="post" action="{{route('admin.commentdetail.store')}}">
            @csrf
            @if (isset($comments['pj32']) && count($comments['pj32']) > 0)
                <ul>
                    @foreach ($comments['pj32'] as $comment)
                    <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                        <div class="col-span-11 bg-white px-2 mb-2  rounded ">
                            <ul class="text-sm flex items-center border-b"style="margin: 0;"> from {{$comment->user->name}}</ul>
                            <ul>{{ $comment->comment }}</;>
                        </div>
                    </div>
                    @endforeach
                </ul>
            @else
            @endif

            @if (isset($comments['apj32']) && count($comments['apj32']) > 0)
                <ul>
                    @foreach ($comments['apj32'] as $comment)
                        <div class="container mx-auto min-h-[10px] grid grid-cols-12">
                                <div class="col-span-1">
                        </div>
                        <div class="col-span-11 bg-blue-50 px-2 mb-2 rounded">
                            <ul class="text-sm border-b text-right justify-items-end"style="margin: 0;"> from {{$comment->admin->name}}</ul>
                            <ul>{{ $comment->comment }}</ul>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
            @endif

            <textarea name="comment" placeholder="コメントを入力してください" class="w-full h-30 border rounded-lg  text-gray-700"></textarea>
            <input type="hidden" name="commentType" value="pj32">
            <button type="submit" class="text-[min(13vw,14px)] bg-gray-500 hover:bg-gray-700 text-white py-1 px-1 rounded">保存する</button>
        </form>
    </div>
</div>


{{-- ここから上がコンテンツ部分 --}}
</x-app-layout>
