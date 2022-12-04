<?php

namespace App\Database\Seeds;

class CategoryEnSeeder extends \CodeIgniter\Database\Seeder
{
    private $time;
    private $code;

    public function run()
    {
        helper('date');
        $this->code = 1;
        $this->time = date('Y-m-d H:i:s', now());
        $this->db->table('category')->insertBatch($this->data());
    }

    public function data(): array
    {
        return [
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Motorcycle',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Car',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Bicycle',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Truck',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Bus',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
        ];
    }
}
