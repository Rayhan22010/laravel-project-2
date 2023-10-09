<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\businessController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cultureController;
use App\Http\Controllers\politicsController;
use Illuminate\Support\Facades\Route;
// FrontEnd start
Route::get('/', [AdminController::class, 'index'])->name('index.page');
Route::get('/category', [AdminController::class, 'category'])->name('category.page');
Route::get('/blog', [AdminController::class, 'blog'])->name('blog.page');
Route::get('/culture', [AdminController::class, 'culture'])->name('culture.page');
Route::get('/business', [AdminController::class, 'business'])->name('business.page');
Route::get('/politics', [AdminController::class, 'politics'])->name('politics.page');
Route::get('/travel', [AdminController::class, 'travel'])->name('travel.page');
Route::get('/about', [AdminController::class, 'about'])->name('about.page');
Route::get('/contact', [AdminController::class, 'contact'])->name('contact.page');
Route::get('/single_blog', [AdminController::class, 'single_blog'])->name('single_blog.page');
Route::post('/contact_store', [AdminController::class, 'contact_store'])->name('contact.store');
// FrontEnd End

// BackEnd start
Route::get('/search_data', [BackendController::class, 'search_data']);


//Home page Route start **********************************************
Route::get('/backend_dashboard', [BackendController::class, 'backend_dashboard'])->name('backend_dashboard.page');
// Home Hero section
Route::get('/home_hero', [BackendController::class, 'home_hero'])->name('home_hero.page');
Route::post('/home_hero_store', [BackendController::class, 'home_hero_store'])->name('home_hero.store');
Route::get('/home_hero_delete/{id}', [BackendController::class, 'home_hero_delete'])->name('home_hero.delete');
Route::get('home_hero_edit/{id}', [BackendController::class, 'home_hero_edit']);
Route::post('home_hero_update', [BackendController::class, 'home_hero_update']);

//Home  Left Business

Route::get('/left_business', [BackendController::class, 'left_business'])->name('left_business.page');
Route::post('/left_business_store', [BackendController::class, 'left_business_store'])->name('left_business.store');
Route::get('/left_business_delete/{id}', [BackendController::class, 'left_business_delete'])->name('left_business.delete');
Route::get('left_business_edit/{id}', [BackendController::class, 'left_business_edit']);
Route::post('left_business_update', [BackendController::class, 'left_business_update']);

//Home  Right Business
Route::get('/right_business', [BackendController::class, 'right_business'])->name('right_business.page');
Route::post('right_business_store',[BackendController::class,'right_business_store'])->name('right_business.store');
Route::get('/right_business_delete/{id}', [BackendController::class, 'right_business_delete'])->name('right_business.delete');
Route::get('right_business_edit/{id}', [BackendController::class, 'right_business_edit']);
Route::post('right_business_update', [BackendController::class, 'right_business_update']);


// Business grid
Route::get('/business_grid', [BackendController::class, 'business_grid'])->name('business_grid.page');
Route::post('business_grid_store',[BackendController::class,'business_grid_store'])->name('business_grid.store');
Route::get('/business_grid_delete/{id}', [BackendController::class, 'business_grid_delete'])->name('business_grid.delete');
Route::get('business_grid_edit/{id}', [BackendController::class, 'business_grid_edit']);
Route::post('business_grid_update', [BackendController::class, 'business_grid_update']);


//Home Left Culture
Route::get('/left_culture', [BackendController::class, 'left_culture'])->name('left_culture.page');
Route::post('left_culture_store',[BackendController::class,'left_culture_store'])->name('left_culture.store');
Route::get('/left_culture_delete/{id}', [BackendController::class, 'left_culture_delete'])->name('left_culture.delete');
Route::get('left_culture_edit/{id}', [BackendController::class, 'left_culture_edit']);
Route::post('left_culture_update', [BackendController::class, 'left_culture_update']);

//Home Right Culture
Route::get('/right_culture', [BackendController::class, 'right_culture'])->name('right_culture.page');
Route::post('right_culture_store',[BackendController::class,'right_culture_store'])->name('right_culture.store');
Route::get('/right_culture_delete/{id}', [BackendController::class, 'right_culture_delete'])->name('right_culture.delete');
Route::get('right_culture_edit/{id}', [BackendController::class, 'right_culture_edit']);
Route::post('right_culture_update', [BackendController::class, 'right_culture_update']);

