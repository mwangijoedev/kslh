<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accommodation>
 */
class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
            'name'=>fake()->randomElement(['Valentine Package', 'Easter Package', 'Christmas Package', 'Mombasa Premium Package', 'Night Life Package', 'Ngulia 3 day Package', 'Voi Business Package']),
            
            'description'=>'Experience the perfect blend of luxury, relaxation, and adventure with our exclusive accommodation packages. Whether you\'re seeking a serene escape, a romantic retreat, or a fun-filled family getaway, we have the ideal stay for you. Enjoy world-class amenities, breathtaking views, and personalized service, all designed to make your stay truly memorable.

Book now and turn your trip into an extraordinary experience!',

            'package_type'=>fake()->randomElement(['Luxury','Beach Resort', 'Business Trip', 'Budget Stay', 'Tented Camp', 'Couple Staycation','Overwater Bungalow', 'Beachfront Villa','Oceanview Suite','Thatched-Roof Cottage','Floating Bungalow','Safari Lodge','Luxury Tented Camp', 'Stone Boma Hut']),

            'highlight1'=>fake()->randomElement(['Private Beach Access – Enjoy exclusive, crowd-free beachfront.','Overwater Hammocks – Relax above the crystal-clear waters.','Infinity Pool with Ocean Views – Seamlessly blending with the sea.','Sunset Decks – Private spaces to watch breathtaking sunsets.','Glass-Floor Bungalows – View marine life right beneath your feet.']),

            'highlight2'=>fake()->randomElement(['Outdoor Rain Showers – Refreshing showers surrounded by nature','Beachfront Dining – Candlelit dinners by the waves.','Personalized Butler Service – Luxury service catering to every need.','Direct Snorkeling Access – Step from your room into the water.','Secluded Cliffside Retreats – Unmatched privacy with panoramic sea views.']),
        
            'highlight3'=>fake()->randomElement(['Game Drives & Wildlife Safaris – Explore the wild with expert guides.','Outdoor Firepits – Cozy evening storytelling under the stars.','Stargazing Platforms – Experience Africa’s unpolluted night skies', 'Luxury Tented Suites – Combining adventure with 5-star comfort.','Bush Breakfasts & Sundowners – Dine in the wilderness']),

            'highlight4'=>fake()->randomElement(['Guided Walking Safaris – Explore the savannah up close on foot','Outdoor Bathtubs – Soak while watching elephants roam nearby.',
            'Luxury Tented Suites – Combining adventure with 5-star comfort.','Bush Breakfasts & Sundowners – Dine in the wilderness']),

            'day1'=>fake()->randomElement(['Arrive, welcome drink, sunset beach massage, candlelit beachfront dinner.','Arrive, champagne welcome, spa treatment, starlit fine dining.','Sunset game drive, photography workshop, night sky photography.','Arrive, bush trek, sundowner drinks, night safari.','Arrive, kid-friendly safari, bonfire storytelling.','Arrive, sunset game drive, bush dinner under the stars.']),

            'day2'=>fake()->randomElement(['Sunrise yoga, floating breakfast, lazy beach day, evening firepit storytelling.','Morning jet skiing, snorkeling excursion, beach volleyball, live music night.','Breakfast in bed, private yacht tour, sunset champagne picnic.','Village tour, seafood cooking class, dhow cruise dinner.
            ','Dolphin-watching tour, family snorkeling, sandcastle competition.','Early morning safari, midday pool relaxation, evening safari with sundowners.','Private game drive, infinity pool relaxation, Maasai cultural performance.','Dawn safari for golden-hour shots, scenic picnic lunch, evening wildlife shoot.', 'Hot air balloon safari, walking safari, cultural village tour.']),

            'day3'=>fake()->randomElement(['Breakfast with giraffes, nature scavenger hunt, check-out.','Sunrise canoeing (if near water), breakfast, check-out.','Birdwatching photography, farewell lunch, check-out.','Bush breakfast, morning yoga, farewell drinks, check-out.','Breakfast with a view, guided nature walk, check-out.','Pool fun, breakfast buffet, farewell group photos, check-out.','Beach yoga, tropical fruit tasting, souvenir shopping, check-out.','Morning dip in the infinity pool, couples-photoshoot, farewell lunch.','Sunrise kayaking, brunch, last-minute shopping, check-out.']),

            'package_inclusions'=>fake()->randomElement(['🚢 Private Airport,🗺 Dedicated Guide,💸 All Entry Fees,🏆 Exclusive Activities,🧳 Luggage Assistance,🚗 Road Trip Extension,🏨 5-Star Resort,🚢 Shared Transfers,🗺 Professional Tour,💸 National Park,🧳 Secure Luggage Storage','🚗 Self-Drive Road Trip,🗺 Basic Guide,🏨Safari Camp Stay']),

            'package_exclusions'=>fake()->randomElement(['🚢 Private Airport,🗺 Dedicated Guide,💸 All Entry Fees,🏆 Exclusive Activities,🧳 Luggage Assistance,🚗 Road Trip Extension,🏨 5-Star Resort,🚢 Shared Transfers,🗺 Professional Tour,💸 National Park,🧳 Secure Luggage Storage','🚗 Self-Drive Road Trip,🗺 Basic Guide,🏨Safari Camp Stay']),

            'price'=>fake()->randomElement(['197', '599', '798','422','548']),

            'currency'=>fake()->randomElement(['USD','EUR','KES']),

            'available dates'=>fake()->randomElement(['May to June', 'Feb to April', 'December', 'Easter Holiday', '14th Feb']),
            
            'user_id'=>User::factory(),
            'asset_id'=>Asset::factory(),
            
        ];
    }
}
