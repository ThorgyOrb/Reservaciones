<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DiaLaborable implements Rule
{
    public function passes($attribute, $value)
    {
        // Verificar si el día de la semana es de lunes a viernes (1-5)
        return date('N', strtotime($value)) >= 1 && date('N', strtotime($value)) <= 5;
    }

    public function message()
    {
        return 'La fecha debe ser un día laborable (lunes a viernes).';
    }
}