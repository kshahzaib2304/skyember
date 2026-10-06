# SKYEMBER Design System

Source of truth for tokens implemented in `resources/css/app.css`.

## Colors

Derived from the brand ribbon mark (cyan → cobalt) and hybrid light/dark planes.

| Token                     | Role                      | Value     |
| ------------------------- | ------------------------- | --------- |
| `--color-background`      | Page default              | `#F7F9FC` |
| `--color-foreground`      | Primary text              | `#0B1220` |
| `--color-muted`           | Secondary text            | `#5B657A` |
| `--color-border`          | Hairlines                 | `#D7DEE8` |
| `--color-surface`         | Elevated light surface    | `#FFFFFF` |
| `--color-surface-hover`   | Light hover               | `#EEF3F9` |
| `--color-primary`         | Brand blue                | `#1B6CFF` |
| `--color-primary-hover`   | Brand blue hover          | `#0F56D9` |
| `--color-accent`          | Cyan highlight (logo top) | `#38B6FF` |
| `--color-primary-deep`    | Cobalt fold/shadow        | `#0B3FAE` |
| `--color-dark`            | Dark plane base           | `#070B14` |
| `--color-dark-surface`    | Dark elevated             | `#101826` |
| `--color-dark-border`     | Dark hairline             | `#243044` |
| `--color-dark-muted`      | Dark secondary text       | `#9AA8BC` |
| `--color-dark-foreground` | Dark primary text         | `#F4F7FB` |
| `--color-danger`          | Form errors only          | `#8E2F2F` |

### Rules

- Prefer 4–6 active colors on a given surface
- Gradients only from logo blues (accent → primary → primary-deep)
- No purple, no neon multi-hue, no warm cream default

## Typography

| Role               | Family             | Notes                                |
| ------------------ | ------------------ | ------------------------------------ |
| Display / Headings | **Syne**           | Geometric, confident, brand-distinct |
| Body / UI          | **Source Sans 3**  | Readable, calm, technical            |
| Code (later)       | ui-monospace stack | Reserved                             |

### Scale (utility classes)

| Class           | Use                       |
| --------------- | ------------------------- |
| `.text-display` | Hero / campaign lines     |
| `.text-h1`      | Page H1 when not display  |
| `.text-h2`      | Section titles            |
| `.text-h3`      | Subsections               |
| `.text-body`    | Default copy              |
| `.text-small`   | Meta, captions            |
| `.text-eyebrow` | Uppercase labels, tracked |

## Spacing scale

`4 · 8 · 12 · 16 · 24 · 32 · 48 · 64 · 96 · 128 · 160` (px) - use Tailwind spacing; section padding typically `py-24` / `py-32` desktop, tighter on mobile.

## Radius

| Token  | Value  | Use                     |
| ------ | ------ | ----------------------- |
| `sm`   | 4px    | Inputs, small chips     |
| `md`   | 8px    | Buttons                 |
| `lg`   | 12px   | Panels                  |
| `xl`   | 16px   | Large frames            |
| `2xl`  | 24px   | Hero frames (sparingly) |
| `pill` | 9999px | Avoid by default        |

## Buttons

| Variant   | Use                          |
| --------- | ---------------------------- |
| Primary   | Main CTA (filled brand blue) |
| Secondary | Alternate (border / surface) |
| Ghost     | Low emphasis on light        |
| Text      | Inline link-button           |

Focus rings: visible, brand-tinted, never removed.

## Cards

Default: **no cards**. Capability visuals are product frames (hairline, flat surface, no shadow), not marketing cards.

- Default / Interactive / Featured / Case Study - defined in a later chunk

### Capability frames (Chunk 2)

- Light surface `#FFFFFF` on the page background. Border `--color-border`. Radius `lg`
- No glow, no dark plane, no gradient fill
- Blue is for state, sequence, or the foundation edge - not for decoration
- Status color is `--color-primary-deep` on light (small text). `--color-accent` stays on dark planes only

