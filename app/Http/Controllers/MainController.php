<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\ContactFormUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function home(Request $request) {
        return view('main.home', [
            'footer_bg_styles' => 'background-color: #1a202c'
        ]);
    }

    public function licenses(Request $request) {
        return view('main.licenses', [
            'footer_bg_styles' => 'background-color: #2d2e82'
        ]);
    }

    public function explanation(Request $request) {
        return view('main.explanation', [
        'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function testimony(Request $request) {
        return view('main.testimony', [
            'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function results(Request $request) {
        return view('main.results', [
            'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function botWorking(Request $request) {
        return view('main.bot_working', [
            'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function aboutUs(Request $request) {
        return view('main.about_us', [
            'footer_bg_styles' => 'background-color: #2d2e82'
        ]);
    }

    public function contact(Request $request) {
        return view('main.contact', [
            'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function faqs(Request $request) {
        return view('main.faqs', [
            'footer_bg_styles' => 'background-color: #12213d'
        ]);
    }

    public function save(Request $request) {
        $validated = $request->validate([
            'full_name' => 'required|string|min:5|max:150',
            'phone' => 'required|string|min:9|max:11',
            'email' => 'required|email:rfc,dns,spoof,filter',
            'message' => 'required|string|min:4|max:150'
        ]);

        // Mail::to('contacto@colin-cordoba.com.mx')->bcc('rasoner@gmail.com')->send(new ContactForm($validated));
        // Mail::to($validated['email'])->bcc('rasoner@gmail.com')->send(new ContactFormUser($validated));

        return redirect(route('contact'))->with(['message' => 'Muchas gracias por ponerte en contacto con nosotros, en unos minutos nuestros asesores se pondrán en contacto contigo']);
    }

    public function clearCache(Request $request) {
        return '';  //shell_exec('cd .. && php artisan cache:clear && php artisan config:clear');
    }
}
