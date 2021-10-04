<?php
###############################Front####################################
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\PortfolioController;

###########################Back#############################################
use App\Http\Controllers\Back\AnasayfaController;
use App\Http\Controllers\Back\YonetimController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\SocialController;
use App\Http\Controllers\Back\PortController;
use App\Http\Controllers\Back\BlogsController;
use App\Http\Controllers\Back\MessageController;

Route::group(['prefix'=>'yonetim'],function(){
    Route::redirect('/','yonetim/login');
    Route::group(['middleware'=>'isLogin'],function(){
          Route::get('/login',[YonetimController::class,'index'])->name('yonetim.login');
          Route::post('/login',[YonetimController::class,'login'])->name('login.post');
    });
    Route::get('/logout',[YonetimController::class,'logout'])->name('yonetim.logout');
    Route::group(['middleware'=>'isAdmin'],function(){
         Route::get('/',[AnasayfaController::class,'index'])->name('yonetim.home');
         Route::get('/message',[MessageController::class,'index'])->name('yonetim.message');
         Route::get('/message/{id}',[MessageController::class,'goster'])->name('yonetim.message.goster');

         Route::group(['prefix'=>'user'],function(){
            Route::get('/',[UserController::class,'index'])->name('yonetim.user');
            Route::get('/create',[UserController::class,'create'])->name('create.user');
            Route::post('/create',[UserController::class,'created'])->name('created.user');
            Route::get('/update/{id}',[UserController::class,'update'])->name('update.user');
            Route::post('/update/{id}',[UserController::class,'updated'])->name('updated.user');
            Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete.user');
         });

            Route::group(['prefix'=>'social'],function(){
            Route::get('/',[SocialController::class,'index'])->name('yonetim.social');
            Route::get('/create',[SocialController::class,'create'])->name('create.social');
            Route::post('/create',[SocialController::class,'created'])->name('created.social');
            Route::get('/update/{id}',[SocialController::class,'update'])->name('update.social');
            Route::post('/update/{id}',[SocialController::class,'updated'])->name('updated.social');
            Route::get('/delete/{id}',[SocialController::class,'delete'])->name('delete.social');
         });

            Route::group(['prefix'=>'portfolio'],function(){
            Route::get('/',[PortController::class,'index'])->name('yonetim.portfolio');
            Route::get('/create',[PortController::class,'create'])->name('create.portfolio');
            Route::post('/create',[PortController::class,'created'])->name('created.portfolio');
            Route::get('/update/{id}',[PortController::class,'update'])->name('update.portfolio');
            Route::post('/update/{id}',[PortController::class,'updated'])->name('updated.portfolio');
            Route::get('/delete/{id}',[PortController::class,'delete'])->name('delete.portfolio');
         });

            Route::group(['prefix'=>'blog'],function(){
            Route::get('/',[BlogsController::class,'index'])->name('yonetim.blog');
            Route::get('/create',[BlogsController::class,'create'])->name('create.blog');
            Route::post('/create',[BlogsController::class,'created'])->name('created.blog');
            Route::get('/update/{id}',[BlogsController::class,'update'])->name('update.blog');
            Route::post('/update/{id}',[BlogsController::class,'updated'])->name('updated.blog');
            Route::get('/delete/{id}',[BlogsController::class,'delete'])->name('delete.blog');
         });
    });
   
});


Route::get('/',[AboutController::class,'index'])->name('about');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blogdetail/{id}',[BlogController::class,'detail'])->name('blog.detail');
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact',[ContactController::class,'send_message'])->name('send.message');

