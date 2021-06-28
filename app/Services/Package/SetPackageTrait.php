<?php 

namespace App\Services\Package;

trait SetPackageTrait
{
    public function setModel($model)
    {
        $this->model = $model;
    }
    
    public function setRoleModel($roleModel)
    {
        $this->roleModel = $roleModel;
    }
}
