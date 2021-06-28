<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyImage;
use App\Scopes\ActiveScope;
use Illuminate\Http\Request;

class CompanyImageController extends Controller
{

    public function index()
    {
        $images = CompanyImage::withoutGlobalScope(ActiveScope::class)->where('active', 0)->paginate(10);
        return view('admin.company.company-in-active-images', compact('images'));
    }
}
