<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_prestamo'=>$this->faker->randomElement($array = array('Hipotecario','Personal','Empresarial')),
            'valor'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 1000000.00),
            'pago'=>$this->faker->numberBetween(100,10000),
            'plazo'=>$this->faker->randomDigit(),
            'taza'=>$this->faker->randomElement($array = array('0.15','0.20','0.25')),
            'destino'=>$this->faker->sentence(4,true),
            'fecha_solicitud'=>$this->faker->date(),
            'id_cliente'=>$this->faker->numberBetween(1,1000)
        ];
    }
}
