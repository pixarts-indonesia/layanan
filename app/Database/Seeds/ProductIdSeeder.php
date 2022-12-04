<?php

namespace App\Database\Seeds;

class ProductIdSeeder extends \CodeIgniter\Database\Seeder
{
    private $time;
    private $code;
    private $code_two;

    public function run()
    {
        helper('date');
        $this->code = 1;
        $this->code_two = 1;
        $this->time = date('Y-m-d H:i:s', now());
        $this->db->table('product')->insertBatch($this->data());
    }

    public function data(): array
    {
        return [
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Motor Michelin',
                'description' => '',
                'img' => 'ban-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Motor Maxxis',
                'description' => '',
                'img' => 'ban-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Mobil Maxxis',
                'description' => '',
                'img' => 'ban-mobil-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Mobil Accelera',
                'description' => '',
                'img' => 'ban-mobil-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Sepeda Kenda',
                'description' => '',
                'img' => 'ban-sepeda-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Sepeda Maxxis',
                'description' => '',
                'img' => 'ban-sepeda-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Truk Giti',
                'description' => '',
                'img' => 'ban-truk-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Truk Tbb',
                'description' => '',
                'img' => 'ban-truk-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Bus Michelin',
                'description' => '',
                'img' => 'ban-bus-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'id',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Ban Bus Bridgestone',
                'description' => '',
                'img' => 'ban-bus-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
        ];
    }
}
