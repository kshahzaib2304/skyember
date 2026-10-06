# SKYEMBER Website - Tracking Log

Living record of every phase, decision, and change. Any developer should be able to open this file and know what was done, what is current, and what comes next.

---

## Current state

| Field               | Value                                                          |
| ------------------- | -------------------------------------------------------------- |
| **Phase**           | Chunk 28 - Sitewide final quality pass                         |
| **Status**          | Shipped. Public frontend polish complete                       |
| **Stack**           | Laravel 12 · Blade · Tailwind CSS 4 · Vite · GSAP              |
| **Backend / Admin** | Deferred - static/mock content only                            |
| **Visual base**     | Hybrid (light default + intentional dark product/proof planes) |
| **Local preview**   | `php artisan serve` + `npm run dev` (or `npm run build`)       |

---

## Decisions log

| Date       | Decision                                                       | Rationale                                                                                                                                                                                                      |
| ---------- | -------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 2026-10-04 | Hybrid visual base (1C)                                        | Logo is light-native; dark planes reserved for product/proof moments                                                                                                                                           |
| 2026-10-04 | Chunk 1 = docs + tokens + shell + Hero (2C)                    | Establish identity and first masterpiece section before full homepage                                                                                                                                          |
| 2026-10-04 | No SaaS templates                                              | Visual language built in-house from brand mark                                                                                                                                                                 |
| 2026-10-04 | Blade + SEO-native HTML                                        | Crawlable content; animation enhances, never replaces copy                                                                                                                                                     |
| 2026-10-04 | Laravel 12 (not 13)                                            | Existing project constraint                                                                                                                                                                                    |
| 2026-10-04 | Fonts: Syne Variable (display) + Source Sans 3 Variable (body) | Expressive geometric display + readable body; avoid Inter/Roboto/system default look                                                                                                                           |
| 2026-10-04 | Layout via `@extends('layouts.app')`                           | Matches planned `resources/views/layouts/` structure; anonymous `<x-layouts.app>` requires `components/layouts/`                                                                                               |
| 2026-10-04 | Chunk 2 is a capability journey, not service cards             | Prove software is systems. Four different compositions. Editorial and structured, distinct from the Hero                                                                                                       |
| 2026-10-04 | Work-preview bridge sat after capabilities                     | Temporary until product proof. Removed in Chunk 3                                                                                                                                                              |
| 2026-10-04 | Solutions nav targets `#capabilities`                          | First real in-page destination. Services, Work, and Company stay deferred                                                                                                                                      |
| 2026-10-04 | Chunk 3 brief accepted and built as specified                  | One SO-10482 document on a dark technical plane. `#work-preview` removed. Explore Our Work → `#product-proof`                                                                                                  |
| 2026-10-04 | Motion scale is shared, and slower                             | `resources/js/motion.js`. Chunk 2 and 3 retimed with pauses. Hero sequence about 2.8s. Chunk 4 waits                                                                                                           |
| 2026-10-04 | Chunk 4 composition proposed, not built                        | One featured project on a light editorial spread. Representative only. No link until the case-study page exists                                                                                                |
| 2026-10-04 | Chunk 4 built as specified                                     | Light spread, one Business Operations Platform, cropped plate, 0.9s settle. Explore link omitted because the route does not exist                                                                              |
| 2026-10-04 | Chunks 1–4 frozen                                              | Later sections do not restyle Hero, Capabilities, Product proof, or Selected work unless a system-level bug appears                                                                                            |
| 2026-10-04 | Chunk 5 composition proposed, not built                        | Process is a quiet operating list on the light field. No timeline graphic, no motion sequence. Do not implement until the brief is accepted                                                                    |
| 2026-10-04 | Chunk 5 built as specified                                     | Operating list after selected work. Ordered list, type only, no motion. Chunks 1–4 untouched                                                                                                                   |
| 2026-10-04 | Chunk 6 composition proposed, not built                        | Final CTA is one statement and one action on the light field. No form. `/contact` stays unwired until that page exists. Footer currently repeats a similar close; resolve that only when the brief is accepted |
| 2026-10-04 | Chunk 6 built as specified                                     | One close after process. Footer is mark, email, and legal line. Let’s Talk and Start a Project point at `#final-cta`. Contact href omitted                                                                     |
| 2026-10-04 | Homepage story frozen                                          | No new homepage sections without a real reason: missing business information, SEO, accessibility, performance, broken UX, or an actual brand change                                                            |
| 2026-10-04 | Chunk 7 is a brief, not a lead form                            | `/contact` continues the closing line. No map, phone, budget, office, or icon row. No database. The visitor sends the brief from their own email                                                               |
| 2026-10-04 | No 3D on the contact page                                      | The job is to type. A scene would compete with the form and slow the first paint. Spatial motion waits for a system that needs it                                                                              |
| 2026-10-05 | Chunk 8 composition proposed, not built                        | `/work` is a contents page: one featured plate, then two unequal records. No card grid, no case-study URL, no homepage restyle. Do not implement until the brief is accepted                                   |
| 2026-10-05 | Chunk 8 accepted with hierarchy refinement                     | 01 is the main editorial entry. 02 and 03 are a quieter pair under it, not equal thirds. Honesty rules unchanged                                                                                               |
| 2026-10-05 | Chunk 8 built as specified                                     | `/work` live. Work nav wired. Featured case-study link omitted because the route does not exist. Homepage frozen                                                                                               |
| 2026-10-05 | Chunk 9 composition proposed, not built                        | Case study expands SO-10482 into problem → system → constraints → design/engineering thinking. No fake Results. Do not implement until accepted                                                                |
| 2026-10-05 | Chunk 9 accepted and built as specified                        | `/work/business-operations-platform` live. Explore links activated. Industry → Pharmacy / Operations on teasers. Homepage compositions untouched                                                               |
| 2026-10-05 | Product-storytelling phase frozen                              | Homepage, Contact, Work index, BOP case study frozen. Next work is enterprise IA, starting with `/solutions` brief                                                                                             |
| 2026-10-05 | Chunk 10 composition proposed, not built                       | `/solutions` is a decision index: featured Business software + three quieter paths. Not a four-card grid. Do not implement until accepted                                                                      |
| 2026-10-05 | Chunk 10 accepted and built as specified                       | `/solutions` live. Nav Solutions → hub. Child routes gated. Homepage capabilities section untouched                                                                                                            |
| 2026-10-05 | Chunk 11 composition proposed, not built                       | Business software deep page: decision → what we put in place → proof. Not an ERP catalog. Do not implement until accepted                                                                                      |
| 2026-10-05 | Chunk 11 accepted and built as specified                       | `/solutions/business-software` live. Hub Explore activated for Business software only. Hero is operations workspace, not SO-10482                                                                              |
| 2026-10-05 | Chunk 12 composition proposed, not built                       | SaaS page is product experience + lifecycle, not Business Software with new words. No BOP as SaaS proof. Do not implement until accepted                                                                     |
| 2026-10-05 | Chunk 12 accepted and built as specified                       | `/solutions/saas-products` live. Hub Explore activated for SaaS. Product hero, not ops workspace. Secondary “See how we think” ungated. No BOP as SaaS proof                                                |
| 2026-10-05 | Chunk 13 composition proposed, not built                       | Custom Platforms sits above Business Software and SaaS: shared foundation connecting workflows, users, channels, systems. No BOP as platform proof. Do not implement until accepted                        |
| 2026-10-05 | Chunk 13 accepted and built as specified                       | `/solutions/custom-platforms` live. Hub Explore activated. Connected platform hero. Secondary proof ungated. No BOP as platform proof. Hub path 03 when/place aligned                                                              |
| 2026-10-05 | Chunk 14 composition proposed, not built                       | AI page is intelligent workflow + control/evaluation — not AI-agency theatre. Automation before autonomy. No BOP as AI proof. Do not implement until accepted                                                                     |
| 2026-10-05 | Chunk 14 accepted and built as specified                       | `/solutions/ai-automation` live. Hub Explore activated (all four children). Controlled workflow hero. Secondary ungated. No BOP as AI proof. Path 04 when/place aligned                                                              |
| 2026-10-05 | Chunk 15 composition proposed, not built                       | `/services` is engineering practice / disciplines — not a solution menu replay. Product Engineering featured; UI/UX → Web → Mobile → Cloud. No AI service duplicate. Do not implement until accepted                               |
| 2026-10-05 | Chunk 15 accepted and built as specified                       | `/services` live. Nav Services wired. Product Engineering featured; child Explore gated. BOP proof carefully scoped. Solutions delivery note links to Services                                                                   |
| 2026-10-05 | Chunk 16 composition proposed, not built                       | Product Engineering is the Services-family depth benchmark: intent → production without losing the problem. Connected disciplines, not a stack page. Do not implement until accepted                                                   |
| 2026-10-05 | Chunk 16 accepted and built as specified                       | `/services/product-engineering` live. Hub Featured Explore activated. Connected practice page. BOP carefully scoped. Sibling Explore still gated                                                                  |
| 2026-10-06 | Chunk 17 composition proposed, not built                       | UI/UX is design judgment for complex software — decision made clear, not a visual gallery. Research → structure → interaction → systematize → validate. Do not implement until accepted                                                     |
| 2026-10-06 | Chunk 17 accepted and built as specified                       | `/services/ui-ux-design` live. Hub UI/UX Explore activated. Design judgment page. PE cross-links live. Web/Mobile/Cloud still gated                                                                                                |
| 2026-10-06 | Chunk 18 composition proposed, not built                       | Web Development is delivering the product through the web — browser, responsive, performance, accessibility, SEO — not a framework catalog. Do not implement until accepted                                                       |
| 2026-10-06 | Chunk 18 accepted and built as specified                       | `/services/web-development` live. Hub Web Explore activated. Same product, different conditions. UX + PE cross-links live. Mobile/Cloud still gated                                                                               |
| 2026-10-06 | Chunk 19 composition proposed, not built                       | Mobile is the moment of use — touch, lifecycle, offline, platform conventions — not phone frames or framework logos. Do not implement until accepted                                                                             |
| 2026-10-06 | Chunk 19 accepted and built as specified                       | `/services/mobile-development` live. Hub Mobile Explore activated. Interruption → continuity. UX + PE + Web cross-links live. Cloud still gated                                                                                   |
| 2026-10-06 | Chunk 20 composition proposed, not built                       | Cloud & DevOps is production reliability — IaC, guarded delivery, observability, security, recovery — not a logo wall or hosting page. Do not implement until accepted                                                           |
| 2026-10-06 | Chunk 20 accepted and built as specified                       | `/services/cloud-devops` live. Hub Cloud Explore activated. One change end to end. PE + Web cross-links live. Services family complete                                                                                            |
| 2026-10-06 | Chunk 21 composition proposed, not built                       | `/company` is principle-led institutional story — why SKYEMBER works this way. No invented scale, team, offices, or Mission/Vision/Values template. Do not implement until accepted                                                 |
| 2026-10-06 | Chunk 21 accepted and shipped                                  | `/company` live. Company nav live. About/Process/Technology gated. Careers absent. `co-*` CSS/JS. Organization site-wide + WebSite/BreadcrumbList on page. Services family remains frozen                                                |
| 2026-10-06 | `/company` frozen; Company children ordered                    | Freeze Company with other primary surfaces. Build children one at a time: About → Process → Technology (human → operational → technical). Brief → approve → build. No stub routes. `/insights` waits.                                 |
| 2026-10-06 | Chunk 22 composition proposed, not built                       | `/company/about` is factual/human company profile — who and what SKYEMBER is. No invented team, history, offices, clients, or scale. People section reserved until approved. Do not implement until accepted                                    |
| 2026-10-06 | Chunk 22 accepted and shipped                                  | `/company/about` live. Explore About activated on `/company`. Process/Technology gated. People absent. `coa-*` CSS/JS. BreadcrumbList Home→Company→About. Direct/Connected/Accountable locked. No size-claim headline.                      |
| 2026-10-06 | Chunk 23 composition proposed, not built                       | `/company/process` is engagement transparency — not homepage methodology repeat. Conversation → understand → frame → make → validate → release → continue. Decisions visible. No timelines/retainers. Do not implement until accepted           |
| 2026-10-06 | Chunk 23 accepted and shipped                                  | `/company/process` live. Explore Process activated. Decision-record signature. `cop-*` CSS/JS. BreadcrumbList only. Technology gated. About/Company Explore wiring updated. No homepage Process duplication.                                |
| 2026-10-06 | Chunk 24 composition proposed, not built                       | `/company/technology` is technical philosophy — technology is a decision, not an identity. No stack catalogue. Trade-offs visible. Do not implement until accepted                                                                           |
| 2026-10-06 | Chunk 24 accepted and shipped                                  | `/company/technology` live. Company family complete. `cot-*` CSS/JS. Explore Technology activated. BreadcrumbList only. Representative labeled. No stack catalogue. Honest existing-architecture exit.                                        |
| 2026-10-06 | Chunk 25 composition proposed, not built                       | `/insights` is an editorial intelligence layer — not a blog. Featured thought + vertical index. Four categories. No fake articles/authors, no CMS. Do not implement until accepted                                                           |
| 2026-10-06 | Chunk 25 accepted and built                                    | `/insights` live. Featured thesis + gated editorial directions. Insights nav wired. BreadcrumbList only. No Article JSON-LD, no fake authors/dates, no CMS. CTA → `/contact`                                                               |
| 2026-10-06 | `/insights` frozen                                             | Publishing architecture is present without pretending SKYEMBER already has a body of published thought. Article routes wait for genuine essays.                                                                 |
| 2026-10-06 | Chunk 26 composition proposed, not built                       | Four genuine essays first: Workflow / Complexity / Happy Path / AI escalation. Content brief and copywriting pass only. No `/insights/[slug]`, Article JSON-LD, dates, or article model until copy exists. Do not implement until accepted |
| 2026-10-06 | Chunk 26 brief accepted; Essay 01 copy written                 | Unpublished draft: `docs/insights/01-the-workflow-is-the-product.md`. No slug route, schema, CMS, dates, or `/insights` restyle. Essays 02–04 still unwritten                                                                 |
| 2026-10-06 | Essay 01 voice approved; Essay 02 copy written                 | Unpublished: `docs/insights/02-complexity-should-have-to-earn-its-place.md`. Engineering-led, not a tutorial. Same editorial pattern as 01. Essays 03–04 unwritten. No routes.                                                |
| 2026-10-06 | Essay 02 accepted; Essay 03 copy written                       | Unpublished: `docs/insights/03-designing-the-state-after-the-happy-path.md`. Design-led: states, recovery, trust. Same editorial pattern. Essay 04 unwritten. No routes.                                                      |
| 2026-10-06 | Essay 03 accepted; Essay 04 copy written                       | Unpublished: `docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md`. AI inside workflow; automation before autonomy; no fake metrics. Four-essay set complete as copy. `/insights` still frozen.                         |
| 2026-10-06 | Chunk 26 editorially approved                                  | Four-essay set coherent. Voice, philosophy, no marketing theatre. Essay 04 on disk at `docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md`. Publication architecture now justified. Copy stays unpublished until Chunk 27. |
| 2026-10-06 | Chunk 27 composition proposed, not built                       | `/insights/{slug}` for the four genuine essays. Connect index, do not restyle it. Article + BreadcrumbList, SKYEMBER author, real dates at publish. Static catalog, no CMS. 404 unknown slugs. Do not implement until accepted |
| 2026-10-06 | Chunk 27 accepted and shipped                                  | Four essays live. `EssayCatalog` static. `inse-*` pages. Index ungated without restyle. `published_at` 2026-10-06. Author SKYEMBER. Article + BreadcrumbList. Unknown slugs 404. No CMS.                                      |
| 2026-10-06 | Chunk 27 frozen                                                | Editorial/publication system complete. Do not restyle `/insights` or `inse-*` essay pages without a real defect.                                                                                                              |
| 2026-10-06 | Chunk 28 composition proposed, not built                       | Whole-product quality pass: SEO, accessibility, performance, UX, integrity. No new marketing page. Sitemap/robots/404 in scope if missing. Do not restyle frozen compositions. Do not implement until accepted             |
| 2026-10-06 | Chunk 28 accepted and shipped                                  | `/sitemap.xml` from live public routes. `robots.txt` still open crawl + Sitemap line. Branded 404. Mobile menu Escape. `SiteQualityPassTest`. Frozen compositions untouched. `ins-*` / `inse-*` isolation held.                |

