<?php

namespace App\Database\Seeds;

class AboutIndonesiaSeeder extends \CodeIgniter\Database\Seeder
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
                'code_language' => 'id',
                'index' => 'list_milestone',
                'title' => 'Histori',
                'year' => '2022',
                'text' => '
                    <p>
                        Misi membantu menyelesaikan masalah dan kesulitan yang dihadapi dalam perjalanan dari satu titik ke titik lainnya.
                        <br> Dari 1 misi yang baik untuk masyarakat Indonesia.
                        <br> Website menjadi awal untuk memberikan informasi dalam menghadapi permasalahan selama perjalanan jalur darat.
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'list_milestone',
                'title' => 'Histori',
                'year' => '2023',
                'text' => '
                    <p>
                        Aplikasi disiapkan secara gotong royong bersama team dengan suka duka. Berkumpul bersama demi sebuah mahakarya tercipta.
                        <br>Di mulai dari sebuah kota dengan banyak destinasi wisata dan juga sebagain kota istimewa di pulau Jawa dengan simbol kuat dari Kraton, Gunung Merapi hingga Pantai Selatan.
                        <br>Dari sini kita memulai cerita bersama untuk memberikan solusi untuk masyarakat Indonesia.
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'list_milestone',
                'title' => 'Histori',
                'year' => '2024',
                'text' => '
                    <p>
                        pintukeluar.id akan menjadi perusahaan asli indonesia dan terus ekspansi serta terus berkembang
                    </p>
                ',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
        ];
    }
}
