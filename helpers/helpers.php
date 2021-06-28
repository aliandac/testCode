<?php

use Illuminate\Support\Facades\Request;
use App\Models\Settings;
use App\Models\Advertisements\BuyingAdvertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Services\Advertisement\AdDistribution;

if ( !function_exists('limit') ) {
    
    function limit( $value , $limit , $end = '...')
    {
        return Str::limit( $value , $limit , $end );
    }
}

if (!function_exists('isActiveRoute')) {

    /**
     * check is exist route name is active
     * @param string $routeName
     * @return bool
     */
    function isActiveRoute(string $routeName): bool
    {
        return Request::route()->getName() == $routeName;
    }
}


if (!function_exists('applyActiveCssClass')) {

    /**
     * @param array $activeRouteNames  $cssClassName css class name check is active route equal
     * @param string $cssClassName
     * @return string
     *
     */
    function applyActiveCssClass(array $activeRouteNames, string $cssClassName = 'active')
    {
        $condition = array_map(function ($activeRouteName) {
            return (isActiveRoute($activeRouteName));
        }, $activeRouteNames);

        if (in_array(true, $condition))
            return $cssClassName;
    }

}

if (!function_exists('createHashtagFromBlog')) {

    /**
     * regex pattern "/(#\w+)/"
     * @param $context
     * @param $cssClass
     * @return string|null
     */
    function createHashtagFromBlog($context): ?string
    {
        return preg_replace_callback("/(#[a-zA-ZçşğıüöİÜÖĞ]+)/", function ($find){

            $route = route('blogs', ['hashtag' => str_replace('#', '', $find[0])]);

            return sprintf("<a class='hashtag' href='%s'>%s</a>",$route, $find[0]);

        }, $context);
    }

}


if (!function_exists('search')) {

    function search($table , $column = [] , $values = [] )
    {
        $x = 1;
        $prepare = "";
        foreach( $values as $key => $value ) {
            if ( !in_array( $key , $column ) ) {
                unset($column[$x]);
            }else if( $values[$key] == null ) {
                unset( $column[$x] );
                unset( $values[$key] );
            }
            if ( isset( $column[$x] ) ) {
                $prepare .= $value.",";
            }
            $x++;
        }

        $sql = implode(" = ? AND ",$column)." = ?";

        return DB::select("SELECT * FROM $table WHERE deleted_at is null AND active = 1 AND $sql " ,array_values($values));
    }
}

if (!function_exists('hasRequest')) {

    function hasRequest( $request )
    {
        return request()->has($request);
    }
}

if (!function_exists('setting')) {

    function setting( $key )
    {
        return Settings::where('key', $key)->firstOrFail()->value;
    }
}

if (!function_exists('replace')) {

    function replace( $search, $replace , $value)
    {
        return str_replace($search, $replace , $value);
    }
}

if (!function_exists('ad')) {
    
    function ad()
    {
        return new AdDistribution();
    }
}

if (!function_exists('hasCompany')) {

    function hasCompany()
    {
        return isset( auth()->user()->company->id );
    }
}








