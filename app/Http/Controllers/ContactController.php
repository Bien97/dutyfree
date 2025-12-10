<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation des champs
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        // Vérification reCaptcha (SSL actif pour production)
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $body = $response->json();

        if (!isset($body['success']) || $body['success'] != true) {
            return back()->withErrors(['captcha' => 'Échec de la validation reCaptcha, essayez à nouveau.'])->withInput();
        }

        // Préparer les données pour le mail
        $formData = [
            'name' => $request->fname . ' ' . $request->lname,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => 'Message depuis le formulaire de contact'
        ];

        // Envoi du mail texte simple
        Mail::raw(
            "Nom : {$formData['name']}\nEmail : {$formData['email']}\nMessage : {$formData['message']}",
            function ($mailMessage) use ($formData) {
                $mailMessage->to(env('CONTACT_RECIPIENT_EMAIL', 'mjledondedieu@gmail.com'), env('CONTACT_RECIPIENT_NAME', 'Archipel Duty Free'))
                    ->subject($formData['subject'])
                    ->from(env('MAIL_FROM_ADDRESS', 'mjledondedieu@gmail.com'), env('MAIL_FROM_NAME', 'Archipel Duty Free'))
                    ->replyTo($formData['email'], $formData['name']);
            }
        );

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
