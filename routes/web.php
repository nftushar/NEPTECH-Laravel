<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserPost;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Mail\contactMail;
 


Route::view('login', 'admin.login');
Route::post('/login-submit', [AdminController::class, 'login']);



Route::get('logout', function ( ) {
    
    session()->forget('BLOG_USER_ID');
    return redirect('login');
});



Route::group(['middleware'=>['admin']], function () {

                Route::view('/leader-add','admin/leader/leader_add');
                Route::view('/expert-add','admin/expert/expert_add');
                Route::view('/sociallink-add','admin/sociallink/sociallink_add');
                Route::view('portfolio-add','admin.portfolio.portfolio_add');
                Route::get('portfolio-list', [PortfolioController::class, 'listing']);
              
                // Route::view('portfolio-add','admin.portfolio.portfolio_add');
                Route::get('index_list', [contactController::class, 'show']);




                ///////////////////////////////START BLOG POST SECTION
                
                Route::get('PostList',[PostController::class,'show']);
                Route::view('PostSubmit','admin/add');
                Route::post('PostSubmit',[PostController::class,'submit']);

                Route::get('delete/{id}',[PostController::class,'delete']);
                Route::get('edit/{id}',[PostController::class,'ValueShow']);
                Route::post('update/{id}',[PostController::class,'update']); 
                    


                Route::post('portfolio-add', [PortfolioController::class, 'submit']);
                Route::get('portfolio-delete/{id}', [PortfolioController::class, 'delete']);




                Route::get('/expert-list', [ExpertController::class, 'listing']);
                Route::post('/expert-add', [ExpertController::class, 'submit']);

                Route::get('expert-delete/{id}', [ExpertController::class, 'delete']);
                Route::get('expert-edit/{id}', [ExpertController::class, 'edit']);
                /////////////////////////////////////////////////EXPERT ABOUT END


                /////////////////////////////////////////////////SOCIAL LINK    START
                Route::get('/sociallink-list', [SocialController::class, 'listing']);
                Route::get('/sociallink-layout', [SocialController::class, 'show']);

                // Route::view('/sociallink-add','admin/sociallink/sociallink_add');
                Route::post('/sociallink-add', [SocialController::class, 'submit']);
                Route::get('/sociallink-delete/{id}', [SocialController::class, 'delete']);



    
});


Route::view('apply', 'front.apply');
Route::get('apply-list', [ApplyController::class, 'show']);

Route::view('apply-now','front.apply');
Route::post('apply-now', [ApplyController::class, 'submit']);

Route::get('apply-delete/{id}', [ApplyController::class, 'delete']);




/////////////////////////////////////////////////Leader ABOUT START
Route::get('/leader-show', [LeaderController::class, 'show']);
Route::get('/leader-list', [LeaderController::class, 'listing']);
Route::post('/leader-add', [LeaderController::class, 'submit']);

Route::get('leader-delete/{id}', [LeaderController::class, 'delete']);
Route::get('leader-edit/{id}', [LeaderController::class, 'edit']);
/////////////////////////////////////////////////Leader ABOUT END

/////////////////////////////////////////////////EXPERT ABOUT START

Route::get('/expert-show', [ExpertController::class, 'show']);


/////////////////////////////////////////////////SOCIAL LINK    END



Route::view('/', 'front.index');
Route::view('blog', 'front.blog');
Route::get('blog', [UserPost::class,'show']);


Route::get('/about', [ExpertController::class, 'show']);


Route::get('portfolio', [PortfolioController::class, 'show']);



///////////////PORTFOILO  END  //////////////
Route::view('career', 'front.career');
Route::view('connect', 'front.connect');
Route::view('service', 'front.service');

// Route::view('form', 'admin.form');

    // .......................contactController.....................................
     ////////////////////  MAILER START///////////////////////////////////
Route::get('contact-us', [contactController::class,'contact']);
Route::post('send_mail', [contactController::class, 'sendEmail'])->name('contact.send');
      ////////////////////  MAILER END///////////////////////////////////
                        //  Insart             
      ////////////////////  ADMIN START///////////////////////////////////
    
Route::view('Adminblog','admin.Adminbloganother');
Route::get('allmail', [contactController::class, 'sendAll'])->name('mailsend');
    
 //////////////////////////////////////////END EMAIL SECTION



    ////////////////////  ADMIN END///////////////////////////////////
    ////////////////////  page START///////////////////////////////////
    Route::get('page_list', [PageController::class, 'listing']);
    Route::view('page_submit','admin/page/page_add');
    Route::post('page_submit', [PageController::class, 'submit']);

    Route::get('page_delete/{id}', [PageController::class, 'delete']);
    Route::get('page_edit/{id}', [PageController::class, 'edit']);
    Route::post('page_submit/{id}', [PageController::class, 'submit']);
    ////////////////////  page END///////////////////////////////////