---

## Chunk history

### Chunk 0 - Repo baseline

- Fresh Laravel 12 skeleton
- Tailwind 4 + Vite wired
- Default `welcome.blade.php` only
- Brand logo assets provided by stakeholder (ribbon-S mark + lockup)

### Chunk 1 - Identity, System, Shell, Hero

**Completed:** 2026-10-04

**Goals**

1. Living documentation under `docs/`
2. Design tokens in CSS from logo blues
3. SEO-native layout shell (nav, footer, SEO component)
4. Researched Hero as first production section
5. Purposeful GSAP entrance + `prefers-reduced-motion`

**Files introduced / changed**

| Path                                             | Role                              |
| ------------------------------------------------ | --------------------------------- |
| `docs/TRACKING.md`                               | This log                          |
| `docs/CREATIVE_DIRECTION.md`                     | Brand feel + anti-patterns        |
| `docs/DESIGN_SYSTEM.md`                          | Tokens reference                  |
| `docs/INFORMATION_ARCHITECTURE.md`               | Nav / page map                    |
| `docs/SEO.md`                                    | SEO rules                         |
| `public/images/brand/mark.png`                   | Transparent mark                  |
| `public/images/brand/mark-320.png`               | OG / favicon-sized mark           |
| `public/images/brand/lockup.jpg`                 | Full lockup reference             |
| `resources/css/app.css`                          | Tokens, type, buttons, hero plane |
| `resources/js/app.js`                            | Boot                              |
| `resources/js/hero.js`                           | GSAP hero + mobile nav            |
| `resources/views/layouts/app.blade.php`          | Document shell                    |
| `resources/views/components/seo.blade.php`       | Meta + Organization JSON-LD       |
| `resources/views/components/navbar.blade.php`    | Sticky nav                        |
| `resources/views/components/footer.blade.php`    | Contact CTA footer                |
| `resources/views/components/button.blade.php`    | Button variants                   |
| `resources/views/components/home/hero.blade.php` | Hero composition                  |
| `resources/views/pages/home.blade.php`           | Home page                         |
| `routes/web.php`                                 | `/` → home                        |
| `package.json`                                   | gsap + fontsource                 |

