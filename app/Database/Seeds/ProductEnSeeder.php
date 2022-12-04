<?php

namespace App\Database\Seeds;

class ProductEnSeeder extends \CodeIgniter\Database\Seeder
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
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Michelin Motorcycle Tires',
                'description' => '',
                'img' => 'ban-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Maxxis Motorcycle Tires',
                'description' => '',
                'img' => 'ban-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Maxxis Car Tires',
                'description' => '',
                'img' => 'ban-mobil-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Accelera Car Tires',
                'description' => '',
                'img' => 'ban-mobil-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Kenda Bicycle Tires',
                'description' => '',
                'img' => 'ban-sepeda-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Maxxis Bicycle Tires',
                'description' => '',
                'img' => 'ban-sepeda-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Giti Truck Tires',
                'description' => '',
                'img' => 'ban-truk-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code++,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Tbb Truck Tires',
                'description' => '',
                'img' => 'ban-truk-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Michelin Bus Tires',
                'description' => '',
                'img' => 'ban-bus-one.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
            [
                'code_language' => 'en',
                'code_category' => 'CG'.$this->code,
                'code_product' => 'CP'.$this->code_two++,
                'name' => 'Bridgestone Bus Tires',
                'description' => '',
                'img' => 'ban-bus-two.png',
                'status' => 10,
                'created_at' => $this->time,
                'updated_at' => $this->time
            ],
        ];
    }
}
