<?php

namespace App\Http\Middleware;

use App\Employee;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Auth::check()){
            return redirect('/login');
        }
        $type = auth()->user()->user_type;
        $id = Auth::user()->id;
        $position = Employee::where('accountsid', $id)->first();
        if($position == null)
            return $next($request);
        else
            return redirect('/customer');
    }
}
