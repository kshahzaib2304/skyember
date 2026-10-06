<?php

namespace App\Insights;

use Illuminate\Support\Str;

class EssayCatalog
{
    public const PUBLISHED_AT = '2026-10-06';

    /**
     * @return list<array<string, mixed>>
     */
    public static function records(): array
    {
        return [
            [
                'slug' => 'the-workflow-is-the-product',
                'source' => 'docs/insights/01-the-workflow-is-the-product.md',
                'title' => 'The Workflow Is the Product',
                'category' => 'Product',
                'filter' => 'product',
                'excerpt' => 'Why software decisions get clearer when the actual work is understood before screens, features, or frameworks take over.',
                'author' => 'SKYEMBER',
                'published_at' => self::PUBLISHED_AT,
                'hero_label' => 'Workflow',
                'hero_steps' => ['Trigger', 'Context', 'Decision', 'Action', 'State', 'Continuation'],
                'seo_title' => 'The Workflow Is the Product | SKYEMBER Insights',
                'seo_description' => 'Most business software is designed as screens. SKYEMBER argues the better unit of design is the workflow: decisions, state, trace, and what happens when the expected path breaks.',
                'cta_label' => 'See how we approach business software',
                'cta_route' => 'solutions.business-software',
            ],
            [
                'slug' => 'complexity-should-have-to-earn-its-place',
                'source' => 'docs/insights/02-complexity-should-have-to-earn-its-place.md',
                'title' => 'Complexity Should Have to Earn Its Place',
                'category' => 'Engineering',
                'filter' => 'engineering',
                'excerpt' => 'A practical view of architecture: complexity is sometimes necessary, but it should always have a reason, a boundary, and a cost.',
                'author' => 'SKYEMBER',
                'published_at' => self::PUBLISHED_AT,
                'hero_label' => 'Architecture',
                'hero_steps' => ['Requirement', 'Boundary', 'Cost'],
                'seo_title' => 'Complexity Should Have to Earn Its Place | SKYEMBER Insights',
                'seo_description' => 'Complexity in software is not inherently bad. Unnecessary complexity is. SKYEMBER on architecture that is proportionate to the problem — every important part with a reason to exist.',
                'cta_label' => 'See how we make technical decisions',
                'cta_route' => 'company.technology',
            ],
            [
                'slug' => 'designing-the-state-after-the-happy-path',
                'source' => 'docs/insights/03-designing-the-state-after-the-happy-path.md',
                'title' => 'Designing the State After the Happy Path',
                'category' => 'Design',
                'filter' => 'design',
                'excerpt' => 'Why serious product design starts where the normal flow stops: errors, permissions, empty states, interruptions, recovery, and incomplete work.',
                'author' => 'SKYEMBER',
                'published_at' => self::PUBLISHED_AT,
                'hero_label' => 'States',
                'hero_steps' => ['Expected', 'Interrupted', 'Recovered'],
                'seo_title' => 'Designing the State After the Happy Path | SKYEMBER Insights',
                'seo_description' => 'The happy path is rarely where software becomes difficult. SKYEMBER on designing empty, error, permission, interruption, and recovery states as the product — not as decoration.',
                'cta_label' => 'See how we approach product experience',
                'cta_route' => 'services.ui-ux-design',
            ],
            [
                'slug' => 'when-an-ai-workflow-should-stop-and-ask',
                'source' => 'docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md',
                'title' => 'When an AI Workflow Should Stop and Ask',
                'category' => 'AI + Systems',
                'filter' => 'ai',
                'excerpt' => 'A useful AI system is not one that tries to make every decision automatically. Sometimes the most intelligent behaviour is recognising uncertainty and handing the decision back to a person.',
                'author' => 'SKYEMBER',
                'published_at' => self::PUBLISHED_AT,
                'hero_label' => 'AI workflow',
                'hero_steps' => ['Understand', 'Decide', 'Act / Ask'],
                'seo_title' => 'When an AI Workflow Should Stop and Ask | SKYEMBER Insights',
                'seo_description' => 'AI belongs inside a workflow, with boundaries, evaluation, and human escalation. SKYEMBER on automation before autonomy — and why stopping to ask is sometimes the correct outcome.',
                'cta_label' => 'See our approach to AI and automation',
                'cta_route' => 'solutions.ai-automation',
            ],
        ];
    }

    /**
     * @return list<string>
     */
    public static function slugs(): array
    {
        return array_column(self::records(), 'slug');
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        foreach (self::records() as $record) {
            if ($record['slug'] === $slug) {
                return self::hydrate($record);
            }
        }

        return null;
    }

    /**
     * @return list<array<string, mixed>>
     */
    public static function related(string $slug): array
    {
        return array_values(array_filter(
            self::records(),
            fn (array $record): bool => $record['slug'] !== $slug,
        ));
    }

    /**
     * @param  array<string, mixed>  $record
     * @return array<string, mixed>
     */
    private static function hydrate(array $record): array
    {
        $path = base_path($record['source']);
        $markdown = is_readable($path) ? (string) file_get_contents($path) : '';
        $body = self::extractBody($markdown);
        $words = str_word_count(strip_tags($body));

        $record['body_html'] = Str::markdown($body, [
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
        $record['reading_time'] = max(1, (int) round($words / 220)).' min';

        return $record;
    }

    private static function extractBody(string $markdown): string
    {
        $parts = preg_split('/^## Body\s*$/m', $markdown, 2);

        if (! is_array($parts) || count($parts) < 2) {
            return '';
        }

        $body = trim($parts[1]);
        $body = preg_replace('/\n---\s*\nSee how we[\s\S]*$/', '', $body) ?? $body;
        $body = preg_replace('/\nSee (?:how we|our approach)[\s\S]*$/', '', $body) ?? $body;

        return trim($body);
    }
}
