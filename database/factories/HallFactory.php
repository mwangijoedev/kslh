<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function mombasaPwaniHall(){
        return $this->state([
            'name'=>'Pwani Conference Hall',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>100,
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
                
        ]);
    }
    public function mombasaTsavoHall(){
        return $this->state([
            'name'=>'Tsavo Conference Hall',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System ',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'8-12 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
        ]);
    }
    public function mombasaFrangipaniHall(){
        return $this->state([
            'name'=>'Frangipani Conference Hall',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>100,
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaLounge(){
        return $this->state([
            'name'=>'Mombasa Lounge',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'20-30 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaKisauniHall(){
        return $this->state([
            'name'=>'Kisauni Conference Hall',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'35-40 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaBaobabSuite(){
        return $this->state([
            'name'=>'Baobab Suite',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'115-120 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaBaobab1(){
        return $this->state([
            'name'=>'Baobab 1',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'40-45 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaBaobab2(){
        return $this->state([
            'name'=>'Baobab 2',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'40-45 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    
    public function mombasaMaximsSuite(){
        return $this->state([
            'name'=>'Maxims Suite',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'120-125 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
            
        ]);
    }
    public function mombasaMaxims1(){
        return $this->state([
            'name'=>'Maxims 1',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'60-65 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
        ]);
    }
    public function mombasaMaxims2(){
        return $this->state([
            'name'=>'Maxims Suite',
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
                and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Conference facilities including Flipchart board, papers and markers
                :Participants writing material – pens/pads.
                :1 500ml bottle Mineral Water in the conference for each session.
                :Free wireless internet connection with own Laptop and extension cables
                :LCD Projector.
                :PA System',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'40-45 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
        ]);
    }
    

    public function ngulia(){
        return $this->state([
            'name'=>'Ngulia Conferencing Hall',
            'description'=>'At Ngulia Safari Lodge, we value the importance of any meeting or event, 
                and the necessity to pay very close attention to details, timing, service and quality of culinary items. 
                As well as the need to have an efficient conference coordinator and a technical team who readily available. 
                These are all the hallmarks of a successful conference with us. 
                We pride ourselves on being able to tailor-make any event to your 
                requirements.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Mints, Flipchart board, papers and markers
                :Participants writing material – pens/pads,
                :1 500ml bottle Mineral Water per session
                :Free wireless internet connection with own
                :Laptop
                :Extension cables
                :LCD Projector, 
                :PA system with codeless
                :Microphones and Laptop',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'30 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style. ',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
        ]);
    }

    public function voi(){
        return $this->state([
            'name'=>$this->faker->randomElement(['Voi Conferencing Hall']),
            'description'=>'At Voi Safari Lodge, we value the importance of any meeting or event, 
                and the necessity to pay very close attention to details, timing, service and quality of culinary items. 
                As well as the need to have an efficient conference coordinator and a technical team who readily available. 
                These are all the hallmarks of a successful conference with us. 
                We pride ourselves on being able to tailor-make any event to your 
                requirements.',
            'package_inclusions'=>'Mid-morning/afternoon tea served with snacks
                :Buffet Lunch served with a soft drink (soda or water)
                :Mints, Flipchart board, papers and markers
                :Participants writing material – pens/pads,
                :1 500ml bottle Mineral Water per session
                :Free wireless internet connection with own
                :Laptop
                :Extension cables
                :LCD Projector, 
                :PA system with codeless
                :Microphones and Laptop',
            'hotel_id'=>Hotel::where('tag', 'voi')->first()->id,
            'hotel_tag'=>'voi',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>'30-50 pax',
            'amenities'=>'High-speed Wi-Fi
                :surround sound system
                :HD projectors
                :video conferencing equipment
                :Adjustable lighting
                :On-site catering services
                :Breakout rooms
                :Air conditioning
                :Whiteboards and markers
                :Dedicated event support team.',
            'arrangements_description'=>'We have a plethora of choice when it comes to arrangement of the conference rooms. 
                The set up is customized for comfort while upholding luxury and style.',
            'arrangements'=>'Banquet:Classroom:Hollow Square:Cresent Rounds:Ovals & Rounds:Reception:Theatre:U-shape & T-shape',
        ]);
    }




}
