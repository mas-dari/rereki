{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-6">
        
        @if (session('message'))
        <div class="text-red-600 font-bold">
            {{ session('message') }}
        </div>
        @endif

        <form method="post" action="{{route('post.store')}}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col"></div>
                <label for="name" class="font-semibold mt-4">件名</label>
                <input type="text" name="name" id="name" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
            </div>

            <div>
                <label for="content" class="font-semibold mt-4">内容</label>
                <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5"></textarea>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout> --}}

@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            基本情報の登録
        </h2>
    </x-slot>

    <div>
        @if (session('message'))
        <div class="text-red-800">
            {{ session('message') }}
        </div>
        @endif
        
        <form method="post" action="{{route('post.store')}}">
            @csrf
                <div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <label>名前</label><br>
                        <input name="name" wire:model="name" type="text" class="w-1/4" />
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                        <label>ふりがな</label><br>
                        <input name="furigana" wire:model="furigana" type="text" class="w-1/4" />
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <label>生年月日</label><br>
                        <input name="date"  type="date" class="w-1/4" />
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <label>住所</label><br>
                        <input name="adress" wire:model="adress" type="text" class="w-1/2" />
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <label>電話番号</label><br>
                        <input name="tel" wire:model="tel" type="tel" class="w-1/4" />
                    </div>

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <label>メールアドレス</label><br>
                        <input name="email" wire:model="email" type="email" class="w-1/4" />
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            保存して次へ
                        </button>
                    </div>
                </div>
        </form>
    <div>
</x-app-layout>