**Done criteria**

- [x] Docs describe decisions
- [x] Tokens match logo + hybrid system
- [x] Home loads with SEO tags (title, description, canonical, OG, JSON-LD)
- [x] Hero is one intentional composition (desktop + mobile)
- [x] GSAP entrance + reduced-motion fallback
- [x] No generic template look
- [x] Next chunk defined below

---

### Chunk 2 - Capabilities: Systems We Build

**Completed:** 2026-10-04

**Job of the section**

| Question        | Answer                                                                                                                                                                                                  |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal       | Understand what SKYEMBER actually builds                                                                                                                                                                |
| Brand message   | We engineer complete software systems around real business requirements                                                                                                                                 |
| Visual idea     | A capability journey. Editorial and structured - not a second Hero, not four equal cards                                                                                                                |
| SEO value       | Crawlable H2/H3 copy with natural phrases: custom software development, business software, web application development, SaaS development, AI automation, cloud and infrastructure, software engineering |
| Mobile (~390px) | Heading, then each capability’s text, then its visual. No four-column squeeze                                                                                                                           |
| Motion          | Scroll reveals a different proof per system: ledger states, a request resolving, a workflow connecting, layers settling. Copy is complete without it                                                    |

**Composition (intentionally uneven)**

| #   | Capability          | Layout                                                                    | Visual behavior                                                          |
| --- | ------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------ |
| 01  | Business software   | Narrow text, wide record                                                  | Operations ledger. Lifecycle highlight moves Received → Counted → Posted |
| 02  | Digital products    | Compact product on the left, text on the right (stacked on small screens) | Customer workspace. A request resolves Draft → Sent → Accepted           |
| 03  | AI + automation     | Full-bleed light band, not a side-by-side row                             | Workflow list. A line draws through the sequence                         |
| 04  | Cloud + engineering | Text beside an offset stack, bottom-aligned                               | Release / runtime / foundation settle from the foundation upward         |

**Files introduced / changed**

| Path                                                        | Role                                  |
| ----------------------------------------------------------- | ------------------------------------- |
| `resources/views/components/home/capabilities.blade.php`    | Section, mock data, four layouts      |
| `resources/views/components/home/capability-copy.blade.php` | Shared index, title, summary, terms   |
| `resources/js/capabilities.js`                              | ScrollTrigger proofs + reduced motion |
| `resources/js/app.js`                                       | Boots capabilities                    |
| `resources/css/app.css`                                     | Ledger, step, and draw-line styles    |
| `resources/views/pages/home.blade.php`                      | Hero → capabilities → work bridge     |
| `resources/views/components/home/hero.blade.php`            | Work bridge removed from the Hero     |
| `resources/views/components/navbar.blade.php`               | Solutions → `#capabilities`           |
| `docs/CREATIVE_DIRECTION.md`                                | Section moods + Chunk 2 brief         |
| `docs/DESIGN_SYSTEM.md`                                     | Capability frame rules                |
| `docs/INFORMATION_ARCHITECTURE.md`                          | Homepage position of this section     |
| `docs/SEO.md`                                               | Heading outline and phrase guidance   |

**Quality gate**

- [x] Custom composition, not a four-card template
- [x] Visually distinct from the Hero (light editorial field, hairline frames, no atmosphere)
- [x] Hierarchy is the index, the title, then the system visual
- [x] Capabilities readable with animation off and with `prefers-reduced-motion`
- [x] Visuals show software systems, not icons
- [x] At 390px the order is text then visual, full width
- [x] Semantic section, articles, headings, figures, lists
- [x] Copy is specific and carries the search phrases in sentences
- [x] Motion explains state, sequence, resolution, or structure
- [x] Same type, blue, and spacing system as Chunk 1

**Still frozen:** no database, models, admin, CMS, authentication, or API.

---

### Chunk 3 - Product UI Proof

**Completed:** 2026-10-04

**Shipped:** one sales-order document, SO-10482, on a full-bleed dark technical plane. Desktop is the application frame (rail + record). Below 1024px the same record is rebuilt: context line, line, stock, activity, vertical workflow, and the three links. `#work-preview` is gone. “Explore Our Work” points at `#product-proof`.

| Path                                                      | Role                                             |
| --------------------------------------------------------- | ------------------------------------------------ |
| `resources/views/components/home/product-proof.blade.php` | Section and mock record                          |
| `resources/js/product-proof.js`                           | One ScrollTrigger pass, then still               |
| `resources/js/app.js`                                     | Boots the sequence                               |
| `resources/css/app.css`                                   | Flat proof plane, workflow step, collapsed links |
| `resources/views/pages/home.blade.php`                    | Hero → capabilities → product proof              |
| `resources/views/components/home/hero.blade.php`          | Secondary CTA → `#product-proof`                 |

**Motion:** retimed after launch. Frame settles (1.1s), each workflow step holds, the pullback stays readable, then the record returns and stays still. See the motion pass below. Reduced motion and no JavaScript keep the finished record. No pin.

**Checks:** headless Chrome at 320, 390, 768, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after the section landed.

**Still frozen:** no database, models, admin, CMS, authentication, or API.

---

### Chunk 4 - Selected work

**Completed:** 2026-10-04

**Shipped:** one featured project on the light field, after the dark product proof. Eyebrow “Selected work”, H2 “Software built around a real business.”, one cropped plate (orders, workflow, customer, operations), then index, title, one sentence, metadata, and a representative-project line. No client name and no result claims.

| Path                                                      | Role                                                      |
| --------------------------------------------------------- | --------------------------------------------------------- |
| `resources/views/components/home/selected-work.blade.php` | Spread and mock project                                   |
| `resources/js/selected-work.js`                           | One 0.9s reveal, then still                               |
| `resources/js/app.js`                                     | Boots the reveal                                          |
| `resources/css/app.css`                                   | Light plate, three compositions (narrow, tablet, desktop) |
| `resources/views/pages/home.blade.php`                    | Hero → capabilities → product proof → selected work       |

**Link:** `href` is `/work/business-operations-platform`. The anchor is rendered only when that GET route exists. It does not exist yet, so the page has no case-study link and no 404.

**Motion:** visual scale 0.94 → 1 and opacity 0 → 1 over `reveal` (0.9s). Copy rises in the same beat. Arrow hover is 220ms, ready for when the link exists. Reduced motion and no JavaScript show the finished spread. No pin, no sequence.

**Mobile:** the plate is a vertical story (orders, then the workflow, then customer and operations). From 768px the orders sit in a row and the workflow runs across. From 1024px the plate is a crop: orders on the left, the workflow across the middle, customer and operations at the right. The plate extends about 2.5rem past the text column.

**Checks:** headless Chrome at 320, 390, 768, and 1440 - no horizontal overflow, no console exceptions, no case-study anchor. Production `npm run build` succeeded.