### Product proof plane (Chunk 3)

- Full-bleed `--color-dark`. Panels `--color-dark-surface`. Hairlines `--color-dark-border`
- No hero radial glow, no noise, no second floating frame
- Density belongs inside the product frame: tables, status, metadata, activity
- Blue marks the current workflow step only

### Selected work surface (Chunk 4)

- Page background `--color-background`. One plate: `--color-surface`, hairline `--color-border`, radius `--radius-sm`. No shadow, no dark plane
- The plate may extend about 2.5rem past the text column on large screens. Inside it, a rule may run off the crop. Words stay intact
- Blue in this section: the index `01` (`--color-primary-deep`), the current workflow step, and the case-study link when that page exists
- Type inside the plate is Source Sans. Syne stays on the section heading and the project title

### Process list (Chunk 5)

- Same page background. No plate, no radius, no shadow
- One hairline under each row: `--color-border`
- Blue is the index only, `--color-primary-deep`
- Syne on the H2. Stage names and the line of work are Source Sans

### Final close (Chunk 6)

- Same page background. No plate
- Headline is Syne, between `.text-h2` and the Hero display: `clamp(2.35rem, 4.8vw, 3.5rem)`
- Blue is the action only, `--color-primary`
- Footer switches to `--color-surface` with a hairline, so the utility layer is distinct

### Contact brief

- Same page background. No plate, no shadow, no dark plane
- H1 uses the final-close scale, broken into three lines so the first viewport holds it at 320px
- Fields are underlines. The system choice is a native radio list with hairlines. The address is type, not a card
- Blue is the email hover, the focused underline, the primary action, and the selected radio
- `--color-danger` is the error text and the invalid underline. It is not a brand color
- From 1024px the address sits in the right column, aligned to the end of the headline block. The form stays in the left column, max 40rem

### Work index (Chunk 8)

- Same page background. No dark plane, no shadow, no bleed. The homepage plate keeps the bleed
- Page rules use the `works-` prefix. Do not retune `.work-sheet` or the other homepage `work-` rules
- Featured entry is full width. From 1024px, 02 and 03 sit as a two-column pair under it — never three equal columns
- The featured surface reuses `work-stage` and `work-sheet` so the operations crop stays the same object
- H1 uses the final-close scale, two lines. Featured H2 uses `.text-h2`. Additional H2s use `.text-h3`
- Additional 02 is a sheet: `--color-surface`, hairline, radius `sm`, about 17rem wide from 1024px
- Additional 03 has no surface. Four states, hairline between them when stacked
- Blue is the index, the current state, and the text actions
- From 1024px the lead sentence sits in the right column, aligned to the end of the H1, as on Contact

### Case study — BOP (Chunk 9)

- Page rules use the `study-` prefix. Do not retune homepage `proof-*` / `work-*` or index `works-*` layouts
- Light editorial bands for problem, design, engineering, intentions, record, CTA
- Dark technical planes only for major product evidence (hero open, order document, broader platform)
- Hero H1 uses page H1 scale, not the homepage display. Support line is Source Sans
- Constraint beats are a flowing numbered list with product crops — not four equal cards
- Blue marks current state / current constraint only
- Closing project record is a definition list under an eyebrow, not a card grid
- CTA is a quiet text action to `/contact`, same arrow hover as Work/Contact

### Solutions index (Chunk 10)

- Page rules use the `solutions-` prefix
- Light field. No four equal cards. Featured Business software band is full width; 02–04 are quieter
- Type-led chooser rows: “Choose this when” / “What we put in place”
- Blue on indexes and text actions only
- Optional single 0.9s reveal on the featured proof crop; otherwise still
- Do not reuse homepage capability motion sequences

### Business software solution (Chunk 11)

