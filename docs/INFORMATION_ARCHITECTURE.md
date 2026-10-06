# SKYEMBER Information Architecture

## Target IA (enterprise-oriented)

Planned public structure (pages built in later chunks):

```text
SKYEMBER
├── Home
├── Solutions
│   ├── Business Software
│   ├── SaaS Products
│   ├── Custom Platforms
│   └── AI & Automation
├── Services
│   ├── Product Engineering
│   ├── UI/UX Design
│   ├── Web Development
│   ├── Mobile Development
│   └── Cloud & DevOps
├── Work
│   └── Case Studies
├── Company
│   ├── About
│   ├── Process
│   ├── Technology
│   └── Careers (later)
├── Insights
└── Contact
```

## Wiring now

| Nav item             | Behavior                                                                            |
| -------------------- | ----------------------------------------------------------------------------------- |
| Logo / Home          | `/`                                                                                 |
| Solutions            | `/solutions`                                                                        |
| Services             | `/services`                                                                         |
| Work                 | `/work`                                                                             |
| Company              | `/company` (live, frozen). About, Process, and Technology live |
| Insights             | `/insights`                                                    |
| Let’s Talk           | `#final-cta` on home. `#brief` on `/contact`. `/contact` from Work / case study     |
| Start a Project      | `#final-cta`                                                                        |
| Start a conversation | `/contact`                                                                          |

Placeholders are intentional - routes appear when pages are designed. Do not invent thin stub pages.

## Homepage story (future sections)

Every section must answer a question:

1. What is SKYEMBER?
2. Why should I care?
3. What exactly do you build?
4. Can you actually build it? (real UI)
5. Have you done it before? (case studies)
6. How do you work?
7. Why trust you?
8. What’s next? (CTA)

Chunk 1 ships section 1 (Hero).

Chunk 2 ships “What exactly do you build?” directly after the Hero. A separate “why should I care?” block is not part of this cut - the Hero statement carries the claim, and Capabilities turns it into systems.

Chunk 3 ships “Can they actually build it?” as `#product-proof`, directly after Capabilities. “Explore Our Work” points there. The old `#work-preview` bridge is removed.

Chunk 4 ships “Have we done it before?” as `#selected-work`, directly after product proof. One representative project. The reserved URL `/work/business-operations-platform` is not registered, and the teaser does not link to it.

Chunk 5 ships “How do you work?” as `#process`, directly after selected work. Five stages in an ordered list. A separate process page is not part of this chunk.

Chunk 6 ships “What’s next?” as `#final-cta`, after `#process` and before the footer. Let’s Talk and the Hero “Start a Project” point at `#final-cta`. The footer is the utility layer: mark, email, legal line.

`/contact` is live. The closing action links there. The page is a brief: who you are, the system if you know it, and the problem. The address `info@skyember.com` is the direct path. Nothing is stored.

`/work` is live as a contents page. Work in the nav points there. Selected work on the homepage links to the case study now that the route exists.

## `/work` (Chunk 8)

Contents page, specified in `docs/CREATIVE_DIRECTION.md`. Not a project grid. Hierarchy: one full-width featured entry, then 02 and 03 as a quieter pair.

```text
/work
├── Featured project — Business Operations Platform
├── Additional work — Field Service Record · Catalog Change
└── /work/business-operations-platform
```

Work in the nav points at `/work`. Let’s Talk on that page points at `/contact`. Field Service Record and Catalog Change get no URLs until each has a page.

## Case study (Chunk 9)

Route: `/work/business-operations-platform`. Composition in `docs/CREATIVE_DIRECTION.md`.

```text
Home → Work → Business Operations Platform → (CTA) Contact
```

Homepage Selected work and the `/work` featured entry render Explore case study. Industry is `Pharmacy / Operations` on those teasers. No other case studies in this chunk.

## Freeze

Homepage, `/contact`, `/work`, `/work/business-operations-platform`, `/solutions`, all four `/solutions/*` deep pages, `/services`, and `/services/product-engineering` are frozen.