**Still frozen:** no database, models, admin, CMS, authentication, or API. No case-study page in this chunk.

---

## Motion pass - 2026-10-04

Written before Chunk 4 was built. The old “1.0–1.5s total sequence” rule was too fast. Chunk 4 later used the shared 0.9s reveal and nothing longer.

| Piece         | Now                                                                         |
| ------------- | --------------------------------------------------------------------------- |
| Shared scale  | `resources/js/motion.js`                                                    |
| Hero          | Headline first, path after. About 2.8s, then still                          |
| Capabilities  | Each proof settles, pauses, then changes state. About 2–2.8s                |
| Product proof | Frame, pause, workflow, pause, pullback, hold, return. About 6s, then still |
| Hover         | 220ms                                                                       |

Buttons and future sections use the same scale.

---

### Chunk 5 - Process

**Completed:** 2026-10-04

**Shipped:** a still operating list on the light field, after Selected work. Eyebrow “How we work”, H2 “Good software is built with intent, not momentum.”, then five rows: Understand, Shape, Engineer, Validate, Launch. The index is the way through the list. No plate, diagram, cards, or motion.

| Path                                                | Role                                                          |
| --------------------------------------------------- | ------------------------------------------------------------- |
| `resources/views/components/home/process.blade.php` | Section and ordered list                                      |
| `resources/css/app.css`                             | `how-we-work` rules only. Earlier section rules unchanged     |
| `resources/views/pages/home.blade.php`              | Hero → capabilities → product proof → selected work → process |

**Motion:** none. No script. The list is the finished state with or without JavaScript.

**Mobile:** below 768px each row is index and stage, then the line of work. From 768px the three parts sit on one line.

**Honesty:** no durations, prices, staffing claims, or a retainer.

**Checks:** headless Chrome at 320, 390, 768, and 1440 - no horizontal overflow, no console exceptions. Below 768px the line of work sits under the stage name. From 768px the row is one line and the headline breaks after “built”. Production `npm run build` succeeded. No process script.

**Still frozen:** Chunks 1–4, and no database, models, admin, CMS, authentication, or API.

---

### Chunk 6 - Final CTA

**Completed:** 2026-10-04

**Shipped:** one closing statement after the process list. Eyebrow “Let's build”, H2 “Have something worth building?”, one sentence, and the visible action “Start a conversation”. On wide screens the action finishes the band. On small screens the four parts stack, left aligned. No form, plate, or entrance motion.

| Path                                                  | Role                                                                      |
| ----------------------------------------------------- | ------------------------------------------------------------------------- |
| `resources/views/components/home/final-cta.blade.php` | Closing statement                                                         |
| `resources/css/app.css`                               | `final-close` rules only                                                  |
| `resources/views/pages/home.blade.php`                | Process, then the close                                                   |
| `resources/views/components/footer.blade.php`         | Mark, email, legal line                                                   |
| `resources/views/components/navbar.blade.php`         | Let’s Talk → `#final-cta`                                                 |
| `resources/views/components/home/hero.blade.php`      | Start a Project → `#final-cta` (the old `#contact` anchor was the footer) |

**Link:** `href` is `/contact`. The anchor is rendered only when that GET route exists. The label and arrow are in the HTML either way.

**Motion:** none. Arrow hover is 220ms on the anchor, so it waits until the contact page exists.

**Footer:** no second question and no second button. The surface turns white under a hairline, after a shorter step than the space above the close.

**Checks:** headless Chrome at 320, 390, 768, and 1440 - no horizontal overflow, no console exceptions. The action is a paragraph until `/contact` exists. Let’s Talk, the mobile item, and Start a Project point at `#final-cta`. The footer has the email and does not repeat the question. Production `npm run build` succeeded.

**Still frozen:** no database, models, admin, CMS, authentication, or API. Homepage story is complete.

**Wiring update, same day:** `/contact` now exists, so the closing action renders `href="/contact"`. The section was not restyled.

---

### Chunk 7 - Contact

**Completed:** 2026-10-04

**Job of the page**

| Question      | Answer                                                                                                                                       |
| ------------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Start the conversation the homepage just offered                                                                                             |
| Brand message | A short, specific brief is enough. SKYEMBER reads it and replies with the next step                                                          |
| Visual idea   | The closing statement, continued. Light field, three-line H1, the address as type, then a hairline brief                                     |
| SEO value     | Unique title and description, one H1, breadcrumb, ContactPage and BreadcrumbList JSON-LD. Organization contact point is stable on every page |
| Mobile        | Breadcrumb, headline, summary, email, then the form. Full-width actions below 640px                                                          |
| Motion        | None. Focus and hover are 220ms. After a submit, focus moves to the letter or the error list                                                 |

**What was rejected**

A split “info cards + form” template, a map, a phone number, a budget menu, office photography, a success banner that pretends the message was stored, and a 3D scene. The homepage already spent its drama. This page has to be ready to type.

**Composition**

Light field, same left edge as the close.

1. Breadcrumb: Home / Contact
2. H1, three lines so it fits at 320px: “Tell us what / you're trying / to solve.”
3. One sentence. It does not repeat “Have something worth building?”
4. From 1024px the address sits beside that statement, aligned to the end of it. Below that, it stacks under the sentence and above the form
5. The form is the brief: name, work email, organization, an optional system (the four capabilities, plus “Not sure yet”), and the problem
6. “Continue in email” validates on the server and returns the letter. “Open email to send” is a `mailto:` the visitor sends. “Update the brief” rebuilds it

**Honesty**

There is still no database and no mail transport. The page says so. A hidden field throws away automated posts without preparing a letter. The brief is not written to a table.

**Homepage wiring (not a restyle)**

| Control              | Where                        | Now                                               |
| -------------------- | ---------------------------- | ------------------------------------------------- |
| Start a conversation | Final CTA                    | `/contact`                                        |
| Let’s Talk           | Homepage, including the menu | `#final-cta`                                      |
| Let’s Talk           | Contact page                 | `#brief`                                          |
| Start a Project      | Hero                         | `#final-cta`                                      |
| Solutions            | Homepage                     | `#capabilities`                                   |
| Solutions            | Any other page               | `/#capabilities`                                  |
| Selected work link   | Homepage                     | Still absent. The case-study route does not exist |

**Files**

| Path                                          | Role                                                                 |
| --------------------------------------------- | -------------------------------------------------------------------- |
| `app/Http/Controllers/ContactController.php`  | Shows the page. Prepares the letter. Stores nothing                  |
| `resources/views/pages/contact.blade.php`     | The brief                                                            |
| `resources/css/app.css`                       | `contact-*` rules and `--color-danger` for field errors only         |
| `resources/js/contact.js`                     | Moves focus to the letter or the error list. No animation            |
| `resources/views/components/navbar.blade.php` | Contextual Let’s Talk and Solutions                                  |
| `resources/views/components/seo.blade.php`    | Organization description stays the company line. Contact point added |
| `resources/views/layouts/app.blade.php`       | Stack for page schema                                                |
| `routes/web.php`                              | GET and POST `/contact`                                              |
| `tests/Feature/ContactPageTest.php`           | Page, wiring, letter, errors, trap, escaping                         |

**Checks:** `ContactPageTest` passed (page, homepage wiring, letter, validation, trap, escaping). Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Empty submit shows the fix list and the field errors. A valid brief shows the letter and “Open email to send”. Production `npm run build` after that pass.

**Still frozen:** homepage sections, and no database, models, admin, CMS, authentication, or API. No `/work` page in this chunk.

---

### Chunk 8 - Work index

**Completed:** 2026-10-05

**Job of the page**

| Question      | Answer                                                                                                           |
| ------------- | ---------------------------------------------------------------------------------------------------------------- |
| User goal     | See the range, and which project can be opened later                                                             |
| Brand message | Problems turned into software. The three systems are different objects                                           |
| Visual idea   | Contents: full-width featured plate, then a quieter pair (day sheet · state thread). Not a card grid             |
| SEO value     | H1, three H2s, breadcrumb, CollectionPage, ItemList without case-study URLs                                      |
| Mobile        | Lead, featured words then plate, then 02, then 03. Additional pair side-by-side only from 1024px                 |
| Motion        | 0.9s settle on the featured plate only                                                                           |

**What was rejected**

An equal three-up card grid, masonry thumbnails, filter chips, a client logo wall, invented metrics, a 3D scene, and pasting the homepage Selected work section under a new H1.

**Composition**

Light field. Same left edge as Contact.

