<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ContactController extends Controller
{
    public const EMAIL = 'info@skyember.com';

    public const KINDS = [
        'business' => 'Business software',
        'product' => 'Digital product',
        'automation' => 'AI and automation',
        'cloud' => 'Cloud and engineering',
        'unsure' => 'Not sure yet',
    ];

    public function show(): View
    {
        return view('pages.contact', [
            'kinds' => self::KINDS,
            'email' => self::EMAIL,
        ]);
    }

    public function prepare(Request $request): RedirectResponse
    {
        if ($request->filled('company_website')) {
            return redirect()->route('contact');
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'string', 'email:rfc', 'max:160'],
            'organization' => ['required', 'string', 'max:160'],
            'kind' => ['nullable', 'in:'.implode(',', array_keys(self::KINDS))],
            'problem' => ['required', 'string', 'min:20', 'max:1200'],
        ], [
            'name.required' => 'Add your name.',
            'name.max' => 'Keep the name under 120 characters.',
            'email.required' => 'Add a work email.',
            'email.email' => 'That email does not look complete.',
            'email.max' => 'Keep the email under 160 characters.',
            'organization.required' => 'Add the organization.',
            'organization.max' => 'Keep the organization under 160 characters.',
            'kind.in' => 'Choose one of the listed systems, or leave it blank.',
            'problem.required' => 'Tell us what you are trying to solve.',
            'problem.min' => 'Say a little more. A few sentences is enough.',
            'problem.max' => 'Keep this under 1,200 characters.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('contact')
                ->withFragment('brief-errors')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();
        $data['name'] = $this->singleLine($data['name']);
        $data['email'] = $this->singleLine($data['email']);
        $data['organization'] = $this->singleLine($data['organization']);
        $data['problem'] = trim($data['problem']);

        $preview = $this->preview($data);

        return redirect()
            ->route('contact')
            ->withFragment('brief-status')
            ->withInput([
                'name' => $data['name'],
                'email' => $data['email'],
                'organization' => $data['organization'],
                'kind' => $data['kind'] ?? null,
                'problem' => $data['problem'],
            ])
            ->with('contact.ready', true)
            ->with('contact.mailto', $this->mailto($data, $preview))
            ->with('contact.preview', $preview);
    }

    private function singleLine(string $value): string
    {
        $collapsed = preg_replace('/\s+/u', ' ', str_replace(["\r", "\n"], ' ', trim($value)));

        return $collapsed ?? trim($value);
    }

    private function preview(array $data): string
    {
        $lines = [
            'Name: '.$data['name'],
            'Email: '.$data['email'],
            'Organization: '.$data['organization'],
        ];

        if (! empty($data['kind']) && isset(self::KINDS[$data['kind']])) {
            $lines[] = 'System: '.self::KINDS[$data['kind']];
        }

        $lines[] = '';
        $lines[] = $data['problem'];

        return implode("\n", $lines);
    }

    private function mailto(array $data, string $preview): string
    {
        return 'mailto:'.self::EMAIL
            .'?subject='.rawurlencode('Brief from '.$data['organization'])
            .'&body='.rawurlencode($preview);
    }
}
