<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        $this->call('ProjectSeeder');
        $this->call('TaskSeeder');
    }
}
