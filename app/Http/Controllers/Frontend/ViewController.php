<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\MembershipMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ViewController extends Controller
{
    public function index()
    {
        return view('apps.pages.home');
    }

    public function office()
    {
        return view('apps.pages.office');
    }

    public function about()
    {
        return view('apps.pages.about');
    }

    public function jobs()
    {
        return view('apps.pages.jobs');
    }

    public function posts()
    {
        return view('apps.pages.posts');
    }

    public function contacts()
    {
        return view('apps.pages.contacts');
    }

    public function post()
    {
        return view('apps.pages.post');
    }

    public function membershipStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'enterprise' => 'nullable|string|max:255',
            'phone' => 'required|string|min:13',
            'email' => 'required|email|max:255',
        ], [
            'lastname.required' => 'Le nom est requis.',
            'lastname.string' => 'Le nom doit être une chaîne de caractères.',
            'lastname.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'firstname.required' => 'Le prénom complet est requis.',
            'firstname.string' => 'Le prénom complet doit être une chaîne de caractères.',
            'firstname.max' => 'Le prénom complet ne doit pas dépasser 255 caractères.',

            'enterprise.required' => 'Le nom d\'entreprise est requis.',
            'enterprise.max' => 'Le nom d\'entreprise doit être une chaîne de caractères.',

            'phone.required' => 'Le numéro de téléphone du message est requis.',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'phone.min' => 'Le numéro de téléphone ne doit pas être en dessous de 13 chiffres.',

            'email.required' => 'L’adresse e-mail est requise.',
            'email.email' => 'Veuillez fournir une adresse e-mail valide.',
            'email.max' => 'L’adresse e-mail ne doit pas dépasser 255 caractères.',


        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()
                ->with('error', $firstErrorMessage);
        }

        try {

            $member = $request->all();

            Mail::to('hello@kksmartcom.com')->send(new MembershipMail($member));

            return redirect()->back()->with('success', 'Votre demande d\'adhésion a été envoyé avec succès ! Un retour vous sera fait à l\'adresse email indiqué.');
        } catch (\Exception $e) {
            dd($e);
            Log::error('Erreur lors de l\'envoie de la demande d\'adhésion : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoie de la demande d\'adhésion. Veuillez reéssayer.');
        }
    }

    public function contactStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'object' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'email.required' => 'L’adresse e-mail est requise.',
            'email.email' => 'Veuillez fournir une adresse e-mail valide.',
            'email.max' => 'L’adresse e-mail ne doit pas dépasser 255 caractères.',

            'object.required' => 'L’objet du message est requis.',
            'object.string' => 'L’objet du message doit être une chaîne de caractères.',
            'object.max' => 'L’objet du message ne doit pas dépasser 255 caractères.',

            'message.required' => 'Le contenu du message est requis.',
            'message.string' => 'Le contenu du message doit être une chaîne de caractères.',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()
                ->with('error', $firstErrorMessage);
        }

        try {

            $contact = $request->all();

            Mail::to('hello@kksmartcom.com')->send(new ContactMail($contact));

            return redirect()->back()->with('success', 'Message envoyé.');
        } catch (\Exception $e) {
            dd($e);
            Log::error('Erreur lors de l\'envoie du message : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoie du message. Veuillez reéssayer.');
        }
    }
}