1. Breadcrumb: Home / Work
2. Eyebrow, H1 “Problems turned / into software.”, and the three-systems sentence
3. Featured entry: index, title, sentence, metadata, then the homepage operations plate (no bleed)
4. Additional work label and note
5. From 1024px: Field Service Record and Catalog Change as a quieter pair. Below that, stacked
6. Close: “See a problem you recognize?” → Start a conversation → `/contact`

**Honesty**

All three labeled Representative project. No clients, logos, quotes, or results. 02 and 03 have no URLs. The featured Explore case study anchor stays out of the HTML until `/work/business-operations-platform` exists.

**Homepage wiring (not a restyle)**

| Control            | Where     | Now                                                                  |
| ------------------ | --------- | -------------------------------------------------------------------- |
| Work               | Nav       | `/work`, current on this page                                        |
| Let’s Talk         | `/work`   | `/contact`                                                           |
| Solutions          | `/work`   | `/#capabilities`                                                     |
| Explore case study | Homepage  | Still absent                                                         |
| Explore case study | `/work`   | Still absent                                                         |

**Files**

| Path                                          | Role                                              |
| --------------------------------------------- | ------------------------------------------------- |
| `resources/views/pages/work.blade.php`        | Contents page                                     |
| `resources/css/app.css`                       | `works-*` rules. Homepage `work-*` plate reused   |
| `resources/js/work.js`                        | Featured plate reveal only                        |
| `resources/js/app.js`                         | Boots work                                        |
| `resources/views/components/navbar.blade.php` | Work → `/work`                                    |
| `routes/web.php`                              | GET `/work`                                       |
| `tests/Feature/WorkPageTest.php`              | Page, wiring, absent case-study link              |

**Checks:** `WorkPageTest` and `ContactPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage sections, `/contact` composition, and no database, models, admin, CMS, authentication, or API. No case-study page in this chunk.

---

### Chunk 9 - Case study: Business Operations Platform

**Completed:** 2026-10-05

**Job of the page**

| Question      | Answer                                                                                                      |
| ------------- | ----------------------------------------------------------------------------------------------------------- |
| User goal     | Understand how SKYEMBER thinks about one real operational system                                            |
| Brand message | Complicated pharmacy operations become one connected workflow                                               |
| Visual idea   | Editorial narrative + large product evidence of one system at several depths                                |
| SEO value     | Specific title/description; H1 + structured H2/H3; BreadcrumbList; no Article                               |
| Mobile        | Vertical reading experience; visuals recomposed                                                             |
| Motion        | 0.9s reveals; optional ~1.6s logic-trail highlight; quieter than Product Proof                              |

**Shipped rhythm**

Hero (thesis, metadata, opened system) → problem → one order + dependencies + logic trail → constraints → broader platform → Clarity / Context / Continuity → State / Data / Rules / Trace → designed to make possible → project record → CTA `/contact`.

**Honesty**

Representative project in the hero and Representative system in the closing record. No fake client, quote, deployment, Results, or stack list. Intentions replace Results.

**Wiring (not homepage restyles)**

| Control | Now |
| --- | --- |
| GET `/work/business-operations-platform` | Live |
| Homepage Explore case study | Renders |
| `/work` Explore case study | Renders |
| Industry on home + `/work` featured | Pharmacy / Operations |
| `/work` ItemList featured `url` | Included |
| Work nav on case study | Current, points at `/work` |
| Let’s Talk on case study | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/work/business-operations-platform.blade.php` | Case study |
| `resources/css/app.css` | `study-*` rules |
| `resources/js/case-bop.js` | Reveals + logic trail |
| `resources/js/app.js` | Boots case study |
| `routes/web.php` | Case study route |
| `resources/views/components/home/selected-work.blade.php` | Industry string only |
| `resources/views/pages/work.blade.php` | Industry + ItemList url |
| `resources/views/components/navbar.blade.php` | Work current includes case study |
| `tests/Feature/CaseStudyPageTest.php` | Page, wiring, honesty |

**Checks:** `CaseStudyPageTest`, `WorkPageTest`, and `ContactPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage section compositions (aside from Industry text and the Explore link gate), `/contact` composition, `/work` layout, and no database, models, admin, CMS, authentication, or API.

---

### Freeze set (enforce)

| Surface | Status |
| --- | --- |
| Homepage | Frozen |
| `/contact` | Frozen |
| `/work` | Frozen |
| `/work/business-operations-platform` | Frozen |
| `/solutions` | Frozen (all four Explore links live) |
| `/solutions/business-software` | Frozen |
| `/solutions/saas-products` | Frozen |
| `/solutions/custom-platforms` | Frozen |
| `/solutions/ai-automation` | Frozen |
| `/services` | Frozen (all five Explore links live) |
| `/services/product-engineering` | Frozen |
| `/services/ui-ux-design` | Frozen |
| `/services/web-development` | Frozen |
| `/services/mobile-development` | Frozen |
| `/services/cloud-devops` | Frozen |

No composition changes without a real reason: missing business information, SEO, accessibility, performance, broken UX, or an actual brand change.

### Chunk 10 - Solutions index

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Choose which system shape matches the work to put in place |
| Brand message | Technical credibility is established; now make a commercial decision |
| Visual idea | Featured Business software path + three quieter chooser rows |
| SEO value | Hub H1, four solution H2s, CollectionPage, ItemList without child URLs yet |
| Mobile | Full-width reading stack |
| Motion | One 0.9s settle on the featured proof crop only |

**Shipped**

Decision lead → featured Business software (chooser + SO-10482 proof crop + See how we think) → Additional paths 02–04 as a stacked list → Services delivery note → Not sure which path fits? → `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/solutions` | Live |
| Solutions nav | `/solutions`, current on this page |
| Homepage `#capabilities` section | Unchanged composition |
| Child Explore links | Absent until each route exists |
| See how we think | `/work/business-operations-platform` |
| Let’s Talk on `/solutions` | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/solutions.blade.php` | Decision index |
| `resources/css/app.css` | `solutions-*` rules |
| `resources/js/solutions.js` | Featured crop reveal |
| `resources/js/app.js` | Boots solutions |
| `resources/views/components/navbar.blade.php` | Solutions → `/solutions` |
| `routes/web.php` | GET `/solutions` |
| `tests/Feature/SolutionsPageTest.php` | Page, nav, gated children |

**Checks:** `SolutionsPageTest` and related wiring tests passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions, no child solution hrefs. Production `npm run build` after that pass.

**Still frozen:** homepage section compositions, `/contact`, `/work`, BOP case study, `/solutions` layout, and no database, models, admin, CMS, authentication, or API.

---

### Chunk 11 - Business software solution

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if custom business software fits how the organization operates |
| Brand message | Connected operational systems shaped around workflows, records, and rules |
| Visual idea | Operations workspace + four domain surfaces + related-records signature |
| SEO value | Specific title/description; H1–H3 outline; BreadcrumbList; accurate Service schema only |
| Mobile | Vertical commercial story; visuals recomposed |
| Motion | 0.9s reveals; optional ~1.6s related-records beat; quieter than Product Proof |

**Shipped rhythm**

Hero (operations workspace) → problem → choose this when → what we put in place → connected records → rules → representative system → engagement → honest exit → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/solutions/business-software` | Live |
| `/solutions` Explore (Business software) | Renders |
| Other solution Explore links | Still absent |
| Talk / Start a conversation | `/contact` |
| See representative system / Explore the system | BOP case study |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/solutions/business-software.blade.php` | Solution page |
| `resources/css/app.css` | `bizsoft-*` rules |
| `resources/js/solution-business-software.js` | Reveals + chain highlight |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/pages/solutions.blade.php` | Explore gate + ItemList url |
| `resources/views/components/navbar.blade.php` | Solutions current on child |
| `tests/Feature/BusinessSoftwarePageTest.php` | Page, hub wiring, honesty |

