<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nis_nisn' => $this->faker->unique()->numberBetween(100000, 999999),
            'kelas' => $this->faker->randomElement(['10', '11', '12']),
            'konsentrasi_keahlian' => $this->faker->randomElement(['RPL', 'DKV', 'TP', 'TKP', 'Kuliner']),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
            'role' => $this->faker->randomElement(['admin', 'siswa', 'mentor', 'kepsek', 'wakakur', 'wakasis', 'wakahum', 'kkk', 'wakasap']),
        ];
    }
}
