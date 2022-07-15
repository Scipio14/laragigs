<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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


//All listings
Route::get('/', function () {
    return view('listings',[
        'heading'=>'Latest Listings',
        'listings'=> listing::all()
    ]);
});

//Single listing
Route::get('/listings/{listing}',function(Listing $listing){
  return view('listing',[
    'listing'=>$listing
  ]);

});


/*
|------

Route::get('/hello',function(){
    return response('<h1>Hello World</h1>',200)
        ->header('Content-Type','text/plain')
        ->header('foo','bar');
});

Route::get('/posts/{id}',function($id){

    return response('Post ' . $id);
})->where('id','[0-9]+');

Route::get('/search',function(Request $request){
  return $request->name . ' ' . $request->city;

});
|

*/
