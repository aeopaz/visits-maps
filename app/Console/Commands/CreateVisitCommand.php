<?php

namespace App\Console\Commands;

use App\Models\VisitModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\info;
use function Laravel\Prompts\text;

class CreateVisitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visit:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para registrar visitas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'Ingrese nombre del cliente',
            placeholder: 'Alvaro Ocampo',
            validate: fn(string $value) => match (true) {
                strlen($value) < 3 => 'El nombre debe tener al menos 3 caracteres.',
                strlen($value) > 255 => 'El nombre no puede exceder los 100 caracteres.',
                default => null
            }
        );
        $email = text(
            label: 'Ingrese el email del cliente',
            validate: fn(string $value) => match (true) {
                Validator::make(['email' => $value], [
                    'email' => 'required|email:rfc,dns',
                ])->fails() => 'Por favor, proporciona una dirección de correo válida.',
                default => null,
            }
        );

        $latitude = text(
            label: 'Ingrese Latitud',
            validate: fn(string $value) => match (true) {
                Validator::make(['latitude' => $value], [
                    'latitude' => 'required|numeric|max:180',
                ])->fails() => 'Por favor, ingresa un número válido',
                default => null,
            }
        );

        $longitude = text(
            label: 'Ingrese longitud',
            validate: fn(string $value) => match (true) {
                Validator::make(['longitude' => $value], [
                    'longitude' => 'required|numeric|max:180',
                ])->fails() => 'Por favor, ingresa un número válido',
                default => null,
            }
        );

        VisitModel::create([
            "name" => $name,
            "email" => $email,
            "latitude" => $latitude,
            "longitude" => $longitude,
        ]);

        info("La visita ha sido creada correctamente");

    }
}
