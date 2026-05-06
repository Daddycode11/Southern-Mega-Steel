<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->data['q_email']],
            subject: 'Quote Request: ' . $this->data['q_product'],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.quote-request');
    }
}
