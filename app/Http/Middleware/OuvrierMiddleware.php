<?php

namespace App\Http\Middleware;

use App\Models\Ouvrier;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OuvrierMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ouvriers=Ouvrier::all();
        if(count($ouvriers)==0){
            return redirect('/ouvriers/create');
        }
        else{
            return $next($request);
        }
        
    }
}
