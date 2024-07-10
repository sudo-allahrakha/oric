<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'academic_title' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'specialization' => 'nullable|string|max:255',
            'research_area' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'researcher_id' => 'nullable|string|max:255',
            'orcid_id' => 'nullable|string|max:255',
            'google_scholar_link' => 'nullable|url|max:255',
            'contact' => 'nullable|string|max:255',
            'biosketch' => 'nullable|string|max:2000',
        ]);

        $user = Auth::user();
        $profile = $user->profile;

        if (!$profile) {
            // Create a new profile
            $profile = new Profile;
            $profile->user_id = $user->id;
            $profile->fill($request->all());
            $profile->save();
        } else {
            // Update the existing profile
            $profile->update($request->all());
        }

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
