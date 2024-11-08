<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->unique()->randomElement(['perros', 'gatos', 'leones', 'elefantes', 'jirafas', 'tigre', 'lobos', 'zorros', 'águilas', 'ballenas', 'delfines', 'rinocerontes', 'pingüinos', 'caballos', 'ositos', 'murciélagos', 'búhos', 'camellos', 'avestruces', 'cebras','tortugas', 'serpientes', 'cocodrilos', 'tiburones', 'conejoes', 'patos', 'cisnes', 'gallinas', 'cabras', 'ovejas', 'búfalos', 'gorilas', 'chimpancés', 'canguros', 'koalas', 'ardillas', 'grullas', 'peces', 'langostas', 'calamares', 'pulpos', 'alces', 'venados', 'osos', 'gaviotas', 'halcones', 'panteras', 'caballitos de mar', 'pelícanos', 'osos polares']),
            'quantity' => fake()->numberBetween(600, 1900)
        ];
    }
}