- Page rules use the `bizsoft-` prefix
- Light commercial field; operational evidence as hairline surfaces (default light workspace in the hero)
- Four domain beats are uneven compositions, not equal cards
- Connected records: interface of related records, not architecture boxes
- Blue on indexes and text actions only
- Quieter than Product Proof; optional one ~1.6s related-records highlight

### SaaS products solution (Chunk 12)

- Page rules use the `saas-` prefix. Do not reuse `bizsoft-*` compositions
- Light product surfaces with hairlines — product chrome, not operations rails
- Hero communicates identity → workspace → core action → ongoing use
- Signature is four states of one product (Discover / Act / Return / Evolve), not architecture boxes
- Quieter than Business Software; optional one ~1.6s product-state beat

### Custom platforms solution (Chunk 13)

- Page rules use the `plat-` prefix. Do not reuse `bizsoft-*` or `saas-*` compositions
- Connected platform surface: several doors into one foundation — not ops workspace, SaaS chrome, or box-and-arrow architecture
- Signature is one record through Customer / Staff / Partner contexts
- Quieter than SaaS Products; optional one ~1.6s same-foundation beat
- No stack theatre (no Kubernetes / microservices / GraphQL lists)

### AI & automation solution (Chunk 14)

- Page rules use the `aiauto-` prefix. Do not reuse `bizsoft-*`, `saas-*`, or `plat-*` compositions
- Automation console / controlled workflow surface — not chatbot, robot, neural net, or prompt theatre
- Signature is AI inside the workflow (Input → Context → AI → Rules → Action → Review)
- Most intelligent-looking, not most futuristic; quieter motion than Custom Platforms
- No looping particles, animated neural networks, or constantly moving connection lines

### Services index (Chunk 15)

- Page rules use the `svc-` prefix. Distinct from all `solutions-` / solution-child prefixes
- Engineering practice: featured Product Engineering + quieter horizontal discipline records — not five equal cards
- Hero = disciplines contributing to one product surface (not another dashboard)
- Signature = one product gaining fidelity across disciplines
- Quieter than solution pages; service rows stay still; no rotating tech logos
- AI is not listed as a service

### Product Engineering service (Chunk 16)

- Page rules use the `pe-` prefix. Do not reuse `svc-*` hub compositions as the deep page
- One evolving product surface: intent → model → experience → software → production
- Signature: one product through UX / engineering / delivery fragments — not boxes-and-arrows
- Engineering depth without stack logos; frontend states + validation surfaces as substance
- Restrained motion; quieter than solution pages; BOP proof carefully scoped

### UI/UX Design service (Chunk 17)

- Page rules use the `ux-*` prefix. Distinct from `pe-*` and `svc-*`
- Design judgment: one complex task becoming clear — not Figma canvas, dashboard polish, or portfolio collage
- Signature: one task / decision carried by hierarchy, state, action, context
- Design systems as product-quality mechanism; responsive + accessible explicit
- Quieter than Product Engineering; no fake research metrics

### Web Development service (Chunk 18)

- Page rules use the `web-*` prefix. Distinct from `pe-*`, `ux-*`, and `svc-*`
- Browser as a real environment: one surface adapting wide → compact — not device frames or a code editor
- Signature: same product, different conditions, same intent
- Performance, accessibility, and SEO as implementation quality — no fake vitals or stack logos
- Quieter than UI/UX Design

### Mobile Development service (Chunk 19)

- Page rules use the `mob-*` prefix. Distinct from `pe-*`, `ux-*`, `web-*`, and `svc-*`
- One focused mobile task in the hand — not phone frames, App Store collage, or framework logos
- Signature: interruption → continuity (moment of use)
- Offline/sync, lifecycle, platform-aware iOS/Android without a framework debate
- Quieter than Web Development; page itself demonstrates mobile-minded composition

### Cloud & DevOps service (Chunk 20)

