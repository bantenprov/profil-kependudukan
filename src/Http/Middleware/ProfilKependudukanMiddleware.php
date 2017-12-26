<?php namespace Bantenprov\ProfilKependudukan\Http\Middleware;

use Closure;

/**
 * The ProfilKependudukanMiddleware class.
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukanMiddleware
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
        return $next($request);
    }
}
