<?php

namespace App\Http\Controllers;

use App\Insights\EssayCatalog;
use Illuminate\View\View;

class InsightsEssayController extends Controller
{
    public function show(string $slug): View
    {
        $essay = EssayCatalog::find($slug);

        abort_unless($essay !== null, 404);

        return view('pages.insights.show', [
            'essay' => $essay,
            'related' => EssayCatalog::related($slug),
        ]);
    }
}
