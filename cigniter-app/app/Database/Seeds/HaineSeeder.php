<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HaineSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'image'=>'/images/bluzadungi.jpg',
                'title'=>'Bluza in dungi',
                
            ],
            [
                'image'=>'/images/tricoupumni.jpeg',
                'title'=>'Tricou negru',
               
            ],
            [
                'image'=>'/images/P3.jpg',
                'title'=>'Accesorii barbatesti',
                
            ]
            ];
            $this->db->table('photos')->insertBatch($data);
    }
}
