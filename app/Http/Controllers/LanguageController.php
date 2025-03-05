<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    /**
     * Switch the language.
     *
     * @param  string  $locale
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function switchLanguage($locale)
    {
        // Only allow 'en' and 'fi' languages
        if (!in_array($locale, ['en', 'fi'])) {
            $locale = 'en';
        }

        // Store language in session
        session(['language' => $locale]);

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back();
    }

    /**
     * Switch the theme.
     *
     * @param  string  $theme
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function switchTheme($theme)
    {
        // Only allow 'dark' and 'light' themes
        if (!in_array($theme, ['dark', 'light'])) {
            $theme = 'dark';
        }

        // Store theme in session
        session(['theme' => $theme]);

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back();
    }
}
