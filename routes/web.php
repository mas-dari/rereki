<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\CommentDetailController;
use App\Http\Controllers\AdminDetailController;

// livewireのroute
use App\Livewire\Counter;
use App\Livewire\Click;
use App\Models\Admin;
use App\Models\Comment;

Route::get('/counter', Counter::class);
Route::get('/click', Click::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 候補者用のエンドポイント
Route::group(['prefix' => 'admin'], function () {

    // 登録
    Route::get('register', [AdminRegisterController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [AdminRegisterController::class, 'store']);

    // ログイン
    Route::get('login', [AdminLoginController::class, 'showLoginPage'])
        ->name('admin.login');

    Route::post('login', [AdminLoginController::class, 'login']);

    // 以下の中は認証必須のエンドポイントとなる
    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('dashboard', fn() => view('admin.dashboard'))
            ->name('admin.dashboard');
    });

    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('detail', fn() => view('admin.detail'))
            ->name('admin.detail');
    });


    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('candidate', fn() => view('admin.candidate'))
            ->name('admin.candidate');
    });
    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('candidate-detail', fn() => view('admin.candidate-detail'))
            ->name('admin.candidate-detail');
    });

    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('request', fn() => view('admin.request'))
            ->name('admin.request');
    });

    Route::middleware(['auth:admin'])->group(function () {
        // 基本情報の登録画面
        Route::get('apply', fn() => view('admin.apply'))
            ->name('admin.apply');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/post/create', fn() => view('admin.post.create'))
            ->name('admin.post.create');
        Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
    });

     Route::middleware(['auth:admin'])->group(function () {
        Route::get('/post/create-academic', [AcademicController::class, 'create'])
            ->name('admin.post.create-academic');
        Route::post('/post/create-academic', [AcademicController::class, 'store'])->name('post.academic');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/post/create-detail', fn() => view('admin.post.create-detail'))
            ->name('admin.post.create-detail');
        Route::post('/post/create-detail', [WorkController::class, 'store'])->name('post.detail');
    });

    Route::middleware(['auth:admin'])->group(function () {
        // コメント入力画面
        Route::get('comment', fn() => view('admin.comment'))
            ->name('admin.comment');
        Route::get('/comment', [CommentController::class, 'indexAdmin']);
        // Route::get('/comment', [AdminCommentController::class, 'index']);
        Route::post('/comment', [AdminCommentController::class, 'store'])
            ->name('admin.comment.store');
        // Route::get('/comment', [AdminCommentController::class, 'indexAdmin']);
    });

    Route::middleware(['auth:admin'])->group(function () {
        // コメント入力画面
        Route::get('commentdetail', fn() => view('admin.commentdetail'))
            ->name('admin.commentdetail');
        Route::get('/commentdetail', [CommentDetailController::class, 'indexAdmin']);
        Route::post('/commentdetail', [AdminDetailController::class, 'store'])
            ->name('admin.commentdetail.store');
    });
    
    // Route::middleware(['auth:admin'])->group(function () {
    //     Route::get('/post/create-academic', fn() => view('admin.post.create-academic'))
    //         ->name('admin.post.create-academic');
    //     Route::post('/post', [PostController::class, 'storeAcademic'])->name('post.store-academic');
    // });

});


// 候補者用のエンドポイントここまで

// 管理者用のエンドポイント
Route::middleware('auth')->group(function () {
    // 基本情報部分
    Route::get('/candidate', fn() => view('candidate'))
    ->name('candidate');

    // 職務経歴部分
    Route::get('/candidatedetail', fn() => view('candidatedetail'))
    ->name('candidatedetail');
    
    
    // 基本情報コメント部分
    Route::get('/comment', [CommentController::class, 'create'])
    ->name('comment');

    Route::post('/comment', [CommentController::class, 'store'])
    ->name('comment.store');

    Route::get('/comment', [CommentController::class, 'index']);

    // 職務経歴コメント部分
    Route::get('/commentdetail', [CommentDetailController::class, 'create'])
    ->name('commentdetail');

    Route::post('/commentdetail', [CommentDetailController::class, 'store'])
    ->name('commentdetail.store');

    Route::get('/commentdetail', [CommentDetailController::class, 'index']);

    
    Route::get('/dashboard', function () {
        return view('dashboard');}
    )->name('dashboard');

});















// Route::get('/test', [TestController::class, 'test'])->name('test');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sample0303', function () {
//     return view('/sample0303');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/request', function () {
//     return view('request');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', function () {
//     return view('admin');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/candidate-detail', function () {
//     return view('candidate-detail');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/candidate', Click::class);

// Route::prefix('test')->group(function (){
//     Route::get('index',[\App\Http\Controllers\TestController::class,'index']);
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
