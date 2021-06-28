<?php


namespace App\Http\Controllers\Admin\Company;


use App\Cache\Calendar\Work;
use App\Models\Category;
use App\Models\Country;
use App\Models\Language;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * @noinspection PhpUnused
 * Class CreateCompany
 * @package App\Http\Controllers\Admin\Company
 */
class CreateCompany
{

    /**
     * @return Factory|View
     */
    function view()
    {
        $categories=Category::get();
        $users=User::get();
        $languages=Language::get();
        $countries=Country::get();
        $days=Work::days();

        return view('admin.company.create_company',compact('categories','users','languages','countries','days'));
    }

}
