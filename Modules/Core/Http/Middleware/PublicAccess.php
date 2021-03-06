<?php

namespace TypiCMS\Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class PublicAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('typicms.auth_public') && !Auth::check()) {
            if ($request->ajax()) {
                return Response::make('Unauthorized', 401);
            }

            return Redirect::guest(route('login'));
        }

        return $next($request);
    }
}
