<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\CategoriController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//this is admin group
Route::middleware(['auth', 'roles:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
});

//this is agent group
Route::middleware(['auth', 'roles:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
    Route::get('/agent/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');
    Route::get('/agent/logout', [AgentController::class, 'logout'])->name('agent.logout');
    Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store');
});

//this is admin group
Route::middleware(['auth', 'roles:admin'])->group(function () {
    //this is admin category part
    Route::controller(CategoriController::class)->group(function () {
        Route::get('/all/categories', 'ShowCategories')->name('show.categories')->middleware('permission:all category');
        Route::get('/add/categories', 'AddCategory')->name('add.category');
        Route::post('/store/categories', 'StoreCategory')->name('store.category');
        Route::get('/edit/categories/{id}', 'EditCategory')->name('edit.category');
        Route::post('/store/categories/{id}', 'UpdateCategory')->name('update.category');
        Route::get('/delete/categories/{id}', 'DeleteCategory')->name('delete.category');
    });
    //this is tags part
    Route::controller(CategoriController::class)->group(function () {
        Route::get('/all/tags', 'ShowTags')->name('show.tags');
        Route::get('/add/tags', 'AddTags')->name('add.tags');
        Route::post('/store/tags', 'StoreTags')->name('store.tags');
        Route::get('/delete/tags/{id}', 'DeleteTags')->name('delete.tag');
    });

    //this is  permission
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'AllPermission')->name('show.permission');
        Route::get('/add/permissions', 'AddPermission')->name('add.permission');

        Route::post('/store/permission', 'StorePermission')->name('store.permission');

        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
    });
    //this is  roles
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/roles', 'AllRole')->name('show.roles');
        Route::get('/add/roles', 'AddRole')->name('add.roles');
        Route::post('/store/roles', 'StoreRole')->name('store.roles');
        Route::get('/edit/roles/{id}', 'EditRole')->name('edit.roles');
        Route::post('/update/roles', 'UpdateRole')->name('update.roles');
        Route::get('/delete/roles/{id}', 'DeleteRole')->name('delete.roles');

        Route::get('/add/roles/permission', 'AddRoleinPermission')->name('add.roles.permission');
        Route::post('/roles/permission/store', 'RolesPermissionStore')->name('roles.permission.store');

        Route::get('/all/roles/permission', 'AllRoleinPermission')->name('all.roles.permission');


        Route::get('/admin/edit/roles/{id}', 'AdminEditRoles')->name('admin.edit.roles');
        Route::post('/admin/update/roles/{id}', 'AdminUpdateRoles')->name('admin.roles.update');

        Route::get('/all/roles/delete/{id}', 'AllRoleinPermissionDelete')->name('admin.delete.roles');
    });


    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');

    });


});
