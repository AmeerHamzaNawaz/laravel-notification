 <?php

use App\Jobs\SendEmailJob;
use App\Jobs\SendWelcomeEmailJob;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TestsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('form', FormController::class);

Route::get('test', function () {
    $details['name'] = 'Md Obydullah';
    $details['email'] = 'hi@obydul.me';

    dispatch(new SendWelcomeEmailJob($details));

    dd('sent');
});
Route::get('email-test', function(){
  
    $details['email'] = 'your_email@gmail.com';
  
    dispatch(new SendEmailJob($details));
  
    dd('done');
});