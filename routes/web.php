<?php


Route::get('/', 'WelcomeController@index');

Route::post('course/update', 'CourseController@updateCourse');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teacher-profile/{id}','WelcomeController@teacherProfile');

Route::post('post/save','WelcomeController@savePost');

// Student Send Message //

Route::post('message/send','WelcomeController@sendMessage');

///Student LIst //
Route::get('studentlist/{id}','studentController@studentList');
Route::get('studentProfile/{id}','WelcomeController@studentPage');
///
/// Cr Posts
Route::get('crposts/all/{id}','crController@crPostByBatch');
Route::get('crposts/all','crController@crAllPost');
/// Cr pOST
///
//Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
//Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');

Route::group(['prefix' => 'student'], function () {

    // Message //

    Route::get('/message/all','studentController@allMessage');

    //Post //

    Route::get('post','studentController@studentPost');
    Route::post('post/save','studentController@savePost');
    //Post

    // course registration //

    Route::get('appoint/{id}','studentController@appointment');
    Route::get('courseregister/{id}','studentController@courseRegister');
    Route::post('registration/save','studentController@saveRegister');

    // course registration //

    // Profile //
    Route::get('studentPage/{id}','studentController@studentIndex');
    Route::get('profile/view','studentController@studentProfile');
    Route::get('profile/edit','studentController@studentEditProfile');
    Route::post('profile/update','studentController@studentUpdateProfile');

    //Skill//
    Route::get('skill/add','studentController@addSkill');
    Route::post('skill/save','studentController@saveSkill');
    Route::get('skill/manage','studentController@manageSkill');
    Route::get('skill/edit/{id}','studentController@editSkill');
    Route::post('skill/update','studentController@updateSkill');
    Route::get('skill/delete/{id}','studentController@deleteSkill');
    //Skill//

    /// Category //
    Route::get('category/add','studentController@addCategory');
    Route::post('category/save','studentController@saveCategory');

    Route::get('category/manage','studentController@manageCategory');
    Route::get('category/edit/{id}','studentController@editCategory');
    Route::post('category/update','studentController@updateCategory');
    Route::get('category/delete/{id}','studentController@deleteCategory');

    /// Category


    /// Award //
    Route::get('award/add','studentController@addAward');
    Route::post('award/save','studentController@saveAward');

    Route::get('award/manage','studentController@manageAward');
    Route::get('award/edit/{id}','studentController@editAward');
    Route::post('award/update','studentController@updateAward');
    Route::get('award/delete/{id}','studentController@deleteAward');

    /// Award
    ///
    /// Education//

        Route::get('education/add','studentController@addEducation');
        Route::post('education/save','studentController@saveEducation');

        Route::get('education/manage','studentController@manageEducation');
        Route::get('education/edit/{id}','studentController@editEducation');
        Route::post('education/update','studentController@updateEducation');
        Route::get('education/delete/{id}','studentController@deleteEducation');

    /// Education


    /// Expertise//

    Route::get('expertise/add','studentController@addExpertise');
    Route::post('expertise/save','studentController@saveExpertise');

    Route::get('expertise/manage','studentController@manageExpertise');
    Route::get('expertise/edit/{id}','studentController@editExpertise');
    Route::post('expertise/update','studentController@updateExpertise');
    Route::get('expertise/delete/{id}','studentController@deleteExpertise');

    /// Expertise


    /// About//

    Route::get('about/add','studentController@addAbout');
    Route::post('about/save','studentController@saveAbout');

    Route::get('about/manage','studentController@manageAbout');
    Route::get('about/edit/{id}','studentController@editAbout');
    Route::post('about/update','studentController@updateAbout');
    Route::get('about/delete/{id}','studentController@deleteAbout');

    /// About

    /// Project
    Route::get('project/add','studentController@addProject');
    Route::post('project/save','studentController@saveProject');

    Route::get('project/manage','studentController@manageProject');
    Route::get('project/edit/{id}','studentController@editProject');
    Route::post('project/update','studentController@updateProject');
    Route::get('project/delete/{id}','studentController@deleteProject');

    /// Project

    //Dashboard //
  Route::get('/dashboard','studentController@studentIndex');

  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'teacher'], function () {


    Route::get('/dashboard', 'TeacherController@index');

    Route::post('/sendNotification','EmailController@sendNotification');
    /*  Teacher Post */

    Route::get('post/add/{id}', 'TeacherController@addPost');
    Route::get('/post/manage/{id}', 'TeacherController@managePost');
    Route::post('post/save', 'TeacherController@savePost');
    Route::get('post/manage/{id}', 'TeacherController@managePost');
    Route::get('post/edit/{id}', 'TeacherController@editPost');
    Route::get('post/delete/{id}/{teacherid}', 'TeacherController@deletePost');
    Route::post('post/update', 'TeacherController@updatePost');
    Route::get('post/delete/{id}/{teacherid}', 'TeacherController@deletePost');

    /*  Teacher Post */

    // Teacher Profile //
    Route::get('/profile','TeacherController@profile');
    Route::get('/profile/edit','TeacherController@editProfile');
    Route::post('/profile/update','TeacherController@updateProfile');

    // Teacher Profile //

    // Teachers Courses

    Route::get('/course/add', 'TeacherController@addCourse');
    Route::post('course/save','TeacherController@saveCourse');
    Route::get('course/manage/{id}', 'TeacherController@manageCourse');
    Route::get('course/edit/{id}', 'TeacherController@editCourse');
    Route::get('course/delete/{id}/{teacherid}', 'TeacherController@deleteCourse');

    // Teachers Courses

    // Manage Student //

    Route::get('/student/manage/{id}','TeacherController@manageStudent');
    Route::get('/student-appointment/{id}','TeacherController@studentApp');
    Route::get('/student-appointment/uncheck/{id}','TeacherController@studentAppUncheck');

    Route::get('/notification/{id}','studentController@sendNotification');

    // Manage Student //
    //
    Route::get('/', 'TeacherAuth\LoginController@showLoginForm')->name('login');
  Route::get('/login', 'TeacherAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'TeacherAuth\LoginController@login');
  Route::post('/logout', 'TeacherAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'TeacherAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'TeacherAuth\RegisterController@register');

  Route::post('/password/email', 'TeacherAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'TeacherAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'TeacherAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'TeacherAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'classrepresentator'], function () {

  Route::get('/login', 'ClassrepresentatorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ClassrepresentatorAuth\LoginController@login');
  Route::post('/logout', 'ClassrepresentatorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClassrepresentatorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClassrepresentatorAuth\RegisterController@register');

  Route::post('/password/email', 'ClassrepresentatorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClassrepresentatorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClassrepresentatorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClassrepresentatorAuth\ResetPasswordController@showResetForm');

  /// Profile ///
    Route::get('/dashboard','crController@crIndex');
    Route::get('profile','crController@crProfile');
    Route::get('profile/edit','crController@crEditProfile');
    Route::post('profile/update','crController@crUpdateProfile');
    Route::get('password','crController@crChangePassword');
    Route::post('/password/update','crController@crUpdatePassword');
    /// Profile
    ///
    /// Post
    Route::get('post/add','crController@crAddPost');
    Route::post('post/save','crController@crSavePost');
    Route::get('post/manage','crController@crManagePost');
    Route::get('post/edit/{id}','crController@crEditPost');
    Route::post('post/update','crController@crUpdatePost');
    Route::get('post/delete/{id}','crController@crDeletePost');
    Route::get('posts/all/{id}','crController@crAllPost');

    /// end Post
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard','AdminController@index');

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');


    /// Batch //
    Route::get('batch/add','AdminController@addBatch');
    Route::post('batch/save','AdminController@saveBatch');

    Route::get('batch/manage','AdminController@manageBatch');
    Route::get('batch/edit/{id}','AdminController@editBatch');
    Route::post('batch/update','AdminController@updateBatch');
    Route::get('batch/delete/{id}','AdminController@deleteBatch');

    /// Batch

    /// Cr
    Route::get('cr/manage','AdminController@manageCr');
    Route::get('cr/block/{id}','AdminController@blockCr');
    Route::get('cr/approve/{id}','AdminController@approveCr');
    Route::get('cr/delete/{id}','AdminController@deleteCr');
    ///
    /// Teacher

    Route::get('teacher/manage','AdminController@manageTeacher');
    Route::get('teacher/block/{id}','AdminController@blockTeacher');
    Route::get('teacher/approve/{id}','AdminController@approveTeacher');
    Route::get('teacher/delete/{id}','AdminController@deleteTeacher');
    ///

    /// Teacher
});
