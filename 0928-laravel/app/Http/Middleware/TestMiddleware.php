<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware{

    public function handle($request, Closure $next)
    {
       echo'必经之路';

      echo '<br>';
      echo $request->method();

        echo '<br>';
//      if ($request->age >=200){
//          return redirect('Admin/info');
//      }

     echo $request->input('uname');

        echo '<br>';
        echo $request->ajax();
        echo '<br>';
        echo $request->url();
        echo '<br>';
        echo $request->ip();
        echo '<br>';
        echo $request->path();
        echo '<br>';
        echo $request->getPort();





        return $next($request);


    }
    }