// Home Politics
Route::get('/home_politics', [BackendController::class, 'home_politics'])->name('home_politics.page');
Route::post('home_politics_store',[BackendController::class,'home_politics_store'])->name('home_politics.store');
Route::get('/home_politics_delete/{id}', [BackendController::class, 'home_politics_delete'])->name('home_politics.delete');
Route::get('home_politics_edit/{id}', [BackendController::class, 'home_politics_edit']);
Route::post('home_politics_update', [BackendController::class, 'home_politics_update']);
// Home Travel
Route::get('/home_travel', [BackendController::class, 'home_travel'])->name('home_travel.page');
Route::post('home_travel_store',[BackendController::class,'home_travel_store'])->name('home_travel.store');
Route::get('/home_travel_delete/{id}', [BackendController::class, 'home_travel_delete'])->name('home_travel.delete');
Route::get('home_travel_edit/{id}', [BackendController::class, 'home_travel_edit']);
Route::post('home_travel_update', [BackendController::class, 'home_travel_update']);


//Home page Route End **********************************************


//Culture Route start **********************************************
Route::get('/culture_left_page', [cultureController::class, 'culture_left_page'])->name('culture_left.page');
Route::post('/culture_left_store', [cultureController::class, 'culture_left_store'])->name('culture_left.store');
Route::get('/culture_left_delete/{id}', [cultureController::class, 'culture_left_delete'])->name('culture_left.delete');
Route::get('culture_left_edit/{id}', [cultureController::class, 'culture_left_edit']);
Route::post('culture_left_update', [cultureController::class, 'culture_left_update']);

//culture popular post
Route::get('/culture_popular_post', [cultureController::class, 'culture_popular_post'])->name('culture_popular_post.page');
Route::post('/culture_popular_post_store', [cultureController::class, 'culture_popular_post_store'])->name('culture_popular_post.store');
Route::get('/culture_popular_post_delete/{id}', [cultureController::class, 'culture_popular_post_delete'])->name('culture_popular_post.delete');
Route::get('culture_popular_post_edit/{id}', [cultureController::class, 'culture_popular_post_edit']);
Route::post('culture_popular_post_update', [cultureController::class, 'culture_popular_post_update']);
//Culture Route end **********************************************

//Business Route start **********************************************
Route::get('/business_left_page',[businessController::class,'business_left_page'])->name('business_left.page');
Route::post('/business_left_store', [businessController::class, 'business_left_store'])->name('business_left.store');
Route::get('/business_left_delete/{id}', [businessController::class, 'business_left_delete'])->name('business_left.delete');
Route::get('business_left_edit/{id}', [businessController::class, 'business_left_edit']);
Route::post('business_left_update', [businessController::class, 'business_left_update']);
//Business Route end **********************************************

//Business popular post
Route::get('/business_popular_post', [businessController::class, 'business_popular_post'])->name('business_popular_post.page');
Route::post('/business_popular_post_store', [businessController::class, 'business_popular_post_store'])->name('business_popular_post.store');
Route::get('/business_popular_post_delete/{id}', [businessController::class, 'business_popular_post_delete'])->name('business_popular_post.delete');
Route::get('business_popular_post_edit/{id}', [businessController::class, 'business_popular_post_edit']);
Route::post('business_popular_post_update', [businessController::class, 'business_popular_post_update']);
//Business Route end **********************************************

//politics Route start **********************************************
Route::get('/politics_left_page',[politicsController::class,'politics_left_page'])->name('politics_left.page');
Route::post('/politics_left_store', [politicsController::class, 'politics_left_store'])->name('politics_left.store');
Route::get('/politics_left_delete/{id}', [politicsController::class, 'politics_left_delete'])->name('politics_left.delete');
Route::get('politics_left_edit/{id}', [politicsController::class, 'politics_left_edit']);
Route::post('politics_left_update', [politicsController::class, 'politics_left_update']);
//politics Route end **********************************************

//Business popular post
Route::get('/politics_popular_post', [politicsController::class, 'politics_popular_post'])->name('politics_popular_post.page');
Route::post('/politics_popular_post_store', [politicsController::class, 'politics_popular_post_store'])->name('politics_popular_post.store');
Route::get('/politics_popular_post_delete/{id}', [politicsController::class, 'politics_popular_post_delete'])->name('politics_popular_post.delete');
Route::get('politics_popular_post_edit/{id}', [politicsController::class, 'politics_popular_post_edit']);
Route::post('politics_popular_post_update', [politicsController::class, 'politics_popular_post_update']);
//Business Route end **********************************************

