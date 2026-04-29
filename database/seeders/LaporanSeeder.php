<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use factory to create 15 laporans
        Laporan::factory(15)->create();
        
        // Update some with specific users and locations
        $users = User::where('role', 'user')->limit(5)->get();
        $laporans = Laporan::inRandomOrder()->limit(10)->get();
        foreach ($laporans as $laporan) {
            $laporan->update([
                'user_id' => $users->random()->id ?? null,
                'lokasi' => str_replace('Jl.', 'Jl.', fake('id_ID')->streetAddress) . ', Lamongan'
            ]);
        }
    }
}

