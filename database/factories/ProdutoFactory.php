<?php

namespace Database\Factories;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome'=>$nome,
            'descricao'=>$this->faker->paragraph(),
            'preco'=>$this->faker->randomFloat(2, 1, 100),
            'slug'=>Str::slug($nome),
            'imagem'=>$this->faker->imageURl(400,400,'products'),
            'id_user'=>1,
            'id_categoria'=>$this->faker->numberBetween(1, 5)
        ];
    }
}
