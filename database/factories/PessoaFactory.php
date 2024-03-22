<?php

namespace Database\Factories;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
{
    protected $model = Pessoa::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
            'telefone' => $this->faker->phoneNumber('##-#####-####'),
        ];
    }
}
