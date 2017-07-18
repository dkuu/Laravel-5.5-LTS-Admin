<?php

namespace App\Http\Middleware;

use App\Profile;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as AuthenticateResource;
use Illuminate\Support\Facades\Auth;

class Authenticate extends AuthenticateResource
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($guards);

        //dd(Auth::id());
        Profile::where('user_id', Auth::id())->firstOrCreate([
            'user_id' => Auth::id(),
            'realname' => '',
        ]);;
        return $next($request);
    }
}
