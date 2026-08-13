<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class RentalSoftwareController extends Controller
{
    public function carRentalSoftwareDevelopment()
    {
        return view('frontend.rental-software.car-rental-software-development');
    }

    public function fleetManagementSoftware()
    {
        return view('frontend.rental-software.fleet-management-software');
    }

    public function carRentalBookingEngine()
    {
        return view('frontend.rental-software.car-rental-booking-engine');
    }

    public function vehicleRentalAppDevelopment()
    {
        return view('frontend.rental-software.vehicle-rental-app-development');
    }

    public function chauffeurLimousineBookingSoftware()
    {
        return view('frontend.rental-software.chauffeur-limousine-booking-software');
    }

    public function rentalPricingEngine()
    {
        return view('frontend.rental-software.rental-pricing-engine');
    }

    public function telematicsIntegration()
    {
        return view('frontend.rental-software.telematics-integration');
    }

    public function damageInspectionModule()
    {
        return view('frontend.rental-software.damage-inspection-module');
    }

    public function corporateAccountsBilling()
    {
        return view('frontend.rental-software.corporate-accounts-billing');
    }

    public function carRentalSoftwareDevelopmentDubai()
    {
        return view('frontend.rental-software.car-rental-software-development-dubai');
    }

    public function carRentalSoftwareDevelopmentAmman()
    {
        return view('frontend.rental-software.car-rental-software-development-amman');
    }

    public function carRentalSoftwareDevelopmentRiyadh()
    {
        return view('frontend.rental-software.car-rental-software-development-riyadh');
    }

    public function locations()
    {
        return view('frontend.rental-software.locations');
    }

    public function rentalSoftwareCostCalculator()
    {
        return view('frontend.rental-software.rental-software-cost-calculator');
    }
}
