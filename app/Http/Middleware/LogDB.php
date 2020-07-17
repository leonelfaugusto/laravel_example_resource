<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;

use Closure;

class LogDB
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

        $response = $next($request);

        DB::table('log')->insert([
            'action' => 'post',
            'user_id' => 1
        ]);

        return $response;
    }
}
