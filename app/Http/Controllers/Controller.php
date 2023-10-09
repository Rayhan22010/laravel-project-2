<?php

namespace App\Http\Controllers;

use App\Models\footerRecentPost;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct() {
        $footerRecent= footerRecentPost::all();
        View::share('footerRecent',$footerRecent);
    }
}