//About Us Route start **********************************************
Route::get('/backend_top_about_page',[aboutUsController::class,'backend_top_about_page'])->name('backend_top_about.page');
Route::post('/backend_top_about_store', [aboutUsController::class, 'backend_top_about_store'])->name('backend_top_about.store');
Route::get('/backend_top_about_delete/{id}', [aboutUsController::class, 'backend_top_about_delete'])->name('backend_top_about.delete');
Route::get('backend_top_about_edit/{id}', [aboutUsController::class, 'backend_top_about_edit']);
Route::post('backend_top_about_update', [aboutUsController::class, 'backend_top_about_update']);
//post grid
Route::get('/post_grid_page',[aboutUsController::class,'post_grid_page'])->name('post_grid.page');
Route::post('/post_grid_store', [aboutUsController::class, 'post_grid_store'])->name('post_grid.store');
Route::get('/post_grid_delete/{id}', [aboutUsController::class, 'post_grid_delete'])->name('post_grid.delete');
Route::get('post_grid_edit/{id}', [aboutUsController::class, 'post_grid_edit']);
Route::post('post_grid_update', [aboutUsController::class, 'post_grid_update']);
//About team
Route::get('/about_team_page',[aboutUsController::class,'about_team_page'])->name('about_team.page');
Route::post('/about_team_store', [aboutUsController::class, 'about_team_store'])->name('about_team.store');
Route::get('/about_team_delete/{id}', [aboutUsController::class, 'about_team_delete'])->name('about_team.delete');
Route::get('about_team_edit/{id}', [aboutUsController::class, 'about_team_edit']);
Route::post('about_team_update', [aboutUsController::class, 'about_team_update']);

//About Team heading
Route::get('/team_heading_page',[aboutUsController::class,'team_heading_page'])->name('team_heading.page');
Route::post('/about_team_heading_store', [aboutUsController::class, 'about_team_heading_store'])->name('about_team_heading.store');
Route::get('/about_team_heading_delete/{id}', [aboutUsController::class, 'about_team_heading_delete'])->name('about_team_heading.delete');
Route::get('about_team_heading_edit/{id}', [aboutUsController::class, 'about_team_heading_edit']);
Route::post('about_team_heading_update', [aboutUsController::class, 'about_team_heading_update']);



//After About team
Route::get('/bottom_left_page',[aboutUsController::class,'bottom_left_page'])->name('bottom_left.page');
Route::post('/bottom_left_store', [aboutUsController::class, 'bottom_left_store'])->name('bottom_left.store');
Route::get('/bottom_left_delete/{id}', [aboutUsController::class, 'bottom_left_delete'])->name('bottom_left.delete');
Route::get('bottom_left_edit/{id}', [aboutUsController::class, 'bottom_left_edit']);
Route::post('bottom_left_update', [aboutUsController::class, 'bottom_left_update']);

//about right
Route::get('/bottom_right_page',[aboutUsController::class,'bottom_right_page'])->name('bottom_right.page');
Route::post('/bottom_right_store', [aboutUsController::class, 'bottom_right_store'])->name('bottom_right.store');
Route::get('/bottom_right_delete/{id}', [aboutUsController::class, 'bottom_right_delete'])->name('bottom_right.delete');
Route::get('bottom_right_edit/{id}', [aboutUsController::class, 'bottom_right_edit']);
Route::post('bottom_right_update', [aboutUsController::class, 'bottom_right_update']);

//About Us Route end **********************************************

//Contact Route start **********************************************
Route::get('/backend_contact', [contactController::class, 'backend_contact'])->name('backend_contact.page');
Route::get('/backend_contact_delete/{id}', [contactController::class, 'backend_contact_delete'])->name('backend_contact.delete');
//Contact Route end **********************************************


// Footer -> Recent Post
Route::get('/recent_post', [BackendController::class, 'recent_post'])->name('recent_post.page');
Route::post('recent_post_store',[BackendController::class,'recent_post_store'])->name('recent_post.store');
Route::get('/recent_post_delete/{id}', [BackendController::class, 'recent_post_delete'])->name('recent_post.delete');
Route::get('recent_post_edit/{id}', [BackendController::class, 'recent_post_edit']);
Route::post('recent_post_update', [BackendController::class, 'recent_post_update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', [BackendController::class, 'backend_index'])->name('backend_index.page');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});


