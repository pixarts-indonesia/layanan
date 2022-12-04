<?php

namespace App\Database\Seeds;

class AboutInggrisSeeder extends \CodeIgniter\Database\Seeder
{
    private $time;

    public function run()
    {
        helper('date');
        $this->time = date('Y-m-d H:i:s', now());
        $this->db->table('about')->insertBatch($this->data());
    }

    public function data(): array
    {
        return [
            [
                'code_language' => 'en',
                'index' => 'list_milestone',
                'title' => 'Story',
                'year' => '2022',
                'text' => '
                    <p>
                        Missions help solve problems and difficulties encountered on the way from one point to another.
                        <br> From a good mission for the people of Indonesia.
                        <br> The website is the beginning to provide information in dealing with problems during road trips.
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'list_milestone',
                'title' => 'Story',
                'year' => '2023',
                'text' => '
                    <p>
                        The application is prepared in mutual cooperation with the team with joy and sorrow. Gathered together for a masterpiece created.
                        <br>Starting from a city with many tourist destinations and also a special city on the island of Java with strong symbols from the Kraton, Mount Merapi to the South Coast.
                        <br>From here we start a story together to provide solutions for the people of Indonesia.
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'list_milestone',
                'title' => 'Story',
                'year' => '2024',
                'text' => '
                    <p>
                        Pintukeluar.id will be a genuine Indonesian company and will continue to expand and continue to grow
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
        ];
    }
}
