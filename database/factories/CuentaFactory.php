<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo'=>$this->faker->randomElement($array = array('Corriente','Ahorro','Cheque')),
            'saldo_apertura'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 1000000.00),
            'fecha_apertura'=>$this->faker->date(),
            'interes'=>$this->faker->randomElement($array = array('0.01','0.05','0.03')),
            'saldo'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 1000000.00),
            'sin_movimientos'=>$this->faker->randomDigit(),
            'moneda'=>$this->faker->randomElement($array = array('L','$')),
            'id_cliente'=>$this->faker->numberBetween(1,1000)
        ];
    }
}
