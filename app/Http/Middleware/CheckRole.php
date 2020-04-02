<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ids = [1,2];
        $userId = $request->user()->id;
        if (! in_array($userId, $ids)) {
            return redirect('/home');
        }

        return $next($request);
    }

}
