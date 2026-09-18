<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faqs = [

            'Booking' => [
                [
                    'question' => 'How can I book a moving service?',
                    'answer' => "You can book by sharing your requirements through the booking form on our website, or by calling or messaging us directly. A move coordinator will confirm the details with you before your move date.",
                ],
                [
                    'question' => 'Can I reschedule my move?',
                    'answer' => "Yes. Contact our support team as early as possible and we'll work with you to move your booking to a new date, subject to crew and vehicle availability.",
                ],
            ],

            'Packing' => [
                [
                    'question' => 'Do you provide packing services?',
                    'answer' => 'Yes, our crew packs your belongings using materials suited to each item, including extra care for fragile and delicate goods.',
                ],
                [
                    'question' => 'What packing materials do you use?',
                    'answer' => 'We use bubble wrap, carton boxes, foam sheets, stretch film, packing paper and waterproof covers, depending on what is being packed.',
                ],
            ],

            'Moving' => [
                [
                    'question' => 'Can you move furniture?',
                    'answer' => 'Yes, our team handles furniture of all sizes, including disassembly and reassembly where required.',
                ],
                [
                    'question' => 'What happens on moving day?',
                    'answer' => 'Our crew arrives at the scheduled time, packs your belongings if this was not done in advance, loads them, transports them to the new address, and unloads and places them as agreed.',
                ],
                [
                    'question' => 'Do you provide loading and unloading services?',
                    'answer' => 'Yes, loading and unloading are included as part of every move.',
                ],
            ],

            'Pricing' => [
                [
                    'question' => 'How is moving cost calculated?',
                    'answer' => 'Cost depends on the volume of goods being moved, the distance between locations, floor or lift access, and any additional services such as packing materials or storage. We share a fixed quote before you book.',
                ],
                [
                    'question' => 'Do you provide a free estimate?',
                    'answer' => 'Yes, a move coordinator reviews your requirements and shares a written quote before you confirm your booking.',
                ],
            ],

            'Vehicle Transportation' => [
                [
                    'question' => 'Do you transport vehicles?',
                    'answer' => 'Yes, we provide car and bike transportation with pickup, inspection, careful loading and doorstep delivery.',
                ],
                [
                    'question' => 'Are vehicles inspected before transport?',
                    'answer' => 'Yes, every vehicle is inspected before loading and again at delivery, and both inspections are recorded.',
                ],
            ],

            'Storage' => [
                [
                    'question' => 'Do you offer storage for household or business goods?',
                    'answer' => 'Yes, we offer short-term and long-term warehouse storage for both household items and business inventory.',
                ],
                [
                    'question' => 'How long can I store my goods?',
                    'answer' => 'For as short as a few weeks or as long as several months, depending on what you need. There is no fixed minimum beyond the duration you actually require.',
                ],
            ],

            'Payment' => [
                [
                    'question' => 'What payment methods are available?',
                    'answer' => 'We accept common payment methods including cash and online payment. Our team will confirm the exact options available at the time of your booking.',
                ],
                [
                    'question' => 'When do I need to pay?',
                    'answer' => 'Payment terms are shared along with your quote before the move, so you know what is expected before moving day.',
                ],
            ],

            'Customer Support' => [
                [
                    'question' => 'How can I contact customer support?',
                    'answer' => 'You can call us at +91 7070784447 or +91 7070999547, email info@movesmartplus.com, or use the contact form on our website.',
                ],
                [
                    'question' => 'Do you provide support after the move is complete?',
                    'answer' => 'Yes, your move coordinator remains your point of contact if you have questions once the move is complete.',
                ],
                [
                    'question' => 'Which areas do you serve?',
                    'answer' => 'We serve customers across Bihar and Jharkhand, including local, same-city and intercity moves.',
                ],
            ],

        ];

        foreach ($faqs as $category => $questions) {
            foreach ($questions as $index => $item) {
                Faq::create([
                    'category' => $category,
                    'question' => $item['question'],
                    'answer' => $item['answer'],
                    'status' => true,
                    'sort_order' => $index + 1,
                ]);
            }
        }
    }
}
