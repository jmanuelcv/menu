<?php

namespace Database\Factories;
use App\Models\restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

class restauranteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* Se definen los datos para los registros */
        return [
            'nombre' => $this->faker->randomElement( ['Mango', 'Piña', 'Uva','Pizza','Arroz','Mole','Fish']),
            'categoria' => $this->faker->randomElement(['Italiana', 'Comida rapida', 'China', 'Marisco']),
            'precio' => $this->faker->randomDigit(),
            'ruta' => "/storage/menu/img/defecto.jpg"
        
        ];
    }
}
