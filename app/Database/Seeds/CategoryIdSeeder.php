<?php

namespace App\Database\Seeds;

class CategoryIdSeeder extends \CodeIgniter\Database\Seeder
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
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Motor',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Mobil',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Sepeda',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Truk',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'name' => 'Bus',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
        ];
    }
}
