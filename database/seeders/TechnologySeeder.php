<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies =[
            'HTML',
            'CSS',
            'PHP',
            'JS',
            'LARAVEL',
            'MySQL',
            'VueJS'
        ];

        foreach($technologies as $el){
            $new_technology = new Technology();
            $new_technology->name = $el;
            $new_technology->save();
        }
    }
}
