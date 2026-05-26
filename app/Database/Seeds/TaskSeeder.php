<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->insertBatch([
            [
                'project_id' => 1,
                'title'      => 'Vytvořit migrace',
                'status'     => 'done',
                'due_date'   => date('Y-m-d'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'project_id' => 1,
                'title'      => 'Vytvořit seedery',
                'status'     => 'open',
                'due_date'   => date('Y-m-d', strtotime('+1 day')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'project_id' => 2,
                'title'      => 'Připravit manifest.json',
                'status'     => 'open',
                'due_date'   => date('Y-m-d', strtotime('+7 days')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
