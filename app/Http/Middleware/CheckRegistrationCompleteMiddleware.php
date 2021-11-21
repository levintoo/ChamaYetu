<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRegistrationCompleteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    if((Auth::user()->utype)==='ADM'){
            return $next($request);
        }
    elseif(is_null(Auth::user()->oficial_name)
            && is_null(Auth::user()->national_id)
            && is_null(Auth::user()->phone_number)
            && is_null(Auth::user()->dob)
            && is_null(Auth::user()->residence)
            && is_null(Auth::user()->userid))
        {
            return redirect()->route('register-step-two');
        }
        return $next($request);
    }
}
