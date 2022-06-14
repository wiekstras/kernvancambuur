<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonValidation
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        try {
            $content = $request->getContent();
            if ($content) {
                json_decode($content, false, 512, JSON_THROW_ON_ERROR);
            }
        } catch (\JsonException $exception) {
            abort(400, 'Bad JSON received.');
        }

        return $next($request);
    }
}
