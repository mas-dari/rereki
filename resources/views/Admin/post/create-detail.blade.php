@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            職歴の登録
        </h2>
    </x-slot>

    <div>
        @if (session('message'))
        <div class="text-red-800">
            {{ session('message') }}
        </div>
        @endif
{{--         
        'CompanyName',
        'CompanyAdmission',
        'CompanyAdmissionMonth',
        'CompanyEntrance',
        'CompanyEntranceMonth',
        'BusinessContent',
        'EmploymentStatus',
        'capital',
        'NumberOfEmployees',
        'HP',
        'ProjectAdmission',
        'ProjectAdmissionMonth',
        'ProjectEntrance',
        'ProjectEntranceMonth',
        'ProjectName',
        'ProjectContent',
        'Project2Admission',
        'Project2AdmissionMonth',
        'Project2Entrance',
        'Project2EntranceMonth',
        'Project2Name',
        'Project2Content',
        'Project3Admission',
        'Project3AdmissionMonth',
        'Project3Entrance',
        'Project3EntranceMonth',
        'Project3Name',
        'Project3Content'

         --}}
        
        <form method="post" action="{{route('post.detail')}}">
            @csrf
            {{-- 高校入力 --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                <h1>職務経歴1</h1>
            </div>

            <div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>企業名</label><br>
                    <input name="CompanyName" wire:model="CompanyName" type="text" class="w-1/4" />
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>入社年</label><br>
                    <input name="CompanyAdmission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>入社月</label><br>
                    <input name="CompanyAdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>退社年</label><br>
                    <input name="CompanyEntrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>退社月</label><br>
                    <input name="CompanyEntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>事業内容</label><br>
                    <input name="BusinessContent" wire:model="BusinessContent" type="text" class="w-1/2" />
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                        <label>雇用形態</label><br>
                        <input name="EmploymentStatus" type="text" class="w-1/8" />
                    </div>
                    <div>
                        <label>資本金</label><br>
                        <input name="capital" type="text" class="w-1/8" />
                    </div>
                    <div>
                        <label>従業員数</label><br>
                        <input name="NumberOfEmployees" type="text" class="w-1/8" />
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>ホームページ</label><br>
                    <input name="HP" wire:model="HP" type="url" class="w-1/2" />
                </div>
            </div>

                {{-- プロジェクト --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                    <h1>職務経歴1-プロジェクトまたは業務 1</h1>
                </div>
            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>開始年</label><br>
                    <input name="ProjectAdmission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>開始月</label><br>
                    <input name="ProjectAdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>終了年</label><br>
                    <input name="ProjectEntrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>終了月</label><br>
                    <input name="ProjectEntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトまたは業務名</label><br>
                    <input name="ProjectName" wire:model="ProjectName" type="text" class="w-1/2" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトや業務内容の説明</label><br>
                    <textarea name="ProjectContent" wire:model="ProjectContent" type="textarea" class="w-1/2" rows="10" ></textarea>
                </div>
            </div>

                 {{-- プロジェクト --}}
                 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                    <h1>職務経歴1-プロジェクトまたは業務 2</h1>
                </div>
            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>開始年</label><br>
                    <input name="Project2Admission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>開始月</label><br>
                    <input name="Project2AdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>終了年</label><br>
                    <input name="Project2Entrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>終了月</label><br>
                    <input name="Project2EntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトまたは業務名</label><br>
                    <input name="Project2Name" wire:model="ProjectName" type="text" class="w-1/2" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトや業務内容の説明</label><br>
                    <textarea name="Project2Content" wire:model="ProjectContent" type="textarea" class="w-1/2" rows="10" ></textarea>
                </div>
            </div>

                  {{-- プロジェクト --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4 font-semibold text-xl text-gray-800" >
                    <h1>職務経歴1-プロジェクトまたは業務 3</h1>
                </div>
            <div>
                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>開始年</label><br>
                    <input name="Project3Admission" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>開始月</label><br>
                    <input name="Project3AdmissionMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="flex flex-row gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
                    <div>
                    <label>終了年</label><br>
                    <input name="Project3Entrance" type="number" class="w-1/8" />
                    </div>
                    <div>
                    <label>終了月</label><br>
                    <input name="Project3EntranceMonth" type="number" class="w-1/8" />
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトまたは業務名</label><br>
                    <input name="Project3Name" wire:model="ProjectName" type="text" class="w-1/2" />
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                    <label>プロジェクトや業務内容の説明</label><br>
                    <textarea name="Project3Content" wire:model="ProjectContent" type="textarea" class="w-1/2" rows="10" ></textarea>
                </div>
            </div>

                {{-- 送信ボタン --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4" >
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            保存して登録完了
                        </button>
                    </div>
                </div>
        </form>
    <div>
</x-app-layout>