- Page rules use the `ops-*` prefix. Distinct from `pe-*`, `ux-*`, `web-*`, `mob-*`, and `svc-*`
- One production control surface: a change followed from release to runtime — not logos, Kubernetes, or a CI/CD ribbon
- Signature: a release should leave a trail
- IaC, guarded delivery, observability, security, recovery as practices — no fake uptime or certifications
- Quietest service child; the page should feel stable

### Company page (Chunk 21, frozen)

- Page rules use the `co-*` prefix. Distinct from service prefixes and homepage sections
- Institutional / principle-led — not another capability or service page
- Brand typography composition: different disciplines, one standard — no dashboard, team collage, or Mission/Vision/Values template
- Signature: look at the whole system (typographic progression, not a process diagram)
- No invented scale, offices, awards, or team grid; About/Process/Technology gated; Careers absent
- Among the quietest pages on the site
- Children sequence: About → Process → Technology (each briefed separately; no stub routes)

### Company About page (Chunk 22, frozen)

- Page rules use the `coa-*` prefix. Isolated from parent `co-*`
- Factual / human company profile — not another manifesto or services page
- Typographic company portrait — no team photo, stock collage, or fabricated leadership grid
- Audience recognition without fake clients; relationship principles without scale claims
- People section absent until approved profiles; Process / Technology gated; Careers absent
- Extremely restrained motion; quieter than parent `/company`

### Company Process page (Chunk 23, frozen)

- Page rules use the `cop-*` prefix. Isolated from `co-*` / `coa-*`
- Engagement transparency — not homepage Process, not a methodology timeline
- Signature: decisions stay visible (decision record), not a six-step diagram
- No invented timelines, retainers, guarantees, or staffing claims
- Almost entirely still motion; quieter than About

### Company Technology page (Chunk 24, frozen)

- Page rules use the `cot-*` prefix. Isolated from `co-*` / `coa-*` / `cop-*`
- Technical philosophy — not a stack catalogue, architecture diagram, or Cloud & DevOps duplicate
- Signature: trade-offs visible on engineering decision records
- Representative decisions clearly labeled; no invented client architecture
- Quietest technical page on the site

### Insights index (Chunk 25, shipped)

- Page rules use the `ins-*` prefix. Isolated from Company prefixes
- Editorial intelligence layer — not a blog template or card wall
- One featured thought + vertical typographic index
- Four categories only; no fake authors or placeholder-as-live articles
- Mostly still; 0.9s featured settle

### Genuine essays (Chunk 26, copy approved)

- Four markdown essays in `docs/insights/` (published 2026-10-06)
- Conceptual heroes:
  - Workflow: `Trigger → Context → Decision → Action → State → Continuation`
  - Complexity: `Requirement → Boundary → Cost`
  - Happy path: `Expected → Interrupted → Recovered`
  - AI: `Understand → Decide → Act / Ask`

### Essay pages (Chunk 27, shipped)

- Prefix `inse-*`, isolated from frozen index `ins-*`
- Quiet editorial reading; 0.9s hero-visual settle
- Related essays as a typographic list, not a card wall

### Sitewide quality pass (Chunk 28, shipped)

- No new page composition
- Defect-only; frozen prefixes stay isolated (`ins-*`, `inse-*`)
- 404 uses `err-*`

## Motion

Source of truth: `resources/js/motion.js`. Sections use these values. Do not invent a faster local duration.

Motion must last long enough for the eye to understand what appeared, what changed, and why. The feeling is an interface settling. After the sequence, stillness.

