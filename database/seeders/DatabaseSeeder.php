<?php

namespace Database\Seeders;

use App\Models\Listings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        \App\Models\User::factory(5)->create();  

        Listings::factory(6)->create();
        // Listings::create([
        //     'title'=>'Laravel senior dev',
        //     'tags'=>"laravel, javascript",
        //     'company'=>"asia quest",
        //     'location'=>'jakarta',
        //     'email' => 'asia@.co.id',
        //     'website'=>'https://aqi.co.id',
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem reprehenderit enim eveniet mollitia illum non est, repellat iste ad adipisci et, voluptatibus iusto? Excepturi obcaecati architecto nemo nihil laudantium.',
        // ]);
        // Listings::create([
        //     'title'=>'React junior dev',
        //     'tags'=>"React, javascript",
        //     'company'=>"asia jakarta",
        //     'location'=>'jakarta',
        //     'email' => 'asia-quest@.co.id',
        //     'website'=>'https://aqi.co.id',
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem reprehenderit enim eveniet mollitia illum non est, repellat iste ad adipisci et, voluptatibus iusto? Excepturi obcaecati architecto nemo nihil laudantium.',
        // ]);
        //  Listings::create([
        //     'title'=>'Vue junior dev',
        //     'tags'=>"Vue, javascript",
        //     'company'=>"kreasi asia jakarta",
        //     'location'=>'bogor',
        //     'email' => 'asia-kreasi@.co.id',
        //     'website'=>'https://aqi.co.id',
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem reprehenderit enim eveniet mollitia illum non est, repellat iste ad adipisci et, voluptatibus iusto? Excepturi obcaecati architecto nemo nihil laudantium.',
        // ]);
    }
}
