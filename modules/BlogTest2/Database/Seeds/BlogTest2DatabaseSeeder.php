<?php

namespace Modules\BlogTest2\Database\Seeds;

use App\Abstracts\Model;
use Illuminate\Database\Seeder;

class BlogTest2DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        Model::reguard();
    }
}
