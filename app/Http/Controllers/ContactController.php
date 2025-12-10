<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 6ff35c096c90e5732c2012e3d84da7812b413d47

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

<<<<<<< HEAD
        // Vérification reCaptcha (SSL actif pour production)
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $body = $response->json();

        if (!isset($body['success']) || $body['success'] != true) {
            return back()->withErrors(['captcha' => 'Échec de la validation reCaptcha, essayez à nouveau.'])->withInput();
=======
        // Vérification reCaptcha (production)
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $body = $response->json();

            if (!isset($body['success']) || $body['success'] != true) {
                return back()->withErrors(['captcha' => 'Échec de la validation reCaptcha, essayez à nouveau.'])->withInput();
            }
        } catch (\Exception $e) {
            Log::error('Erreur reCAPTCHA production', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return back()->withErrors(['captcha' => 'Impossible de vérifier le reCaptcha pour le moment.'])->withInput();
>>>>>>> 6ff35c096c90e5732c2012e3d84da7812b413d47
        }

        // Préparer les données pour le mail
        $formData = [
            'name' => $request->fname . ' ' . $request->lname,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => 'Message depuis le formulaire de contact'
        ];

        // Envoi du mail texte simple
<<<<<<< HEAD
        Mail::raw(
            "Nom : {$formData['name']}\nEmail : {$formData['email']}\nMessage : {$formData['message']}",
            function ($mailMessage) use ($formData) {
                $mailMessage->to(env('CONTACT_RECIPIENT_EMAIL', 'mjledondedieu@gmail.com'), env('CONTACT_RECIPIENT_NAME', 'Archipel Duty Free'))
                    ->subject($formData['subject'])
                    ->from(env('MAIL_FROM_ADDRESS', 'mjledondedieu@gmail.com'), env('MAIL_FROM_NAME', 'Archipel Duty Free'))
                    ->replyTo($formData['email'], $formData['name']);
            }
        );
=======
        try {
            Mail::raw(
                "Nom : {$formData['name']}\nEmail : {$formData['email']}\nMessage : {$formData['message']}",
                function ($mailMessage) use ($formData) {
                    $mailMessage->to(env('CONTACT_RECIPIENT_EMAIL'), env('CONTACT_RECIPIENT_NAME'))
                        ->subject($formData['subject'])
                        ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                        ->replyTo($formData['email'], $formData['name']);
                }
            );
        } catch (\Exception $e) {
            Log::error('Erreur SMTP production', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'formData' => $formData
            ]);

            return back()->withErrors([
                'mail' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.'
            ]);
        }
>>>>>>> 6ff35c096c90e5732c2012e3d84da7812b413d47

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
