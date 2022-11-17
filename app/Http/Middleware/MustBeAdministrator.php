<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
	public function handle(Request $request, Closure $next)
	{
		$isAuthenticatedAdmin = Auth::check();

		if (!$isAuthenticatedAdmin)
		{
			abort(Response::HTTP_FORBIDDEN);
		}

		return $next($request);
	}
}
