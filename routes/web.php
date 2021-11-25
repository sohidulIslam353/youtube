<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {  
    return view('welcome');
});


Route::get('/aboutsajdasjkdjasdhasdhasdhlahsdlhaslkdhklasdhklashldkhaslkdhlkashdklahdklhaslkdhlakshdlkashdklashdlkahslkdhaslk', function(){
     return view('about'); 
})->name('about.us');



Route::get(md5('/contactasdasdasddas'),function(){
       return view('contact');
})->name('contact.us');



Route::get('/country', function(){
    return view('country');
})->middleware('country');





//__ignore it__//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
