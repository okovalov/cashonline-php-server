<?php

// Route::group(array('prefix' => 'admin'), function () {
//     Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
//     Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
//     Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
// });

// Route::group(array('before' => 'auth'), function () {
//     Route::get('/', array('as' => 'home', 'uses' => 'AccountsController@index'));
//     Route::resource('accounts', 'AccountsController');
// });

// Route::get('create', function()
// {
//     $user = Sentry::createUser(array(
//         'email'     => 'joe@doe.com',
//         'password'  => 'secret',
//         'activated' => true,
//     ));

//     return 'User Created';
// });

// Route::post('login',function()
// {
//     try
//     {
//         $user  = Sentry::authenticate(Input::all(), false);
//         $token = hash('sha256',Str::random(10),false);
//         $user->api_token = $token;
//         $user->save();

//         return Response::json(array('token' => $token, 'user' => $user->toArray()));
//     }
//     catch(Exception $e)
//     {
//         App::abort(404,$e->getMessage());
//     }
// });

// Route::group(array('prefix' => 'api', 'before' => 'auth.token'), function() {

//       Route::get('/', function() {
//         return "Protected resource";
//       });

// });  

Route::get('restaurants',[

        'before' => 'auth.token',

        function(){
            $restaurants = [];
            for($i = 0; $i < 10; $i++)
            {
                $restaurant['name'] = 'rest_'.$i;
                $restaurant['location'] = 'loc_'.$i;
                $restaurants[] = $restaurant;
            }
            return Response::json($restaurants,200);
        }

    ]);