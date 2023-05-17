<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Packages;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Packages::create([
            'Name' => 'Silver',
            'Monthly_amount' => "1500.00",
            'Monthly_text' => "per Month (Cancel Anytime)",
            'Quarterly_amount' => "4275.00",
            'Quarterly_text' => "Four Times per Year Save 5% with this option",
            'SemiAnnually_amount' => "8100.00",
            'SemiAnnually_text' => "Twice per Year Save 10% with this option",
            'Annually_amount' => "15300.00",
            'Annually_text' => "per Year Save 15% with this option",
        ]);
        Packages::create([
            'Name' => 'Platinum',
            'Monthly_amount' => "2500.00",
            'Monthly_text' => "per Month (Cancel Anytime)",
            'Quarterly_amount' => "7125.00",
            'Quarterly_text' => "Four Times per Year Save 5% with this option",
            'SemiAnnually_amount' => "13500.00",
            'SemiAnnually_text' => "Twice per Year Save 10% with this option",
            'Annually_amount' => "25500.00",
            'Annually_text' => "per Year Save 15% with this option",
        ]);
        Packages::create([
            'Name' => 'Gold',
            'Monthly_amount' => "1500.00",
            'Monthly_text' => "per Month (Cancel Anytime)",
            'Quarterly_amount' => "4275.00",
            'Quarterly_text' => "Four Times per Year Save 5% with this option",
            'SemiAnnually_amount' => "8100.00",
            'SemiAnnually_text' => "Twice per Year Save 10% with this option",
            'Annually_amount' => "15300.00",
            'Annually_text' => "per Year Save 15% with this option",
        ]);
    }
}
