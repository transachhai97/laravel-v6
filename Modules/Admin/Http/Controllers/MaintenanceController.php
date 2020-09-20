<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function __invoke(Request $request)
    {
        Artisan::call($request->mode);
        return redirect('/');
    }
}
