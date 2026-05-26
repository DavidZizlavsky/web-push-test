<?php

namespace Tests;

use App\Models\ProjectModel;
use CodeIgniter\Test\CIUnitTestCase;

class ProjectModelTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testProjectNameIsRequired(): void
    {
        $model = new ProjectModel();

        $result = $model->validate([
            'name' => '',
            'description' => 'Testovací popis',
        ]);

        $this->assertFalse($result);
        $this->assertArrayHasKey('name', $model->errors());
    }

    public function testProjectNameMustHaveAtLeastThreeCharacters(): void
    {
        $model = new ProjectModel();

        $result = $model->validate([
            'name' => 'AB',
            'description' => 'Testovací popis',
        ]);

        $this->assertFalse($result);
        $this->assertArrayHasKey('name', $model->errors());
    }
}
