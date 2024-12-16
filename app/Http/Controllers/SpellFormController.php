<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCase;

class SpellFormController extends Controller
{
    public function first_info_add(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'specific_person' => 'nullable|string|max:255',
                'third_part' => 'nullable|string|max:255',
                'going_on' => 'nullable|string',
                'previous_contact' => 'required|string',
            ]);

            $validated['payment_status'] = 'pending';
            $validated['video_sended'] = false;

            $case = UserCase::create($validated);

//            return redirect()->route('payment', ['uuid' => $case->uuid]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }

    public function showForm($spellName)
    {
        return view('spell-form', ['spellName' => $spellName]);
    }
}