## `/solutions` (Chunk 10)

Decision index — not a four-card grid. Brief in `docs/CREATIVE_DIRECTION.md`.

```text
/solutions
├── Business software     → /solutions/business-software
├── SaaS products         → /solutions/saas-products
├── Custom platforms      → /solutions/custom-platforms
└── AI & automation       → /solutions/ai-automation
```

All four Explore links are live. Business software is featured and links to the BOP case study as proof. Cloud + engineering is not a fifth Solutions child. Nav Solutions points at `/solutions`. Homepage `#capabilities` remains as the in-page systems story; its composition is frozen.

**Solution family distinction**

| Path | Meaning |
| --- | --- |
| Business software | Software for running an organization’s operation |
| SaaS products | A product people repeatedly use |
| Custom platforms | Shared digital foundation connecting workflows, users, channels, or systems |
| AI & automation | Make parts of the work reason, decide, or act |

## Business software (Chunk 11)

```text
Decision (/solutions)
  → Solution (/solutions/business-software)
  → Proof (/work/business-operations-platform)
  → Contact
```

Live. Composition in `docs/CREATIVE_DIRECTION.md`.

## SaaS products (Chunk 12)

```text
Decision (/solutions)
  → Solution (/solutions/saas-products)
  → Contact
```

Live. No SaaS case-study proof yet — secondary “See how we think” stays ungated. Must not use the Business Operations case study as SaaS evidence. Composition in `docs/CREATIVE_DIRECTION.md`.

## Custom platforms (Chunk 13)

```text
Decision (/solutions)
  → Solution (/solutions/custom-platforms)
  → Contact
```

Live. No platform case-study proof yet — secondary “See how we approach complex systems” stays ungated. Must not use the Business Operations case study as platform evidence. Composition in `docs/CREATIVE_DIRECTION.md`.

## AI & automation (Chunk 14)

```text
Decision (/solutions)
  → Solution (/solutions/ai-automation)
  → Contact
```

Live. No AI case-study proof yet — secondary “See the workflow” stays ungated. Must not use the Business Operations case study as AI evidence. Composition in `docs/CREATIVE_DIRECTION.md`. Most intelligent-looking page, not most futuristic — controlled workflow, not AI-agency theatre.

## Services (Chunk 15)

```text
/solutions  → what a buyer may need
/services   → how SKYEMBER executes it
/services/* → deep discipline (later)
/work       → evidence
/contact    → conversation
```

```text
/services
├── Product engineering     → /services/product-engineering
├── UI/UX design            → /services/ui-ux-design
├── Web development         → /services/web-development
├── Mobile development      → /services/mobile-development
└── Cloud & DevOps          → /services/cloud-devops
```

Live. Engineering practice index — Product Engineering featured; all five Explore links live. AI stays a Solution, not a Service. BOP proof carefully scoped to product/UX/engineering. Composition in `docs/CREATIVE_DIRECTION.md`.

## Product Engineering (Chunk 16)

```text
/services
  → /services/product-engineering
  → /work (secondary) / BOP proof
  → /contact
```

Live. Depth benchmark for the Services family: product direction + experience + engineering + quality/delivery as one connected practice. Not a stack catalog. Composition in `docs/CREATIVE_DIRECTION.md`.

## UI/UX Design (Chunk 17)

```text
/services
  → /services/ui-ux-design
  → /work (secondary)
  → /services/product-engineering (live cross-link)
  → /contact
```

Live. Design judgment for complex software — research, structure, interaction, design systems, validation. Not a visual gallery. Composition in `docs/CREATIVE_DIRECTION.md`.

## Web Development (Chunk 18)

```text
/services
  → /services/web-development
  → /work (secondary)
  → /services/ui-ux-design (live cross-link)
  → /services/product-engineering (live cross-link)
  → /contact
```

Live. Delivering the product experience through the web — responsive implementation, application behavior, performance, accessibility, SEO. Not a framework catalog. Composition in `docs/CREATIVE_DIRECTION.md`.

