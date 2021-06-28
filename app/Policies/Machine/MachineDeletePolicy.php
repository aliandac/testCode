<?php

namespace App\Policies\Machine;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Machine\MachineOwner;
use App\Models\Machine\Value;
use App\Models\Machine\Entity;
use App\Scopes\ActiveScope;

class MachineDeletePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct( User $user , $id)
    {
        if ($user->isAdmin())
            return true;
        
        $value = Value::findOrFail($id);

        $entityId = $value->entity()->value('id');
        
        $entity = Entity::withoutGlobalScope(ActiveScope::class)->findOrFail($value->entity_id);
        $data = MachineOwner::where('machine_id' , $entity->id)->firstOrFail();

        if ( $data->ownerable_type == "App\Models\Company\Company" )
            return ( $user->company->id == $data->ownerable_id );

        return ( $user->id == $data->ownerable_id );
    }
}
