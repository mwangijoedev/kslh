<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //required fields
        ];
    }

    public function mombasaSeaFacing()
    {
        return $this->state([
        'name'=> 'Sea Facing Rooms',
        'description'=> 'A perfect blend of comfort and coastal charm with a unobstructed panoramic view of the 
            Indian Ocean from the large windows and/or private balcony, 
            adorned with comfortable furnishings, modern amenities, and a serene ambianc',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> 3,
        'amenities'=> 'A double/twin bed and an extra single bed.
            :Individually controlled air conditioning.
            :Free WiFi is available!
            :Working station.
            :Mosquito net.
            :Ensuite washroom.
            :Satellite TV.
            :Reliable WiFi connection.
            :Coffee station (on request)
            :Mini fridge (on request)
            :Safety deposit box (on request)',
        'quick_amenities'=>'Wi-Fi,Air conditioning,Minibar,coffee maker,In-room safe,Hairdryer,Iron and ironing board,Toiletries',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }
    public function mombasaPoolFacing()
    {
        return $this->state([
        'name'=> 'Pool Facing Rooms',
        'description'=> 'Elegantly appointed, these rooms offer a combination of soothing sights of the hotel\'s pristine pool with the breathtaking views of the 
                Indian Ocean from the large windows and/or private balcony. 
                The elegant and spacious interiors are designed to maximize comfort with modernity',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'A double/twin bed and an extra single bed.
            :Individually controlled air conditioning.
            :Free WiFi is available!
            :Working station.
            :Mosquito net.
            :Ensuite washroom.
            :Satellite TV.
            :Reliable WiFi connection.
            :Coffee station (on request)
            :Mini fridge (on request)
            :Safety deposit box (on request)',
        'quick_amenities'=>'Wi-Fi,Air conditioning,Minibar,coffee maker,In-room safe,Hairdryer,Iron and ironing board,Toiletries',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }
    public function mombasaGardenFacing()
    {
        return $this->state([
        'name'=> 'Garden Facing Rooms',
        'description'=> 'Designed to offer a peaceful retreat surrounded by the calming sights of our well-manicured gardens from your private balcony.',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Modern style and spacious  twin, Double or triple bedded:Comfortable rooms all ensuite with a seating area, working station:Attention to details making the room feel far more than just ‘standard’.:
            Digitally controlled air conditioning.
            :Wireless internet connectivity.
            :Complimentary mineral water and toiletries.
            :240/220V shaver sockets in the bathrooms.
            :Fridge, Coffee & tea making facilities and safety deposit boxes.',
        'quick_amenities'=>'Wi-Fi,Air conditioning,Minibar,coffee maker,In-room safe,Hairdryer,Iron and ironing board,Toiletries',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }
    
    public function mombasaRestaurantFacing()
    {
        return $this->state([
        'name'=> 'Restaurant-Facing Rooms',
        'description'=> 'Overlooking the vibrant heart of the hotel and a glimpse of the ocean from a private balcony, each room ensures a comfortable stay.',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Modern style and spacious  twin, Double or triple bedded:Comfortable rooms all ensuite with a seating area, working station:Attention to details making the room feel far more than just ‘standard’.
            :Digitally controlled air conditioning.
            :Wireless internet connectivity.
            :Complimentary mineral water and toiletries.
            :240/220V shaver sockets in the bathrooms.
            :Fridge, Coffee & tea making facilities and safety deposit boxes.',
        'quick_amenities'=>'Wi-Fi,Air conditioning,Minibar,coffee maker,In-room safe,Hairdryer,Iron and ironing board,Toiletries',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }

    public function mombasaSuites()
    {
        return $this->state([
        'name'=> 'Mombasa Suites',
        'description'=> 'The epitome of elegance and comfort with expansive space designed to provide an unparalleled level of privacy and relaxation.
             The balcony, overlooking either the Indian Ocean, offers a perfect setting to unwind in style, 
             whether you\'re sipping morning coffee or enjoying a quiet evening.
             Equipped with all modern amenities.',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'King/Queen size bed and stylish furnishings.
            :Enough Space for additional twin bed.
            :A sitting area and work station.
            :Individually controlled air conditioning,
            :Free WiFi is available!
            :Mosquito net.
            :Ensuite washroom.
            :Satellite TV.
            :Reliable WiFi connection.
            :Coffee station
            :Mini fridge
            :Safety deposit box.',
        'quick_amenities'=>'Wi-Fi,Air conditioning,Minibar,coffee maker,In-room safe,Hairdryer,Iron and ironing board,Toiletries',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }

    public function voi()
    {
        return $this->state([
        'name'=> 'Voi Hotel Rooms',
        'description'=>'53 park facing modern style interconnecting spacious standard rooms, 
            all ensuite with a lounge area and a working station,
            making the room feel more than just “standard”.',
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard', 'executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Modern style and spacious twin, Double or triple bedded
            :Comfortable rooms all ensuite with a seating area, working station
            :Attention to details making the room feel far more than just ‘standard’.
            :Digitally controlled air conditioning.
            :Wireless internet connectivity.
            :Complimentary mineral water and toiletries.
            :240/220V shaver sockets in the bathrooms.
            :Fridge, Coffee & tea making facilities and safety deposit boxes.',
        'quick_amenities'=> 'Room service,Alarm clock,Bottled water,Reading lamps,Wardrobe,USB charging ports.',
        'hotel_id'=>Hotel::where('tag','voi')->first()->id,
        'hotel_tag'=>'voi',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
        //generate an entry for every executive type and one standard
    }

     public function ngulia()
    {
        return $this->state([
        'name'=> 'Ngulia Hotel Rooms',
        'description'=> $this->faker->sentence(),
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard', 'executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Modern style and spacious twin, Double or triple bedded
            :Comfortable rooms all ensuite with a seating area, working station
            :Attention to details making the room feel far more than just ‘standard’.
            :Digitally controlled air conditioning.
            :Wireless internet connectivity.
            :Complimentary mineral water and toiletries.
            :240/220V shaver sockets in the bathrooms.
            :Fridge, Coffee & tea making facilities and safety deposit boxes.',
        'quick_amenities'=> 'Wi-Fi,Telephone,Blackout curtains,Room service,Alarm clock,Bottled water,Reading lamps,Wardrobe',
        'hotel_id'=>Hotel::where('tag','ngulia')->first()->id,
        'hotel_tag'=>'ngulia',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }
}