**Checks:** `BusinessSoftwarePageTest` and `SolutionsPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, `/solutions` layout (aside from Explore wiring), backend/admin/CMS.

---

### Chunk 12 - SaaS products solution

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if a SaaS product is the right way to productize a repeatable problem |
| Brand message | Clear user problem, focused workflow, foundation built to evolve |
| Visual idea | Product surface + anatomy + Discover/Act/Return/Evolve — not ops workspace |
| SEO value | SaaS-specific title/description; Service + BreadcrumbList |
| Mobile | Vertical product story; surfaces recomposed |
| Motion | 0.9s hero; optional ~1.6s state beat; quieter than Business Software |

**Shipped rhythm**

Hero (product workspace) → more than first release → choose SaaS when → product anatomy → one product many states → not a feature pile → foundation → representative product → Shape→Design→Build→Launch→Evolve → honest exit → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/solutions/saas-products` | Live |
| `/solutions` Explore (SaaS products) | Renders |
| Other remaining solution Explore links | Still absent |
| Talk / Start a conversation | `/contact` |
| See how we think | Quiet non-link until SaaS proof exists |
| Honest-exit optional link | `/solutions/business-software` |
| BOP case study | Never presented as SaaS proof |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/solutions/saas-products.blade.php` | Solution page |
| `resources/css/app.css` | `saas-*` rules |
| `resources/js/solution-saas.js` | Hero reveal + state beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/pages/solutions.blade.php` | Explore gate + ItemList url |
| `resources/views/components/navbar.blade.php` | Solutions current on child |
| `tests/Feature/SaasProductsPageTest.php` | Page, hub wiring, honesty |

**Checks:** `SaasProductsPageTest`, `SolutionsPageTest`, and `BusinessSoftwarePageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, `/solutions` layout (aside from Explore wiring), `/solutions/business-software`, backend/admin/CMS.

---

### Chunk 13 - Custom platforms solution

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if a custom platform is needed to connect a larger digital ecosystem |
| Brand message | Shared foundation for experiences, workflows, data, and rules — not a pile of apps |
| Visual idea | Connected platform surface + same record / different experiences — not ops or SaaS UI |
| SEO value | Platform-specific title/description; Service + BreadcrumbList |
| Mobile | Vertical connected-platform story; surfaces recomposed, not shrunk architecture |
| Motion | Quieter than SaaS; 0.9s hero; optional ~1.6s same-foundation beat |

**Shipped rhythm**

Hero (connected platform) → between systems → choose when → foundation for experiences → same foundation / different experience → not glued apps → complex underneath → product map → enterprise concerns → representative platform → Map→Model→Shape→Engineer→Evolve → honest exit → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/solutions/custom-platforms` | Live |
| `/solutions` Explore (Custom platforms) | Renders |
| Hub path 03 when / place | Aligned to platform distinction |
| Remaining Explore (AI) | Still absent |
| Talk / Start a conversation | `/contact` |
| See how we approach complex systems | Quiet non-link until platform proof exists |
| BOP case study | Never presented as platform proof |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/solutions/custom-platforms.blade.php` | Solution page |
| `resources/css/app.css` | `plat-*` rules |
| `resources/js/solution-platforms.js` | Hero reveal + signature beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/pages/solutions.blade.php` | Explore gate + path 03 copy |
| `resources/views/components/navbar.blade.php` | Solutions current on child |
| `tests/Feature/CustomPlatformsPageTest.php` | Page, hub wiring, honesty |

**Checks:** `CustomPlatformsPageTest`, `SaasProductsPageTest`, `SolutionsPageTest`, and `BusinessSoftwarePageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, `/solutions` layout (aside from Explore wiring and path 03 copy), `/solutions/business-software`, `/solutions/saas-products`, backend/admin/CMS.

---

### Chunk 14 - AI & automation solution

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide where AI and automation can genuinely improve how work gets done |
| Brand message | Intelligence where it earns its place — with context, controls, evaluation, and oversight |
| Visual idea | Controlled intelligent workflow console — not chatbot, robot, or neural theatre |
| SEO value | AI automation / agent language in sentences; Service + BreadcrumbList |
| Mobile | Vertical workflow story; surfaces recomposed, not shrunk desktop console |
| Motion | Subtle and intelligent; quieter than Custom Platforms; 0.9s hero; optional ~1.6s workflow beat |

**Shipped rhythm**

Hero (automation console) → not every task needs AI → choose when → Understand/Decide/Act/Escalate → AI inside workflow → automation before autonomy → boundaries → evaluation surface → model rarely whole system → representative automation → honest exit → Map→Identify→Prototype→Evaluate→Harden → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/solutions/ai-automation` | Live |
| `/solutions` Explore (AI & automation) | Renders |
| Hub path 04 when / place | Aligned to AI distinction |
| All four solution Explore links | Live |
| Talk / Start a conversation | `/contact` |
| See the workflow | Quiet non-link until AI proof exists |
| BOP case study | Never presented as AI proof |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/solutions/ai-automation.blade.php` | Solution page |
| `resources/css/app.css` | `aiauto-*` rules |
| `resources/js/solution-ai.js` | Hero reveal + signature + eval beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/pages/solutions.blade.php` | Explore gate + path 04 copy |
| `resources/views/components/navbar.blade.php` | Solutions current on child |
| `tests/Feature/AiAutomationPageTest.php` | Page, hub wiring, honesty |

**Checks:** `AiAutomationPageTest` and related hub tests passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, prior solution pages (aside from Explore wiring and path 04 copy), backend/admin/CMS.

---

### Chunk 15 - Services index

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Understand which disciplines SKYEMBER can bring to design, build, and run the thing |
| Brand message | Solutions name the problem shape; Services name the execution disciplines |
| Visual idea | Disciplines converging into one product — not a five-card menu or another dashboard |
| SEO value | Strong commercial service terms; BreadcrumbList + overall Service schema |
| Mobile | Vertical service reading sequence; featured then quieter records |
| Motion | Calm; quieter than solution pages; 0.9s hero/featured; optional ~1.6s signature beat; rows still |

**Shipped rhythm**

Hero (disciplines → product) → one system thesis → Product Engineering featured → other discipline records → signature fidelity → what each changes → bring us in → specialist/integrated → careful BOP proof → honest scope → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services` | Live |
| Nav Services | `/services` |
| Explore our work | `/work` |
| Explore service (all children) | Gated |
| Explore the work | BOP case study |
| Solutions delivery note | Links to `/services` |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services.blade.php` | Services index |
| `resources/css/app.css` | `svc-*` rules |
| `resources/js/services-page.js` | Hero/featured reveal + fidelity beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Hub route |
| `resources/views/components/navbar.blade.php` | Services nav live |
| `resources/views/pages/solutions.blade.php` | Delivery note → Services |
| `tests/Feature/ServicesPageTest.php` | Page, nav, gates, honesty |

**Checks:** `ServicesPageTest` and `SolutionsPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solution deep pages (aside from delivery-note link), backend/admin/CMS.

---

### Chunk 16 - Product Engineering service

**Completed:** 2026-10-05

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if SKYEMBER can take a product from intent to production without losing the problem |
| Brand message | Product thinking, experience, architecture, engineering, testing, and delivery stay connected |
| Visual idea | One evolving product surface — progression without a process timeline or stack wall |
| SEO value | Product engineering service URL; Service + BreadcrumbList |
| Mobile | Vertical engineering reading sequence; surfaces recomposed |
| Motion | Restrained; 0.9s hero; optional ~1.6s signature beat; one interface-state transition |

**Shipped rhythm**

Hero → gap → choose when → disciplines connected → signature → beyond happy path → interface as engineering → backend behavior → validation → technology philosophy → BOP proof → specialist exit → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services/product-engineering` | Live |
| `/services` Featured Explore | Renders |
| Other service Explore links | Still gated |
| See our work | `/work` |
| Explore the system | BOP case study |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services/product-engineering.blade.php` | Service page |
| `resources/css/app.css` | `pe-*` rules |
| `resources/js/service-product-engineering.js` | Hero + signature + state beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/components/navbar.blade.php` | Services current on child |
| `tests/Feature/ProductEngineeringPageTest.php` | Page, hub wiring, honesty |

**Checks:** `ProductEngineeringPageTest` and `ServicesPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, `/services` layout (aside from Explore wiring), backend/admin/CMS.

---

### Chunk 17 - UI/UX Design service

**Completed:** 2026-10-06

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if SKYEMBER can make complicated software clear, usable, and coherent |
| Brand message | Design judgment — structure, interactions, states, systems — not pretty UI |
| Visual idea | One complex task becoming visually clear; decision carried by the interface |
| SEO value | UI/UX design service URL; Service + BreadcrumbList |
| Mobile | Vertical design reading sequence; focused interface surfaces recomposed |
| Motion | Quieter than Product Engineering; 0.9s hero; optional ~1.6s signature beat |

**Shipped rhythm**

Hero (decision made clear) → problems → choose when → Research→Structure→Interaction→Systematize→Validate → signature → design system → survive mockup → prototype → validation → layers → representative experience → PE handoff → honest exit → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services/ui-ux-design` | Live |
| `/services` path 02 Explore | Renders |
| Web / Mobile / Cloud Explore | Still gated |
| See our work | `/work` |
| See / Explore Product Engineering | `/services/product-engineering` |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services/ui-ux-design.blade.php` | Service page |
| `resources/css/app.css` | `ux-*` rules |
| `resources/js/service-ui-ux.js` | Hero + signature + validation beat |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/components/navbar.blade.php` | Services current on child |
| `tests/Feature/UiUxDesignPageTest.php` | Page, hub wiring, honesty |
| `tests/Feature/ProductEngineeringPageTest.php` | UI/UX cross-link now live |
| `tests/Feature/ServicesPageTest.php` | Hub UI/UX Explore live |

