<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(4),
            'deskripsi' => fake()->paragraph(2),
            'foto' => fake()->imageUrl(400, 300, 'road'),
            'lokasi' => fake()->streetAddress,
            'status' => fake()->randomElement(['pending', 'diproses', 'selesai']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
