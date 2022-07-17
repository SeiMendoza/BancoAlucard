<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'identidad'=>$this->faker->numerify('####-'). $this->faker->numberBetween(1930,2004).
            $this->faker->unique()->numerify('-#####'),
            'fecha_nac'=>$this->faker->date(),
            'edad'=>$this->faker->numberBetween(18,100),
            'telefono'=>$this->faker->unique()->phoneNumber,
            'direccion'=>$this->faker->address,
            'correo'=> $this->faker->unique()->email
            
        ];
    }
}