**Checks:** `UiUxDesignPageTest`, `ProductEngineeringPageTest`, and `ServicesPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, `/services` layout (aside from Explore wiring), Product Engineering composition, backend/admin/CMS.

---

### Chunk 18 - Web Development service

**Completed:** 2026-10-06

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if SKYEMBER can turn a product into a web experience that is fast, resilient, accessible, and ready for real users |
| Brand message | Deliver the product experience through the web — not “we code websites” |
| Visual idea | One web product adapting across conditions — same intent, different viewport — not device frames |
| SEO value | Web development service URL; Service + BreadcrumbList |
| Mobile | Vertical web-engineering reading sequence; one focused responsive surface |
| Motion | Very restrained; quieter than UI/UX; 0.9s hero; optional ~1.6s condition change |

**Shipped rhythm**

Hero (design survives the browser) → space/content/conditions → choose when → five practices → signature conditions → performance → accessibility → SEO → states → frontend → system behind → representative experience → UX handoff → PE handoff → honest exit → engagement → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services/web-development` | Live |
| `/services` path 03 Explore | Renders |
| Mobile / Cloud Explore | Still gated |
| See our work | `/work` |
| See UI/UX Design | `/services/ui-ux-design` |
| See Product Engineering | `/services/product-engineering` |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services/web-development.blade.php` | Service page |
| `resources/css/app.css` | `web-*` rules |
| `resources/js/service-web.js` | Hero + condition beat + one state |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/components/navbar.blade.php` | Services current on child |
| `tests/Feature/WebDevelopmentPageTest.php` | Page, hub wiring, honesty |
| `tests/Feature/ProductEngineeringPageTest.php` | Web specialist link now live |
| `tests/Feature/UiUxDesignPageTest.php` | Hub Web Explore live |
| `tests/Feature/ServicesPageTest.php` | Hub Web Explore live |

**Checks:** `WebDevelopmentPageTest`, `UiUxDesignPageTest`, `ProductEngineeringPageTest`, and `ServicesPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, `/services` layout (aside from Explore wiring), Product Engineering and UI/UX compositions, backend/admin/CMS.

---

### Chunk 19 - Mobile Development service

**Completed:** 2026-10-06

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if SKYEMBER can turn the product into a mobile experience that feels right in the hand, survives interruptions, and works under real device conditions |
| Brand message | Software built for the moment it is used — not web on a smaller screen |
| Visual idea | One focused mobile task surface — touch, state, device, connection integrated — not phone frames |
| SEO value | Mobile app development service URL; Service + BreadcrumbList |
| Mobile | The page itself demonstrates mobile-minded composition; one focused task surface |
| Motion | Quieter than Web; 0.9s hero; optional ~1.6s interruption→continuity; one offline→sync beat |

**Shipped rhythm**

Hero (one task in the hand) → phone changes conditions → choose when → five practices → interruption→continuity → platform-aware → states → performance → accessibility → device check → representative experience → UX / PE / Web handoffs → honest exit → engagement → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services/mobile-development` | Live |
| `/services` path 04 Explore | Renders |
| Cloud Explore | Still gated |
| See our work | `/work` |
| See UI/UX Design | `/services/ui-ux-design` |
| See Product Engineering | `/services/product-engineering` |
| See Web Development | `/services/web-development` |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services/mobile-development.blade.php` | Service page |
| `resources/css/app.css` | `mob-*` rules |
| `resources/js/service-mobile.js` | Hero + continuity beat + offline→sync |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/components/navbar.blade.php` | Services current on child |
| `tests/Feature/MobileDevelopmentPageTest.php` | Page, hub wiring, honesty |
| `tests/Feature/ProductEngineeringPageTest.php` | Mobile specialist link now live |
| `tests/Feature/UiUxDesignPageTest.php` | Hub Mobile Explore live |
| `tests/Feature/WebDevelopmentPageTest.php` | Hub Mobile Explore live |
| `tests/Feature/ServicesPageTest.php` | Hub Mobile Explore live |

**Checks:** `MobileDevelopmentPageTest`, `WebDevelopmentPageTest`, `UiUxDesignPageTest`, `ProductEngineeringPageTest`, and `ServicesPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, `/services` layout (aside from Explore wiring), Product Engineering, UI/UX, and Web compositions, backend/admin/CMS.

---

### Chunk 20 - Cloud & DevOps service

**Completed:** 2026-10-06

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide if SKYEMBER can make software dependable from deployment to production operation |
| Brand message | Production is an engineered environment — repeatable, observable, secure, recoverable |
| Visual idea | One change followed from release to runtime — not Kubernetes, logos, or a CI/CD ribbon |
| SEO value | Cloud & DevOps service URL; Service + BreadcrumbList |
| Mobile | Vertical operations reading sequence; one focused production control surface |
| Motion | Quietest service child; 0.9s hero; optional ~1.6s trail beat; one observability transition |

**Shipped rhythm**

Hero (one change, end to end) → hidden assumptions → choose when → five practices → release trail → infrastructure principles → security → safe path → observability → failure → representative system → PE / Web handoffs → honest exit → engagement → CTA `/contact`.

**Wiring**

| Control | Now |
| --- | --- |
| GET `/services/cloud-devops` | Live |
| `/services` path 05 Explore | Renders |
| See our work | `/work` |
| See Product Engineering | `/services/product-engineering` |
| See Web Development | `/services/web-development` |
| Start a conversation | `/contact` |

**Files**

| Path | Role |
| --- | --- |
| `resources/views/pages/services/cloud-devops.blade.php` | Service page |
| `resources/css/app.css` | `ops-*` rules |
| `resources/js/service-ops.js` | Hero + trail beat + observability |
| `resources/js/app.js` | Boots page |
| `routes/web.php` | Child route |
| `resources/views/components/navbar.blade.php` | Services current on child |
| `tests/Feature/CloudDevopsPageTest.php` | Page, hub wiring, honesty |
| Related hub tests | Cloud Explore now live |

**Checks:** `CloudDevopsPageTest` and related Services-family tests passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, `/services` layout (aside from Explore wiring), other service children, backend/admin/CMS.

---

### Chunk 21 - Company

**Status:** shipped 2026-10-06. Frozen.

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Decide who SKYEMBER is and what kind of company it chooses to be |
| Brand message | Principle-led software company — problem, product, and system stay connected |
| Visual idea | Brand typography: different disciplines, one standard — not a dashboard or team collage |
| SEO value | About/company URL; Organization (site-wide) + WebSite + BreadcrumbList on page |
| Mobile | Quiet editorial stack; brand composition recomposed. No team-photo squeeze |
| Motion | Among the quietest pages; 0.9s hero settle; optional subtle signature light; mostly still |

**Positioning**

> Serious about the work. Honest about the answer. Unwilling to add complexity without a reason.

**Shipped:** GET `/company`, `pages/company.blade.php`, `co-*` CSS, `company.js`, Company nav live and current, live service discipline links, BOP carefully scoped, About/Process/Technology gated, Careers absent, CTA → `/contact`.

**Checks:** `CompanyPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, `/company`, backend/admin/CMS.

---

### Chunk 22 - Company About

**Status:** shipped 2026-10-06.

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Understand what SKYEMBER is, concretely, and what to expect from the company behind the work |
| Brand message | Software company built around the work — product mindset, connected disciplines, honest relationship |
| Visual idea | Typographic company portrait — not a team photo or corporate collage |
| SEO value | Distinct About URL; BreadcrumbList Home → Company → About; Organization stays site-wide |
| Mobile | Quiet editorial stack; portrait recomposed. No team carousel |
| Motion | Extremely restrained; 0.9s hero settle; optional portrait reveal; mostly still |

**Distinction**

> `/company` = why · `/company/about` = who and what

**Shipped:** GET `/company/about`, `pages/company/about.blade.php`, `coa-*` CSS, `company-about.js`, Explore About live on `/company`, Process/Technology gated, People section absent, Direct/Connected/Accountable, compact BOP, CTA → `/contact`.

