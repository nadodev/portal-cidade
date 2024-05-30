<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
//    protected $rootView = 'admin.app';

    public function rootView(Request $request): string
    {

            $uri = explode('/', Route::current()->uri());
            
            if(isset($uri[0]) && isset($uri[1])) {
                return 'site.home';
            }
            if($uri[0] == 'admin') {

                return 'admin.app';
            }

            if($uri[0] == 'client') {
                return 'client.app';
            }
    }

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            //
        ]);
    }



}
