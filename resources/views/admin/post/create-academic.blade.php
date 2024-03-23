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
            学歴の登録
        </h2>
    </x-slot>

    <div>
        @if (session('message'))
        <div class="text-red-800">
            {{ session('message') }}
        </div>
        @endif
        
        <form method="post" action="{{route('post.academic')}}">
            @csrf
            {{-- 高校入力 --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                <h1>高校情報の入力</h1>
            </div>

            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>入学年</label><br>
                    <input name="HighSchoolAdmission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>入学月</label><br>
                    <input name="HighSchoolAdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>卒業年</label><br>
                    <input name="HighSchoolEntrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>卒業月</label><br>
                    <input name="HighSchoolEntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>高校名</label><br>
                    <input name="HighSchoolName" wire:model="HighSchoolName" type="text" class="w-1/4" />
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>学部 学科名</label><br>
                    <input name="HighSchoolDepartment" wire:model="HighSchoolDepartment" type="text" class="w-1/4" />
                </div>
            </div>

            {{-- 大学入力 --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                <h1>大学情報の入力</h1>
            </div>

            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>入学年</label><br>
                    <input name="UniversityAdmission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>入学月</label><br>
                    <input name="UniversityAdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>卒業年</label><br>
                    <input name="UniversityEntrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>卒業月</label><br>
                    <input name="UniversityEntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>大学名</label><br>
                    <input name="UniversityName" wire:model="UniversityName" type="text" class="w-1/4" />
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>学部 学科名</label><br>
                    <input name="UniversityDepartment" wire:model="UniversityDepartment" type="text" class="w-1/4" />
                </div>
            </div>

            {{-- 大学院入力 --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                <h1>大学院情報の入力</h1>
            </div>

            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>入学年</label><br>
                    <input name="GraduateAdmission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>入学月</label><br>
                    <input name="GraduateAdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>卒業年</label><br>
                    <input name="GraduateEntrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>卒業月</label><br>
                    <input name="GraduateEntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>大学院名</label><br>
                    <input name="GraduateName" wire:model="GraduateName" type="text" class="w-1/4" />
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>学部 学科名</label><br>
                    <input name="GraduateDepartment" wire:model="GraduateDepartment" type="text" class="w-1/4" />
                </div>
            </div>

                {{-- 送信ボタン --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            保存して次へ
                        </button>
                    </div>
                </div>
        </form>
    <div>
</x-app-layout>