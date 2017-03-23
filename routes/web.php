<?php

Route::get('/' , 'StudentsController@showStudentsForm');
Route::post('/student-reg' , 'StudentsController@processRegistration');
Route::get('/registration-complete' , 'FinishRegistrationController@finishRegistrationForm');

Route::get('/add-student' , 'StudentsController@showStudentsForm');
Route::get('/show-list' , 'StudentsController@showList');	

Route::get('/edit/{id}', 'StudentsController@editStudent');
Route::post('/saveEdit', 'StudentsController@saveEdit');
Route::get('/delete/{id}', 'StudentsController@toDelete');

Route::auth();
