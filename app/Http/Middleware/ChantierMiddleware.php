<?php

namespace App\Http\Middleware;

use App\Models\Chantier;
use App\Models\Client;
use App\Models\Matier;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChantierMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $clients=Client::all();
        $chantiers=Chantier::all();
       
        if(count($clients)==0){
            return redirect('/clients/create');
        }
        elseif(count($chantiers)==0){
            return redirect('/chantiers/create');
        }
       
        else{
            return $next($request);
        }
        
    }
}