## Mobile Development (Chunk 19)

```text
/services
  → /services/mobile-development
  → /work (secondary)
  → /services/ui-ux-design (live cross-link)
  → /services/product-engineering (live cross-link)
  → /services/web-development (live cross-link)
  → /contact
```

Live. Software for the moment of use — touch, platform conventions, offline/sync, lifecycle, device capabilities. Not web on a smaller screen. Composition in `docs/CREATIVE_DIRECTION.md`.

## Cloud & DevOps (Chunk 20)

```text
/services
  → /services/cloud-devops
  → /work (secondary)
  → /services/product-engineering (live cross-link)
  → /services/web-development (live cross-link)
  → /contact
```

Live. Repeatable, observable, secure path to production — IaC, guarded delivery, observability, resilience. Not a logo wall or hosting page. Composition in `docs/CREATIVE_DIRECTION.md`.

## Company (Chunk 21, live — frozen)

```text
/company
  → who / how we think / how we work / what we value
  → /work (proof)
  → /contact
```

Frozen. Principle-led institutional page — why SKYEMBER chooses to work this way. Children live: `/company/about` · `/company/process` · `/company/technology`. Careers absent. Composition in `docs/CREATIVE_DIRECTION.md`.

## Company About (Chunk 22, live — frozen)

```text
/company/about
  → what SKYEMBER is / who we work with / how it feels to work together
  → /work (compact proof)
  → /contact
```

Frozen. Factual/human company profile — who and what SKYEMBER is. No invented team, history, offices, clients, or scale. People section absent until approved. Process live. Technology gated. Composition in `docs/CREATIVE_DIRECTION.md`.

## Company Process (Chunk 23, live — frozen)

```text
/company/process
  → first conversation → understand → frame → make → validate → release → continue
  → decisions stay visible
  → /contact
```

Frozen. Transparent engagement view — how a client moves through the work. Not a homepage Process repeat. Technology live. Composition in `docs/CREATIVE_DIRECTION.md`.

## Company Technology (Chunk 24, live — frozen)

```text
/company/technology
  → fit before fashion → how we decide → trade-offs visible
  → domain / data / security / operations / evolution
  → /contact
```

Frozen. Technical philosophy — technology is a decision, not an identity. Not a stack catalogue. Representative decisions labeled. Completes the Company family. Composition in `docs/CREATIVE_DIRECTION.md`.

## Insights (Chunk 25, shipped)

```text
/insights
  → one featured thought
  → vertical editorial index (Engineering · Product · Design · AI + Systems)
  → /insights/[slug] later, genuine articles only
  → /contact
```

Frozen. Editorial intelligence layer — not a blog. Featured thesis + index connected to four genuine essays (Chunk 27). Index composition unchanged.

## Genuine editorial content (Chunk 26, approved)

```text
Essay 01  Product         The Workflow Is the Product
Essay 02  Engineering     Complexity Should Have to Earn Its Place
Essay 03  Design          Designing the State After the Happy Path
Essay 04  AI + Systems    When an AI Workflow Should Stop and Ask
```

Editorially approved. Copy in `docs/insights/`. Publication is Chunk 27.

## Insights publication architecture (Chunk 27, shipped)

```text
/insights
  → /insights/the-workflow-is-the-product
  → /insights/complexity-should-have-to-earn-its-place
  → /insights/designing-the-state-after-the-happy-path
  → /insights/when-an-ai-workflow-should-stop-and-ask
  → 404 for any other slug
  → /contact
```

Frozen index composition; destinations live. Static catalog. Article + BreadcrumbList. Author SKYEMBER. Published 2026-10-06. No CMS. Composition in `docs/CREATIVE_DIRECTION.md`.

## Sitewide quality pass (Chunk 28, shipped)

No new product routes. Sitemap, robots, branded 404, integrity crawl. Defect-only. Composition in `docs/CREATIVE_DIRECTION.md`.
