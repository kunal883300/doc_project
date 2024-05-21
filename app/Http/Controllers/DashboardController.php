<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'doc':
                return redirect()->route('doc.dashboard');
                break;
            case 'applicant':
                return redirect()->route('applicant.dashboard');

                break;
            case 'admin':
                return redirect()->route('admin.dashboard');

                break;
            default:
                return redirect()->route('login');
                break;
        }
    }
}