| Role                         | Duration     | Use                                                                                                 |
| ---------------------------- | ------------ | --------------------------------------------------------------------------------------------------- |
| Hover / small UI             | 180–250ms    | Color and border only. Buttons are 220ms                                                            |
| Stagger                      | 180ms        | Space between related items. Not a rapid 01-02-03-04                                                |
| Individual reveal            | 0.9s         | One element settling into place                                                                     |
| Section entrance             | 1.1s         | A frame or block arriving                                                                           |
| Pause / hold                 | 0.45s / 0.7s | Air between beats, and time to read a state                                                         |
| Workflow step                | 0.65s        | One state change in a progression                                                                   |
| Story draw                   | 1.6s         | A line, a request resolving, a path                                                                 |
| Major transition             | 0.8s         | Pullback or return inside a longer story                                                            |
| Hero, full sequence          | about 2.8s   | Type, then panels, then the path. Headline is readable before the path finishes                     |
| Product proof, full sequence | about 6s     | Frame, pause, workflow, pause, pullback, hold, return, still                                        |
| Selected work                | 0.9s         | One reveal. Scale 0.94 to 1, opacity in, text rises a short distance. Then still. Arrow hover 220ms |
| Process                      | none         | The operating list is complete in HTML. No sequence                                                 |
| Final CTA                    | none         | Type is present immediately. Arrow hover 220ms. The link is `/contact`                              |
| Contact                      | none         | The brief is in the HTML. Hover and focus are 220ms. No entrance                                    |
| Work index                   | 0.9s         | Featured plate only. Same reveal as selected work. Additional records stay still. No scene          |
| Case study BOP               | 0.9s / ~1.6s | Large surfaces use reveal. Optional logic-trail highlight ~1.6s. Quieter than Product Proof. No pin |
| Solutions index              | 0.9s         | Featured proof crop only. No capability state sequences                                            |
| Business software            | 0.9s / ~1.6s | Workspace and domain reveals. Optional related-records highlight. Quieter than Product Proof       |
| SaaS products                | 0.9s / ~1.6s | Hero product settle. Optional product-state beat. Quieter than Business Software                   |
| Custom platforms             | 0.9s / ~1.6s | Hero platform settle. Optional same-foundation beat. Quieter than SaaS Products                    |
| AI & automation              | 0.9s / ~1.6s | Hero workflow settle. Optional one state transition. Quieter than Custom Platforms                 |
| Services index               | 0.9s / ~1.6s | Hero + featured settle. Optional signature beat. Rows still. Quieter than solution pages           |
| Product Engineering          | 0.9s / ~1.6s | Hero product settle. Optional signature beat + one interface-state transition. Restrained          |
| UI/UX Design                 | 0.9s / ~1.6s | Hero interface settle. Optional signature transition. Quieter than Product Engineering             |
| Web Development              | 0.9s / ~1.6s | Hero responsive settle. Optional one condition change + one state beat. Quieter than UI/UX         |
| Mobile Development           | 0.9s / ~1.6s | Hero task settle. Optional interruption→continuity + one offline→sync beat. Quieter than Web       |
| Cloud & DevOps               | 0.9s / ~1.6s | Hero release settle. Optional trail beat + one observability transition. Quietest service child    |
| Company                      | 0.9s         | Hero typography settle. Optional subtle signature light. Mostly still. Quieter than service pages |
| Company About                | 0.9s         | Hero + optional portrait settle. Extremely restrained. Quieter than parent `/company`            |
| Company Process              | 0.9s         | Optional decision-record reveal. Almost entirely still. No timeline journey                      |
| Company Technology           | 0.9s / ~1.6s | Hero + representative record. Optional one trade-off beat. Quietest technical page               |
| Insights                     | 0.9s         | Featured visual settle only. Rows static. No card choreography                                   |
| Insights essay               | 0.9s         | Hero visual settle only. Body static. Related rows still                                         |

Easing: `power2.out` for settles, `power2.inOut` for draws and state changes.

Reduced motion: final state immediately. No sequence.

Rhythm for a proof: enter → settle → pause → state change → pause. Do not chain every tween with no gap.

## Navigation

- Desktop: mark + wordmark · sparse links · Let’s Talk
- Mobile: same brand · compact menu (Chunk 1: simple toggle, no mega menu)

## Do / Don’t

**Do:** generous whitespace, one job per section, real UI visuals, restrained blue  
**Don’t:** icon salad, multi-shadow glow stacks, purple gradients, stuffing the first viewport