**Checks:** `CompanyAboutPageTest` + `CompanyPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, `/company` (aside from Explore wiring), `/company/about` (aside from Process area wiring), backend/admin/CMS.

---

### Chunk 23 - Company Process

**Status:** shipped 2026-10-06.

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Understand what actually happens between the first conversation and working software |
| Brand message | Good engagements make the work clearer — visible decisions, connected disciplines |
| Visual idea | Editorial decision/relationship compositions — not a timeline or six-step diagram |
| SEO value | Distinct Process URL; BreadcrumbList Home → Company → Process; no Service schema |
| Mobile | Quiet editorial stack. No horizontal process bar |
| Motion | Almost entirely still; 0.9s optional decision-record reveal |

**Distinction**

> Homepage Process = how we build · `/company/process` = how we work with people while building

**Shipped:** GET `/company/process`, `pages/company/process.blade.php`, `cop-*` CSS, `company-process.js`, Explore Process live on `/company` and About company-areas, Technology gated, decision-record signature, client responsibilities, scope/change honesty, CTA → `/contact`.

**Checks:** `CompanyProcessPageTest` + related Company tests passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, `/company` / `/company/about` / `/company/process` (aside from Technology wiring), backend/admin/CMS.

---

### Chunk 24 - Company Technology

**Status:** shipped 2026-10-06.

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | Understand how SKYEMBER makes technical decisions without letting technology become the product |
| Brand message | Technology is a decision, not an identity — fit, trade-offs, ownership, lifetime before frameworks |
| Visual idea | Engineering decision records and surfaces — not a stack wall or architecture diagram |
| SEO value | Distinct Technology URL; BreadcrumbList Home → Company → Technology; no Service schema |
| Mobile | Quiet editorial stack. No huge architecture diagrams |
| Motion | Quietest technical page; 0.9s settles; optional ~1.6s trade-off beat; otherwise still |

**Distinction**

> Cloud & DevOps = how we operate · Technology = why architectural decisions exist

**Shipped:** GET `/company/technology`, `pages/company/technology.blade.php`, `cot-*` CSS, `company-technology.js`, Explore Technology live, representative decision labeled, Build/Buy/Integrate, AI as architecture, honest existing-architecture exit, CTA → `/contact`.

**Checks:** `CompanyTechnologyPageTest` + related Company tests passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, Company family (aside from Technology Explore wiring), backend/admin/CMS.

---

### Chunk 25 - Insights

**Status:** shipped 2026-10-06.

**Job of the page**

| Question | Answer |
| --- | --- |
| User goal | See how SKYEMBER thinks when not building a project |
| Brand message | A technology company with a point of view — thinking clearly about software |
| Visual idea | One featured thought + numbered typographic index. Not a blog-card wall |
| SEO value | Distinct Insights URL; crawlable index; Article JSON-LD only on genuine articles |
| Mobile | Featured stack, then a reading index — not six stacked cards |
| Motion | Mostly still; 0.9s featured settle; rows static |

Full brief: `docs/CREATIVE_DIRECTION.md` → “Insights brief”.

**Distinction**

> Insights = how we think about the industry · not a Blog

**Shipped:** GET `/insights`, `pages/insights.blade.php`, `ins-*` CSS, `insights.js`, Insights in primary nav (desktop + mobile), featured thesis with gated destinations, four-category filter, BreadcrumbList on index, CTA → `/contact` (+ Work as proof path).

**Honesty:** Seed titles are editorial directions, not published articles. No Article JSON-LD, authors, reading times, or slug routes until genuine essays exist.

**Checks:** `InsightsPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, Company family (aside from Insights nav), `/insights` index, backend/admin/CMS.

---

### Chunk 26 - Genuine Editorial Content

**Status:** editorially approved 2026-10-06. Copy complete and unpublished. Implementation was never this chunk.

**Four essays (small, strong)**

1. Product — *The Workflow Is the Product* — `docs/insights/01-the-workflow-is-the-product.md` (~1,780 words)
2. Engineering — *Complexity Should Have to Earn Its Place* — `docs/insights/02-complexity-should-have-to-earn-its-place.md` (~1,605 words)
3. Design — *Designing the State After the Happy Path* — `docs/insights/03-designing-the-state-after-the-happy-path.md` (~1,635 words)
4. AI + Systems — *When an AI Workflow Should Stop and Ask* — `docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md` (~1,450 words)

Hero system: `Trigger → Context → Decision → Action → State → Continuation` · `Requirement → Boundary → Cost` · `Expected → Interrupted → Recovered` · `Understand → Decide → Act / Ask`

**Hard rules (held):** No slug routes in this chunk. Author = SKYEMBER. Dates only when Chunk 27 actually publishes.

---

### Chunk 27 - Insights Publication Architecture

**Status:** shipped 2026-10-06.

**Job of the chunk**

| Question | Answer |
| --- | --- |
| User goal | Read a genuine SKYEMBER essay, then continue to related thinking or contact |
| Brand message | The company has a considered point of view — now readable as essays, not as a publishing shell |
| Visual idea | Quiet editorial reading page + one conceptual hero per essay. Index composition unchanged |
| SEO value | Distinct article URLs; Article + BreadcrumbList; canonical/OG from real copy |
| Mobile | Long-form reading, not a compressed desktop chrome |
| Motion | Mostly still; optional 0.9s hero-visual settle |

Full brief: `docs/CREATIVE_DIRECTION.md` → “Insights publication architecture brief”.

**Shipped:** `GET /insights/{slug}` (`insights.show`), `InsightsEssayController`, `App\Insights\EssayCatalog`, `pages/insights/show.blade.php`, `inse-*` CSS, `insights-essay.js`. Index rows and featured thesis ungated. `published_at` 2026-10-06. Author SKYEMBER. Article + BreadcrumbList on essays only. Unknown slugs 404.

**Checks:** `InsightsEssayPageTest` + `InsightsPageTest` passed. Headless Chrome at 320, 390, 768, 1024, and 1440 on an essay page - no horizontal overflow, no console exceptions. Production `npm run build` after that pass.

**Still frozen:** homepage, `/contact`, `/work`, BOP case study, solutions, services family, Company family, `/insights` index composition, essay pages (`inse-*`), backend/admin/CMS.

---

### Chunk 28 - Sitewide Final Quality Pass

**Status:** shipped 2026-10-06.

**Job of the chunk**

| Question | Answer |
| --- | --- |
| User goal | Use a complete, coherent public site without dead ends or accidental claims |
| Brand message | SKYEMBER is finished enough to be trusted — not still expanding |
| Visual idea | None. This is audit and defect-only polish, not a new composition |
| SEO value | Sitemap, robots, metadata and schema consistency across the live IA |
| Mobile | Keyboard, menu, overflow, reduced motion, 404 — as a real visitor would meet them |
| Motion | Review cost and reduced-motion; do not add sequences |

Full brief: `docs/CREATIVE_DIRECTION.md` → “Sitewide final quality pass brief”.

**Shipped:** `/sitemap.xml` generated from `PublicCatalog` (live public routes + four essays). `/robots.txt` still allows crawl; adds `Sitemap:`. Branded `errors/404.blade.php` (`err-*`). Optional `robots` on `<x-seo />` for 404 noindex. Mobile menu closes on Escape. `SiteQualityPassTest` crawls every public URL for title/description/canonical/OG/landmarks.

**Checks:** Full PHPUnit suite 75 passed. Frozen compositions not restyled. `ins-*` untouched; `inse-*` still essay-only.

**Still frozen:** all shipped product surfaces. Backend/admin/CMS.

---

## Next

The public frontend IA is complete. Do not add a page without a real reason. No CMS until volume justifies it.

---

## How to run

```bash
composer install
npm install
npm run build   # or: npm run dev
php artisan serve
```

Open `/` for the homepage. Open `/contact` for the brief. Open `/work` for the index. Open `/work/business-operations-platform` for the case study. Open `/solutions` and all four `/solutions/*` deep pages. Open `/services` and all five `/services/*` deep pages. Open `/company`, `/company/about`, `/company/process`, and `/company/technology`. Open `/insights` and the four `/insights/{slug}` essays.

---

## Process rule (enforce always)

Before coding a section, answer:

1. What is the user’s goal here?
2. What is SKYEMBER communicating?
3. What is the visual idea?
4. What is the SEO value?
5. What happens at ~390px width?
6. Does animation improve understanding - or only decorate?

If any answer is weak, do not ship the section.
