<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class CheckDatabaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            DB::connection()->getPDO();
            DB::connection()->getDatabaseName();
        } catch (\Exception $e) {

            return response()->json([
                "message" => "No se pudo establecer la conexión a la base de datos visits_maps."
            ], 500);
        }


        if (! Schema::hasTable('visits')) {
            return response()->json([
                "message" => "La tabla visits no existe"
            ], 500);
        }
        return $next($request);
    }
}
