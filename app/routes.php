<?php



//Home Page
Route::get('/',['as'=> 'home.index','uses'=>'HomeController@index']);
Route::get('home',['as'=> 'home.alternative','uses'=>'HomeController@index']);

//About Us Page
Route::get('about',['as'=> 'about','uses'=>'AboutController@show']);

//Facilities 

//Hostel Page
Route::get('hostel',['as'=> 'hostel','uses'=>'HostelController@show']);

//Library Page
Route::get('library',['as'=> 'library','uses'=>'LibraryController@show']);

//Result
Route::get('result',['as'=> 'result.index','uses'=>'ResultController@index']);
Route::get('result/{id}',['as'=> 'result.show','uses'=>'ResultController@show']);

//Admission
Route::get('admission',['as'=> 'admission.index','uses'=>'AdmissionController@index']);
Route::get('admission/enterPin',['as'=> 'admission.pin','uses'=>'AdmissionController@pin']);
Route::post('admission/pinProcess',['as'=> 'admission.pinProcess','uses'=>'AdmissionController@pinProcess']);
Route::post('admission/admit',['as'=> 'admission.admit','uses'=>'AdmissionController@admit']);

//Route::get('admission/{id}',['as'=> 'admission.show','uses'=>'AdmissionController@show']);

//Notice
Route::get('notices',['as'=> 'notice.index','uses'=>'NoticeController@index']);
Route::get('notice/{id}',['as'=> 'notice.show','uses'=>'NoticeController@show']);

//Event
Route::get('events',['as'=> 'event.index','uses'=>'EventController@index']);
Route::get('event/{id}',['as'=> 'event.show','uses'=>'EventController@show']);


//Department
Route::get('department',['as'=> 'department','uses'=>'DepartmentController@index']);
Route::get('department/{key}',['as'=> 'department.show','uses'=>'DepartmentController@show']);



//Contact Page
Route::get('contact',['as'=> 'contact','uses'=>'ContactController@show']);
Route::post('contact',['as'=> 'contact.send','uses'=>'ContactController@sendMail']);


//Academic

//3rd and 4th Class
Route::get('employees',['as'=> 'employee.index','uses'=>'EmployeeController@show']);

//Routine
Route::get('routine',['as'=> 'routine.index','uses'=>'ClassRoutineController@show']);

//Academic Calendar
Route::get('academic-calendar',['as'=> 'academic.index','uses'=>'AcademicCalendarController@show']);

//Holiday Calendar
Route::get('holiday-calendar',['as'=> 'holiday.index','uses'=>'HolidayCalendarController@show']);

//Students 
Route::get('students',['as'=> 'student.index','uses'=>'StudentController@show']);

//Teachers
Route::get('teachers',['as'=> 'teacher.index','uses'=>'TeacherController@index']);
Route::get('teacher/{id}',['as'=> 'teacher.show','uses'=>'TeacherController@show']);

//Message
Route::get('message/{designation}',['as'=> 'message.index','uses'=>'MessageController@index']);

//Principal Profile
Route::get('principal',['as'=> 'principal.index','uses'=>'PrincipalInfoController@index']);

//Vice-Principal Profile
Route::get('vice-principal',['as'=> 'viceprincipal.index','uses'=>'VicePrincipalInfoController@index']);




Route::get('test', function(){
    return Department::all();
});
