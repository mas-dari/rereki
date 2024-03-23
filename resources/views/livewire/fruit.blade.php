@vite(['resources/css/app.css', 'resources/js/app.js'])

<div>
    <form wire:submit.prevent="submit">
        @csrf
            <div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                    <label for="name">名前</label><br>
                    <input wire:model="name" type="text" class="w-1/4" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                    <label for="furigana">ふりがな</label><br>
                    <input wire:model="furigana" type="text" class="w-1/4" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label for="date">生年月日</label><br>
                    <input wire:model="date" type="date" class="w-1/4" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label for="adress">住所</label><br>
                    <input wire:model="adress" type="text" class="w-1/2" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label for="tel">電話番号</label><br>
                    <input wire:model="tel" type="tel" class="w-1/4" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label for="email">メールアドレス</label><br>
                    <input wire:model="email" type="email" class="w-1/4" />
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        保存して次へ
                    </button>
                </div>
            </div>
        </form>
    <div>

        
            {{-- 保存後のメッセージ表示箇所 --}}
            @if (session()->has('message'))
            <div class="text-red-800">
                {{ session('message') }}
            </div>
            @endif
