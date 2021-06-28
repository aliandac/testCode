<?php 

namespace App\Services\Package;

abstract class PackageQuery
{
    public function rolePackageDelete($column , $id)
    {
        return $this->roleModel::where($column,$id);
    }
}