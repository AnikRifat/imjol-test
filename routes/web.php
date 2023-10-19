<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/pb', function () {
    require base_path('Modules/Builder/Resources/scripts/index.blade.php');

    // require base_path('public/novi/index.html');
    // require base_path('Modules/novi/index.html');
    // return view('builder::index');
})->name('pb');



Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/corn-jobs', function () {
    // Run the custom command
    Artisan::call('schedule:run');
    $output = Artisan::output();

    return $output;
});



Route::get('/mail', function () {


    $currentTime = Carbon::now();
    $currentTimeFormatted = $currentTime->format('H:i');
    $tasks = Task::whereRaw("LEFT(send_at, 5) = ?", [$currentTimeFormatted])
        ->get();

    dd($tasks);
    // $task = Task::find(1);

    // Send the email using the TaskEmail Mailable
    // Mail::to($task->recipients)->send(new TaskEmail($task));

    // Optional: You can return a response or message to confirm the email was sent
    // return 'Email sent successfully.';
});
