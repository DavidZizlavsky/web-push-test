<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('projects')->insertBatch([
            [
                'id'          => 1,
                'name'        => 'Naučit se CodeIgniter 4',
                'description' => 'Testovací projekt pro migrace, seedery, validaci a testy.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'id'          => 2,
                'name'        => 'PWA experiment',
                'description' => 'Později vyzkoušet manifest, service worker a push notifikace.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
