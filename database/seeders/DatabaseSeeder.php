<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //  \App\Models\User::factory(10)->create();

       $user = User::factory()->create([
        'name' => 'John Doe',
        'email' => 'john@gmail.com'
       ]);  
       
       Listing::factory(0)->create([
        'user_id' => $user->id
       ]);

       /** Listing::create([
            *'title' => 'Laravel Senior Developer',
            *'tags' => 'lravel, javascript',
            *'company' => 'Acme Corp',
            *'location' => 'Boston, MA',
            *'email' => 'email@gmail.com',
            *'website' => 'https://www.acme.com',
            *'description' => 'Lorem ipsum dolor sit amet, consectetur 
            *adipiscing elit, sed do eiusmod tempor incididunt ut 
            *labore et dolore magna aliqua. Ut enim ad minim veniam, 
            *quis nostrud exercitation ullamco laboris nisi ut aliquip 
            *ex ea commodo consequat. Duis aute irure dolor in 
            *reprehenderit in voluptate velit esse cillum dolore eu 
            *fugiat nulla pariatur.'
        *]);

        *Listing::create([
        *    'title' => 'Full-Stack Engineer',
        *     'tags' => 'laravel, backend, api',
        *    'company' => 'Acme Corp',
        *    'location' => 'Boston, MA',
        *   'email' => 'email@gmail.com',
        *   'website' => 'https://www.acme.com',
        *   'description' => 'Lorem ipsum dolor sit amet, consectetur 
        *    adipiscing elit, sed do eiusmod tempor incididunt ut 
        *   labore et dolore magna aliqua. Ut enim ad minim veniam, 
        *   quis nostrud exercitation ullamco laboris nisi ut aliquip 
        *   ex ea commodo consequat. Duis aute irure dolor in 
        *   reprehenderit in voluptate velit esse cillum dolore eu 
        *   fugiat nulla pariatur.'
        *]);*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
