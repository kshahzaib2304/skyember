<?php

namespace App\Http\Controllers;

use App\Support\PublicCatalog;
use Illuminate\Http\Response;

class SiteSeoController extends Controller
{
    public function sitemap(): Response
    {
        $xml = view('seo.sitemap', [
            'pages' => PublicCatalog::pages(),
        ])->render();

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    public function robots(): Response
    {
        $body = implode("\n", [
            'User-agent: *',
            'Disallow:',
            '',
            'Sitemap: '.url('/sitemap.xml'),
            '',
        ]);

        return response($body, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
