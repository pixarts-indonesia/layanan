<?php

namespace App\Database\Seeds;

class InggrisSeeder extends \CodeIgniter\Database\Seeder
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
                'code_language' => 'en',
                'index' => 'name',
                'text' => 'Nama',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'email',
                'text' => 'Email',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'message',
                'text' => 'Message',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],

            // Buttons
            [
                'code_language' => 'en',
                'index' => 'language',
                'text' => 'Language',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'home',
                'text' => 'Home',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'product',
                'text' => 'Product',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'blog',
                'text' => 'Blog',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'about',
                'text' => 'About',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'contact',
                'text' => 'Contact Us',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sand',
                'text' => 'Sand Message',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'more',
                'text' => 'More',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],

            // Information
            [
                'code_language' => 'en',
                'index' => 'title',
                'text' => 'pintukeluar',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'title_contact',
                'text' => 'Contact Information',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_contact',
                'text' => 'If there are problems or questions, please fill in the data below.',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'title_slider',
                'text' => 'Coming to Indonesia',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_slider',
                'text' => 'the final solution solves the problem',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'social_media',
                'text' => 'Social Media',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'menu',
                'text' => 'Menu',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'all_rights_reserved',
                'text' => 'Copyright pintukeluar is brand by PT Cadadusa Acintya Dakara',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'title_about',
                'text' => 'About',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'list',
                'text' => 'List',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'service',
                'text' => 'Service',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'fitur_detail',
                'text' => 'Detailed Features',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'maps',
                'text' => 'Maps',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'contact_us',
                'text' => 'Contact Us',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'contact_us_sub',
                'text' => 'Pintukeluar is a brand of PT Cadadusa Acintya Dakara',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'information',
                'text' => 'Information',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'customer_support',
                'text' => 'Customer Support',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'have_questions',
                'text' => 'Have a Questions',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_about',
                'text' => 'Solution to your problem',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_sub_about',
                'text' => 'The door is a means to limit the scope, ability and other things so that the space for movement will be very limited. The door is also a means of differentiating between spaces. The door is a way to enter and exit from one side to the other. We are pintukeluar.id',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_milestone',
                'text' => 'A Journey and dedication with the people behind the scenes.',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'milestone',
                'text' => 'Milestone',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'pillar_of_power',
                'text' => 'pillar of strength pintukeluar',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'social_power',
                'text' => 'Social Power',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'innovation',
                'text' => 'Innovation',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'solution',
                'text' => 'Solution',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'transformation',
                'text' => 'Transformation',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'conquer_boundaries',
                'text' => 'Conquer Boundaries',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'address',
                'text' => 'Address',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'phone',
                'text' => 'Phone',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'website',
                'text' => 'Website',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'sub_satu',
                'text' => 'Find your exit',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'links',
                'text' => 'Link',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'motorcycle',
                'text' => 'Motorcycle',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'car',
                'text' => 'Car',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'bicycle',
                'text' => 'Bicycle',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'truck',
                'text' => 'Truck',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'year',
                'text' => 'Year',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'code_language' => 'en',
                'index' => 'career',
                'text' => 'Career',
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
        ];
    }
}
