<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('fontend.master');
//});
Route::get('/','FontendController@index');



Auth::routes();

Route::get('/dashbord', 'HomeController@index')->name('dashbord');

//Route::get('login','welcomeController@index');
//Route::get('register','welcomeController@loginPage');
Route::get('/dashbord','DashbordController@index');


/* Clint Section*/
Route::get('/add/clint','clintController@index');
Route::post('/saveclientdetails','clintController@storeclientdetails');
Route::get('/manage/clint','clintController@managclientdetails');
Route::get('/delete/client/{id}','clintController@deleteclientdetails');
Route::get('/edit/client/{id}','clintController@editclinteditails');
Route::post('/UpdateClientdetails','clintController@updateclientdetais');

/* End Client Section*/




/* Testimonial Section*/

Route::get('/add/testimonial','testimonialController@index');
Route::post('/savetesdetais','testimonialController@storetesdetails');
Route::get('/manage/testimonial','testimonialController@mangtesdetails');
Route::get('/delete/testimonial/{id}','testimonialController@delettesdetails');
Route::get('/edit/testimonial/{id}','testimonialController@edittesdetls');
Route::post('/Updatetesdetisss','testimonialController@Updatetesmonialdetaisl');

/** End Testimonial Section */





/*service section*/

Route::get('/add/service','serviceController@addservcfrm');
Route::post('/saveservicesDetails','serviceController@storeservice');
Route::get('/manage/service','serviceController@mangservc');
Route::get('/delete/services/{id}','serviceController@deletsrv');
Route::get('/edit/services/{id}','serviceController@edtesrv');
Route::post('/updateservicedetails','serviceController@updtsrvcdtls');

/*End Services Section*/






/* about section*/

Route::get('/add/about','AboutController@addaboutform');
Route::post('/saveabout','AboutController@storeabout');
Route::get('/manage/about','AboutController@managabout');
Route::get('/delete/about/{id}','AboutController@dltabout');
Route::get('/edit/about/{id}','AboutController@editabout');
Route::post('/updateabout','AboutController@updtabout');

/* end about section*/







/*Protfolio Images */

Route::get('/add/prot/Image','PortfolioController@addfomr');
Route::post('/saveprtImage','PortfolioController@stroeImageData');
Route::get('/manage/port/img','PortfolioController@ManagePrtImg');
Route::get('/delete/port/{id}','PortfolioController@dddt');
Route::get('/edit/port/{id}','PortfolioController@editportdeltd');
Route::post('/updateportdetls','PortfolioController@updtportimgdetls');

/*end prortpofio images*/





/*team menber images*/

Route::get('/add/teammember','teamController@addImage');
Route::post('/saveteamimage','teamController@saveTeamImage');
Route::get('/manage/teammember','teamController@manageteamImage');
Route::get('/delete/temmenber/{id}','teamController@delttemimg');
Route::get('/edit/temmenber/{id}','teamController@edittemdelts');
Route::post('/updatetemdles','teamController@updatetemdlets');

/* end team member */


