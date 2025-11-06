<?php

namespace Database\Seeders;

use App\Models\BuggyPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UtvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) { 
            BuggyPackage::create([
                'id'                => Str::uuid(),
                'image'             => $i.'default.png',
                'name'              => 'testing'.$i,
                'spec'              => 'spec,123',
                'description'       => now(),
                'price'             => '1000',
                'type'              => '1',   
            ]);
        }
    }
}
