<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $ari = User::create([
            'name' => 'Muhammad Warisi',
            'email' => 'mw.a.seven.one@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ari1234'),
            'remember_token' => Str::random(10),

        ]);
        Post::factory(25)->recycle([
            $ari,
            User::factory(5)->create()
        ])->create();
    }
}
