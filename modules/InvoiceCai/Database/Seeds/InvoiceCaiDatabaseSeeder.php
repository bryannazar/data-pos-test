<?php

namespace Modules\InvoiceCai\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Permissions;

class InvoiceCaiDatabaseSeeder extends Seeder
{
    use Permissions;

    public function run()
    {
        Model::unguard();
        $this->permissionsSeeder();
        Model::reguard();
    }

    public function permissionsSeeder()
    {
        $this->attachPermissionsToAdminRoles([
            'invoice-cai-main' => 'c,r,u,d',
        ]);
    }
}