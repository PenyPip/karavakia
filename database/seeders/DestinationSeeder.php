<?php

namespace Database\Seeders;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        (new Destination)->create([
            'name' => 'ΥΔΡΑ ΣΠΕΤΣΕΣ ΑΠΟ ΤΟΛΟ'
        ]);
        (new Destination)->create([
            'name' => 'ΠΟΡΤΟ ΧΕΛΙ ΥΔΡΑ ΣΠΕΤΣΕΣ ΑΠΟ ΤΟΛΟ'
        ]);
        (new Destination)->create([
            'name' => 'ΣΚΙΑΘΟΣ ΚΟΥΚΟΥΝΑΡΙΕΣ ΑΠΟ ΓΛΥΦΑ'
        ]);
        (new Destination)->create([
            'name' => 'ΣΚΟΠΕΛΟΣ ΑΛΟΝΝΗΣΟΣ ΑΠΟ ΓΛΥΦΑ'
        ]);
    }
}
