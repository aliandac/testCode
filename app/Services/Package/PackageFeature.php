<?php

namespace App\Services\Package;
use App\Models\Package\PackageRoleDescription;
use App\Services\Package\SetPackageTrait;
use App\Services\Package\GetPackageTrait;
use App\Services\Package\PackageQuery;

class PackageFeature extends PackageQuery
{ 
    protected $roleModel , $model;

    use SetPackageTrait , GetPackageTrait;

    
    public function features( $features , $status , $role )
    {
        
        if ( !is_array( $status ) ) {
            $status = [];
        }
        
        $i = 0;
        if ( is_array( $features ) ) {
            foreach ( $features as $value) {
                $newRole = new $this->model();
                $newRole->description = $value;
                $newRole->active = $status[$i];
                
                $role->save($newRole);
                $i++;
            }
        }

        return [];
    }

    public function importantFeatures( $important_features , $role )
    {
        if ( is_array( $important_features ) ) {
            foreach ( $important_features as $value) {
                $newRole = new $this->model();
                $newRole->role_id = $value;
                $role->save($newRole);
            }
        }

        return [];
    }

    public function roleDelete($column,$id) 
    {
        $this->rolePackageDelete($column,$id)->forceDelete();
    }
}