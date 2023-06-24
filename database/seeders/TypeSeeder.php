<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'FrontEnd',
            'BackEnd',
            'FullStack',
            'Design'
        ];

        foreach($types as $el){
            $new_type = new Type();
            $new_type->name_type = $el;
            $new_type->slug = Str::slug($new_type->name_type);
            $new_type->save();
        }
    }
}
