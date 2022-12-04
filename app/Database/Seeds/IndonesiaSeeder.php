<?php

namespace App\Database\Seeds;

class IndonesiaSeeder extends \CodeIgniter\Database\Seeder
{
    private $time;

    public function run()
    {
        helper('date');
        $this->time = date('Y-m-d H:i:s', now());
        $this->db->table('language')->insertBatch($this->data());
    }

    public function data(): array
    {
        return [
            // Input
            [
                'code_language' => 'id',
                'index' => 'name',
                'text' => 'Nama',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'email',
                'text' => 'Email',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'message',
                'text' => 'Pesan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],

            // Buttons
            [
                'code_language' => 'id',
                'index' => 'language',
                'text' => 'Bahasa',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'home',
                'text' => 'Beranda',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'product',
                'text' => 'Produk',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'blog',
                'text' => 'Blog',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'about',
                'text' => 'Tentang',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'contact',
                'text' => 'Hubungi Kami',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sand',
                'text' => 'Kirim Pesan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'more',
                'text' => 'Selengkapnya',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],

            // Information
            [
                'code_language' => 'id',
                'index' => 'title',
                'text' => 'pintukeluar',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'title_contact',
                'text' => 'Kontak Informasi',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_contact',
                'text' => 'Jika ada masalah atau pertanyaan bisa langsung isi data dibawah ini.',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'title_slider',
                'text' => 'Hadir untuk Indonesia',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_slider',
                'text' => 'Solusi akhir menyelesaikan masalah',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'social_media',
                'text' => 'Media Sosial',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'menu',
                'text' => 'Menu',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'all_rights_reserved',
                'text' => 'Hak cipta pintukeluar adalah brand dari PT Cadadusa Acintya Dakara',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'title_about',
                'text' => 'Tentang',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'list',
                'text' => 'Daftar',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'service',
                'text' => 'Layanan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'fitur_detail',
                'text' => 'Fitur Detail',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'maps',
                'text' => 'Peta',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'contact_us',
                'text' => 'Hubungi Kami',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'contact_us_sub',
                'text' => 'Pintukeluar adalah merek PT Cadadusa Acintya Dakara',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'information',
                'text' => 'Informasi',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'customer_support',
                'text' => 'Dukungan Pelanggan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'have_questions',
                'text' => 'Punya Pertanyaan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_about',
                'text' => 'Solusi untuk masalah anda',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_sub_about',
                'text' => 'Pintu merupakan sarana untuk membatasi ruang lingkup, kemampuan dan hal-hal lainnya sehingga akan sangat terbatas ruang geraknya. Pintu juga menjadi sarana jalur membedakan antar ruang. Pintu merupaka jalan untuk masuk dan keluar dari satu sisi ke sisi lainnya. Kami pintukeluar.id',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_milestone',
                'text' => 'Sebuah Perjalanan dan dedikasi dengan orang-orang yang di belakang layar.',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'milestone',
                'text' => 'Milestone',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'pillar_of_power',
                'text' => 'pilar kekuatan pintukeluar',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'social_power',
                'text' => 'Kekuatan Sosial',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'innovation',
                'text' => 'Inovasi',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'solution',
                'text' => 'Solusi',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'transformation',
                'text' => 'Transformasi',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'conquer_boundaries',
                'text' => 'Taklukan Batas',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'address',
                'text' => 'Alamat',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'phone',
                'text' => 'Telepon',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'website',
                'text' => 'Website',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'sub_satu',
                'text' => 'Temukan pintu keluarmu',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'links',
                'text' => 'Tautan',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'motorcycle',
                'text' => 'Motor',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'car',
                'text' => 'Mobil',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'bicycle',
                'text' => 'Sepeda',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'truck',
                'text' => 'Truk',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'year',
                'text' => 'Tahun',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'id',
                'index' => 'career',
                'text' => 'Karir',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
        ];
    }
}
