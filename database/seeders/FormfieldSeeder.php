<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formfield;

class FormfieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formfield =[
            [
        'name' => 'name',
        'label' => 'first name',
        ],
        [
        'name' => 'surname',
        'label' => 'last name',
        ],
        [
        'name' => 'country',
        'label' => 'country',
        ],
        [
        'name' => 'email',
        'label' => 'email',
        ],
        [
        'name' => 'telephone',
        'label' => 'phone number',
        ],
        ];

        foreach($formfield as $key => $value){
            Formfield::create($value);
        }
    }
}
