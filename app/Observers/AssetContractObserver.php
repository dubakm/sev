<?php

namespace App\Observers;

use App\AssetContract;

class AssetContractObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(AssetContract $ac)
    {
    //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(AssetContract $ac)
    {
    //
    }
}
