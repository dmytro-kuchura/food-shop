<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(): View|RedirectResponse
    {
        if (!Auth::check()) {
            Alert::warning('Ой, а Вы точно администратор?', 'Слабо верится! :)');
            return redirect(route('home'));
        }
        if (Auth::user() && !Auth::user()->isAdmin()) {
            Alert::warning('Ой, а Вы точно администратор?', 'Слабо верится! :)');
            return redirect(route('home'));
        }
        return view('admin.dashboard');
    }
}
