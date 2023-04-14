<?php

namespace App\Http\Middleware;

use App\Models\Fournisseur;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FournisseurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $fournisseurs=Fournisseur::all();
        if(count($fournisseurs)==0){
            return redirect('/fournisseurs/create');
        }
        else{
            return $next($request);
        }
        
    }
}
