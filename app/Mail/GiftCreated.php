<?php

namespace App\Mail;

use App\Models\Gift;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class GiftCreated extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        protected Gift $gift
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouveau cadeau ajouté !',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.gift_created',
            with: [
                'nomCadeau' => $this->gift->name,
                'prixCadeau' => $this->gift->price,
            ],
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('cadeau.jpg'))
                ->as('image-cadeau.jpg')
                ->withMime('image/jpeg'),
        ];
    }
}