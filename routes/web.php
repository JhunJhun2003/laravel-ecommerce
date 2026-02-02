<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('index');

// Route::get('/test_admin', function () {
//     return view('admin.test_admin');
// });

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {

//for the categories
    Route::get('/add_category', [AdminController::class, 'addCategory'])->name('admin.addcategory');

    Route::post('/add_category', [AdminController::class, 'postAddCategory'])->name('admin.postaddcategory');

    Route::get('/view_category', [AdminController::class, 'viewCategory'])->name('admin.viewcategory');

    Route::get('/delete_category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.categorydelete');

    Route::get('/update_category/{id}', [AdminController::class, 'updateCategory'])->name('categorytoupdate');

    Route::post('/update_category/{id}', [AdminController::class, 'postUpdateCategory'])->name('admin.postupdatecategory');


//for the products
    Route::get('/delete_product/{id}', [AdminController::class, 'deleteProduct'])->name('admin.productdelete');

    Route::post('/updated_product/{id}', [AdminController::class, 'updateProduct'])->name('admin.producttoupdate');   

    Route::get('/update_product/{id}', [AdminController::class, 'editProduct'])->name('producttoupdate');
    
    Route::get('/add_product', [AdminController::class, 'addProduct'])->name('admin.addproduct');

    Route::get('/view_product', [AdminController::class, 'viewProduct'])->name('admin.viewproduct');

    Route::post('/add_product', [AdminController::class, 'postAddProduct'])->name('admin.postaddproduct');
});

require __DIR__.'/auth.php';
