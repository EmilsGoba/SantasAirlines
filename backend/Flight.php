<?php 

class Flight {
    public function __construct(
        public string $Code,
        public Airport $StartFlight,
        public Airport $EndFlight,
        public DateTime $DateTime,
        public Aircraft $Aircraft
    ) {}

    // Calculate the distance between the airports using Haversine formula
    public function getDistance(): float {
        $earthRadius = 6371; // Earth radius in km
        $lat1 = deg2rad($this->StartFlight->Latitude);
        $lon1 = deg2rad($this->StartFlight->Longitude);
        $lat2 = deg2rad($this->EndFlight->Latitude);
        $lon2 = deg2rad($this->EndFlight->Longitude);

        // Haversine formula
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin($dlat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon / 2) ** 2;
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $earthRadius * $c; // Distance in kilometers
    }

    // Calculate the duration of the flight (including 30 min preparation time)
    public function getDuration(): int {
        $distance = $this->getDistance();
        return (int) (($distance / $this->Aircraft->AvgSpeed) * 60) + 30; // Duration in minutes
    }
}


