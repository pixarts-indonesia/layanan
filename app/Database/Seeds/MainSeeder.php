<?php

namespace App\Database\Seeds;

class MainSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('AboutIndonesiaSeeder');
        $this->call('CategoryEnSeeder');
        $this->call('CategoryIdSeeder');
        $this->call('ProductEnSeeder');
        $this->call('ProductIdSeeder');
        $this->call('AboutInggrisSeeder');
        $this->call('IndonesiaSeeder');
        $this->call('InggrisSeeder');
        $this->call('MasterLanguageSeeder');
    }
}
