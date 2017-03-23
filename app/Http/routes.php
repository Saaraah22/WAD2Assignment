<?php

Route::get('/' , 'StudentsController@showStudentsForm');
Route::post('/student-reg' , 'StudentsController@processRegistration');
Route::post('/registration-complete' , 'FinishRegistrationController@finishRegistrationForm');

Route::post('/add-students' , 'StudentsController@showStudentsForm');
Route::post('/show-list' , 'StudentsController@showList');

Route::auth();
