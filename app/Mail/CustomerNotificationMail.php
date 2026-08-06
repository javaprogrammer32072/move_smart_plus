<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class CustomerNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

   
    public function __construct()
    {
        // $this->booking = $booking;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "New Booking Received - ",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-notification',
            with: [
               "test"=>"tet" 
            ],
        );
    }
}