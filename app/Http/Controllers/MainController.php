<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\ContactFormUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function home(Request $request) {
        return view('main.home', ['header' => true]);
    }

    public function services(Request $request) {
        return view('main.services', ['header' => false]);
    }

    public function medical(Request $request) {
        return view('main.medical', ['header' => false]);
    }

    public function privacy(Request $request) {
        return view('main.privacy', ['header' => false]);
    }

    public function team(Request $request) {
        return view('main.team', ['header' => false]);
    }

    public function contact(Request $request) {
        return view('main.contact', ['header' => false]);
    }

    public function save(Request $request) {
        $validated = $request->validate([
            'full_name' => 'required|string|min:5|max:150',
            'phone' => 'required|string|min:9|max:11',
            'email' => 'required|email:rfc,dns,spoof,filter',
            'subject' => 'required|string|min:5|max:150',
            'message' => 'required|string|min:4|max:150'
        ]);

        Mail::to('contacto@colin-cordoba.com.mx')->bcc('rasoner@gmail.com')->send(new ContactForm($validated));
        Mail::to($validated['email'])->bcc('rasoner@gmail.com')->send(new ContactFormUser($validated));

        return redirect(route('contact'))->with(['message' => 'Muchas gracias por ponerte en contacto con nosotros, en unos minutos nuestros asesores se pondrán en contacto contigo']);
    }

    public function clearCache(Request $request) {
        return '';  //shell_exec('cd .. && php artisan cache:clear && php artisan config:clear');
    }
}
