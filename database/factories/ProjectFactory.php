<?php
namespace Database\Factories;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class ProjectFactory extends Factory
{
 /**
 * The name of the factory's corresponding model.
 *
 * @var string
 */
 protected $model = Project::class;
 /**
 * Define the model's default state.
 *
 * @return array
 */
public function definition()
 {
 return [
 'name' => $this->faker->sentence(3),
 'description' => $this->faker->paragraph,
 'deadline' => $this->faker->date(),
 'user_id' => User::factory(), // Relación con usuario
 ];
 } 
}