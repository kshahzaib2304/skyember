# SKYEMBER Creative Direction

## Brand in five seconds

A visitor should feel:

> **Intelligent. Precise. Modern. Capable. Calm. Technically sophisticated.**

They should not feel:

> Cheap agency · Startup template · Generic IT house · Cyberpunk neon · AI-slop SaaS

## Positioning

SKYEMBER is a **premium technology company + product studio + software solutions partner**.

Not a “software house brochure.” The site itself must demonstrate engineering and design judgment.

## Inspiration principles (steal principles, not skins)

| Source       | Take                                       |
| ------------ | ------------------------------------------ |
| Linear       | Precision, spacing discipline              |
| Vercel       | Technical confidence, restraint            |
| Stripe       | Storytelling of complex systems            |
| Raycast      | Personality in micro-moments               |
| Framer       | Motion with craft                          |
| Thoughtworks | Enterprise credibility without looking old |

Do **not** make “Linear with a SKYEMBER logo.”

## Visual base - Hybrid

- **Default chrome:** Light editorial surfaces (white / cool off-white), deep navy text, restrained borders
- **Product / proof planes:** Deeper atmospheric fields (near-black navy) with brand blue energy - used for Hero system visual and future product showcases
- **Accent:** Logo ribbon blues only - cyan highlight → cobalt depth. No purple glow, no rainbow accents

## Shape language

- Sharp geometry softened slightly (matches ribbon mark)
- Subtle borders over heavy shadows
- Cards are rare - only when they serve interaction or scanning
- Full-bleed visual planes for “wow” moments; quiet whitespace between

## Motion philosophy

- Few exceptional moments beat many mediocre ones
- Motion explains (systems expanding, interfaces settling) - it does not decorate every pixel
- The eye must have time to see what appeared, what changed, and why
- Enter, settle, pause, then change state. Do not rush every beat together
- After the sequence: stillness. Calm is part of the brand
- Respect `prefers-reduced-motion`
- Durations live in `resources/js/motion.js` and `docs/DESIGN_SYSTEM.md`

## Typography philosophy

- Large, confident display headlines with room to breathe
- Short supporting copy - controlled width
- Strong hierarchy; no walls of text in the Hero
- Wordmark **SKYEMBER** is a brand-level signal, not a tiny nav label alone

## Copy tone

- Human, confident, specific
- Prefer: “We design and engineer custom software for businesses that need more than off-the-shelf tools.”
- Avoid: “innovative digital solutions,” “cutting-edge,” “synergy,” mission/vision/values laundry lists

## Anti-patterns (reject on sight)

- Stock photos of developers with laptops
- Icon grids of lightbulb / cloud / phone
- Purple-on-white or indigo gradient themes
- Warm cream + terracotta “AI default” look
- Broadsheet newspaper layouts
- Rounded-full pill spam, multi-layer glow shadows
- Template SaaS sections jammed into the first viewport
- Important messaging only inside canvas/WebGL

## Section moods

A long homepage stays art-directed when density changes on purpose. Do not make every section look like the Hero.

| Section       | Mood                   |
| ------------- | ---------------------- |
| Hero          | Atmospheric + dramatic |
| Capabilities  | Editorial + structured |
| Product proof | Dense + technical      |
| Case studies  | Visual + narrative     |
| Process       | Calm + systematic      |
| Final CTA     | Minimal + emotional    |

Energy falls as the page goes on. Hero, Capabilities, and Product proof carry the motion. Selected work is one short settle. Process should be still. Do not add a bigger sequence just because a new section exists.

## Hero brief (Chunk 1)

| Question      | Answer                                                                                                 |
| ------------- | ------------------------------------------------------------------------------------------------------ |
| User goal     | Understand who SKYEMBER is and take a next step                                                        |
| Brand message | Serious software company - capable, precise                                                            |
| Visual idea   | Full-bleed system visual (UI frames + path/arrow motif) on a dark atmospheric plane; light page chrome |
| SEO value     | H1 + supporting paragraph in HTML; Organization schema in head                                         |
| Mobile        | Brand → headline → support → CTAs → visual, all readable at 390px                                      |
| Motion        | Headline settles first (~1.1s). Panels and path follow. Full sequence about 2.8s, then stillness       |

## Capabilities brief (Chunk 2)

The H2 deliberately echoes the Hero line, then changes the job: from a claim about SKYEMBER to a map of systems. It is set as an H2 on the light field, not as a second display lockup.

| Question      | Answer                                                                                                                                                                                                                |
| ------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Understand what SKYEMBER actually builds                                                                                                                                                                              |
| Brand message | Complete software systems around real business requirements - not a service menu                                                                                                                                      |
| Visual idea   | Numbered editorial journey. Four different silhouettes: wide ledger, compact product, full-bleed workflow, offset stack                                                                                               |
| SEO value     | Sentences a person would actually read, which also name the work: custom software development, business software, web application and SaaS development, AI automation, cloud and infrastructure, software engineering |
| Mobile        | Heading, then capability text, then that capability’s visual. Repeat. No tiny columns                                                                                                                                 |
| Motion        | Settle, pause, then the state change. Each proof is about 2–2.8s. Nothing required to understand the section                                                                                                          |

## Product proof brief (Chunk 3)

**Status:** accepted and shipped 2026-10-04. The section follows this brief. Do not turn it into a dashboard, a second ledger, or a pinned tour.

The section answers “Can they actually build software at this level?” It is one flagship environment on a dark technical plane. It is not a second Hero, not a fourth capabilities row, and not a portfolio of mockups.

### Already on the page - do not reuse

| Already shown                                       | Where                     | Chunk 3 must avoid                   |
| --------------------------------------------------- | ------------------------- | ------------------------------------ |
| Rs 4.8M, 12,840 orders, 3,921 customers, sparkline  | Hero                      | No KPI strip, no chart               |
| Interface / Application / Services / Infrastructure | Hero “System layers” card | No reprinted layer list              |
| Distribution ledger NX-1042                         | Capabilities 01           | No second ledger as the whole visual |
| Quote 1842 workspace                                | Capabilities 02           | No second SaaS home                  |
| Invoice 4418 pipeline                               | Capabilities 03           | No second five-step agent strip      |
| Release / runtime / foundation                      | Capabilities 04           | No second architecture stack         |

### 1. Enterprise UI pattern

**A document workspace.** One open operational record, the way a serious system is actually used: identity, commercial state, line items, stock constraint, activity, and the next action.

Not an analytics home. Not three laptop frames. Not four product cards.

Reference for the pattern only: a Linear issue (one record, properties, activity) and an ERP document screen. The skin stays SKYEMBER - dark hairline chrome, Syne nowhere inside the product, Source Sans for the UI, one blue for the current state.

### 2. Business problem

A pharmacy counter has to fulfill a clinic supply order without breaking three rules at once: payment is confirmed, stock is reserved, and the batch is the earliest eligible expiry (FEFO). The screen is that decision, held in one record.

Representative system, not a case study. Case studies stay a later chunk. The visitor is not asked to learn the product.

### 3. Data that makes it real

Eight facts, all visible in the settled interface:

| Fact     | Value                                                                             |
| -------- | --------------------------------------------------------------------------------- |
| Record   | Sales order **SO-10482** · Gulshan counter · 4 Oct 2026 · **Processing**          |
| Account  | City Care Clinic · payment **confirmed** · **Rs 12,480**                          |
| Line     | Panadol 500mg tablets · qty **24**                                                |
| Batch    | **B-441** · exp 08/2027 · bin **C-12** · FEFO, earliest eligible                  |
| Stock    | On hand **180** · reserved **24** · available **156**                             |
| Workflow | Received → Checked → **Reserved** → Posted → Dispatch                             |
| Activity | 14:22 Reserved 24 from B-441 · 14:18 Payment confirmed · yesterday GRN-220 posted |
| Actor    | A. Rahman · counter                                                               |

No lorem. No avatars. No perfect empty whitespace inside the product. Tables, statuses, metadata, and an activity log are the point.

### 4. The one reveal

The order stays on screen the whole time. Scroll does not swap in a different infographic.

The reveal is a short pullback: the document eases back and three links that belong to **this order** appear - workflow (fulfill SO-10482), data (batch B-441), people (A. Rahman, counter) - then the document returns to full size. One line under them names the services that order touches: inventory, ledger, notify.

That is software engineering made visible. It is not the Hero’s layer list and not the capabilities stack.

### 5. Desktop composition

Full-bleed dark plane. Inside `container-sky`:

1. Eyebrow: `Proof, not promises`
2. H2: `Software should be experienced, not described.`
3. One paragraph, two lines at desktop, then stop. The interface is the rest of the section.
4. One application frame, nearly the full container width, tall enough to feel entered (about 640px). Top bar, left rail, document.
5. Rail labels: Orders, Inventory, Accounts, Activity. Orders is current. The rail is navigation chrome, not four features.
6. Main column is the SO-10482 document: header, payment and status, line table, stock, activity.
7. One caption under the frame, a single sentence. Not a second essay.

Quiet technical plane: base `--color-dark`, panels `--color-dark-surface`, hairlines `--color-dark-border`. No hero glow, no noise, no floating second card.

### 6. Mobile composition (~390px)

A focused viewport, rebuilt - not the desktop shell scaled down.

```text
Proof, not promises
Software should be experienced,
not described.

Al-Noor · Gulshan · Live

SO-10482                      Processing
City Care Clinic              Rs 12,480
Panadol 500mg · 24
Batch B-441 · FEFO · bin C-12
On hand 180 · reserved 24

Received
Checked
Reserved          ← current
Posted
Dispatch
```

The rail becomes that one context line. The system pullback becomes the same three links stacked under the workflow, not a node diagram. The record remains readable without pinch-zoom.

### 7. Where the dark plane begins and ends

- **Begins** at the top edge of this section, full bleed, immediately after Capabilities.
- **Ends** at the bottom edge of this section, hard return to the light footer.
- When this ships, remove the `#work-preview` bridge. Its sentence is this section’s eyebrow. Point “Explore Our Work” at `#product-proof`.
- Do not inset the plane as a card on the light page.

### 8. Static versus motion

**Always in the HTML, including no JavaScript and reduced motion.** The settled record (state 4), the workflow with Reserved current, the one-line explanation of which services the order touches, the heading, and the paragraph.

**Motion, once, about two seconds, then still.** No pin. No scrub that hides the record. No loop.

1. The frame settles in.
2. The workflow marker replays Received → Reserved and stops.
3. The pullback shows the three links, then the document returns.

If motion is off, the visitor already sees the finished order and can read the workflow.

### Copy around the interface

> A custom software platform holds the work in one record: the order, the batch it may take, the stock it reserves, and the ledger it posts to. That is software engineering for a business workflow - not a picture of a dashboard.

Phrases carried by that sentence: custom software platform, business workflow, software engineering. Do not add a keyword block.

### Bar before this chunk can be called done

A visitor can believe the record is a real SKYEMBER product before reading the caption. They understand it in a few seconds, then move on. They are not asked to operate the fictional system.

### Explicitly out of scope

Four mockups, device frames, a KPI dashboard, a second ledger, a second architecture diagram, pinned scrollytelling, continuous motion, backend, and case-study storytelling.

## Selected work brief (Chunk 4)

**Status:** shipped. The spread is on the homepage after product proof. The case-study page is still not built, so the explore link stays out of the HTML.

The section answers “Can we solve a real problem?” It is the first page of a case study, set on the light field. It is not a portfolio grid, not a second product-proof dashboard, and not a darker or longer animation than Chunk 3.

Pattern source: featured-project storytelling (one transformation, one dominant visual, one way forward), not a wall of thumbnails.

### What it must not repeat

| Already shown                 | Chunk 4 avoids                                           |
| ----------------------------- | -------------------------------------------------------- |
| Dark technical order SO-10482 | No second application shell, no ledger, no workflow tour |
| Capability visuals            | No four-up, no stack diagram                             |
| Hero atmosphere               | No glow, no dark plane                                   |

### Composition

Light page background. One spread, not a card (image on top, title in a footer).

1. Eyebrow: `Selected work`
2. H2: `Software built around a real business.`
3. One dominant project visual. A cropped story surface: orders, a workflow, a customer, and the operation in one frame. It may break the frame edge slightly. No device mock, no browser-in-a-browser, no KPI row, no fulfillment percentage.
4. Index `01` and the label `Featured project`.
5. H3: `Business Operations Platform`
6. One sentence: `A connected platform that brings orders, inventory, workflows and daily operations into one system.`
7. Metadata, not a services list: Industry `Operations` · Scope `Product · UX · Engineering` · Platform `Web application`
8. Action: `Explore case study`

The visual dominates. The type sits with it as one composition. On small screens the visual comes first, then the index, title, sentence, metadata, and action. Nothing is a scaled-down desktop collage.

### Honesty

This is a **representative project** until a real engagement replaces it. No invented client name, testimonial, revenue, or performance percentage. Labels inside the picture are interface context. They are not published results.

### Link

The future URL is `/work/business-operations-platform`. Do not render that link until the page exists. A teaser must not point at a 404. The component data still carries `href` so the page can be attached later without redesigning the spread.

### Motion

Quieter than the sections above. One settle from `resources/js/motion.js`: the visual moves from scale 0.94 to 1 and fades in (`reveal`, 0.9s). Text may rise a short distance in the same beat. Hover shifts the arrow a few pixels (220ms). Then stillness. The story is readable if motion never runs.

### Data shape

Static for now: `title`, `category`, `industry`, `summary`, `visual`, `href`. A later case-study model can fill the same fields.

### Out of scope

A project grid, carousel, dark shell, fake metrics, a full case-study page, and any sequence longer than a single reveal.

## Process brief (Chunk 5)

**Status:** shipped. The operating list follows Selected work. Chunks 1–4 were not restyled. There is no motion in this section.

The section answers “What is it actually like to work with SKYEMBER?” It sits on the light field after Selected work, before the footer. It is the quietest informational section on the page. The eye rests here.

### What the research showed

Strong companies do not put a chevron timeline on the homepage. The ones that feel serious publish an operating model: what each stage is for, and what changes when it is finished.

| Source                                                  | What they actually do                                                                                                                                            | What SKYEMBER should take                                                                                     |
| ------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| [Linear Method](https://linear.app/method)              | A manual of practices, grouped by job (Direction, Building), numbered like a document. Not a marketing funnel.                                                   | A sequence can be serious when it reads as practice, not as a sales path.                                     |
| [Instrument, About](https://www.instrument.com/about/)  | “How we work” is one paragraph: strategy, design, and engineering in the same room, so the idea is not watered down between stages. No timeline on the homepage. | The truth of the section is how the work is held, not how many steps there are.                               |
| Clay                                                    | The homepage sells senior collaboration. Their public step-by-step UI guide was called generic by a reader, even with polished pictures.                         | A famous studio’s “Research → Design → Build” post can still be a brochure. Names alone do not make a method. |
| Thoughtworks                                            | Discovery (understand the current state) is a different job from inception (plan the delivery) and from the build. Their 3/3/3 clock belongs to a named product. | Separate understanding from shaping from engineering. Do not invent a branded week-count.                     |
| [Shape Up](https://basecamp.com/shapeup/0.3-chapter-01) | Shaping, appetite, betting, building. A stage produces a decision. Time is a constraint, not a promise printed on the site.                                      | Each line should say what the work turns into. Do not copy six-week cycles or a betting table.                |
| Engagement studios (2D2C, Mewan)                        | Gates, what leaves the studio, who is in the room, written decisions. Useful on a future process page.                                                           | Too commercial for this homepage cut. No week counts, prices, Slack channels, or staffing claims.             |

Stripe and Vercel do not explain a client process on the homepage. The product is the proof. SKYEMBER has already done that work in Chunks 3 and 4, so a short account of the working relationship is earned. It has to stay shorter and quieter than those sections.

### What it must not be

- `Discover → Design → Develop → Launch` with icons, circles, or a connecting arrow
- Five equal cards, a horizontal scroller, or a chevron ribbon
- A dark plane, a product UI, a diagram, or a second cropped visual
- A named method, a week count, a price, a team photo, or a promise of a retainer
- A GSAP sequence. Chunk 4 already settled in 0.9s. This section is the pause after it.

### Proposed composition - an operating list

Light page background. Type only. One claim, then five rows a person can read without scrolling sideways.

1. Eyebrow: `How we work`
2. H2: `Good software is built with intent, not momentum.`
3. An ordered list. The index is the sequence. There is no drawn timeline.

Rows as shipped:

|     | Stage      | What the work attends to         |
| --- | ---------- | -------------------------------- |
| 01  | Understand | Business, users, constraints     |
| 02  | Shape      | Requirements → product direction |
| 03  | Engineer   | Architecture → implementation    |
| 04  | Validate   | Test → refine → prepare          |
| 05  | Launch     | Deploy → hand over → evolve      |

Row 01 names the field of attention. Rows 02–05 name a change of state. That difference is the point: understanding is not a department, and the later stages are not slogans.

Desktop: the heading sits above the list. Each row is one line - index, stage, then the line of work - separated by a hairline. The index uses `--color-primary-deep`. The stage name is Source Sans, not a display face. Syne stays on the H2.

Small screens: the same list, restacked. Index and stage on one line, the line of work under them. Five readable rows. Not five narrow columns and not a scaled-down desktop row.

No cards, no icons, no vertical rule beside the numbers. The numbers are the order.

### Honesty

These lines describe how an engagement is approached. They are not a contract, a duration, or a deliverable checklist. Do not add “two weeks”, “written sign-off”, “senior partner in the room”, or a guarantee that every engagement includes ongoing evolution. “Evolve” means the system is handed over in a state that can keep changing. It does not announce a retainer.

### Motion

Still. No ScrollTrigger, no stagger, no fade-in of the rows. The list is complete in HTML. If motion never runs, nothing is missing, because nothing was supposed to move. Hover, if any control is added later, stays at 220ms. This section has no control in the proposed cut.

### SEO

One new H2. The five stages are an ordered list, not five extra H3s. The page outline already carries the systems and the project. Do not add a keyword paragraph about “our software development process.”

### Out of scope

A process page, testimonials, pricing, team, restyling Chunks 1–4, and any sequence at all.

### Shipped

`resources/views/components/home/process.blade.php` and the `how-we-work` rules in `resources/css/app.css`. No JavaScript. The final CTA is still not started.

## Final CTA brief (Chunk 6)

**Status:** shipped. The close follows Process. The footer no longer repeats the question. Let’s Talk and Start a Project point at `#final-cta`. `/contact` is still not linked.

The section answers “What’s next?” It is the last thing in `<main>`, after Process and before the footer. It does not explain another service. It gives the visitor one reason to talk.

The visitor should be able to feel: I know what they do. I’ve seen how they think. I’m ready to talk.

### Job

| Question      | Answer                                                                                              |
| ------------- | --------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether to start a conversation                                                              |
| Brand message | A complex software idea can become a real, thoughtfully engineered product                          |
| Visual idea   | A large, quiet closing statement and one action                                                     |
| SEO value     | One closing H2 and one short sentence, in HTML. The link to `/contact` waits until that page exists |
| Mobile        | The same order, left aligned, recomposed. No decorative artwork                                     |
| Motion        | Still. The arrow may shift a few pixels on hover, 220ms, and only once the link exists              |

### Recommended composition

Light field. The container already used by the page. Substantial space above the type, then a smaller step into the footer.

1. Eyebrow: `Let's build`
2. H2: `Have something worth building?`
3. One sentence: `Tell us what you're trying to solve. We'll help turn the requirement into a clear path forward.`
4. Action: `Start a conversation →`

The headline is the largest type on the page after the Hero. It stays smaller than the Hero display. A controlled measure breaks it as:

```text
Have something
worth building?
```

The sentence stays narrow. The action is obvious and not a large button.

Desktop: the statement sits on the left. The action sits at the end of that same band, so the eye finishes on it. Mobile, near 390px: eyebrow, headline, sentence, action, each left aligned in that order. Nothing is centered into a generic stack.

### What it must not be

A contact form. Name, email, phone, company, budget, and message belong on `/contact`.

Also out: a dashboard, product UI, illustration, card, device frame, statistic, testimonial, logo wall, particle field, or gradient orb. The section is type, space, scale, and alignment. Blue appears on the action only.

### Link

The future URL is `/contact`. Do not render that `href` until a GET route for it exists. The words and the arrow are still visible, so the ending has an action. The component data carries `href` for when the page is attached. A teaser must not point at a 404.

### Relationship to the footer

The footer already closes the page. It uses the line “Have an idea worth building?”, the label “Start a conversation”, and `mailto:info@skyember.com`. The nav item Let’s Talk points at `#contact` on that footer.

If Chunk 6 repeats that question and that button, the page ends twice. When this brief is accepted, the build should do three quiet things together:

- The new section owns the emotional H2 and the text action.
- The footer becomes the utility layer: mark, email, legal line. It keeps `info@skyember.com`. It does not ask the question again.
- Let’s Talk points at the final CTA.

Do not make those footer or nav edits before the brief is accepted.

### Motion

The headline, sentence, and action are in the HTML. No ScrollTrigger, no reveal, no parallax, no pinned close. Hover on the arrow is 220ms, and only when the anchor exists.

### SEO

One new H2. No keyword paragraph. The homepage already carries the topical language. The contact URL becomes an internal link only after the page exists.

### Out of scope

A contact page, a form, a second hero, restyling Chunks 1–5 beyond the footer distinction above, and any sequence.

### Shipped

`resources/views/components/home/final-cta.blade.php`, the `final-close` rules in `resources/css/app.css`, and a utility-only footer. No JavaScript. `/contact` now exists, so the action’s href renders. The section was not restyled.

## Contact brief

**Status:** shipped. `/contact` is the room after “Start a conversation”. The homepage is frozen.

The page answers the sentence the visitor just read. It does not introduce a new slogan, a map, or a lead form.

### Job

| Question      | Answer                                                                             |
| ------------- | ---------------------------------------------------------------------------------- |
| User goal     | Tell SKYEMBER what they are trying to solve                                        |
| Brand message | A short brief is enough. We read it and reply with the next step                   |
| Visual idea   | The close, continued: large quiet type, the address as type, then a hairline brief |
| SEO value     | One H1, a contact description, ContactPage and a visible breadcrumb                |
| Mobile        | Headline, then the email, then the form. Nothing centered into a card              |
| Motion        | Still. The page has to be ready to type                                            |

### Composition

1. Home / Contact
2. H1: `Tell us what` / `you're trying` / `to solve.`
3. `A short brief is enough. We read it and reply with the next step.`
4. `info@skyember.com`, with one line: write directly if you already know what to say
5. Name, work email, organization, an optional system, the problem
6. Continue in email

On a wide screen the address finishes the headline band, the way “Start a conversation” finishes the homepage. The form stays a single column.

### What it must not be

Icon rows for email, phone, and office. A map. A budget select. A green “message sent” banner. A second document frame like SO-10482. A 3D mark spinning beside the fields. Those are decoration, and this page’s job is the brief.

### Send path

No database and no mail server. The server checks the brief and returns the letter. The visitor sends it from their own email. The page says that before they continue. Automated posts that fill the hidden field get no letter.

### Out of scope

`/work`, a case study, a homepage restyle, a CMS, and any scene.

## Work index brief (Chunk 8)

**Status:** shipped 2026-10-05. Hierarchy: 01 is the main editorial entry; 02 and 03 are evidence of range, not equal thirds. The homepage stays frozen. `/work/business-operations-platform` stays unregistered, so no case-study link is rendered anywhere.

The page answers “What have you actually made?” The homepage already showed one project. This room is the set that project belongs to.

### Job

| Question      | Answer                                                                                                                                          |
| ------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | See the range of problems SKYEMBER turns into software, and which one can be opened later                                                      |
| Brand message | The work is the problem it holds. The systems are not the same kind of software                                                                |
| Visual idea   | A contents page: one known plate, then two quieter records with different silhouettes                                                          |
| SEO value     | One H1, three project names as H2s, a visible breadcrumb, CollectionPage and ItemList                                                          |
| Mobile        | Statement, then each record’s words, then that record’s surface. Nothing side by side under 1024px                                             |
| Motion        | One 0.9s settle on the featured plate only. The other two records are still                                                                    |

### What the research showed

| Source | What they actually do | What SKYEMBER should take |
| --- | --- | --- |
| [Pentagram, Work](https://www.pentagram.com/work) | A short featured set, then a long dated record of the same practice | One project leads. The rest is a record, at a lower volume |
| [Instrument, Work](https://www.instrument.com/work/) | One line of intent, then project statements in a single sequence | An index can be sentences. Fame of the client is not the content |
| [COLLINS, Case Studies](https://wearecollins.com/case-studies/) | A list of client names | A name wall needs clients we can name. This page has none |
| [Stripe, customers](https://stripe.com/customers/all) | One claim, then story lines down the page | A contents can be a vertical record. Their numbers are real, and ours would not be |
| Homepage `#selected-work` | Plate first, then the name | This page names the problem first, then shows the surface. Pasting that section under a new H1 would make a second homepage |

An asymmetric card grid is still a card grid. A preview image that follows the cursor is a studio cliché. Filters on three items are costume. None of those belong here.

### What it must not be

Six equal cards. A masonry of thumbnails. A 50/50 “image left, title right” repeated down the page. A filter bar. A client logo wall. Invented metrics, quotes, or company names. A dark reel. A 3D scene. A second copy of the capabilities journey. A stub URL for a case study that does not exist.

A scene waits for a system that has to be understood in space. This page is a record the visitor reads. The case study, later, is where that question can be asked again for one project.

### Composition

Light field. Same left edge as Contact. New rules use the `works-` prefix. The homepage’s `work-` rules stay untouched.

1. Breadcrumb: Home / Work
2. Eyebrow: `Selected work`
3. H1, two lines so it holds at 320px: `Problems turned` / `into software.`
4. One sentence: `Three representative systems. The first is the platform from the homepage. The other two are here so the range is visible.`
5. Featured record, then the plate — full width. This is the main editorial entry
6. Label: `Additional work`, then one line: `Two other systems. Neither opens yet.`
7. Two further records as a quieter pair: day sheet and state thread. Not three equal columns with the featured piece
8. A closing line and the existing action, not a new section

From 1024px the sentence sits beside the H1, aligned to the end of that block, the way the address sits on Contact. Below that, it stacks under the headline.

Hierarchy:

```text
01
██████████████████████████████████████
████        Featured system        ████
██████████████████████████████████████

02                     03
██████████             ──────────────
Day sheet              State thread
```

From 1024px, 02 and 03 sit side by side under the featured entry. Below 1024px they stack, still quieter than 01. Never `01 = 33% · 02 = 33% · 03 = 33%`.

The featured record is read before its picture. That is the difference from the homepage, where the plate comes first.

**01 · Featured project**

| | |
| --- | --- |
| H2 | Business Operations Platform |
| Sentence | A connected platform that brings orders, inventory, workflows and daily operations into one system. |
| Industry | Operations |
| Scope | Product · UX · Engineering |
| Platform | Web application |
| Disclosure | Representative project |
| Action | `Explore case study` — in the data as `/work/business-operations-platform`, rendered only when that GET route exists |

The plate is the same object as the homepage: Morning run, Counter refill (open), Floor restock; workflow Collected, Checked, Staged (current), Handed over; Counter desk; Afternoon batch. Reuse `work-stage`, `work-sheet`, and the inner plate classes so the crop does not drift. Do not use `selected-work`, `work-bleed`, `work-intro`, or `work-story` on this page. Those carry the homepage spread. Do not edit `.work-sheet` or its children in a way that changes the homepage. The page wrapper is `works-plate`, inside the container. This plate does not bleed. The homepage already owns the bleed.

Inside the reused plate, the breakpoints stay the ones Chunk 4 defined. Narrow: orders, then the workflow, then the two slips. From 768px the orders sit in a row and the workflow runs across. From 1024px the sheet is the crop: orders, workflow, slips.

On this page the title block sits above the plate at every width. From 1024px the sentence is on the left and Industry, Scope, and Platform are on the right, with the disclosure under the sentence. The action, when it exists, sits with the metadata.

**Additional work**

The label is an eyebrow, not a heading. The project names are the H2s. There is no third surface that matches the first. Cloud and engineering stay off this page: a fourth entry would turn the index back into the capabilities list.

**02 · Field Service Record**

| | |
| --- | --- |
| Sentence | A day of site visits, held in one record, so the office and the person on site see the same work. |
| Industry | Field service |
| Scope | Product · UX · Engineering |
| Platform | Web application |
| Disclosure | Representative project |
| Surface | A narrow sheet. Not the operations plate |

The sheet is a day, three rows:

| | | |
| --- | --- | --- |
| Morning | Site A | On site (current) |
| Midday | Site B | Next |
| Afternoon | Yard | Return |

White surface, hairline, radius `sm`. The current row uses `--color-primary-deep`. No navigation, no Draft / Sent / Accepted, no second panel. Those belong to the homepage capability, and copying them would make this page a second services tour.

Inside the additional pair, from 1024px the words sit above the sheet in the left column. The sheet is about 17rem wide and does not stretch to fill the column. Below 1024px the words come first and the sheet is the full content width.

**03 · Catalog Change**

| | |
| --- | --- |
| Sentence | A catalog change stays proposed until it is checked. It is published only after someone accepts it. |
| Industry | Commerce |
| Scope | Product · Engineering |
| Platform | Internal tool |
| Disclosure | Representative project |
| Surface | A thread of states. No plate, no sheet |

States: Proposed, Checked, Held (current), Accepted. Held is the only blue, `--color-primary-deep`. Scope omits UX because this record is a control, and the page does not pretend there is a product frame.

Inside the additional pair, from 1024px the four states sit on one line under the words in the right column. Below 1024px they stack, full width, with a hairline between them, so a 320px screen never scrolls sideways. The thread has no plate. That lightness against the day sheet is the inequality.

**Close**

No eyebrow and no extra heading. One sentence: `See a problem you recognize? Tell us what you're trying to solve.` The action is `Start a conversation →` and it goes to `/contact`. Left aligned. The filled Let’s Talk button already lives in the nav.

### Honesty

All three are representative until a real engagement replaces them. No client name, logo, quote, revenue, uptime, or percentage. Labels inside the plate and the sheet are interface context.

02 and 03 do not get URLs in this chunk. A later page can be attached by rendering an anchor only when its GET route exists. Until then the line “Neither opens yet” is the true state.

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| Work in the nav | `/work`, current on this page |
| Let’s Talk on `/work` | `/contact` |
| Solutions on `/work` | `/#capabilities` |
| Homepage Let’s Talk, Start a Project, Start a conversation | Unchanged |
| Homepage Explore case study | Still absent. The case-study route does not exist |
| Featured action on `/work` | Same gate. Absent until that route exists |

Do not refactor `selected-work.blade.php` to share a partial. The homepage section is frozen.

### Motion

The featured plate uses the shared reveal: scale 0.94 to 1 and opacity 0 to 1 over 0.9s, once, when it enters. The script queries `[data-works-visual]` only. It must not use `[data-selected-work]` or `[data-work-visual]`. The title, sentence, and metadata are visible immediately. Additional work does not move. The closing action’s arrow may shift on hover, 220ms. Reduced motion and no JavaScript show the finished page.

### SEO

Title: `SKYEMBER - Work`. Description names the page as selected work and representative systems, without a keyword block. H1 once. H2s are the three system names. BreadcrumbList, CollectionPage, and an ItemList of the three names and sentences. ItemList entries omit `url` until a case study exists. No Review, no aggregateRating, no Article.

### Out of scope

The case-study page, activating the homepage project link, a homepage restyle, filters, a CMS, a database, and any scene.

### Shipped

`resources/views/pages/work.blade.php`, `works-*` rules in `resources/css/app.css`, `resources/js/work.js`, Work nav → `/work`. The featured “Explore case study” anchor stays out of the HTML until that route exists.

## Case study brief — Business Operations Platform (Chunk 9)

**Status:** shipped 2026-10-05. Homepage section compositions stay frozen; Industry string and Explore link wiring are the only teaser changes.

This is the first page that should feel like: “Here is how SKYEMBER thinks about an actual software system.” Not another marketing page. Numbering note: the stakeholder draft called this Chunk 8; in this repo Chunk 8 already shipped `/work`, so the case study is Chunk 9.

### Job

| Question      | Answer                                                                                                                                      |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Understand the problem, the system design, and the engineering thinking behind one representative project                                   |
| Brand message | Complicated operational requirements become coherent software workflows                                                                    |
| Visual idea   | Editorial case-study narrative punctuated by large product evidence — one system at different depths, not a gallery                         |
| SEO value     | A specific page: business software, pharmacy operations, inventory workflows, FEFO, reservations, custom software, web application          |
| Mobile        | A vertical editorial story. Every visual recomposed. No scaled-down desktop collage                                                         |
| Motion        | Restrained. 0.9s settles, one optional ~1.6s highlight trail. Quieter than Product Proof. No pin, no progress bar, no fake app               |

### What the research showed

| Source | What they actually do | What SKYEMBER should take |
| --- | --- | --- |
| [Instrument, Levi’s](https://www.instrument.com/work/levis) | Thesis, large evidence, then Strategy / Design / Engineering as named disciplines, and real measured results | Make thinking visible. Do not invent a client quote, a conversion lift, or a named engagement |
| Pentagram project pages | Concise “about the project” narrative surrounded by large visual evidence | Narrative first, then evidence. The picture serves the sentence |
| Stripe customer stories (e.g. [Atlassian](https://stripe.com/customers/atlassian)) | Challenge → Solution → Results with real metrics and a named customer | Borrow the progression. Drop Results when there is nothing measured to claim |
| Homepage `#product-proof` | One dense record, SO-10482, on a dark plane, with a long sequence | Expand that record with context. Do not paste the same frame and retitle it |
| `/work` index | Featured plate, then quieter range | The case study opens the featured system. It does not become a second index |

### What it must not be

A second homepage. A second Product Proof with a longer GSAP tour. Four equal constraint cards. A tech-stack logo row (Laravel, React, AWS…) unless those are the true implementation for a real engagement. A Challenge / Solution / **Results** block with invented percentages. A client name presented as a published engagement. “CASE STUDY” as a giant display label. A gallery of unrelated screens. A 3D scene. A CMS or database.

### Honesty

The page carries **Representative project** in the hero and again in the closing project record, prominent enough that nobody could reasonably mistake it for a published client engagement. The interface may be highly realistic. Al-Noor, City Care Clinic, SO-10482, B-441, and A. Rahman stay as **interface context** inside the product surfaces — the same honesty rule as Chunk 3. They are not a customer case study byline.

No invented deployment, quote, revenue, uptime, or “42% faster.”

### Industry depth

The case study Industry line is `Pharmacy / Operations`. That is the truthful depth of this representative system (already present in Product Proof). When the route ships, update the Industry string on the homepage Selected work data and the `/work` featured data to `Pharmacy / Operations` — text only, no layout restyle. Until then, those pages may still say `Operations`.

### Composition — page rhythm

Light field by default. Dark product planes only where a full application surface earns them (hero system open, order document, broader platform). New CSS uses the `study-` prefix. Do not retune homepage `proof-*`, `work-*`, or `/work` `works-*` rules except the Industry string above.

```text
PROJECT HERO
  ↓
THE PROBLEM
  ↓
THE SYSTEM (one order + dependencies)
  ↓
THE CONSTRAINTS (FEFO · reservation · trace · workflow)
  ↓
THE BROADER PLATFORM
  ↓
DESIGN THINKING (Clarity · Context · Continuity)
  ↓
ENGINEERING THINKING (State · Data · Rules · Trace)
  ↓
WHAT IT IS DESIGNED TO MAKE POSSIBLE
  ↓
PROJECT RECORD
  ↓
CTA → /contact
```

### 1. Hero

Breadcrumb: Home / Work / Business Operations Platform

Eyebrow: `Work / Representative system`

H1: `Business Operations Platform`

Support, locked: `Turning pharmacy operations into one connected workflow.`

(Rejected as primary: “One system for the work behind every order.” — quieter, but less specific for humans and search. May appear later as a section line if needed, not as the hero support.)

Metadata as a definition list, not cards:

| | |
| --- | --- |
| Industry | Pharmacy / Operations |
| Scope | Product · UX · Engineering |
| Platform | Web application |
| Status | Representative project |

Then the hero visual — significantly richer than the homepage teaser and the `/work` plate. One large composition: the same system viewed at different depths. Suggested structure:

- Outer application chrome: Business Operations Platform, with rail labels Orders · Inventory · Accounts · Activity (Purchasing may appear when the broader system section zooms out)
- Inner focus: SO-10482, City Care Clinic, Panadol 500mg · B-441 · FEFO
- Optional secondary crop under or beside the main frame: inventory / batch relationship for that line

It must read as **one system**, not a collage of four products. Prefer a dark technical plane for this hero visual so it continues Product Proof’s language without copying its scroll sequence.

Desktop: type and metadata above or beside the visual as one composition — metadata may finish the headline band from 1024px the way the address finishes Contact. Mobile: eyebrow, H1, support, metadata, then the visual full width, recomposed (context line, order, line item, batch — not a squeezed shell).

### 2. The problem

Quiet editorial band on the light field.

H2: `The work is more complicated than the transaction.`

Body direction: a pharmacy order is not only an item and a quantity. The software has to hold payment state, batch eligibility, stock reservation, fulfillment, and the people acting on the record. The visitor should understand why careful design is required.

No fake before/after. No client anecdote.

### 3. The system — one order

H2: `One order. Everything it depends on.`

Revisit SO-10482 with context. Large product interface. Relationships belong to the document:

```text
SO-10482
   ├── Payment — confirmed
   ├── Stock — 24 reserved
   ├── Batch — B-441 · FEFO
   └── Dispatch — waiting
```

This is a **document-context explanation**, not a free-floating architecture diagram. It extends Chunk 3; it does not replace or restyle the homepage proof section. Caption / surrounding copy must say what the homepage did not have room to say: why those links sit on one record.

### 4. Constraints — the technical heart

H2: `Designing around constraints.`

Four short moments in one flowing composition — numbered editorial beats, **not** four equal cards:

| | H3 | Point | Visual |
| --- | --- | --- | --- |
| 01 | Batch selection | The system must know which inventory should move, not only whether inventory exists. FEFO: earliest eligible batch | Product crop |
| 02 | Reservation | Reserved and available remain distinct states | Product crop |
| 03 | Traceability | The order stays connected to batch and activity history | Product crop |
| 04 | Workflow | Payment, checking, reservation, posting, dispatch are different states | Product crop |

Each beat: index, H3, two or three short sentences, then a crop of the same system. Uneven lengths are fine. Blue marks the current constraint state only.

### 5. Logic trail (optional accent)

One calm explanatory accent is allowed — not a second Product Proof tour.

```text
Order → Payment → Batch → Reservation → Fulfillment
```

As each step enters, the corresponding part of a nearby interface may highlight, settle, and stop (~1.6s story beat total per step at most, or one shared trail). The page itself does not become a pinned scrollytelling experience. Reduced motion: final highlights visible, no sequence.

### 6. Broader platform

H2: `The order is only one part of the system.`

Zoom out to a large system surface with representative areas: Orders, Inventory, Purchasing, Accounts, Activity. Chunk 3 was one operational record. This section is how that record belongs to a larger operational system. Still one product language — not five mini marketing panels.

### 7. Design thinking

H2: `Designed around the work, not the software.`

Not a role checklist (UX / UI / Development). Three ideas as an operating list or short columns that stack on small screens:

| | |
| --- | --- |
| Clarity | Complex operational state should be understandable at a glance |
| Context | A decision should carry the information needed to make it |
| Continuity | An action should remain traceable through the rest of the workflow |

Type-led. A small supporting crop is allowed once; three illustration cards are not.

### 8. Engineering thinking

H2: `Software that respects the workflow.`

An engineering model, not a stack list:

| | |
| --- | --- |
| State | What stage is this work in? |
| Data | What records does this action depend on? |
| Rules | What constraints must hold? |
| Trace | What happened, when, and by whom? |

Do not print Laravel, React, AWS, Docker, or Kubernetes unless they are the true stack of a real engagement replacing this representative system.

### 9. What it is designed to make possible

H2: `What the system is designed to make possible.`

Design intentions / capabilities only:

- clearer workflow state
- traceable stock decisions
- connected operational records
- fewer disconnected screens

No Results section. No metrics.

### 10. Project record

Closing metadata — eyebrow `Project`, not a competing H1. Definition list:

| | |
| --- | --- |
| Name | Business Operations Platform |
| Industry | Pharmacy / Operations |
| Scope | Product · UX · Engineering |
| Platform | Web application |
| Status | Representative system |

### 11. CTA

Quieter than the homepage close. No second “Let's build” band.

H2: `Have a workflow this complicated?`

Action: `Start a conversation →` → `/contact`

Left aligned. On wide screens the action may finish the band. Let’s Talk in the nav on this page also goes to `/contact`.

### Motion

| Moment | Behavior |
| --- | --- |
| Hero visual | Shared reveal, 0.9s, once |
| Large product surfaces | Shared reveal, 0.9s, once each when entering |
| Logic trail | Optional ~1.6s highlight story; then still |
| Hover | 220ms on text actions |
| Everything else | Still |

Script lives in something like `resources/js/case-bop.js` and queries `study-` / `data-study-*` hooks only. It must not boot Product Proof, Selected work, or Work index animations. Respect `prefers-reduced-motion`.

### SEO

- **Title:** `Business Operations Platform — SKYEMBER`
- **Description:** `A representative business software system connecting pharmacy orders, inventory, batch workflows, reservations, and operational records.`
- **H1:** Business Operations Platform (once)
- **H2 / H3:** as in the composition above (constraints use H3s under “Designing around constraints.”)
- Phrases appear because they are accurate: business software, custom software development, pharmacy operations, inventory workflows, FEFO, software engineering, web application — in sentences, not a keyword block
- **Schema:** BreadcrumbList (Home → Work → Business Operations Platform). Collection/ItemList on `/work` may then include `url` for this project only. Do **not** add `Article`, `Review`, or a fake client `Organization`

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/work/business-operations-platform` | Registered |
| Homepage Selected work “Explore case study” | Renders (existing gate) |
| `/work` featured “Explore case study” | Renders (existing gate) |
| `/work` ItemList entry for this project | May include `url` |
| Industry string on home + `/work` featured data | `Pharmacy / Operations` (copy only) |
| Work nav | Still `/work`; not forced current on the case study unless useful |
| Let’s Talk on the case study | `/contact` |
| Solutions | `/#capabilities` |
| Field Service Record / Catalog Change | Still no URLs |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/work/business-operations-platform.blade.php` (or equivalent under `pages/`)
- Prefix: `study-`
- Reuse product language from Chunk 3 where it keeps one system identity (order fields, batch labels, workflow words). Prefer shared static data in the Blade file for this chunk — do not refactor homepage components unless unavoidable
- Feature tests: page 200, SEO tags, breadcrumb, Representative project visible, no Results metrics, homepage + `/work` now show the case-study href, contact CTA works
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] The project feels like one coherent system
- [x] The problem is understandable before implementation detail
- [x] The interface demonstrates the solution
- [x] Engineering thinking is visible, not only UI
- [x] Chunk 3 is expanded, not duplicated
- [x] No fake client or outcome claims
- [x] Representative-project status is clear in hero and record
- [x] Mobile is deliberately composed
- [x] SEO copy is naturally useful
- [x] Breadcrumbs and internal links are correct
- [x] Motion stays quieter than Product Proof
- [x] CTA leads to `/contact`

### Out of scope

Restyling the homepage story, a CMS, a database, fake results, other case-study URLs, and any scene that is not serving the order/system explanation.

### Shipped

`resources/views/pages/work/business-operations-platform.blade.php`, `study-*` rules, `resources/js/case-bop.js`, route registered, Explore gates open on homepage and `/work`.

## Solutions index brief (Chunk 10)

**Status:** shipped 2026-10-05. Homepage capabilities composition stays frozen; nav Solutions now points at `/solutions`.

Product-storytelling phase is complete. Homepage, Contact, Work index, and the Business Operations case study are **frozen**. This page starts the enterprise information architecture around that foundation. It is a **commercial / decision** room, not a second capabilities journey.

### Job

| Question      | Answer                                                                                                                                 |
| ------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide which kind of system matches the problem they need to put in place                                                              |
| Brand message | SKYEMBER builds coherent systems. The right starting shape depends on the work                                                         |
| Visual idea   | A decision index: one featured commercial path with proof, then three quieter chooser rows — not four equal cards                      |
| SEO value     | Hub page for solutions; unique H1; four H2 solution names; breadcrumb; ItemList without deep URLs until those routes exist             |
| Mobile        | Statement, then each path as a full-width reading block. No four-up grid                                                               |
| Motion        | Still, or one 0.9s settle on the featured proof crop only. No capability-style state sequences                                         |

### What the research showed

| Source | What they actually do | What SKYEMBER should take |
| --- | --- | --- |
| [Thoughtworks, What we do](https://www.thoughtworks.com/what-we-do) | Opens with a decision frame (different priorities / one outcome), then pathways, then a capability list | Lead with how to choose. Do not open with a service catalog wallpaper |
| [Stripe Enterprise](https://stripe.com/enterprise) | Use-case bands with a thesis per path, not a uniform icon grid | Each solution is a commercial sentence, not a tile |
| Homepage `#capabilities` | Four uneven visual proofs that teach systems | Already spent. `/solutions` must not repeat that tour |
| `/work` index | Featured entry, then quieter range | Same hierarchy discipline, applied to commercial paths |
| Case study BOP | How we think about one system | Proof for the Business software path — link it, do not rebuild it |

### What it must not be

Four equal solution cards with icons. A paste of the homepage capabilities section. A second case study. A filter UI. A logo wall. Pricing. “Innovative digital solutions” copy. Cloud + engineering as a fifth Solutions tile (that delivery story belongs under Services later, and inside each solution’s engineering). Stub deep pages that 404. A 3D scene.

### Relationship to the homepage

| Homepage capability | Solutions path | Notes |
| --- | --- | --- |
| Business software | Business software | Featured. Proof: `/work/business-operations-platform` |
| Digital products | SaaS products | Same idea, commercial name from the IA |
| AI + automation | AI & automation | Same idea |
| Cloud + engineering | — | Not a Solutions child. Mention once as delivery under Services later |
| — | Custom platforms | IA path. When several domains must share one system of record |

The homepage answers “what do you build?” with systems evidence. `/solutions` answers “which of these is the decision in front of me?”

### Composition

Light field. Same left edge as Contact / Work. New rules use the `solutions-` prefix. Do not retune homepage `cap-*` / capability layouts.

```text
Home / Solutions

Solutions
Software for the decision
in front of you.

The homepage showed the systems.
This page helps you choose which shape
matches the work you need to put in place.

What are you trying to put in place?

01  Business software          ← featured commercial path
    [chooser copy + small proof crop]
    See how we think → case study
    Explore this solution → gated

Additional paths

02  SaaS products
03  Custom platforms
04  AI & automation

Delivery note (one line)
Cloud, infrastructure, and engineering practices
are how these systems ship — covered under Services later.

Not sure which path fits?
Start a conversation → /contact
```

Hierarchy (required):

```text
01
██████████████████████████████████████
████     Business software         ████
██████████████████████████████████████

02              03              04
────────        ────────        ────────
chooser row     chooser row     chooser row
```

From 1024px, 02–04 may sit as three quieter columns **only if** they remain clearly secondary to 01. Prefer a stacked decision list if three columns start to feel like a card grid. Below 1024px: always stack. Never `01 = 25% · 02 = 25% · 03 = 25% · 04 = 25%`.

### Lead

1. Breadcrumb: Home / Solutions
2. Eyebrow: `Solutions`
3. H1, two lines: `Software for the decision` / `in front of you.`
4. One sentence: `The homepage showed the systems. This page helps you choose which shape matches the work you need to put in place.`
5. Section label (not H2): `What are you trying to put in place?`

From 1024px the sentence may sit beside the H1, as on Contact and Work.

### 01 · Business software (featured)

| | |
| --- | --- |
| H2 | Business software |
| Choose this when | The operation is the system of record — inventory, purchasing, finance, and the workflows between them |
| What we put in place | A connected business software system with explicit states a company can trust |
| Proof | Small crop or reference to the operations / order language already established — not a new product tour |
| Actions | `See how we think →` `/work/business-operations-platform` (live). `Explore this solution →` `/solutions/business-software` — render only when that GET route exists |

This is the commercial entry that already has proof. It earns the featured band.

### Additional paths (02–04)

Eyebrow: `Additional paths`. One line: `Three other system shapes. Deep pages open when each is written.`

Each row: index, H2, “Choose this when”, “What we put in place”, gated `Explore this solution →`.

| | H2 | Choose this when | What we put in place | Future URL |
| --- | --- | --- | --- | --- |
| 02 | SaaS products | Customers (or staff) must open your product every day to start, track, and finish work | A web application / SaaS product whose interface has one job: make that work clear | `/solutions/saas-products` |
| 03 | Custom platforms | Several teams, channels, or experiences need one shared foundation — not a pile of disconnected tools | A custom platform that connects workflows, users, data, and experiences as one system | `/solutions/custom-platforms` |
| 04 | AI & automation | The work contains a repeatable decision that can be bounded by context, rules, and human oversight | AI automation and agentic workflows that act inside the process — with evaluation and control | `/solutions/ai-automation` |

No icons. No fake metrics. No client logos. Rows are type-led; a single shared hairline separates them. Optional: one quiet monochrome mark per row at most — default is none.

### Delivery note

One short paragraph after the paths, not a fifth H2:

`Cloud, infrastructure, and engineering practices are how these systems ship. That delivery story belongs under Services — not as another solution tile.`

No link until `/services` exists.

### Close

H2: `Not sure which path fits?`

Action: `Start a conversation →` → `/contact`

Quieter than the homepage “Let's build” band. Left aligned; on wide screens the action may finish the band.

### Honesty

No invented package prices, retainers, or “we always recommend X.” The chooser language is guidance, not a diagnosis. Business software may point at the representative case study; that case study’s honesty rules still apply.

### Motion

Default: still. If motion is used, only the featured proof crop uses the shared 0.9s reveal once. Additional paths do not animate. Arrow hover 220ms. No ScrollTrigger sequences that change ledger/request/workflow state — that language belongs to the homepage.

Script, if any: `resources/js/solutions.js`, `data-solutions*` hooks only.

### SEO

- **Title:** `SKYEMBER - Solutions`
- **Description:** Choose the SKYEMBER system shape that matches your work: business software, SaaS products, custom platforms, or AI automation.
- **H1:** Software for the decision in front of you.
- **H2:** Business software · SaaS products · Custom platforms · AI & automation · Not sure which path fits?
- **Schema:** CollectionPage, BreadcrumbList, ItemList of the four solution names. Omit `url` on items until each child route exists. No Service schema until deep pages exist and claims are accurate.
- Phrases in sentences: business software, SaaS, custom platforms, AI automation, custom software development — not a keyword block

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/solutions` | Registered |
| Solutions in the nav | `/solutions`, current on this page |
| Homepage `#capabilities` | Remains for in-page storytelling. Nav Solutions no longer points there |
| Child solution URLs | Unregistered in this chunk; Explore gated |
| See how we think | `/work/business-operations-platform` |
| Let’s Talk on `/solutions` | `/contact` |
| Frozen pages | Homepage, Contact, Work, case study — no composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/solutions.blade.php`
- Prefix: `solutions-`
- Feature tests: page, nav wiring, gated child links absent, case-study proof link present, frozen pages unchanged in structure
- Check 320, 390, 768, 1024, 1440

### Out of scope

Child solution pages, `/services`, restyling Capabilities, a CMS, pricing, and any scene.

### Quality gate

- [x] Feels like a decision page, not a card grid
- [x] Does not repeat the homepage capabilities tour
- [x] Business software is clearly primary and linked to real proof
- [x] Custom platforms is distinct from business software
- [x] Cloud is not a fifth tile
- [x] Child URLs do not 404
- [x] Mobile is a reading stack
- [x] CTA → `/contact`
- [x] Frozen pages untouched

### Shipped

`resources/views/pages/solutions.blade.php`, `solutions-*` rules, `resources/js/solutions.js`, Solutions nav → `/solutions`. Child Explore links gated. Proof link to the BOP case study is live.

## Business software solution brief (Chunk 11)

**Status:** shipped 2026-10-05. Homepage, Contact, Work, and BOP case study stay frozen. `/solutions` only gained the Business software Explore link and ItemList `url`.

Route: `/solutions/business-software`

This page is more commercially useful than the `/solutions` hub, with the same restraint. It is not a second homepage, not a product brochure, and not an ERP feature catalog.

### Job

| Question      | Answer                                                                                                                          |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether custom business software is the right path for how their organization operates                                   |
| Brand message | SKYEMBER puts in place connected operational systems shaped around real workflows, records, and rules                           |
| Visual idea   | Light decision language + operational workspace evidence + four uneven domain surfaces + a related-records signature            |
| SEO value     | Specific solution URL; Service schema only if accurate; BreadcrumbList; natural phrases in sentences                            |
| Mobile        | Vertical commercial reading experience. Each visual recomposed. No four-column squeeze                                          |
| Motion        | Quieter than Product Proof. 0.9s settles; optional one ~1.6s related-records highlight. No pin                                  |

### Commercial journey this page sits in

```text
/solutions                         Which path might fit?
        ↓
/solutions/business-software       What that path means, when it fits, what we put in place
        ↓
/work/business-operations-platform How we think when we build it
        ↓
/contact                           Start the conversation
```

### What the research showed

| Source | What they actually do | What SKYEMBER should take |
| --- | --- | --- |
| [Microsoft Dynamics 365 ERP](https://www.microsoft.com/en/dynamics-365/solutions/erp) | Frames ERP around connected finance, supply chain, project, and HR processes and the decisions they enable — not a raw feature dump | Organize around operational domains and connected work. Do not imitate Copilot agents, ROI claims, or product SKUs |
| Strong regional software studios | Lead with fragmented workflows, connected systems, concrete operational capabilities | Open with recognizable operational pain, then what gets put in place |
| Homepage `#capabilities` Business software | Ledger proof that teaches systems | Already spent. Do not paste it |
| Product Proof / case study | SO-10482 as one serious record and how we think | Proof destination only. This page uses a broader workspace and a restrained crop, not another SO-10482 tour |
| `/solutions` | Chooser: when / what we put in place | Preserve that language; deepen it into a commercial explanation |

### What it must not be

A second capabilities journey. A second case study. An ERP module matrix. Six equal service cards. Icon grids. Fake client results, ROI, or “42% faster.” Pricing. A checkbox “fit quiz.” Another SO-10482 document as the hero. Architecture boxes and arrows. Continuous animation. A CMS.

### Composition — page rhythm

Light field by default. Dark or dense product surfaces only for operational evidence. New CSS uses the `bizsoft-` prefix (or `solution-biz-`). Do not retune homepage, `/solutions`, or case-study layouts.

```text
HERO — thesis + CTAs + operations workspace
  ↓
PROBLEM — when the business outgrows the tools
  ↓
CHOOSE THIS WHEN — workflow itself is the problem
  ↓
WHAT WE PUT IN PLACE — four operational domains
  ↓
CONNECTED RECORDS — signature related-records surface
  ↓
BUILT AROUND YOUR RULES — roles, approvals, rules, trace
  ↓
REPRESENTATIVE SYSTEM — restrained BOP crop → case study
  ↓
ENGAGEMENT — workflow first (compact, not homepage Process)
  ↓
HONEST EXIT — sometimes custom is not the answer
  ↓
CTA → /contact
```

### 1. Hero

Breadcrumb: Home / Solutions / Business software

Eyebrow: `Business software`

H1: `Business software, shaped around the way your business runs.`

Support (locked): `Replace disconnected spreadsheets, rigid workflows, and scattered operational tools with software built around the way your teams actually work.`

Primary action: `Talk to SKYEMBER →` → `/contact`

Secondary action: `See representative system →` → `/work/business-operations-platform`

Hero visual: an **operations workspace**, not SO-10482. Rail or areas for Orders, Inventory, Purchasing, Accounts, plus a calm “Active work” list. The visitor should read “connected business environment,” not “another dashboard.” Prefer a light surface with hairlines (continuing `/solutions`), or a restrained dark plane only if the workspace needs Product Proof density — default light.

Desktop from 1024px: copy and CTAs on the left; workspace on the right, top-aligned. Mobile: eyebrow, H1, support, both CTAs, then the workspace full width and recomposed.

### 2. Problem — recognize the situation

H2: `When the business outgrows the tools around it.`

Three large editorial statements — not cards:

| | Title | Point |
| --- | --- | --- |
| 01 | Information is scattered | Different teams maintain different records, spreadsheets, and operational tools |
| 02 | Work crosses too many systems | An action in one area requires another team to re-enter, verify, or reconcile elsewhere |
| 03 | The process becomes the software | People adapt to what existing software allows, instead of software adapting to the organization |

These are problem statements, not claims about SKYEMBER clients.

### 3. Choose this when

H2: `Choose business software when the workflow itself is the problem.`

Vertical numbered list (no checkboxes, no cards):

1. Your teams depend on spreadsheets or manual records.
2. Sales, inventory, purchasing, finance, or operations need to share the same underlying information.
3. The workflow has approvals, roles, exceptions, or business rules generic software cannot express well.
4. You need one system that can evolve as the business changes.

### 4. What we put in place

H2: `What we put in place.`

Four operational domains as uneven editorial beats with H3s — **not** six equal service cards:

| H3 | Holds | Visual idea |
| --- | --- | --- |
| Operations | Orders, tasks, workflows, approvals, fulfillment | Dense work queue with one active record |
| Inventory & assets | Stock, batches, locations, movements, availability, traceability | Compact inventory surface; one item opens into history |
| Commercial & finance | Customers, suppliers, quotations, invoices, payments, account state | Connected commercial records — not a chart |
| Management & control | Roles, reporting, audit history, exceptions, operational visibility | Controlled summary with activity and permissions |

Each visual makes the domain concrete. No icon grids. Compositions must differ from each other and from Chunk 3’s order document.

### 5. Connected records (signature)

Between the domains and the rules section — or closing the domains — one signature surface.

Not an architecture diagram (`box → arrow → box`). An **interface of related records**:

```text
Customer → Order → Inventory → Fulfillment → Invoice → Payment → Activity
```

Visual language: **record → relationship → action**. One optional ~1.6s highlight trail as records relate; then still. Reduced motion shows the finished related set.

### 6. Built around your rules

H2: `The software follows the rules of the business.`

Four editorial rows with H3s:

| H3 | Point |
| --- | --- |
| Roles | Different people should see and do different things |
| Approvals | Important actions can follow explicit review and authorization paths |
| Business rules | The system can encode the rules that make the workflow unique |
| Traceability | Important actions remain connected to their records and history |

Type-led. Enterprise capability without a jargon dump or tech stack list.

### 7. Representative system

Eyebrow: `Representative system`

H2: `See one workflow in practice.`

Restrained visual crop from the Business Operations Platform language (orders / batch / reservation — not a full case-study rebuild).

Copy: `A pharmacy operations platform connecting orders, inventory, batch selection, reservations, and operational records in one workflow.`

Action: `Explore the system →` → `/work/business-operations-platform`

Honesty: representative. No new mock engagement.

### 8. Engagement (compact)

H2: `We start with the workflow, not the software.`

One paragraph: `We first understand the people, records, decisions, constraints, and handoffs inside the operation. From there, we shape the product and engineering approach around what the system actually needs to do.`

Compact sequence (type only): Understand → Shape → Engineer → Validate. No Launch row required here. No animated timeline, durations, or pricing. Homepage `#process` remains the fuller methodology — do not restyle it.

### 9. Honest exit

H2: `Sometimes the answer isn't custom software.`

Body: `If an existing product already fits the workflow, custom development may not be the right investment. We would rather identify that early than build complexity for its own sake.`

No CTA in this section. Engineering-partner signal, not a soft sell.

### 10. Final CTA

H2: `Have a business workflow worth improving?`

Support: `Tell us how the work happens today. We'll help you understand what software could change.`

Action: `Start a conversation →` → `/contact`

Distinct from the homepage “Have something worth building?”

### Motion

| Moment | Behavior |
| --- | --- |
| Hero workspace | Shared reveal, 0.9s, once |
| Domain / related-records surfaces | Shared reveal, 0.9s, once each when entering |
| Related-records highlight | Optional ~1.6s story beat; then still |
| Hover | 220ms on text actions |
| Everything else | Still |

Script: e.g. `resources/js/solution-business-software.js`, `data-bizsoft-*` hooks only. Must not boot Product Proof or homepage capability sequences. Readable with JS off / reduced motion.

### SEO

- **Title:** `Custom Business Software Development | SKYEMBER`
- **Description:** `Custom business software built around your workflows, records, rules, and teams — from operational systems to connected business platforms.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: custom business software, business software development, operational systems, workflow software, ERP, inventory management, business workflows, web applications, software engineering — no keyword block
- **Schema:** BreadcrumbList (Home → Solutions → Business software). `Service` is allowed **only** with accurate name, description, provider (SKYEMBER Organization), and service type — no fake offers, area served, or aggregateRating. No FAQPage unless a real FAQ ships later
- When live: `/solutions` ItemList entry for Business software may include `url`; Explore this solution on the hub activates via the existing gate

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/solutions/business-software` | Registered |
| `/solutions` featured Explore this solution | Renders |
| `/solutions` ItemList Business software | May include `url` |
| Talk to SKYEMBER / Start a conversation | `/contact` |
| See representative system / Explore the system | `/work/business-operations-platform` |
| Solutions nav | Still `/solutions` (current when on hub or optionally on this child) |
| Let’s Talk | `/contact` |
| Other solution children | Still gated |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/solutions/business-software.blade.php`
- Prefix: `bizsoft-`
- Feature tests: page, SEO, breadcrumb, Service schema accuracy, proof links, hub Explore activates, no Results metrics, no child SaaS/etc. links invented
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] A buyer can tell within seconds whether this solution fits
- [x] The business problem appears before the implementation
- [x] “What we put in place” feels like systems, not service cards
- [x] Product visuals are concrete and do not repeat Chunk 3
- [x] BOP case study is the proof destination
- [x] Enterprise-grade without pretending to be an ERP vendor
- [x] No unsupported client/result claims
- [x] Mobile is deliberately composed
- [x] SEO is useful, not stuffed
- [x] Motion quieter than Product Proof; excellent with motion off
- [x] `/solutions` can safely activate its Business software link

### Out of scope

Other solution children, `/services`, restyling frozen pages, a CMS, pricing, FAQ schema, and inventing client results.

### Shipped

`resources/views/pages/solutions/business-software.blade.php`, `bizsoft-*` rules, `resources/js/solution-business-software.js`, route registered, hub Explore for Business software only.

## SaaS products solution brief (Chunk 12)

**Status:** accepted and built 2026-10-05. Frozen pages stay frozen except the SaaS Explore wiring on `/solutions`.

Route: `/solutions/saas-products`

This page must be **substantially different** from Business Software. Business software is the system an organization needs to run. SaaS is turning a repeatable problem into a product multiple users can adopt, use, and keep evolving — not “a web app with subscriptions.”

### Job

| Question      | Answer                                                                                                                         |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| User goal     | Decide whether a SaaS product is the right way to turn their problem into something people can use repeatedly                  |
| Brand message | SKYEMBER designs and engineers products around a clear user problem, a focused workflow, and a foundation that can evolve      |
| Visual idea   | Product experience + product lifecycle — identity, workspace, core action, return — not an operations workspace or ERP surface |
| SEO value     | Specific SaaS solution URL; Service + BreadcrumbList; natural product language in sentences                                    |
| Mobile        | Vertical product reading experience; focused surfaces recomposed. No shrunk desktop dashboard                                  |
| Motion        | Quieter than Business Software and much quieter than Product Proof. 0.9s hero settle; one optional ~1.6s product-state beat    |

### Audience

Founders, product owners, companies creating a new digital product, organizations turning an internal capability into a product, teams replacing a fragmented product experience.

### Commercial journey

```text
/solutions
        ↓
/solutions/saas-products
        ↓
/contact

Choose the path → Understand the product model → Decide whether it fits → Talk
```

There is **no** SaaS case-study proof yet. Do **not** send secondary CTAs to `/work/business-operations-platform`. That is a business-software system.

### What the research showed

| Source | What they actually do | What SKYEMBER should take |
| --- | --- | --- |
| [Thoughtworks Product development](https://www.thoughtworks.com/what-we-do/product-development) | Separates product strategy, design, delivery, modernization, and product organization; launch is not the end | Lifecycle language: Shape → Design → Build → Launch → Evolve. Do not copy their metrics or AI/works branding |
| Linear product marketing | Lets the actual product carry the explanation; density with a dominant central task | Hero is a real product surface, not analytics |
| Current SaaS service guidance | Focused product problem, core workflow, accounts/roles, launch learning, ownership | “Choose this when” and anatomy stay product-shaped, not feature-shaped |
| `/solutions/business-software` | Operational systems, connected records, org workflows | Different visual language entirely. Do not restyle or reuse `bizsoft-*` compositions |

### What it must not be

Business Software with different words. An operations workspace. SO-10482. A feature pile. Pricing, MRR, ARR, fake traction, fake customers. A claim that the representative product is deployed. Secondary CTA to the BOP case study. Four equal service cards (UI/UX / Dev / Test / Deploy). A tech stack logo row. Continuous floating UI. A CMS.

### Distinction to protect

| Page | Core question | Visual language |
| --- | --- | --- |
| `/solutions` | Which path? | Decision index |
| `/solutions/business-software` | Does custom software fit my operation? | Operational systems |
| **`/solutions/saas-products`** | **Should this become a product?** | **Product experience + product lifecycle** |
| `/work/...` | How did SKYEMBER think? | Case-study narrative |

**Business Software:** “We'll build the system your organization needs to run.”  
**SaaS Products:** “We'll help turn a repeatable problem into a product people can keep using.”

### Composition — page rhythm

Light field. New CSS uses the `saas-` prefix. Do not retune `bizsoft-*`, homepage, or `/solutions` layouts.

```text
HERO — product surface (identity → workspace → core action)
  ↓
PROBLEM — more than the first release
  ↓
CHOOSE THIS WHEN — part of the user's routine
  ↓
WHAT WE PUT IN PLACE — product anatomy (foundation → experience → ops → evolution)
  ↓
SIGNATURE — one product, many states (Discover → Act → Return → Evolve)
  ↓
FEATURE PILE EDITORIAL — a SaaS product is not a feature pile
  ↓
FOUNDATION — identity · experience · data · operations
  ↓
REPRESENTATIVE PRODUCT — labeled, not a case study
  ↓
LIFECYCLE — Shape → Design → Build → Launch → Evolve
  ↓
HONEST EXIT — sometimes stay internal / adopt a platform
  ↓
CTA → /contact
```

### 1. Hero

Breadcrumb: Home / Solutions / SaaS products

Eyebrow: `SaaS products`

H1: `Turn a repeatable problem into a product people can use.`

Support (locked): `We design and engineer SaaS products around a clear user problem, a focused workflow, and the foundation needed to evolve beyond the first release.`

Primary: `Talk to SKYEMBER →` → `/contact`

Secondary: `See how we think →` — **omit the href until a genuine SaaS product proof or case-study route exists.** Words may remain visible as a quiet non-link, or the secondary control is omitted entirely until that destination ships. Never point at the Business Operations case study.

Hero visual: a **product experience**, light surface with hairlines:

- Product chrome / workspace identity
- “Welcome back”
- Active work (e.g. Project Atlas · 7 tasks · 3 collaborators)
- One clear primary action

Communicates: **identity → workspace → core action → ongoing use**. Not analytics. Not an operations rail of Orders / Inventory / Purchasing / Accounts.

Desktop from 1024px: copy left, product surface right. Mobile: type and CTAs, then the product surface full width and recomposed.

### 2. Problem

H2: `A product is more than the first release.`

Three editorial statements (not cards):

| | Title | Point |
| --- | --- | --- |
| 01 | The problem has to be specific | A useful SaaS product begins with a clearly understood job, not a collection of requested features |
| 02 | The experience has to repeat well | Users need a product that makes the core workflow obvious the first time and efficient the next hundred times |
| 03 | The system has to keep growing | Accounts, permissions, data, onboarding, administration, product learning, and release changes become part of the product |

### 3. Choose this when

H2: `Choose SaaS when the product needs to become part of the user's routine.`

1. A recurring problem can be solved through a repeatable digital workflow.
2. Multiple users, teams, or organizations need to use the same product.
3. The product's value grows through continued use, refinement, and new capability.
4. You need ownership of the product experience, not just a one-time software delivery.

No pricing, MRR, growth claims, or “SaaS is always better.”

### 4. What we put in place — product anatomy

H2: `What we put in place.`

Four uneven editorial beats with H3s — a sequence, not equal cards:

| | H3 | Holds | Visual |
| --- | --- | --- | --- |
| 01 | Product foundation | Product model, core entities, roles, permissions, information architecture | Product structure with a focused workspace |
| 02 | Core experience | The central user workflow — why someone opens the product | One focused task: intent → completed action |
| 03 | Product operations | Onboarding, account/workspace management, administration, notifications | Settings connected to the product surface |
| 04 | Product evolution | Analytics, feedback, release controls, room for new capability | Product surface with a subtle version / change state |

### 5. Signature — one product, many states

Not architecture, not a timeline graphic, not a dashboard. Different views of the **same** product environment:

```text
Discover → Act → Return → Evolve
What is this for? → What can I do? → Why come back? → How does it get better?
```

Optional one ~1.6s explanatory beat as states highlight; then still. Reduced motion shows all four finished.

### 6. Feature pile editorial

H2: `A SaaS product is not a feature pile.`

Body: `We keep the core problem visible while shaping the product around the people who use it. Features are valuable when they strengthen that experience—not when they simply make the specification longer.`

Type-led. No visual required.

### 7. Foundation (without becoming an engineering page)

H2: `The foundation has to support the product, not fight it.`

Four quieter dimensions (type-led):

| | |
| --- | --- |
| Identity | Accounts, organizations, roles |
| Experience | Navigation, states, onboarding |
| Data | Reliable domain model and relationships |
| Operations | Administration, observability, release control |

No 25-technology list. Explain what the foundation enables.

### 8. Representative product

Eyebrow: `Representative product`

H2: `Start with the workflow people will return to.`

One large product interface (distinct from the hero if possible — deeper into the core task).

Copy: `A focused SaaS product begins with one useful workflow and grows around the people, data, and decisions that make it worth returning to.`

Honesty: representative. No client, no metrics, no “deployed,” no “case study” language, no link to BOP.

### 9. Lifecycle

H2: `From product idea to product ownership.`

Five quieter parts as H3s (or a compact list with H3s if they remain short):

| H3 | Line |
| --- | --- |
| Shape | Define the product and its core user job |
| Design | Turn the workflow into a clear experience |
| Build | Engineer the product foundation and core capability |
| Launch | Put the product in users' hands |
| Evolve | Learn, refine, and extend the system |

**Evolve** is required — SaaS is ongoing ownership, not one-time delivery. Do not paste homepage Process. No durations, pricing, or animated timeline.

### 10. Honest exit

H2: `Sometimes the product should stay internal.`

Body: `If the workflow exists only to support your own organization, a business system may be a better fit than building a customer-facing SaaS product.`

Second beat (same section or following paragraph): `And if the problem is better solved by an established platform, adopting it may be smarter than creating another one.`

Optional quiet text link to `/solutions/business-software` on the first sentence only — allowed because that route exists. No hard sell.

### 11. Final CTA

H2: `Have a product idea worth testing?`

Support: `Tell us who the product is for and what problem it needs to solve. We'll help shape the path from idea to a product people can actually use.`

Action: `Start a conversation →` → `/contact`

“Worth testing” — no guarantee of product success.

### Motion

| Moment | Behavior |
| --- | --- |
| Hero product | Shared reveal, 0.9s, once |
| Product-state signature | Optional ~1.6s beat; then still |
| Everything else | Still |
| Hover | 220ms |

Script: e.g. `resources/js/solution-saas.js`, `data-saas-*` hooks only. Readable with JS off.

### SEO

- **Title:** `SaaS Product Development Company | SKYEMBER`
- **Description:** `We design and engineer SaaS products around clear user problems, repeatable workflows, and foundations built to evolve.`
- **H1 / H2 / H3:** as in the composition (lifecycle stages as H3s under “From product idea to product ownership.”)
- Phrases in sentences where accurate: SaaS development, SaaS product development, SaaS product design, software product development, web application development, multi-user software, product engineering — no keyword block
- **Schema:** BreadcrumbList (Home → Solutions → SaaS products). Accurate `Service` only — no fake offers or ratings. No FAQPage
- When live: `/solutions` ItemList SaaS entry may include `url`; Explore this solution activates via the existing gate

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/solutions/saas-products` | Registered |
| `/solutions` path 02 Explore | Renders |
| Secondary hero “See how we think” | No href until a SaaS proof route exists |
| Talk / Start a conversation | `/contact` |
| Optional honest-exit link | `/solutions/business-software` |
| BOP case study | Never presented as SaaS proof |
| Solutions nav | Still `/solutions`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/solutions/saas-products.blade.php`
- Prefix: `saas-`
- Feature tests: page, SEO, Service/breadcrumb, no BOP mislink as proof, hub Explore for SaaS only among remaining children, honesty (no MRR/metrics), secondary CTA ungated
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Visitor understands SaaS vs business software
- [x] Hero demonstrates a product, not a dashboard or ops workspace
- [x] Repeatable user problem is clear
- [x] Multi-user / product evolution is clear
- [x] “What we put in place” feels like product engineering
- [x] Product anatomy is demonstrated visually
- [x] No fake SaaS metrics, customers, traction, or revenue
- [x] No claim the representative product is deployed
- [x] BOP case study is not misrepresented as SaaS proof
- [x] “Sometimes...” section remains
- [x] Mobile is deliberately composed
- [x] SEO is natural
- [x] Motion restrained
- [x] CTA → `/contact`

### Out of scope

A SaaS case study, Custom platforms / AI children, `/services`, restyling Business Software, a CMS, pricing, and inventing traction.

### Shipped

`resources/views/pages/solutions/saas-products.blade.php`, `saas-*` rules, `resources/js/solution-saas.js`, route registered, hub Explore for SaaS, secondary “See how we think” ungated until SaaS proof exists.

## Custom platforms solution brief (Chunk 13)

**Status:** accepted and built 2026-10-05. Frozen pages stay frozen except the Custom platforms Explore wiring and path 03 when/place alignment on `/solutions`.

Route: `/solutions/custom-platforms`

This page sits **one level above** Business Software and SaaS. Business software runs an organization’s operation. SaaS is a product people repeatedly use. A custom platform is a **shared digital foundation that connects multiple workflows, users, channels, or systems** — not “a large application.”

### Job

| Question      | Answer                                                                                                                                                          |
| ------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether a platform is needed to connect the different parts of a digital operation                                                                       |
| Brand message | SKYEMBER designs and engineers platforms that bring workflows, users, data, and experiences together when individual tools no longer make the whole system work |
| Visual idea   | Connected platform surface — different doors into the same system — not an ops workspace, SaaS product chrome, or box-and-arrow architecture diagram            |
| SEO value     | Specific platform solution URL; Service + BreadcrumbList; natural platform language in sentences                                                                |
| Mobile        | Vertical connected-platform reading experience; focused surfaces recomposed. No shrunk desktop architecture diagram                                             |
| Motion        | Quieter than SaaS Products. 0.9s hero settle; one optional ~1.6s same-foundation / different-experience beat                                                     |

### Audience

Enterprise and mid-market buyers whose problem is larger than one workflow or one product: multiple experiences, shared records, rules, and long-term extensibility.

### Distinction (must stay obvious)

| Path | Core question | Signature |
| --- | --- | --- |
| `/solutions` | Which direction fits? | Decision index |
| Business Software | Does custom software fit our operation? | Operational system |
| SaaS Products | Should this become a product? | Product experience |
| **Custom Platforms** | **Do separate experiences need one foundation?** | **Connected platform** |

```text
Business Software → run the organization
SaaS Products     → build a repeatable product
Custom Platforms  → connect a larger digital ecosystem
```

Do not restyle or reuse `bizsoft-*` or `saas-*` compositions. Do not reuse SO-10482, operations workspace, or SaaS “Welcome back / Project Atlas” product chrome.

### Commercial journey

```text
/solutions
    ↓
/solutions/custom-platforms
    ↓
/contact
```

Choose the path → understand the platform problem → see what a connected platform changes → decide whether custom is justified → start a conversation.

### Proof honesty

There is **no** custom-platform case-study proof yet. Do **not** send secondary CTAs to `/work/business-operations-platform`. That page proves business-software thinking, not platform engineering.

Secondary CTA stays a quiet non-link until a genuine platform proof route exists:

```text
See how we approach complex systems →   (no href)
```

### Composition

#### 1. Hero

- Eyebrow: `CUSTOM PLATFORMS`
- **H1:** `One platform for the work between systems.`
- Support: We design and engineer custom platforms that bring workflows, users, data, and connected experiences together when individual tools no longer make the whole system work.
- Primary: `Talk to SKYEMBER →` → `/contact`
- Secondary: `See how we approach complex systems →` — **no href** until platform proof exists

**Hero visual — the platform, not the application**

Radically different from Business Software and SaaS. Do **not** show: operations dashboard, SaaS workspace, SO-10482, four application screenshots, or a generic architecture diagram.

Show a **connected platform surface**: one coherent product environment with several experiences touching the same foundation.

```text
                         PLATFORM
                            │
          ┌─────────────────┼──────────────────┐
          ↓                 ↓                  ↓
      CUSTOMER           STAFF              PARTNER
      EXPERIENCE         WORKSPACE           PORTAL
          │                 │                  │
          └─────────────────┼──────────────────┘
                            ↓
                      SHARED RECORDS
                            ↓
                       WORKFLOWS
                            ↓
                         RULES
```

Present as one environment, not six boxes with arrows. The visitor should think: **“These are different doors into the same system.”**

#### 2. Problem — The difficult part is what happens between the systems.

Three editorial situations (principles, not client claims):

| | Title | Body |
| --- | --- | --- |
| 01 | Different users need different experiences | Customers, employees, partners, operators, and administrators may interact with the same underlying business capability in completely different ways. |
| 02 | The data has to stay connected | A change made in one experience may affect another workflow, record, or decision. |
| 03 | The platform has to absorb change | New workflows, new channels, new rules, and new users should not require rebuilding the foundation every time. |

#### 3. Choose this when — Choose a custom platform when the system is bigger than one screen.

Decision list (not cards):

1. Several teams, user groups, or channels need to work from connected information.
2. The same underlying business capability appears in multiple experiences.
3. Existing products leave important workflows, rules, or relationships disconnected.
4. The foundation needs to support new experiences without becoming a collection of unrelated applications.

#### 4. What we put in place — A platform is a foundation for experiences.

Four uneven platform dimensions (not equal cards):

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Shared domain | Records and relationships that define the system (Customers, Orders, Assets, Accounts, Documents, Events — representative; entities change by project) | One record expanding into related records |
| 02 | Connected experiences | Different users through experiences designed for their role (Customer, Staff, Partner, Admin) | One shared record in different interface contexts |
| 03 | Workflow + rules | Decisions, permissions, state transitions, approvals, and business rules between experiences | A record moving through a controlled business action |
| 04 | Extension points | Future applications, APIs, integrations, automation, and channels without rebuilding the core | Same foundation gaining one new experience without changing the originals |

Extension points is where platform engineering separates from simply building a large web application.

#### 5. Signature — Same foundation, different experience

One underlying record through three contexts:

```text
                 ONE RECORD
        ┌──────────┼──────────┐
        ↓          ↓          ↓
     CUSTOMER     STAFF     PARTNER
       View        Work       Submit
       status      action     request
```

Essential data stays the same; the **experience** changes. Platform architecture through UX — not an engineering diagram. This visual idea must not appear on Business Software or SaaS.

#### 6. Platform, not pile — A platform is not several applications glued together.

> The value is in the relationships: shared information, consistent rules, deliberate boundaries, and experiences that remain connected as the system grows.

Prevents “custom platform” from sounding like “we build really big websites.”

#### 7. Complexity controlled — Complex underneath. Clear on the surface.

Four principles (H3s): Boundaries · Ownership · Consistency · Extensibility.

No technology stack. No Kubernetes / microservices / GraphQL / event-driven architecture list. Sell system thinking, not a stack.

#### 8. Platform anatomy (calm product map)

Later visual — Experience (Customer / Staff / Partner) → Workflows → Domain → Rules → Data.

Not a generic technical architecture graphic. Each layer via interface surfaces or record relationships. May be slightly more technical than Business Software, still buyer-readable.

#### 9. Enterprise concerns — Built for the people who operate the system.

Maturity without an infrastructure checklist. H3s:

| | Question |
| --- | --- |
| Identity | Who can access what? |
| Permissions | What can each role do? |
| Auditability | What happened and when? |
| Reliability | What happens when something fails? |
| Administration | Who controls the system? |
| Evolution | How does the platform change safely? |

#### 10. Representative platform

Eyebrow: `REPRESENTATIVE PLATFORM`  
**H2:** `One foundation. Several ways to work.`

Signature platform visual in a more complete form. Copy: A representative platform connecting customer, staff, and operational experiences through shared records and workflows. Label: **Representative platform**.

No client, users, revenue, uptime, transaction counts, deployment claim, or technology stack. May look sophisticated; claims stay honest.

#### 11. Engagement — Start with the system, not the screens.

Do not duplicate homepage Process.

> We map the people, workflows, information, rules, and boundaries first. Then we determine which parts belong in the platform and which should remain separate.

Static ruled rows (no animation): Map · Model · Shape · Engineer · Evolve.

#### 12. Honest exit — Sometimes a platform is more than you need.

> If one workflow, one product, or an existing platform already solves the problem well, building a custom platform can add unnecessary complexity. We would rather identify that early.

#### 13. Final CTA — Have a system that no longer fits in separate tools?

Support: Tell us where the boundaries are breaking down. We'll help you understand whether a custom platform is the right shape for the problem.

`Start a conversation →` → `/contact`

Distinct from Business Software (“workflow worth improving”) and SaaS (“product idea worth testing”).

### SEO

- **Title:** `Custom Platform Development | SKYEMBER`
- **Description:** `Custom platforms that connect workflows, users, data, and digital experiences when separate systems no longer work as one.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: custom platform development, enterprise platforms, digital platforms, platform engineering, custom software platform, workflow platform, web platform, system integration, business platform — no keyword block
- **Schema:** BreadcrumbList (Home → Solutions → Custom Platforms). Accurate `Service` only — no fake offers or ratings. No FAQPage
- When live: `/solutions` ItemList Custom platforms entry may include `url`; Explore this solution activates via the existing gate

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/solutions/custom-platforms` | Registered |
| `/solutions` path 03 Explore | Renders |
| Hub path 03 when / place lines | May align to this brief’s distinction without restyling hub composition |
| Secondary hero “See how we approach complex systems” | No href until a platform proof route exists |
| Talk / Start a conversation | `/contact` |
| BOP case study | Never presented as platform proof |
| Solutions nav | Still `/solutions`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/solutions/custom-platforms.blade.php`
- Prefix: `plat-`
- Script: e.g. `resources/js/solution-platforms.js`, `data-plat-*` hooks only. Readable with JS off / reduced motion
- Feature tests: page, SEO, Service/breadcrumb, no BOP mislink as proof, hub Explore for Custom platforms only among remaining children, honesty (no fake scale/uptime/stack), secondary CTA ungated
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Immediately different from Business Software and SaaS
- [x] Explains why a platform is needed before implementation
- [x] “Different experiences, shared foundation” is visually obvious
- [x] Hero is not a dashboard
- [x] Signature visual is not a generic architecture diagram
- [x] Platform concepts are understandable to a business buyer
- [x] Enterprise concerns without infrastructure checklist
- [x] No fake client, deployment, scale, uptime, or business results
- [x] No misuse of the BOP case study as platform proof
- [x] Secondary proof CTA stays ungated until real platform proof exists
- [x] Mobile is deliberately composed
- [x] SEO is useful and semantic
- [x] Motion is restrained
- [x] Honest “sometimes...” exit remains
- [x] Final CTA → `/contact`

### Out of scope

A platform case study, AI child, `/services`, restyling Business Software or SaaS, a CMS, pricing, stack marketing, and inventing traction.

### Shipped

`resources/views/pages/solutions/custom-platforms.blade.php`, `plat-*` rules, `resources/js/solution-platforms.js`, route registered, hub Explore for Custom platforms, path 03 when/place aligned, secondary “See how we approach complex systems” ungated until platform proof exists.

## AI & automation solution brief (Chunk 14)

**Status:** accepted and built 2026-10-05. Frozen pages stay frozen except the AI Explore wiring and path 04 when/place alignment on `/solutions`.

Route: `/solutions/ai-automation`

This page must be the **most intelligent-looking** solution page, not the most futuristic. Do not sell AI as magic. The credible enterprise story is choosing the right level of intelligence, connecting it to business context and tools, keeping workflows understandable, and putting human control and evaluation around higher-risk actions. Start with the simplest effective system; add agentic complexity only when it improves outcomes.

### Job

| Question      | Answer                                                                                                                                                                 |
| ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide where AI and automation can genuinely improve how work gets done                                                                                                |
| Brand message | SKYEMBER designs AI-powered workflows that read context, make bounded decisions, and move work — with clear controls around what happens next                          |
| Visual idea   | Controlled intelligent workflow / automation console — AI as one part of a system, not a chatbot, robot, neural net, or prompt theatre                                 |
| SEO value     | Specific AI solution URL; Service + BreadcrumbList; natural AI automation / agent language in sentences                                                                |
| Mobile        | Vertical workflow reading experience; focused surfaces recomposed. No shrunk desktop console                                                                           |
| Motion        | Subtle but intelligent. Quieter than Custom Platforms. 0.9s hero settle; one optional ~1.6s workflow state transition; evaluation may change state once                 |

### Audience

Enterprise and mid-market buyers who need automation or AI inside real workflows — not an “AI agency” brochure.

### Distinction (must stay obvious)

| Path | Core question | Signature |
| --- | --- | --- |
| Business Software | Does custom software fit our operation? | Operational workspace |
| SaaS Products | Should this become a product? | Product experience |
| Custom Platforms | Do these experiences need one foundation? | Connected platform |
| **AI & Automation** | **Where can intelligence improve the work?** | **Controlled intelligent workflow** |

```text
Business Software → Run the organization
SaaS Products     → Build a product people repeatedly use
Custom Platforms  → Connect the larger digital ecosystem
AI & Automation   → Make parts of the work reason, decide, or act
```

Do not restyle or reuse `bizsoft-*`, `saas-*`, or `plat-*` compositions. Do not reuse SO-10482, SaaS product chrome, or platform door surfaces as AI proof.

### Commercial journey

```text
/solutions
    ↓
/solutions/ai-automation
    ↓
/contact
```

Choose the path → understand where AI fits → see what gets automated → understand control + evaluation → decide whether the opportunity is real → start a conversation.

### Proof honesty

There is **no** AI case-study proof yet. Do **not** send secondary CTAs to `/work/business-operations-platform`.

Secondary CTA stays a quiet non-link until a genuine AI proof route exists:

```text
See the workflow →   (no href)
```

No fake customers, deployments, accuracy rates, time saved, traction, or ROI.

### Composition

#### 1. Hero

- Eyebrow: `AI & AUTOMATION`
- **H1:** `Make the work move without making the system harder to trust.`
- Support: We design AI-powered workflows and automation that read context, make bounded decisions, and move work between people and systems—with clear controls around what happens next.
- Primary: `Talk to SKYEMBER →` → `/contact`
- Secondary: `See the workflow →` — **no href** until AI proof exists

**Hero visual — an active workflow, not a chatbot**

Do **not** show: chatbot bubbles, humanoid robots, glowing neural networks, giant AI brains, generic prompt windows, “AI MAGIC” copy, or a conventional six-box workflow diagram.

Show a **working automation console** where one item moves through a controlled process. Interface fields: Input · Context · Decision · Confidence · Action · Review · Audit.

Concept (product surface, not architecture poster):

```text
INBOUND DOCUMENT → UNDERSTAND → CLASSIFY → CHECK → AI DECISION → HUMAN REVIEW (when required) → SYSTEM ACTION
```

Core idea: **AI is part of a system** — not the entire system.

#### 2. Problem — Not every task needs AI.

Major positioning statement. Three editorial situations:

| | Title | Body |
| --- | --- | --- |
| 01 | Repetition | The same structured work happens again and again. |
| 02 | Judgment | People repeatedly interpret documents, requests, messages, or data before deciding what should happen next. |
| 03 | Handoffs | The work moves between systems or teams, and useful context gets lost along the way. |

Then: The opportunity is not to replace every step with a model. It is to identify the part of the workflow where intelligence or automation creates a meaningful improvement.

#### 3. Choose this when — Choose AI and automation when the work contains a repeatable decision.

Decision list (not cards). No claim that all four require an AI model:

1. People spend time reading, sorting, extracting, classifying, or routing similar information.
2. A business process contains decisions that can be bounded by rules, context, and explicit criteria.
3. Several systems need information to move between them without repeated manual entry.
4. The workflow can benefit from automation while keeping people involved at the decisions that matter.

#### 4. What we put in place — Intelligence where it earns its place.

Four uneven system views (not Chatbots / Agents / RAG / LLM cards):

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Understand | Extract meaning from documents, messages, records, or other inputs | Incoming record → structured fields |
| 02 | Decide | Classify, route, score, summarize, recommend, or select the next step | Item branching into a justified next action |
| 03 | Act | Trigger a bounded workflow, update a system, create a task, notify, or hand off | Action executing across a connected workflow |
| 04 | Escalate | Send uncertain, sensitive, or high-impact decisions to a person with review context | AI proposal → human approval state |

#### 5. Signature — AI inside the workflow

One work item through: Input → Context → AI → Rules → Action → Review.

Visitor understanding: **“The intelligence is connected to business context and operational action.”** Not: “They make chatbots.”

#### 6. Automation before autonomy — Start with automation. Add autonomy only when it earns it.

> Some workflows are better served by deterministic rules. Others benefit from AI-assisted decisions. A genuinely agentic system is useful when the task requires flexible planning and tool use. The architecture should follow the problem—not the excitement around the technology.

Strong SKYEMBER positioning. Distinguishes predictable automation from agentic behavior.

#### 7. Trust — Useful AI has boundaries.

Four quiet principles (H3s):

| | Body |
| --- | --- |
| Context | The system should know what information it is allowed to use. |
| Controls | Actions should have defined limits and permissions. |
| Evaluation | The behavior should be tested against representative cases before and after changes. |
| Oversight | Higher-risk actions can pause for human review. |

#### 8. Evaluation surface — The system needs to know when it is wrong.

Representative evaluation interface (no fabricated percentages):

```text
CASE 1048 — Expected: Route to purchasing · Model: Route to purchasing · Result: Match
CASE 1049 — Expected: Human review · Model: Approve automatically · Result: Escalated
```

Quiet summary labels only: Evaluation set · Latest run · Failures · Reviewed cases — no fake metrics.

#### 9. What we connect — The model is rarely the whole system.

Product surface (not architecture poster): AI surrounded by Knowledge · Tools · Rules → Workflow → Your systems.

Language: business data, knowledge, tools, APIs, workflows, permissions, audit history.

Idea: **AI becomes useful when it has the right context and controlled access to the right actions.**

#### 10. Representative automation

Eyebrow: `REPRESENTATIVE AUTOMATION`  
**H2:** `A workflow that knows when to act—and when to ask.`

Complete representative process (invoice → understand → extract → rules → confidence/exception → auto-approve OR human review → record updated → team notified). Label: **Representative system**. No fake production, time saved, or accuracy claims.

#### 11. Honest exit — Sometimes the best automation is no automation.

> If a task is infrequent, poorly defined, or safer when handled directly by a person, adding AI can create more complexity than value. We would rather find that out before building it.

#### 12. Engagement — Start with the workflow.

Do not duplicate homepage Process. Static sequence (no animation): Map · Identify · Prototype · Evaluate · Harden. No Discover→Design→Develop→Launch. No “30 days.” No invented ROI.

#### 13. Final CTA — Have work worth automating?

Support: Tell us what happens today. We'll help identify where automation or AI could actually improve it—and where it shouldn't.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `AI Automation & AI Agent Development | SKYEMBER`
- **Description:** `AI automation and agentic workflows designed around real business processes, with context, controls, evaluation, and human oversight.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: AI automation, AI agents, AI agent development, workflow automation, business process automation, intelligent automation, AI workflows, AI integration, human-in-the-loop AI, AI evaluation — no keyword block
- **Schema:** BreadcrumbList (Home → Solutions → AI & Automation). Accurate `Service` only — no fake offers or ratings. No FAQPage
- When live: `/solutions` ItemList AI entry may include `url`; Explore this solution activates via the existing gate

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/solutions/ai-automation` | Registered |
| `/solutions` path 04 Explore | Renders |
| Hub path 04 when / place lines | May align to this brief’s distinction without restyling hub composition |
| Secondary hero “See the workflow” | No href until an AI proof route exists |
| Talk / Start a conversation | `/contact` |
| BOP case study | Never presented as AI proof |
| Solutions nav | Still `/solutions`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/solutions/ai-automation.blade.php`
- Prefix: `aiauto-`
- Script: e.g. `resources/js/solution-ai.js`, `data-aiauto-*` hooks only. Readable with JS off / reduced motion
- Feature tests: page, SEO, Service/breadcrumb, no BOP mislink as proof, hub Explore for AI only among remaining children, honesty (no fake accuracy/ROI/savings), secondary CTA ungated, no chatbot/robot theatre copy
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Does not look like an “AI agency” template
- [x] AI is presented as part of a workflow, not magic
- [x] Automation and agentic behavior are clearly distinguished
- [x] Explains when AI should NOT be used
- [x] Human oversight without turning everything into manual approval
- [x] Evaluation is visible as an engineering practice
- [x] Hero is a real workflow surface, not a chatbot
- [x] No fake customers, deployments, accuracy, savings, traction, or ROI
- [x] No misuse of the Business Operations case study
- [x] Secondary proof CTA remains ungated
- [x] Mobile is intentionally composed
- [x] SEO language is useful and semantic
- [x] Motion is quieter than the preceding solution pages
- [x] Final CTA → `/contact`
- [x] Only the AI & Automation Explore link on `/solutions` activates after this route ships

### Out of scope

An AI case study, `/services`, restyling prior solution pages, a CMS, pricing, stack marketing, and inventing traction.

### Strategic idea

**AI should not be the headline of the system. The work should be.**

Visitor takeaway: they understand where intelligence belongs, how it should act, and where it should stop.

### Shipped

`resources/views/pages/solutions/ai-automation.blade.php`, `aiauto-*` rules, `resources/js/solution-ai.js`, route registered, hub Explore for all four solution children, path 04 when/place aligned, secondary “See the workflow” ungated until AI proof exists.

## Services index brief (Chunk 15)

**Status:** accepted and built 2026-10-05. Frozen pages stay frozen except Services nav wiring and the Solutions delivery-note link to `/services`.

Route: `/services`

**Solutions explain what a buyer may need. Services explain how SKYEMBER can execute it.**

This page is an **engineering practice** — disciplines behind software that works — not a service menu, not a Solutions replay, and not five commodity cards.

### Job

| Question      | Answer                                                                                                                              |
| ------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Understand which disciplines SKYEMBER brings to design, build, and run the thing                                                    |
| Brand message | Product thinking, experience design, engineering, and infrastructure reinforce one another around one system                        |
| Visual idea   | Disciplines converging into one product — fragments contributing to a central product surface, not another dashboard                |
| SEO value     | Strong commercial service URL; BreadcrumbList + accurate overall Service; natural service-category language                         |
| Mobile        | Vertical service reading sequence: featured Product Engineering, then quieter records. No five-card grid                            |
| Motion        | Calm. Quieter than solution pages. 0.9s hero and featured settle; optional ~1.6s signature beat; service rows still                 |

### Audience

Buyers who already understand the problem shape (or came from `/solutions`) and need to know how SKYEMBER executes.

### Distinction (must stay obvious)

| Surface | Question | Signature |
| --- | --- | --- |
| `/solutions` | What are you trying to put in place? | Decision index |
| **`/services`** | **What disciplines do you need to make it real?** | **Engineering practice** |
| `/work` | What evidence exists? | Work records |
| `/contact` | Start the conversation | Brief |

```text
/solutions → decision
/services  → execution disciplines
/work      → evidence
/contact   → conversation
```

Do not recreate the four Solution pages. Do not list AI as a service (AI is a Solution; it may appear later inside Product Engineering / Cloud & DevOps child pages).

### Commercial journey

```text
/solutions → what to put in place
/services  → disciplines to make it real
/services/* → deep capability (later)
/contact   → conversation
```

### Service order (locked)

```text
01 Product Engineering   (featured)
02 UI/UX Design
03 Web Development
04 Mobile Development
05 Cloud & DevOps
```

UI/UX before implementation disciplines matches Understand → Shape → Design → Engineer → Operate.

### Composition

#### 1. Hero

- Eyebrow: `SERVICES`
- **H1:** `The disciplines behind software that works.`
- Support: From product thinking and interface design to engineering, mobile applications, and production infrastructure, we bring the disciplines together around the system being built.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `Explore our work →` → `/work` (live; ungated)

**Hero visual — disciplines contributing to one product**

Not another dashboard. One polished product surface in the center with subtle surrounding fragments: product interface · UX flow · code/architecture fragment · mobile viewport · deployment state. They should feel like different disciplines contributing to one thing — not a box-and-arrow diagram.

#### 2. Thesis — One system. The disciplines it needs.

> A product does not become successful because one team wrote the most code. It works when product thinking, experience design, engineering, and infrastructure reinforce one another.

#### 3. Featured — Product Engineering (01)

Largest composition on the page.

- Eyebrow: `01 / FEATURED`
- **H2:** `Product Engineering`
- Line: From product intent to production software.
- Body: We design and engineer complete digital products and business systems, from the core domain model and workflows through the interfaces and production environment.
- `Explore service →` — **no href** until `/services/product-engineering` exists

Message: SKYEMBER isn't only a collection of specialists — we can bring the disciplines together.

#### 4. Other disciplines — quieter horizontal records

Eyebrow: `OTHER DISCIPLINES`. Not equal tiles.

| | H3 | Line |
| --- | --- | --- |
| 02 | UI/UX Design | Experiences people can understand, navigate, and trust. |
| 03 | Web Development | Fast, responsive web applications engineered around the product. |
| 04 | Mobile Development | Native-quality mobile experiences connected to the same product system. |
| 05 | Cloud & DevOps | Delivery and infrastructure designed for reliable software in production. |

Each may have a small visual fragment. `Explore service →` gated per child route.

#### 5. Signature — The disciplines change. The system stays one.

One representative product gaining fidelity: Problem → Flow → Interface → Working application → Mobile experience → Production.

Not a generic architecture diagram. Memorable Services visual identity.

#### 6. What each discipline changes.

Outcome-oriented (not technology lists). H3s:

| Discipline | Changes |
| --- | --- |
| Product Engineering | Turns requirements into maintainable software systems. |
| UI/UX Design | Turns complexity into clear experiences and usable interfaces. |
| Web Development | Turns product behavior into fast, responsive web applications. |
| Mobile Development | Extends the product into focused mobile experiences. |
| Cloud & DevOps | Creates the path from code to reliable production operation. |

#### 7. When to bring us in — Bring us in where the product needs more than a specification.

Four situations (not another decision tree):

| Situation | Disciplines |
| --- | --- |
| Starting from an idea | Product Engineering + UI/UX |
| Replacing an existing application | Engineering + UX + Web/Mobile |
| Extending a working product | Specialist engineering |
| Preparing software for production | Cloud & DevOps |

#### 8. Specialist depth — Specialist when it matters. Integrated when it counts.

> A strong product still needs specialist depth. But specialists should understand the system around their part of the work.

Quiet integration line: UX ↔ Product ↔ Web ↔ Mobile ↔ Cloud. Message: **no isolated handoffs.**

#### 9. Proof — See the work behind the disciplines.

Use existing Work carefully:

- Business Operations Platform
- Product · UX · Engineering · Web application
- `Explore the work →` → `/work/business-operations-platform`

Support: See one system built across product, experience, and engineering.

Do **not** claim BOP proves mobile or cloud work.

#### 10. Honest scope — Not every project needs every discipline.

> A focused web application may not need mobile development. An existing product may need cloud engineering without a redesign. We assemble the disciplines around the problem rather than adding work for the sake of a larger engagement.

#### 11. Final CTA — Know what needs to be built?

Support: Tell us what you need help with. We'll bring the right disciplines around the problem.

`Start a conversation →` → `/contact`

Distinct from Solutions CTAs (workflow / product idea / separate tools / work worth automating).

### SEO

- **Title:** `Software Development Services | SKYEMBER`
- **Description:** `Product engineering, UI/UX design, web and mobile development, and cloud & DevOps services for custom software and digital products.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: software development services, product engineering, UI/UX design, web development, mobile app development, cloud and DevOps, custom software development — no keyword block
- **Schema:** BreadcrumbList (Home → Services). Accurate overall `Service` only. No FAQPage. Child Service schemas when child pages ship

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services` | Registered |
| Nav Services | `/services` (current on hub or children later) |
| Explore our work | `/work` |
| Featured / child Explore service | Gate until each child GET exists |
| See the work / Explore the work | `/work/business-operations-platform` |
| Start a conversation | `/contact` |
| Solutions delivery note | May link to `/services` when live (optional; hub composition otherwise frozen) |
| Frozen pages | No composition restyles |

### Planned child routes (gated)

```text
/services/product-engineering
/services/ui-ux-design
/services/web-development
/services/mobile-development
/services/cloud-devops
```

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services.blade.php`
- Prefix: `svc-`
- Script: e.g. `resources/js/services.js`, `data-svc-*` hooks only. Readable with JS off / reduced motion
- Feature tests: page, SEO, BreadcrumbList/Service, nav live, Explore our work → `/work`, BOP proof careful, child Explore gated, no AI service row, honesty, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Immediately different from `/solutions`
- [x] Services presented as disciplines, not commodity cards
- [x] Product Engineering is the featured anchor
- [x] UI/UX, Web, Mobile, Cloud/DevOps have clear distinct roles
- [x] AI is not duplicated as a fifth/sixth service
- [x] Communicates integration between disciplines
- [x] BOP case study used carefully, without overclaiming
- [x] No fake clients, results, team size, certifications, or technology partnerships
- [x] Mobile is deliberately composed
- [x] SEO is semantic and commercially useful
- [x] Motion stays quieter than the solution pages
- [x] Child routes remain gated until they exist
- [x] CTA → `/contact`

### Out of scope

Service child pages, `/company`, `/insights`, restyling Solutions or Work, a CMS, pricing, and inventing traction.

### Strategic idea

Solutions say: **here is the kind of problem we can help you solve.**  
Services say: **here are the disciplines we bring together to solve it well.**

### Shipped

`resources/views/pages/services.blade.php`, `svc-*` rules, `resources/js/services-page.js`, route registered, Services nav live, child Explore gated, Solutions delivery note → `/services`, BOP proof carefully scoped.

## Product Engineering service brief (Chunk 16)

**Status:** accepted and built 2026-10-05. Frozen pages stay frozen except the Product Engineering Explore wiring on `/services`.

Route: `/services/product-engineering`

This is the **anchor** of the Services family — more substantial than sibling children because it establishes: **product thinking + design + engineering + delivery belong together.**

Not a technology-stack page. Solutions name what to put in place; Product Engineering explains how that becomes production software.

### Job

| Question      | Answer                                                                                                                                      |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether SKYEMBER can take a product from intent to production without losing the problem it was meant to solve                       |
| Brand message | Product thinking, experience design, architecture, engineering, testing, and delivery stay connected around the thing being built           |
| Visual idea   | One evolving product surface — progression without a process timeline, dashboard, code-editor shot, or stack wall                           |
| SEO value     | Specific product-engineering service URL; Service + BreadcrumbList; natural product-engineering language                                    |
| Mobile        | Vertical engineering reading sequence; focused surfaces recomposed                                                                          |
| Motion        | Restrained. 0.9s hero settle; optional ~1.6s signature beat; one subtle interface-state transition; everything else mostly still            |

### Audience

Buyers who need full-discipline execution from idea or existing product through production — or need to understand when a specialist-only engagement is enough.

### Distinction (must stay obvious)

| Surface | Question |
| --- | --- |
| Solutions | What are we trying to put in place? |
| **Product Engineering** | **How do we turn that into working software?** |
| Sibling services | Specialist depth when the full discipline is not required |

```text
/services
    ↓
/services/product-engineering
    ↓
/work  (and BOP as scoped proof)
    ↓
/contact
```

Do not restyle the Services hub beyond Explore wiring. Do not claim BOP proves mobile or cloud.

### Composition

#### 1. Hero

- Eyebrow: `PRODUCT ENGINEERING`
- **H1:** `From product intent to production software.`
- Support: We bring product thinking, experience design, architecture, engineering, testing, and delivery together around the thing being built.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work` (live)

**Hero visual — one product becoming real**

Not: dashboard, code editor screenshot, giant tech stack, six-layer architecture diagram, floating laptops.

One evolving product surface (user flow · core record · action · working interface) with subtle surrounding fragments: workflow → domain/data → interface → production.

Visitor feeling: **“This team can take an idea all the way through the system.”**

#### 2. Gap — The hardest part is the distance between an idea and software people can rely on.

| | Title | Body |
| --- | --- | --- |
| 01 | Intent gets lost | Requirements become tickets, tickets become screens, and the original problem can disappear between them. |
| 02 | Design and engineering drift apart | A product can look right in a prototype and still fail when real states, data, permissions, edge cases, and performance enter the picture. |
| 03 | Production changes the problem | The software now has real users, real data, deployment concerns, failures, maintenance, and new requirements. |

#### 3. Choose this when — Bring Product Engineering in when the product needs to become real.

1. You have a product idea, but the path from requirements to working software isn't clear.
2. The product already exists, but its architecture, experience, or engineering process is slowing change.
3. Multiple disciplines need to move together: product, UX, frontend, backend, data, infrastructure.
4. The next release matters as much as the first one, and the foundation needs to support both.

#### 4. What we bring together — The disciplines stay connected.

Four large editorial areas (not identical cards):

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Product direction | Translate business requirements and user needs into a focused product model | Requirement → defined user flow |
| 02 | Experience | Information architecture, interaction model, visual system, and states people actually use | Flow → interface transition |
| 03 | Engineering | Domain logic, frontend, backend, data, integrations, permissions, workflows | One user action reflected through the system |
| 04 | Quality + delivery | Testing, validation, deployment, monitoring, release discipline | Prepared → verified → live |

#### 5. Signature — One product. One connected engineering effort.

Fragments of one product: Flow → Interface → Domain record → Test state → Released experience. Not boxes-and-arrows. Recognizably one system.

#### 6. Engineering depth — Built beyond the happy path.

Five compact rows (H3s): Domain · State · Data · Integration · Quality.

Senior substance — not “clean code / scalable architecture / best practices.”

#### 7. Frontend — The interface is part of the engineering.

> A production interface has to handle more than the designed state. It has to communicate loading, failure, permissions, validation, empty results, responsive behavior, accessibility, and changing data without losing clarity.

One product surface through states: Ready · Loading · Empty · Validation · Success · Error. Not six screenshots.

#### 8. Backend — The system behind the interface has to make the experience possible.

Categories only (no logos): Business rules · Domain logic · Data model · Permissions · APIs / integrations · Background work · Audit / trace.

Message: **Engineering begins with the behavior the product needs.**

#### 9. Testing — Confidence is designed into the delivery.

Representative validation surface (order flow + edge cases checkmarks). No fabricated test counts or “99.99% coverage.”

> We validate critical behavior before treating a feature as finished.

#### 10. Technology philosophy — Technology should serve the product.

> The right architecture depends on the problem, the team, the constraints, and the life the software is expected to have. We choose technologies for their fit—not because a stack is fashionable.

Categories only: Web · Mobile · Backend · Data · Cloud · AI. No logo wall.

#### 11. Representative system

Eyebrow: `REPRESENTATIVE SYSTEM`  
**H2:** `See one system where product, experience, and engineering meet.`

Large BOP crop. Copy: A representative business system connecting orders, inventory, workflows, and operational records through one coherent product experience.

`Explore the system →` → `/work/business-operations-platform`

Do **not** claim it proves cloud/mobile/API expertise.

#### 12. Honest specialist exit — You may not need the full discipline.

> A mature product may need focused frontend engineering, UX work, mobile development, or cloud support rather than a complete product-engineering engagement. We can bring in the discipline the system actually needs.

| Need | Path |
| --- | --- |
| Experience | UI/UX Design |
| Web implementation | Web Development |
| Mobile | Mobile Development |
| Production foundation | Cloud & DevOps |

Links gated until sibling routes exist.

#### 13. Final CTA — Have a product that needs to become real?

Support: Tell us what you're building, where it stands today, and what needs to happen next.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `Product Engineering Services | SKYEMBER`
- **Description:** `Product engineering from product direction and UX through architecture, software development, testing, and production delivery.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: product engineering, product engineering services, digital product development, software product development, full-stack development, software architecture, frontend engineering, backend engineering, product design, software testing — no keyword block
- **Schema:** BreadcrumbList (Home → Services → Product Engineering). Accurate `Service` only. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services/product-engineering` | Registered |
| `/services` Featured Explore service | Renders |
| See our work | `/work` |
| Explore the system | `/work/business-operations-platform` |
| Specialist sibling Explore links | Gated until those routes exist |
| Start a conversation | `/contact` |
| Services nav | Still `/services`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services/product-engineering.blade.php`
- Prefix: `pe-`
- Script: e.g. `resources/js/service-product-engineering.js`, `data-pe-*` hooks only
- Feature tests: page, SEO, Service/breadcrumb, hub Explore for Product Engineering only among children, BOP scoped, sibling links gated, no stack/coverage theatre, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like an engineering practice, not a software-development sales page
- [x] Product direction, experience, engineering, and delivery feel connected
- [x] Engineering depth without becoming a stack list
- [x] “Built beyond the happy path” is visually and semantically convincing
- [x] Frontend quality treated as engineering, not decoration
- [x] Testing/validation is visible
- [x] Technology presented as a means, not the product
- [x] BOP used as representative proof without overclaiming
- [x] Specialist-only engagements are acknowledged
- [x] No fake client/result/deployment/scale claims
- [x] Mobile is intentionally composed
- [x] SEO is useful and semantic
- [x] Motion remains quiet
- [x] Child-service links remain gated
- [x] CTA → `/contact`

### Out of scope

Other service children, `/company`, `/insights`, restyling Services hub beyond Explore wiring, a CMS, pricing, logo walls, and inventing traction.

### Strategic idea

The Services index says: **these are the disciplines we bring together.**  
This page proves: **here is what it means to actually bring them together.**

Product Engineering becomes the **depth benchmark** for UI/UX, Web, Mobile, and Cloud & DevOps.

### Shipped

`resources/views/pages/services/product-engineering.blade.php`, `pe-*` rules, `resources/js/service-product-engineering.js`, route registered, hub Featured Explore live, sibling Explore gated, BOP carefully scoped.

## UI/UX Design service brief (Chunk 17)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Frozen pages stay frozen except activating later child Explore links when those routes ship.

Route: `/services/ui-ux-design`

Deliberately more human, cognitive, and design-led than Product Engineering. Sells **design judgment**, not pretty UI.

### Job

| Question      | Answer                                                                                                                           |
| ------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether SKYEMBER can make complicated software clear, usable, and coherent                                                |
| Brand message | Structure, interactions, and interfaces that make the next decision obvious — including when things go wrong                     |
| Visual idea   | One complex product task becoming visually clear — hierarchy, state, action, context — not a Figma canvas or dashboard collage   |
| SEO value     | Specific UI/UX service URL; Service + BreadcrumbList; natural UX language in sentences                                           |
| Mobile        | Vertical design reading sequence; focused interface surfaces recomposed. No desktop design-tool canvas                           |
| Motion        | Quieter than Product Engineering. 0.9s hero settle; optional ~1.6s signature transition; validation may change once              |

### Audience

Buyers whose software works but is hard to use, has grown past its IA, or needs its experience defined before engineering scales it.

### Distinction (must stay obvious)

| Service | Core question | Signature |
| --- | --- | --- |
| Product Engineering | How does the product become real? | Intent → production |
| **UI/UX Design** | **How does the product become understandable?** | **Decision made clear** |
| Web / Mobile / Cloud | Specialist execution (later) | Future children |

```text
Product Engineering → Make the product real
UI/UX Design        → Make the product understandable
```

Do not restyle Product Engineering or the Services hub beyond Explore wiring.

### Commercial journey

```text
/services
    ↓
/services/ui-ux-design
    ↓
/work
    ↓
/contact
```

Plus live cross-links to `/services/product-engineering`.

### Composition

#### 1. Hero

- Eyebrow: `UI/UX DESIGN`
- **H1:** `Make complex software easier to understand.`
- Support: We design the structure, interactions, and interfaces that help people understand what a product is doing, what they can do next, and what happens when things don't go as planned.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

**Hero visual — a decision made clear**

Not: generic polished SaaS dashboard, Figma canvas screenshot, fake portfolio collage.

One complex product task with clear hierarchy: current task · customer/order/status · what needs to happen next · clear primary action · supporting information. Subtle integrated annotations: Hierarchy · State · Action · Context (not floating stickers).

Concept: **The interface makes the next decision obvious.**

#### 2. Problem — Good interfaces solve more than visual problems.

| | Title | Body |
| --- | --- | --- |
| 01 | People need context | An action is easier to understand when the information required to make that decision is nearby. |
| 02 | Systems have more states than the happy path | Loading, empty, error, permission, validation, partial completion, and confirmation all belong to the experience. |
| 03 | Consistency compounds | When related interactions behave differently, every new screen increases cognitive load. |

#### 3. Choose this when — Bring UI/UX in when people are struggling with the software.

1. Users can complete the task, but the path is harder than it should be.
2. The product has grown faster than its information architecture or interaction model.
3. Different parts of the product behave differently for the same kind of task.
4. A new product needs its experience defined before engineering scales it.

#### 4. What we put in place — From user need to usable system.

Five distinct design activities (not identical cards):

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Research | Understand users, contexts, constraints, and the actual work | Observations → task → decision |
| 02 | Structure | Information architecture, navigation, content hierarchy, user flows | Complicated space → clear path |
| 03 | Interaction | Actions, states, transitions, feedback, error recovery | Intent → action → response |
| 04 | Systematize | Reusable components, patterns, tokens, design rules | One component → consistent pattern family |
| 05 | Validate | Prototype, test, observe, refine | Hypothesis → test → finding → refinement |

#### 5. Signature — A good interface carries the decision with it.

One product interface whose hierarchy changes around the same task: Context · Current state · What matters now · Primary action · Supporting information · Next step.

Demonstrates UX decisions about prominence, grouping, next steps, and failure — not “beautiful UI.”

#### 6. Design system — A product should not reinvent itself on every screen.

Progression (product surface, not docs): Foundation (typography, spacing, color, components) → Patterns (forms, tables, navigation, feedback) → Experience (consistent product behavior).

#### 7. Survive the mockup — The design has to survive outside the mockup.

Four quiet H3s: Responsive · Accessible · Content · States.

#### 8. Prototype — Prototype the question before building the answer.

> A prototype is useful when it helps resolve uncertainty: whether a flow makes sense, whether the information is in the right place, or whether a user can complete the task without assistance.

Quiet sequence: Idea → Flow → Prototype → Test → Refine. No week numbers. No “AI prototype in 48 hours.”

#### 9. Validation — The design gets better when someone tries to use it.

Representative validation surface (task, observation, friction, design response, retest). No invented user counts, success percentages, or participant quotes.

#### 10. Beyond the screen — The screen is only one expression of the product.

Content → Information architecture → Interaction → Visual system → Component system → Implementation.

Point: **UX decisions should survive engineering.** Bridge to Product Engineering.

#### 11. Representative experience

Eyebrow: `REPRESENTATIVE EXPERIENCE`  
**H2:** `Clarity is the feature.`

Large carefully designed interface: strong hierarchy, clear primary action, contextual information, visible state, responsive composition. Label: **Representative interface**. No client, user count, conversion metric, or fake engagement lift.

#### 12. Cross-link — Design does not stop at the handoff.

> We work with engineering decisions in mind, so the experience can survive real data, responsive constraints, permissions, failure states, and implementation trade-offs.

`See Product Engineering →` → `/services/product-engineering` (live)

#### 13. Honest exit — Sometimes the interface isn't the real problem.

> If the underlying workflow, product model, or business rule is unclear, polishing the interface will only hide the problem temporarily. Sometimes the right first step is product or engineering work.

`Explore Product Engineering →` → `/services/product-engineering`

#### 14. Final CTA — Have software people need to understand?

Support: Tell us where the experience breaks down. We'll help identify what needs to change.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `UI/UX Design Services | SKYEMBER`
- **Description:** `UI/UX design for complex software: research, information architecture, interaction design, design systems, prototyping, responsive and accessible interfaces.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: UI/UX design, UX design services, UI design, product design, user research, information architecture, interaction design, design systems, usability testing, accessible design, responsive design, prototyping — no keyword block
- **Schema:** BreadcrumbList (Home → Services → UI/UX Design). Accurate `Service` only. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services/ui-ux-design` | Registered |
| `/services` path 02 Explore | Renders |
| See our work | `/work` |
| See / Explore Product Engineering | `/services/product-engineering` |
| Web / Mobile / Cloud Explore | Still gated |
| Start a conversation | `/contact` |
| Services nav | Still `/services`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services/ui-ux-design.blade.php`
- Prefix: `ux-`
- Script: e.g. `resources/js/service-ui-ux.js`, `data-ux-*` hooks only
- Feature tests: page, SEO, Service/breadcrumb, hub Explore for UI/UX among remaining children, PE cross-links live, no fake research metrics, representative labeled, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like a design practice, not a visual-design gallery
- [x] UX thinking comes before visual styling
- [x] Research and information architecture are represented
- [x] Interaction states are treated as part of design
- [x] Design systems shown as a product-quality mechanism
- [x] Responsive and accessibility considerations are explicit
- [x] Validation demonstrated without fake research results
- [x] No generic Figma-canvas hero
- [x] No fake client or outcome claims
- [x] Representative interface is clearly labeled
- [x] Product Engineering cross-link is live and meaningful
- [x] Mobile is deliberately composed
- [x] SEO is useful and semantic
- [x] Motion remains restrained
- [x] CTA → `/contact`
- [x] UI/UX child Explore on `/services` activates only after this route ships

### Out of scope

Web / Mobile / Cloud children, `/company`, `/insights`, restyling Product Engineering, a CMS, pricing, and inventing research results.

### Strategic idea

Product Engineering says: **we can make the product real.**  
UI/UX Design says: **we can make the product make sense.**

## Web Development service brief (Chunk 18)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Frozen pages stay frozen except activating later child Explore links when those routes ship.

Route: `/services/web-development`

Deliberately more browser-and-delivery-led than UI/UX. Sells **web engineering quality**, not “we code websites.”

### Job

| Question      | Answer                                                                                                                                 |
| ------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether SKYEMBER can turn a product into a web experience that is fast, resilient, accessible, and ready for real users         |
| Brand message | The discipline of delivering the product experience through the web — browser, responsive, performance, accessibility, SEO             |
| Visual idea   | One web product experienced under different conditions — same intent, changing proportion and hierarchy — not device frames            |
| SEO value     | Specific web development service URL; Service + BreadcrumbList; natural web-engineering language in sentences                          |
| Mobile        | Vertical web-engineering reading sequence; one focused responsive surface. No desktop device collage                                   |
| Motion        | Very restrained. Quieter than UI/UX. 0.9s hero settle; optional ~1.6s condition change; one short state transition                     |

### Audience

Buyers whose product needs a production-quality web application — not a static presentation — and who care that performance, accessibility, SEO, and real states are part of the requirement.

### Distinction (must stay obvious)

| Service | Core question | Signature |
| --- | --- | --- |
| Product Engineering | How does the product become real? | Intent → production |
| UI/UX Design | How does the product become understandable? | Decision made clear |
| **Web Development** | **Can that experience survive the browser?** | **Same product, different conditions** |
| Mobile / Cloud | Specialist execution (later) | Future children |

```text
Product Engineering → Make the product real
UI/UX Design        → Make the product understandable
Web Development     → Make it work exceptionally on the web
```

Do not restyle Product Engineering, UI/UX, or the Services hub beyond Explore wiring.

### Commercial journey

```text
/services
    ↓
/services/web-development
    ↓
/work
    ↓
/contact
```

Plus live cross-links to `/services/ui-ux-design` and `/services/product-engineering`.

### Composition

#### 1. Hero

- Eyebrow: `WEB DEVELOPMENT`
- **H1:** `Web experiences built for the real world.`
- Support: We build responsive web applications and digital experiences that remain clear, fast, accessible, and dependable across browsers, devices, content, and real-world conditions.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

**Hero visual — the browser as a real environment**

Not: generic code editor, floating browser windows, laptop mockups, another business dashboard, a row of device frames.

One web product being experienced at different conditions: same content surface changing proportion and hierarchy from wide to narrow. Message: **The design survives the browser.**

#### 2. Problem — The design changes when the screen becomes real.

| | Title | Body |
| --- | --- | --- |
| 01 | Space changes | A layout designed for a large canvas has to become intentional at smaller widths rather than simply collapsing. |
| 02 | Content changes | Real content has different lengths, images fail, records grow, states vary, and users arrive from many contexts. |
| 03 | Conditions change | Network speed, browser behavior, device capabilities, accessibility settings, and interaction methods all affect the experience. |

#### 3. Choose this when — Bring Web Development in when the experience has to work beyond the mockup.

1. The product needs a responsive web application, not a static presentation.
2. The interface has to work consistently across desktop, tablet, mobile, and different browsers.
3. Performance, accessibility, SEO, or content behavior are part of the product requirement.
4. A designed experience now needs production-quality implementation and ongoing iteration.

No framework names. No inflated scale claims.

#### 4. What we put in place — The web is part of the product, not the delivery format.

Five distinct web-engineering activities (not identical cards):

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Responsive implementation | Layouts, components, content, interactions, and states adapt intentionally to the viewport | Wide → compact without losing hierarchy |
| 02 | Application behavior | Forms, navigation, data states, loading, validation, errors, and user actions behave correctly | Ready → loading → success / failure |
| 03 | Performance | Images, fonts, scripts, rendering, caching, and network behavior are part of the experience | Loading priority / rendered state, subtle |
| 04 | Accessibility | Keyboard, focus, semantics, labels, contrast, motion preferences, assistive technology | Same interaction: focus / pointer / keyboard |
| 05 | Content + discoverability | Content stays crawlable, structured, linkable, and understandable to search | Semantic structure and internal-link relationships |

#### 5. Signature — One experience. Different conditions.

Same interface logic adapting — **do not show three devices:**

- Wide: full navigation, multiple columns, rich context
- Compact: reduced navigation, rebalanced content, same core task
- Mobile: focused hierarchy, touch-first actions, same product intent

UI/UX asks what the experience should be. Web Development asks whether that experience survives the browser.

#### 6. Performance — Fast is part of the interface.

Load · Render what matters first.  
Respond · Keep interactions immediate.  
Stabilize · Prevent layout movement.  
Deliver · Use the right asset at the right time.

> Performance is not a score added after development. It changes how pages are structured, what loads first, how images are delivered, and how interaction is implemented.

Core Web Vitals are engineering targets, not marketing guarantees. Do not promise LCP / INP / CLS numbers.

#### 7. Accessibility — The browser should not decide who can use the product.

Keyboard · Focus · Semantics · Motion · Targets — as implementation requirements, not a checklist graphic.

#### 8. SEO — Search should understand what the visitor can see.

> Important content belongs in semantic HTML, not inside a canvas or an interaction the crawler cannot meaningfully interpret.

Progression as a representative page surface, not an infographic: Content → Semantic structure → Internal links → Metadata → Crawlable page. Subtly expose H1, H2, Article, Link, Image, Structured data.

#### 9. Production behavior — Real web products have states.

Ready · Loading · Empty · Validation · Error · Success · Offline / Retry.

Product Engineering: built beyond the happy path. UI/UX: the experience has to make sense. Web: **those states have to actually work in the browser.**

#### 10. Frontend engineering — Production frontend is more than markup.

Component architecture · Responsive behavior · Data states · Browser compatibility · Performance · Accessibility · Testing · Error recovery.

No logo wall. No React / Vue / Angular / Next.js catalog.

#### 11. Full-stack web — The web experience depends on the system behind it.

Interface → Application behavior → API / data → Authentication → Business rules → Web response.

Not the Custom Platforms architecture visual. Focus: how browser experience and application behavior meet.

#### 12. Representative web experience

Eyebrow: `REPRESENTATIVE WEB EXPERIENCE`  
**H2:** `Designed to survive outside the happy path.`

Large carefully designed web application: navigation, realistic content, form/action, loading, validation, successful response. Label: **Representative interface**. No client, traffic numbers, performance percentages, or production-deployment claims.

#### 13. Cross-link — Design and implementation should agree.

> We work from the interaction model and design system into production behavior, so visual decisions remain coherent when real data, states, responsive constraints, and browser behavior enter the product.

`See UI/UX Design →` → `/services/ui-ux-design` (live)

#### 14. Cross-link — When the web is part of the larger product.

> For systems with deeper product, domain, backend, or architectural requirements, Web Development can work as one part of a broader product-engineering effort.

`See Product Engineering →` → `/services/product-engineering` (live)

#### 15. Honest exit — Sometimes the web is not the right surface.

> If the primary experience belongs in a native mobile workflow, an internal system, or an existing platform, forcing it into a web application may add friction rather than remove it.

No Mobile route until that child ships. Do not invent a gated href.

#### 16. Engagement — Start with the experience the browser needs to deliver.

Static sequence: Understand → Structure → Build → Validate → Refine. No timeline graphic, durations, or fake delivery promises. Do not duplicate Product Engineering's engagement model.

#### 17. Final CTA — Have a web experience worth building properly?

Support: Tell us what the product needs to do in the browser. We'll help shape the right implementation.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `Web Development Services | SKYEMBER`
- **Description:** `Responsive web development focused on application behavior, performance, accessibility, SEO, and production-ready frontend experiences.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: web development, web application development, responsive web development, frontend development, web app development, accessible websites, web performance, technical SEO, frontend engineering — no keyword block
- **Schema:** BreadcrumbList (Home → Services → Web Development). Accurate `Service` only. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services/web-development` | Registered |
| `/services` path 03 Explore | Renders |
| See our work | `/work` |
| See UI/UX Design | `/services/ui-ux-design` |
| See Product Engineering | `/services/product-engineering` |
| Mobile / Cloud Explore | Still gated |
| Start a conversation | `/contact` |
| Services nav | Still `/services`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services/web-development.blade.php`
- Prefix: `web-`
- Script: e.g. `resources/js/service-web.js`, `data-web-*` hooks only
- Feature tests: page, SEO, Service/breadcrumb, hub Explore for Web among remaining children, UX + PE cross-links live, no fake vitals, representative labeled, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like web engineering, not website design
- [x] Browser behavior is central to the page
- [x] Responsive implementation is demonstrated visually
- [x] Performance is treated as product quality
- [x] Accessibility is treated as engineering
- [x] SEO is explained as part of implementation, not a marketing add-on
- [x] Real application states are visible
- [x] Frontend engineering has substance without becoming a stack catalog
- [x] Full-stack web behavior is acknowledged
- [x] No generic laptop/device collage
- [x] No fake performance metrics or client claims
- [x] Representative interface is clearly labeled
- [x] UI/UX and Product Engineering cross-links are meaningful
- [x] Honest “web isn't always the right surface” exit remains
- [x] Mobile is deliberately composed
- [x] Motion remains restrained
- [x] CTA → `/contact`
- [x] Web Development Explore on `/services` activates only after this route ships

### Out of scope

Mobile / Cloud children, `/company`, `/insights`, restyling UI/UX or Product Engineering, a CMS, pricing, framework catalogs, and promising Core Web Vitals numbers.

### Strategic idea

Product Engineering says: **we can make the product real.**  
UI/UX Design says: **we can make the product make sense.**  
Web Development says: **we can make the experience work exceptionally on the web.**

## Mobile Development service brief (Chunk 19)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Frozen pages stay frozen except activating later child Explore links when those routes ship.

Route: `/services/mobile-development`

Deliberately more moment-and-device-led than Web. Sells **mobile as a product surface**, not “web on a smaller screen.”

### Job

| Question      | Answer                                                                                                                                      |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether SKYEMBER can turn the product into a mobile experience that feels right in the hand, survives interruptions, and works under real device conditions |
| Brand message | Software built for the moment it is used — touch, device capabilities, connectivity, interruptions, platform behavior                       |
| Visual idea   | One focused mobile task surface — touch, state, device, connection integrated — not floating phones or App Store collage                    |
| SEO value     | Specific mobile app development service URL; Service + BreadcrumbList; natural mobile-engineering language in sentences                     |
| Mobile        | The page itself demonstrates mobile-minded composition; one focused task. No desktop phone collage                                          |
| Motion        | Quieter than Web. 0.9s hero settle; optional ~1.6s interruption→continuity; one offline→sync beat                                           |

### Audience

Buyers whose work needs to leave the desk — field, healthcare, logistics, retail, inspections — and who need platform-aware mobile apps that survive interruptions, offline conditions, and the real device lifecycle.

### Distinction (must stay obvious)

| Service | Core question | Signature |
| --- | --- | --- |
| Product Engineering | How does the product become real? | Intent → production |
| UI/UX Design | How does the product become understandable? | Decision made clear |
| Web Development | Can that experience survive the browser? | Same product, different conditions |
| **Mobile Development** | **Can it work in the hand and in the moment?** | **Interruption → continuity** |
| Cloud | Specialist execution (later) | Future child |

```text
Product Engineering → Make the product real
UI/UX Design        → Make the product understandable
Web Development     → Make it work exceptionally on the web
Mobile Development  → Make it work in the hand and in the moment
```

Do not restyle Product Engineering, UI/UX, Web, or the Services hub beyond Explore wiring.

### Commercial journey

```text
/services
    ↓
/services/mobile-development
    ↓
/work
    ↓
/contact
```

Plus live cross-links to `/services/ui-ux-design`, `/services/product-engineering`, and `/services/web-development`.

### Composition

#### 1. Hero

- Eyebrow: `MOBILE DEVELOPMENT`
- **H1:** `Software built for the moment it is used.`
- Support: We design and engineer mobile applications around touch, device capabilities, connectivity, interruptions, and platform behavior—so the experience feels native instead of like a web layout inside a phone.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

**Hero visual — one task in the hand**

Not: three floating iPhones, tilted phone over gradient, App Store screenshot collage.

One focused mobile task surface (e.g. Today's work · Order · Reserved · Continue · Saved). Touch · State · Device · Connection integrated into the composition, not floating stickers.

Concept: **One task, designed for a real mobile moment.**

#### 2. Problem — A phone changes the conditions of the work.

| | Title | Body |
| --- | --- | --- |
| 01 | Attention is fragmented | The user may leave the app, receive a notification, lock the phone, or return later. |
| 02 | Interaction is physical | Thumb reach, touch targets, gestures, system navigation, keyboard behavior, and orientation all shape the experience. |
| 03 | Connectivity is not guaranteed | The app may need to remain useful while the connection is slow, unstable, or temporarily absent. |

#### 3. Choose this when — Bring Mobile Development in when the work needs to leave the desktop.

1. People need to perform an important task while away from a desk.
2. The experience benefits from device capabilities such as camera, biometrics, notifications, location, files, or secure local storage.
3. The product must remain useful through interruptions, changing connectivity, or limited attention.
4. The mobile experience needs to work as part of a larger product rather than as an isolated app.

#### 4. What we put in place — Mobile is a product surface, not a smaller viewport.

Five distinct mobile-engineering activities:

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Platform-native experience | iOS and Android respect conventions users already understand | One task with platform-appropriate navigation and controls |
| 02 | Touch + navigation | Thumb reach, targets, gestures, back, keyboard, sheet/modal patterns | Focused action with touch target and navigation state |
| 03 | Device capabilities | Camera, biometrics, notifications, location, files, share, deep links, secure storage — chosen by product need | Capabilities as product options, not a badge collection |
| 04 | Offline + sync | The connection can disappear; the work should not | Connected → local → lost → queued → returns → sync |
| 05 | Lifecycle + release | Install → open → background → resume → update → return | Product surviving the mobile lifecycle |

#### 5. Signature — Design for the moment, not the screen.

Interruption → continuity, not a systems diagram:

Task open → Notification interrupts → App backgrounded → User returns → Task restored.

That makes **mobile continuity** tangible.

#### 6. Platform-aware — One product. Platform-aware experiences.

> Shared product logic does not require identical interfaces. Where the platform changes the expected interaction, navigation, or system behavior, the implementation should respect that difference.

Product intent → iOS expression / Android expression → shared product. Subtle. No React Native / Flutter logo wall.

#### 7. States — The app is more than its first screen.

Ready · Loading · Empty · Offline · Permission denied · Validation · Error · Success · Interrupted · Restored.

UI/UX designs the states. Product Engineering models them. Mobile makes them behave through the lifecycle.

#### 8. Performance — Performance is felt in the hand.

Startup · Interaction · Memory · Network · Battery — as implementation principles, not promised numbers.

#### 9. Accessibility — The platform already gives people ways to interact. Use them.

Dynamic text · Screen readers · Contrast · Alternative input · System settings · Touch alternatives.

#### 10. Device reality — Design on devices, not just in a browser tab.

> A mobile interface can look perfect at one size and fail on another. Validation needs representative devices, different screen sizes, operating-system behavior, input methods, and the conditions people actually encounter.

Quiet check surface (Small phone · Large phone · Tablet · Slow network · Background/resume · Keyboard · Accessibility) — no fabricated QA counts.

#### 11. Representative mobile experience

Eyebrow: `REPRESENTATIVE MOBILE EXPERIENCE`  
**H2:** `One task, designed for the hand.`

Focused mobile workflow: Task → Complete → Interrupted → Restored → Synced. Label: **Representative mobile interface**. No client, downloads, ratings, or App Store claims.

#### 12. Cross-link — The interaction model comes before the platform code.

`See UI/UX Design →` → `/services/ui-ux-design` (live)

#### 13. Cross-link — Mobile is part of the product, not a separate island.

`See Product Engineering →` → `/services/product-engineering` (live)

#### 14. Cross-link — Sometimes mobile complements the web. Sometimes it replaces it.

`See Web Development →` → `/services/web-development` (live)

Surface strategy: Web ↔ Mobile ↔ Product — not three disconnected services.

#### 15. Honest exit — Sometimes an app isn't the right answer.

> If the task is occasional, content-heavy, or already well served by the web, adding an app can create another surface to maintain without creating enough value.

#### 16. Engagement — Start with the moment of use.

Static: Context → Focus → Design → Build → Validate → Release. No durations, App Store promises, or generic discover/design/develop/launch ribbon.

#### 17. Final CTA — Have a task that belongs in the hand?

Support: Tell us where people need to use the product, what they need to accomplish, and what gets in the way today.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `Mobile App Development Services | SKYEMBER`
- **Description:** `Mobile app development for iOS and Android, with platform-aware UX, device capabilities, offline behavior, accessibility, testing, and reliable release workflows.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: mobile app development, mobile application development, iOS development, Android development, native mobile apps, cross-platform development, mobile UX, offline-first apps, mobile app engineering — no keyword block
- **Schema:** BreadcrumbList (Home → Services → Mobile Development). Accurate `Service` only. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services/mobile-development` | Registered |
| `/services` path 04 Explore | Renders |
| See our work | `/work` |
| See UI/UX Design | `/services/ui-ux-design` |
| See Product Engineering | `/services/product-engineering` |
| See Web Development | `/services/web-development` |
| Cloud Explore | Still gated |
| Start a conversation | `/contact` |
| Services nav | Still `/services`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services/mobile-development.blade.php`
- Prefix: `mob-`
- Script: e.g. `resources/js/service-mobile.js`, `data-mob-*` hooks only
- Feature tests: page, SEO, Service/breadcrumb, hub Explore for Mobile among remaining children, UX + PE + Web cross-links live, no fake ratings/downloads, representative labeled, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Clearly differs from Web Development
- [x] Mobile is presented as its own product surface
- [x] Platform-native behavior is explained
- [x] iOS and Android differences respected without a framework debate
- [x] Touch, navigation, and device capabilities are represented
- [x] Offline/sync behavior is visible
- [x] Lifecycle and state restoration are visible
- [x] Real-device validation is treated as important
- [x] Accessibility is part of implementation
- [x] No phone/device-frame collage
- [x] No fake download, rating, retention, or App Store claims
- [x] No invented mobile case study
- [x] UI/UX, Product Engineering, and Web Development cross-links are meaningful
- [x] Honest “app isn't always the answer” exit remains
- [x] Mobile page itself demonstrates mobile-minded design
- [x] SEO is useful and semantic
- [x] Motion remains restrained
- [x] CTA → `/contact`
- [x] Mobile Development Explore on `/services` activates only after this route ships

### Out of scope

Cloud child, `/company`, `/insights`, restyling Web / UI/UX / Product Engineering, a CMS, pricing, framework catalogs, and inventing mobile case-study metrics.

### Strategic idea

Web Development says: **we can make the experience work exceptionally on the web.**  
Mobile Development says: **we can make the product work in the moment it is used.**

## Cloud & DevOps service brief (Chunk 20)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Frozen pages stay frozen except later IA work that only activates remaining nav when those routes ship.

Route: `/services/cloud-devops`

Deliberately more operational than Web or Mobile. Sells **production reliability**, not hosting, cloud logos, or a Kubernetes tutorial.

### Job

| Question      | Answer                                                                                                                          |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Decide whether SKYEMBER can make software dependable from deployment to production operation                                    |
| Brand message | A repeatable, observable, secure path to production — infrastructure, delivery, observability, security, resilience             |
| Visual idea   | One production control surface: the same change followed from code to runtime behavior — not logos or a DevOps ribbon          |
| SEO value     | Specific Cloud & DevOps service URL; Service + BreadcrumbList; natural operations language in sentences                         |
| Mobile        | Vertical operations reading sequence; one focused production control surface. No desktop infrastructure collage                 |
| Motion        | Quietest service child. 0.9s hero settle; optional ~1.6s trail beat; one observability transition. The page should feel stable  |

### Audience

Buyers whose releases still depend on manual steps, whose environments drift, or who can see that something is wrong without enough operational context to diagnose it. Teams that need stronger deployment, security, recovery, or operational foundations as the software grows.

### Distinction (must stay obvious)

| Service | Core question | Signature |
| --- | --- | --- |
| Product Engineering | How does the product become real? | Intent → production |
| UI/UX Design | How does the product become understandable? | Decision made clear |
| Web Development | Can that experience survive the browser? | Same product, different conditions |
| Mobile Development | Can it work in the hand and in the moment? | Interruption → continuity |
| **Cloud & DevOps** | **Can production be understood and changed safely?** | **One change, end to end** |

```text
Product Engineering → Make the product real
UI/UX Design        → Make the product understandable
Web Development     → Make it work exceptionally on the web
Mobile Development  → Make it work in the hand and in the moment
Cloud & DevOps      → Make it reliable in production
```

Do not restyle Product Engineering, UI/UX, Web, Mobile, or the Services hub beyond Explore wiring.

### Commercial journey

```text
/services
    ↓
/services/cloud-devops
    ↓
/work
    ↓
/contact
```

Plus live cross-links to `/services/product-engineering` and `/services/web-development`.

### Composition

#### 1. Hero

- Eyebrow: `CLOUD & DEVOPS`
- **H1:** `From commit to production, with confidence.`
- Support: We design cloud foundations and delivery systems that make software easier to release, observe, secure, recover, and operate as it changes.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

**Hero visual — one change, end to end**

Not: AWS/Azure/GCP logos, floating Kubernetes, giant Terraform, server racks, six-step DevOps ribbon.

One production control surface: RELEASE 2026.10.06-184 · Inventory reservation service · Build / Tests / Security / Approval / Deploy LIVE · Health with Logs · Metrics · Traces · Rollback available.

Concept: **The same change can be followed from code to production behavior.**

#### 2. Problem — Production is where every hidden assumption becomes real.

| | Title | Body |
| --- | --- | --- |
| 01 | Environments drift | When infrastructure and configuration are changed manually, environments become harder to reproduce and reason about. |
| 02 | Releases create risk | A deployment is not complete because code reached a server. It needs validation, controlled change, and a way back when something goes wrong. |
| 03 | Silence is not reliability | Without useful logs, metrics, traces, alerts, and operational context, teams can know that something is wrong without knowing why. |

#### 3. Choose this when — Bring Cloud & DevOps in when production needs to become predictable.

1. Releases still depend on manual steps, environment changes, or tribal knowledge.
2. Infrastructure needs to be reproducible, reviewable, and safer to change.
3. The team can see that something is wrong, but lacks enough operational context to diagnose it quickly.
4. The software needs stronger deployment, security, recovery, or operational foundations as it grows.

Decision criteria, not fear-based sales copy.

#### 4. What we put in place — A production system that can be understood and changed.

Five distinct operations practices:

| | H3 | Idea | Visual |
| --- | --- | --- | --- |
| 01 | Cloud foundation | Environments, networking, identity, secrets, organization, baseline governance | Development → staging → production with controlled boundaries |
| 02 | Infrastructure as code | Versioned, reviewable, reproducible — not undocumented console changes | One change: review → plan → apply |
| 03 | Delivery automation | Build, test, security, approval, deploy, rollback as a repeatable path | One release through verified states — not a pipeline ribbon |
| 04 | Observability | Logs, metrics, traces, health, alerts, deployments | One incident through correlated signals. Observe the system, not just the server. |
| 05 | Reliability + recovery | Health checks, rollback, backups, recovery, capacity, failure isolation | When something fails, the system should have a known response. No zero-downtime promise. |

#### 5. Signature — A release should leave a trail.

One fictional change (Inventory reservation fix) exposing Code → Release → Environment → Deployment → Runtime → Telemetry. Not a DevOps process ribbon.

Visitor takeaway: **The same change is traceable across its journey.**

#### 6. Infrastructure as product — The infrastructure should reflect what the software needs.

Repeatable · Controlled · Observable · Recoverable. Not AWS / Docker / Kubernetes / Terraform / Jenkins.

#### 7. Security — Security belongs in the delivery path.

H3s: Identity · Secrets · Change · Policy · Audit.

No ISO 27001, SOC 2, HIPAA, or PCI claims.

#### 8. Safe path — Make the safe path the easy path.

> Teams should not need to rediscover the deployment process every time. Reusable environments, templates, automation, and documented paths can make the common operation easier without hiding the underlying system.

If “Golden Path” appears, explain it in plain language immediately.

#### 9. Observe the change — The deployment is only half the story.

Representative operations surface: release, health, recent change, logs, metrics, trace. No fake uptime, latency, or incident reduction.

#### 10. Reliability — Design for the day something fails.

Detect · Contain · Recover · Learn. Calm. No disaster-film imagery.

#### 11. Representative production system

Eyebrow: `REPRESENTATIVE PRODUCTION SYSTEM`  
**H2:** `From release to runtime, nothing important should disappear.`

Release · Environment · Checks · Deploy · Health · Logs · Metrics · Trace · Recovery. Label: **Representative system**. No real account, 99.99% uptime, zero-downtime, or claim that SKYEMBER operates the shown infrastructure.

#### 12. Cross-link — Production starts with the software being built.

`See Product Engineering →` → `/services/product-engineering` (live)

#### 13. Cross-link — The production environment shapes the experience.

`See Web Development →` → `/services/web-development` (live)

#### 14. Honest exit — Sometimes the existing platform is enough.

> Not every application needs a new cloud architecture. Sometimes the right answer is to simplify what already exists, automate a few critical paths, or use the capabilities of an existing platform more effectively.

The right infrastructure is the **smallest reliable system that fits the workload**.

#### 15. Engagement — Start with how the software needs to live.

Static: Assess → Standardize → Automate → Observe → Harden. No timelines, maturity scores, or “transform your DevOps in 30 days.”

#### 16. Final CTA — Need a production environment you can trust?

Support: Tell us what you're running today, where releases become difficult, and what you need production to do better.

`Start a conversation →` → `/contact`

### SEO

- **Title:** `Cloud & DevOps Services | SKYEMBER`
- **Description:** `Cloud and DevOps engineering for reliable software delivery: infrastructure as code, CI/CD, observability, security, resilience, and recovery.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: cloud DevOps services, DevOps consulting, cloud engineering, infrastructure as code, CI/CD, CI/CD automation, cloud infrastructure, observability, site reliability, deployment automation, DevSecOps, cloud security — no keyword block
- **Schema:** BreadcrumbList (Home → Services → Cloud & DevOps). Accurate `Service` only. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/services/cloud-devops` | Registered |
| `/services` path 05 Explore | Renders |
| See our work | `/work` |
| See Product Engineering | `/services/product-engineering` |
| See Web Development | `/services/web-development` |
| Start a conversation | `/contact` |
| Services nav | Still `/services`; current on hub or this child |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/services/cloud-devops.blade.php`
- Prefix: `ops-`
- Script: e.g. `resources/js/service-ops.js`, `data-ops-*` hooks only
- Feature tests: page, SEO, Service/breadcrumb, hub Explore for Cloud, PE + Web cross-links live, no fake uptime/compliance, representative labeled, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like cloud/operations engineering, not hosting sales
- [x] Production reliability is the central story
- [x] Infrastructure as code is explained as a practice, not a tool name
- [x] CI/CD is shown as controlled delivery, not an animated pipeline ribbon
- [x] Observability includes logs/metrics/traces and operational context
- [x] Security/governance present without unsupported compliance claims
- [x] Recovery and failure treated as design concerns
- [x] Platform-engineering ideas explained in buyer-friendly language
- [x] No Kubernetes/logo/technology wall
- [x] No fake uptime, performance, incident, scale, or cost claims
- [x] Representative production surface is clearly labeled
- [x] Product Engineering and Web Development cross-links are meaningful
- [x] Honest “existing platform may be enough” exit remains
- [x] Mobile is deliberately composed
- [x] SEO is useful and semantic
- [x] Motion remains restrained
- [x] CTA → `/contact`
- [x] Cloud & DevOps Explore on `/services` activates only after this route ships

### Out of scope

`/company`, `/insights`, restyling other service children, a CMS, pricing, cloud-vendor catalogs, 24/7 support claims, and inventing uptime or certification.

### Strategic idea

The Services family is complete as five distinct responsibilities.  
Cloud & DevOps says: **we can make it reliable in production.**

## Company brief (Chunk 21)

**Status:** shipped 2026-10-06. Frozen except Explore → About wiring. Do not restyle. Process / Technology remain gated until each has its own accepted brief. Careers absent.

Route: `/company`

Institutional, principle-led. Answers **who SKYEMBER is and what kind of company it chooses to be** — not another capability page.

### Job

| Question      | Answer                                                                                                                         |
| ------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| User goal     | Decide who SKYEMBER is and whether its point of view matches how they want to work                                              |
| Brand message | Software company that cares about the relationship between the problem, the product, and the system behind it                   |
| Visual idea   | Brand typography: Product · Design · Engineering · Delivery as one visual system — not a dashboard or people photograph         |
| SEO value     | About/company URL; BreadcrumbList; consistent Organization; natural institutional language                                      |
| Mobile        | Quiet editorial stack; brand composition recomposed. No team collage                                                            |
| Motion        | Among the quietest pages. 0.9s hero settle; optional subtle signature reveal; mostly still                                      |

### Audience

Buyers who already understand what SKYEMBER builds (from Solutions / Services / Work) and now need the institutional layer: judgment, principles, and how the company prefers to operate.

### Positioning (must stay obvious)

```text
Homepage / Work     → what the work proves
Solutions           → what can be put in place
Services            → how it gets built
Company             → why SKYEMBER chooses to work this way
```

Personality to protect:

> **Serious about the work. Honest about the answer. Unwilling to add complexity without a reason.**

Do not invent years, headcount, offices, clients, awards, certifications, revenue, funding, or a team grid.

### Commercial / trust journey

```text
/company
    ↓
Who SKYEMBER is
    ↓
How SKYEMBER thinks
    ↓
How SKYEMBER works
    ↓
What SKYEMBER values in the work
    ↓
/work
    ↓
/contact
```

### Composition

#### 1. Hero

- Eyebrow: `THE COMPANY BEHIND THE SOFTWARE`
- **H1:** `We build software with a long-term view.`
- Support: SKYEMBER designs and engineers custom software, digital products, platforms, and intelligent workflows around the way people and organizations actually work.
- Primary: `See our work →` → `/work`
- Secondary: `Start a conversation →` → `/contact`

Quiet compared with the homepage Hero. No dark technical plane, dashboard, people photograph, or abstract AI artwork.

**Hero visual — the SKYEMBER practice**

Large typographic composition: SKYEMBER · PRODUCT · DESIGN · ENGINEERING · DELIVERY as one visual system (subtle brand-ribbon connection optional). Message: **Different disciplines. One standard of work.**

#### 2. Why we exist — Software should fit the work, not force the work to fit the software.

> We started from a simple observation: software becomes valuable when it understands the people, decisions, constraints, and workflows around it. That means looking beyond individual screens and features to the system those pieces create together.

#### 3. Beliefs — What we believe about software.

Not Mission / Vision / Values.

| | Title | Body |
| --- | --- | --- |
| 01 | Start with the problem | The software should be shaped around a real need before technology determines the answer. |
| 02 | Make complexity understandable | A sophisticated system does not have to become a confusing experience. |
| 03 | Prove the important parts | Interfaces, workflows, decisions, and architecture become stronger when they are made visible and tested. |
| 04 | Build for what comes next | The first release matters, but so do the changes, new users, new requirements, and maintenance that follow it. |

#### 4. Signature — Look at the whole system.

Typographic progression (not a process diagram): The problem → The people → The flow → The product → The system → The outcome. Emphasize **SYSTEM**. Message: SKYEMBER looks beyond the screen.

#### 5. Disciplines — Different disciplines. Shared responsibility.

> Product, design, engineering, and delivery are different disciplines, but the user experiences one system.

Quiet live-linked rows to all five services with their locked lines:

- Product Engineering — The product has to become real.
- UI/UX Design — The experience has to make sense.
- Web Development — The experience has to survive the browser.
- Mobile Development — The product has to work in the moment.
- Cloud & DevOps — The software has to remain dependable in production.

#### 6. How we work — We keep the work connected.

Do not copy the homepage five-stage process.

> Fewer disconnected handoffs. Clearer decisions. Close attention to the relationship between product intent, design, engineering, and what eventually runs in production.

H3s: Stay close to the problem · Make decisions visible · Leave the system better than we found it.

#### 7. Character — Serious about the work. Easy to work with.

> We care about craft, but not for craft's own sake. We care about clear communication, thoughtful decisions, honest constraints, and software that continues to make sense after it leaves the design file.

#### 8. Boundaries — We don't build complexity for the sake of it.

Four quiet statements: no fashionable tech for its own sake; no polish before the problem is understood; no automation just because it is possible; no larger system when a smaller answer is enough.

Judgment before spectacle.

#### 9. Work as proof — The best description of us is still the work.

BOP carefully scoped: Representative system · Product · UX · Engineering · Pharmacy / Operations · Explore the work → case study · See all work → `/work`. Frame as **one example of how we think**, not the whole company.

#### 10. Explore SKYEMBER

Quiet index, **gated** until child pages exist:

- About — The company, its story, and the people behind the work.
- Process — How we move from problem to production.
- Technology — How we think about tools, architecture, and technical choices.

No Careers until a real hiring experience exists. No thin placeholder routes.

#### 11. Final CTA — Let's build something that matters.

Support: Tell us what you're trying to change, improve, or put in place.

`Start a conversation →` → `/contact`

One CTA only. No form. No repeated homepage question.

### SEO

- **Title:** `About SKYEMBER | Software Company & Product Engineering`
- **Description:** `Learn how SKYEMBER approaches software, product design, engineering, and technology—and the principles behind the systems we build.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: software company, software engineering, product engineering, custom software, digital products, software development, UI/UX design — no keyword block
- **Schema:** BreadcrumbList (Home → Company). Review existing Organization for consistency; WebSite only if accurate and non-duplicative. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/company` | Registered |
| Company in the nav | `/company`, current on this page |
| See our work | `/work` |
| Explore the work | BOP case study |
| See all work | `/work` |
| Five discipline rows | Live service routes |
| About / Process / Technology | Still gated |
| Careers | Absent |
| Start a conversation | `/contact` |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: `resources/views/pages/company.blade.php`
- Prefix: `co-`
- Script: e.g. `resources/js/company.js`, `data-co-*` hooks only
- Feature tests: page, SEO, breadcrumb, Company nav live, service links live, About/Process/Technology gated, Careers absent, no invented scale/team claims, BOP carefully scoped, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like a company page, not another service page
- [x] Visitor understands what SKYEMBER believes about software
- [x] Distinct personality without Mission/Vision/Values template
- [x] No unsupported company facts
- [x] No fake team, offices, clients, awards, or scale claims
- [x] Relationship between disciplines is clear
- [x] Existing Work used as carefully scoped evidence
- [x] Future About/Process/Technology links remain gated
- [x] Careers stays absent
- [x] More human than the Services pages
- [x] Mobile deliberately composed
- [x] SEO useful and semantic
- [x] Organization / WebSite / BreadcrumbList handled cleanly
- [x] Motion very restrained
- [x] CTA → `/contact`

### Out of scope

`/insights`, Company children (each needs its own brief), Careers, inventing team/scale facts, restyling Services or homepage, a CMS.

### Strategic idea

The site already shows **what SKYEMBER does**.  
`/company` answers: **why SKYEMBER chooses to work this way.**

## Company About brief (Chunk 22)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Process / Technology remain gated until each has its own accepted brief. People section absent until approved profiles. Careers absent.

Route: `/company/about`

More factual and human than `/company`. A company profile — not another manifesto, Mission/Vision/Values template, or services page.

### Job

| Question      | Answer                                                                                                                      |
| ------------- | --------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Understand what SKYEMBER is, concretely, and what to expect from the company behind the work                                |
| Brand message | A software company built around the work — product mindset, connected disciplines, honest client relationship               |
| Visual idea   | Typographic company portrait (not a team photo). Quiet editorial field with optional restrained brand-ribbon motif          |
| SEO value     | Distinct About URL; BreadcrumbList Home → Company → About; site-wide Organization remains canonical                         |
| Mobile        | Quiet stack; portrait recomposed. No team carousel, no giant text wall                                                      |
| Motion        | Extremely restrained. 0.9s hero settle; optional 0.9s portrait reveal; hover 220ms; everything else static                   |

### Distinction (must stay obvious)

```text
/company              → Why SKYEMBER works this way
/company/about        → Who and what SKYEMBER is
/company/process      → How that thinking becomes a working engagement
/company/technology   → How that thinking becomes technical decisions
```

Personality to protect:

> **Human + precise + understated**

Do not invent founding years, headcount, offices, executives, awards, client logos, testimonials, or a team grid. No “team coming soon.”

### Commercial / trust journey

```text
/company
    ↓
/company/about
    ↓
What SKYEMBER is
    ↓
Who we work with
    ↓
What working together feels like
    ↓
/work (compact proof)
    ↓
/contact
```

### Composition

#### 1. Hero

- Eyebrow: `ABOUT SKYEMBER`
- **H1:** `A software company built around the work.`
- Support: SKYEMBER designs and engineers software for businesses that need technology shaped around their people, workflows, products, and systems.
- Primary: `See our work →` → `/work`
- Secondary: `Start a conversation →` → `/contact`

Quieter than the `/company` hero. No dark technical plane, stock photography, or fake collage.

**Hero visual — typographic company portrait**

Composed field (not a list dump):

```text
SKYEMBER

SOFTWARE · PRODUCT · ENGINEERING · DESIGN · SYSTEMS

SERIOUS ABOUT THE WORK.
```

One restrained blue ribbon/arrow motif may move through the typography, referencing the mark. Message: an actual point of view, not a corporate collage.

#### 2. What SKYEMBER is — A technology company with a product mindset.

> We work across software engineering, product design, business systems, digital products, platforms, and intelligent automation. The common thread is not the technology category. It is the problem being solved.

Factual identity panel (profile, not a services grid):

| What we build | How we work |
| --- | --- |
| Custom software | Product |
| Digital products | Design |
| Business platforms | Engineering |
| AI-powered workflows | Delivery |

#### 3. Why we started — Software should solve the real problem.

Closest thing to a company story; must stay truthful.

> SKYEMBER exists to build software that fits the reality around it. Businesses rarely experience their problems as isolated screens or features. They experience people, decisions, handoffs, constraints, and changing requirements. We believe the software should understand that whole picture.

`/company` says why we think this way; About says this is the company built around that belief. Do not copy parent philosophy verbatim.

#### 4. Company model — relationship principles, not scale claims

Do **not** ship size-claim headlines (e.g. “Small enough to stay close…”) unless the stakeholder confirms the organizational model supports them.

Locked body — three relationship principles:

| | |
| --- | --- |
| **Direct** | The work stays close to the people making the decisions. |
| **Connected** | Product, design, and engineering understand the same problem. |
| **Accountable** | The software we build has to make sense after the handoff. |

Neutral section framing if needed: how the company stays close to the work — without inventing headcount or consultancy scale.

#### 5. Who we work with — We work where software has to fit the business.

Audience recognition, not fake clients:

| H3 | Situation |
| --- | --- |
| Growing businesses | Existing processes are becoming too complex for disconnected tools. |
| Product teams | A digital product needs product design, engineering, or a stronger technical foundation. |
| Organizations modernizing systems | Legacy workflows need to become clearer, connected software. |
| Teams exploring intelligent automation | A repeatable decision or handoff may benefit from automation or AI. |

No logo wall. No testimonials.

#### 6. What working with SKYEMBER feels like — Clear conversations. Serious decisions.

| H3 | Line |
| --- | --- |
| Direct | We say what we understand, what we don't, and what still needs to be decided. |
| Practical | We prefer useful software decisions over elaborate process for its own sake. |
| Honest | Not every problem requires custom software, AI, mobile, or a large platform. |

#### 7. Company vs service — The company is broader than any one service.

Large typographic composition: **SKYEMBER** as the center; Product, Design, Engineering, Web, Mobile, Cloud aligned in a flat editorial field — not an architecture diagram. Live links to existing service routes. Useful internal-link hub without repeating `/services`.

#### 8. People — reserved, not fabricated

**H2:** `The people behind the work.`

Populate only when approved Name · Role · Biography · Professional profile · Approved photo exist. Until then: **do not render** the section (no empty state, no “coming soon”).

#### 9. What we're building toward — Built to become better as the company grows.

> The company will evolve. The standard doesn't need to.

Three statements only: Better products · Better engineering practice · Better relationships.

No growth forecasts, employee targets, global expansion, or investor narrative.

#### 10. Proof — The work still says the most.

Compact BOP only (much smaller than `/work`): Representative system · Pharmacy / Operations · Product · UX · Engineering · Explore the work → case study · See all work → `/work`.

#### 11. Company areas

Quiet index:

| | | State |
| --- | --- | --- |
| About | Who we are. | Current |
| Process | How we work. | Gated |
| Technology | How we make technical decisions. | Gated |

No thin placeholder routes. Careers absent.

#### 12. Final CTA — Good work starts with being understood.

> Tell us what you're trying to build, change, or improve. We'll start with the problem.

`Start a conversation →` → `/contact`

One CTA. Relationship-oriented. No form.

### SEO

- **Title:** `About SKYEMBER | Software Company`
- **Description:** `Learn what SKYEMBER is, who we work with, how we approach software, and the principles behind our product, design, and engineering practice.`
- **H1 / H2 / H3:** as in the composition above (People H2 only when the section ships)
- Phrases in sentences where accurate: software company, software engineering, product design, custom software, digital products, business software, technology company — no keyword block
- **Schema:** BreadcrumbList (Home → Company → About). Site-wide Organization remains canonical. No duplicate Organization. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/company/about` | Registered |
| `/company` Explore About | Live link activates |
| Process / Technology | Still gated |
| Five discipline links | Live service routes |
| Explore the work | BOP case study |
| See all work / See our work | `/work` |
| Start a conversation | `/contact` |
| People section | Absent until approved profiles |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: e.g. `resources/views/pages/company/about.blade.php`
- Prefix: `coa-*` (isolated from parent `co-*`)
- Script: e.g. `resources/js/company-about.js`, `data-coa-*` hooks only
- Feature tests: page, SEO, breadcrumb, About current / Process+Technology gated, no invented scale/team, no Careers, services linked, BOP compact, CTA → `/contact`, People section absent
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels more factual/human than `/company`
- [x] Does not repeat the parent page’s philosophy verbatim
- [x] Visitor understands what SKYEMBER actually is
- [x] Audience section helps prospective clients recognize themselves
- [x] Operating model clear without unsupported scale claims
- [x] No invented founder/team/history/office/award information
- [x] No fake client logos or testimonials
- [x] Real people only when approved information exists
- [x] Existing services linked appropriately
- [x] Existing work used as evidence without overclaiming
- [x] About / Process / Technology navigation remains honest
- [x] Mobile deliberately composed
- [x] SEO semantic and useful
- [x] Organization + BreadcrumbList clean
- [x] Motion extremely restrained
- [x] CTA → `/contact`

### Out of scope

`/company/process`, `/company/technology`, `/insights`, Careers, inventing team/scale facts, restyling `/company` or Services, a CMS, fabricating leadership photography.

### Strategic idea

`/company` already answers **why**.  
`/company/about` answers: **who and what SKYEMBER is** — concrete enough to trust, honest enough not to invent.

## Company Process brief (Chunk 23)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Technology remains gated until its own accepted brief. Careers absent.

Route: `/company/process`

Transparent engagement view — not a methodology page and not a repeat of the homepage Understand → Shape → Engineer → Validate → Launch sequence.

### Job

| Question      | Answer                                                                                                                    |
| ------------- | ------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Reduce uncertainty about what happens between the first conversation and working software                                 |
| Brand message | Good engagements make the work clearer — decisions visible, disciplines connected, client shared in the responsibility    |
| Visual idea   | Editorial decision-and-relationship compositions — not a timeline, six-step diagram, or process animation                 |
| SEO value     | Distinct Process URL; BreadcrumbList Home → Company → Process; no Service schema                                          |
| Mobile        | Quiet editorial stack. No horizontal process bar. No six tiny cards                                                       |
| Motion        | Almost entirely still. 0.9s hero settle; optional 0.9s decision-record reveal; hover 220ms; no ScrollTrigger journey      |

### Distinction (must stay obvious)

```text
/company              → Why SKYEMBER chooses to work this way
/company/about        → Who and what SKYEMBER is
/company/process      → How an engagement actually works
/company/technology   → How technical decisions are made
```

```text
Homepage Process      → How we think about building software
/company/process      → How a client actually moves through the engagement
```

Personality to protect:

> **Clear work. Visible decisions. No invented ceremony.**

Do not invent timelines, prices, retainers, guarantees, staffing models, SLA claims, or fake client process stories. Do not copy homepage process copy verbatim.

### Commercial / trust journey

```text
/company/about (optional)
    ↓
/company/process
    ↓
First conversation
    ↓
Understand → Frame → Make → Validate → Release → Continue
    ↓
Decisions stay visible
    ↓
/contact
```

### Composition

#### 1. Hero

- Eyebrow: `HOW WE WORK`
- **H1:** `Good engagements make the work clearer.`
- Support: We start with the problem, make the important decisions visible, and keep product, design, engineering, and delivery connected as the work moves toward production.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

Light, quiet, typographic. No process illustration. No six-step diagram.

**Hero visual — the working relationship**

Editorial composition around one project thread: problem → decision → implementation → outcome. Message: the client is never handed from one isolated department to another. Not boxes-and-arrows.

#### 2. First conversation — It starts with a problem, not a specification.

> You may already know the software you want. You may only know what is not working. Either is a valid starting point. The first step is understanding the business context, users, constraints, existing systems, and what actually needs to change.

Three questions:

- What is happening today?
- What needs to be different?
- What would make the work worth doing?

#### 3. Understand — Understand the situation before choosing the solution.

Engagement activity: existing workflows examined · users and stakeholders understood · constraints made explicit · existing systems considered · assumptions surfaced.

Output: **A clearer picture of the problem and the decisions that matter.** Not a giant strategy deck. Not homepage “Understand” repeated.

#### 4. Frame — Turn a broad problem into a shape worth building.

Scope · Priority · User flow · System boundaries · Success criteria become more explicit.

> We define what needs to exist, what does not, and what needs to be decided before implementation can move with confidence.

Visual: messy requirements become a clear product/system surface. Not sticky notes, PM boards, or roadmap templates.

#### 5. Make — Make the important parts tangible early.

Flows become prototypes · system behavior becomes interfaces · technical assumptions become working code · uncertain ideas are tested. Product, UX, and Engineering work together.

Progression idea (static, not animated ribbon): idea → flow → prototype → working interface.

#### 6. Validate — Test the decisions before the system carries them.

Questions: Does the workflow make sense? · Does the software behave correctly? · Do edge cases hold? · Does the implementation match the intent?

Compact validation surface (representative, not fake metrics):

```text
ASSUMPTION — Users will understand the state.
PROTOTYPE — checked
IMPLEMENTATION — checked
CHECK — State visible · Action understandable · Recovery defined
DECISION — Keep
```

Result: **A decision becomes more certain.** No invented user-study percentages.

#### 7. Release — Release is a handoff, not a finish line.

Production · Documentation · Access · Monitoring · Known constraints · Next decisions.

> The team should understand what now exists and how it continues.

May quietly cross-link Cloud & DevOps without duplicating that service page.

#### 8. Continue — The relationship can end. The product doesn't have to.

Some engagements finish after delivery. Others continue through new capability, design refinement, engineering, web/mobile expansion, cloud, AI/automation, or product evolution.

> Continue where continued involvement creates value.

No retainer promise. No managed-services push.

#### 9. Signature — The work gets easier to trust when the decisions are visible.

Representative decision record:

```text
DECISION — Use one shared order record across counter and fulfillment.
WHY — Keeps status, stock, and activity connected.
TRADE-OFF — More deliberate domain modeling.
STATUS — Accepted
```

Quiet companion records: Scope Accepted · UX direction Accepted · Architecture Review · Release Ready.

Strongest visual concept on the page — not a process diagram.

#### 10. Who is involved — The right people join the problem at the right time.

| | |
| --- | --- |
| Product | What are we solving? |
| Design | How should it work? |
| Engineering | What must the system do? |
| Delivery | How does it reach production safely? |

> Not every engagement needs every discipline at every moment.

Live links to existing service pages where natural. Not an org chart.

#### 11. Client responsibilities — Good software is a shared responsibility.

| | |
| --- | --- |
| Context | Bring the people who understand the work. |
| Access | Give the team enough access to systems, data, and constraints. |
| Decisions | Make important product decisions when they become necessary. |
| Feedback | Test the work against reality, not assumptions. |

Clear without sounding contractual.

#### 12. Communication — Clear work needs clear communication.

Visible decisions · Concise updates · Working software · Explicit questions · Known risks.

Principle: **Communication should reduce uncertainty.** No promises of daily Slack or weekly reports unless the real engagement model supports them.

#### 13. Scope and change — The scope can change. The reasoning should remain visible.

> New information changes software projects. When the work changes, the impact on scope, priority, design, engineering, and delivery should be understood before the change quietly becomes part of the project.

Static progression idea: New information → Understand impact → Revisit decision → Adjust scope / priority → Continue. Not a process animation.

#### 14. What a good engagement produces — A good engagement leaves more than software behind.

A clearer product direction · A stronger system model · A usable product experience · Working software · Visible decisions · A foundation for what comes next.

Value without inventing ROI. Not a Results section.

#### 15. When process should change — The process should fit the problem.

> A small focused build should not carry the ceremony of a large platform programme. A regulated workflow may need more validation and control. A new product may need more discovery. The shape of the engagement should reflect the uncertainty and risk in the work.

#### 16. Company areas

Quiet index: About (live) · Process (current) · Technology (gated). No thin placeholders. Careers absent.

#### 17. Final CTA — Not sure where to start?

> Tell us what you're trying to change. We can start from there.

`Start a conversation →` → `/contact`

One CTA. Simple close.

### SEO

- **Title:** `Our Software Development Process | SKYEMBER`
- **Description:** `See how SKYEMBER engagements move from problem understanding and product framing through design, engineering, validation, release, and continued evolution.`
- **H1 / H2:** as in the composition above
- Phrases in sentences where accurate: software development process, software project process, product development process, software engineering process, discovery, product design, software development, validation, deployment — no keyword block
- **Schema:** BreadcrumbList (Home → Company → Process). Site-wide Organization remains canonical. No Service schema. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/company/process` | Registered |
| `/company` Explore Process | Live link activates |
| `/company/about` Company areas Process | Live when routed |
| About | Remains live |
| Technology | Still gated |
| Discipline involvement | Live service links where natural |
| Optional Cloud & DevOps cross-link | Allowed, no composition restyle of that page |
| See our work | `/work` |
| Start a conversation | `/contact` |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: e.g. `resources/views/pages/company/process.blade.php`
- Prefix: `cop-*` (isolated from `co-*` / `coa-*`)
- Script: e.g. `resources/js/company-process.js`, `data-cop-*` hooks only
- Feature tests: page, SEO, breadcrumb, Process current, About live, Technology gated, no homepage process copy dump, no invented timelines/retainers/metrics, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Clearly different from the homepage Process section
- [x] Describes the engagement relationship, not merely development phases
- [x] First conversation is clear
- [x] Discovery framed around understanding, not ceremony
- [x] Decisions made visible
- [x] Product, design, engineering, and delivery feel connected
- [x] Client responsibilities clear without sounding contractual
- [x] Scope/change addressed honestly
- [x] Release treated as a transition, not the end
- [x] Continued engagement optional, not implied
- [x] No invented timelines, prices, retainers, guarantees, or staffing
- [x] No fake client process claims
- [x] Mobile intentionally composed
- [x] SEO useful and semantic
- [x] Motion extremely restrained
- [x] CTA → `/contact`
- [x] About / Technology remain correctly gated

### Out of scope

`/company/technology`, `/insights`, Careers, inventing engagement SLAs, restyling homepage Process or `/company/about`, a CMS, methodology trademark claims.

### Strategic idea

Homepage process says **how we build software**.  
`/company/process` says: **how we work with people while building it.**

## Company Technology brief (Chunk 24)

**Status:** shipped 2026-10-06. Frozen. Do not restyle. Company family complete. Careers absent.

Route: `/company/technology`

Technical and principle-driven — not a stack catalogue. Completes the Company family: why / who / how we work together / how we make technical decisions.

### Job

| Question      | Answer                                                                                                                       |
| ------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| User goal     | Understand how SKYEMBER makes technical decisions without letting technology become the product                              |
| Brand message | Technology is a decision, not an identity — fit, trade-offs, ownership, and lifetime before frameworks                       |
| Visual idea   | Engineering decision records and surfaces — not architecture diagrams, cloud logos, code editors, or server racks            |
| SEO value     | Distinct Technology URL; BreadcrumbList Home → Company → Technology; no Service schema                                       |
| Mobile        | Quiet editorial stack. No huge architecture diagrams squeezed onto the phone                                                 |
| Motion        | Quietest technical page. 0.9s hero settle; 0.9s representative record; optional ~1.6s trade-off beat; otherwise still        |

### Distinction (must stay obvious)

```text
/company              → Why
/company/about        → Who and what
/company/process      → How we work with people
/company/technology   → How we make technical decisions
```

```text
/services/cloud-devops     → how we implement production reliability / observability
/company/technology        → why those architectural decisions exist
/solutions/ai-automation   → what AI-enabled systems can put in place
/company/technology        → AI as an architectural decision, not a solution page
```

Personality to protect:

> **Trade-offs are visible. Complexity must earn its place.**

Do not invent client architectures, scale, uptime, certifications, vendor partnerships, or a logo wall. Do not name Laravel / React / Node / AWS / Docker / Kubernetes / PostgreSQL as the company identity. Stack belongs on project-specific material when relevant and truthful.

### Commercial / trust journey

```text
/company/process (optional)
    ↓
/company/technology
    ↓
Fit before fashion
    ↓
How we decide
    ↓
Same problem, different answers
    ↓
Domain / data / boundaries / security / operations
    ↓
Build vs buy vs integrate
    ↓
/contact
```

### Composition

#### 1. Hero

- Eyebrow: `TECHNOLOGY`
- **H1:** `Technology is a decision, not an identity.`
- Support: We choose technologies, architectures, and operating patterns around the problem, the people, the constraints, and the life the software needs to have.
- Primary: `Start a conversation →` → `/contact`
- Secondary: `See our work →` → `/work`

Quiet, technical, editorial. No dark infrastructure scene, cloud logos, code editor, or server racks.

**Hero visual — the decision surface**

Sophisticated engineering decision record (not an architecture diagram):

```text
TECHNICAL DECISION

Requirement — Many users · Changing workflows · Auditability · Moderate traffic · Existing data
Constraints — Team · Budget · Time · Security · Operations
Decision — Architecture shaped around the actual system
```

Signature: **Trade-offs are visible.** Distinct from Cloud & DevOps (production reliability).

#### 2. Fit before fashion — Choose the architecture for the work it has to do.

| | |
| --- | --- |
| **01 Context** | A technology choice only makes sense in relation to the product, workload, team, users, data, and constraints around it. |
| **02 Trade-offs** | Every architecture gives something and costs something: complexity, flexibility, operational burden, speed, maintainability, or control. |
| **03 Lifetime** | The right solution is not merely the easiest one to start. It should remain understandable and changeable as the software evolves. |

#### 3. How we decide — Start with the decision. Then choose the technology.

Thinking model (no architecture diagram):

| | | |
| --- | --- | --- |
| 01 | Problem | What must the system actually do? |
| 02 | Constraints | What cannot be ignored? |
| 03 | Shape | What architecture fits the behavior? |
| 04 | Trade-offs | What are we gaining and giving up? |
| 05 | Ownership | Can the people operating the system understand and maintain it? |

#### 4. Signature — Good engineering does not start with the framework.

One fictional requirement: **A multi-user operational application with changing workflows and moderate growth.**

Three possible approaches (not a recommendation for every project):

| | Path | Then | Cost |
| --- | --- | --- | --- |
| Option A | Simple application | Low operational complexity | Fastest path |
| Option B | Distributed services | More independent scaling | Higher operational complexity |
| Option C | Managed platform services | Reduced infrastructure burden | Provider constraints |

**Decision:** Choose the smallest architecture that satisfies the actual requirements.

#### 5. Simple until complexity earns its place — Start simple. Add complexity when the problem requires it.

> A distributed architecture, event-driven system, multiple services, or specialized infrastructure can be valuable. But each introduces more boundaries, operational concerns, and failure modes. Complexity should solve a problem rather than demonstrate ambition.

#### 6. What we consider — The decisions behind the system.

| H3 | Question |
| --- | --- |
| Domain | What concepts, relationships, and business rules does the software need to represent? |
| Data | Where does information live, who owns it, how does it change, and what must remain consistent? |
| Interfaces | How do users, applications, services, and external systems interact with the platform? |
| Security | Who is allowed to access what, and where should trust boundaries exist? |
| Operations | How will the system be deployed, observed, changed, and recovered? |
| Evolution | What happens when the product has new requirements six months or three years from now? |

Decision-making, not Product Engineering execution.

#### 7. Security by design — Security is a property of the system, not a final checklist.

Decision surface (not a padlock): Identity · Access · Boundary · Secret · Change · Evidence.

#### 8. Data architecture — The data model often matters more than the framework.

Representative record (ownership + relationships + consistency — not a product-platform visual):

```text
CUSTOMER
    ├── ORDER (items · payment · status)
    └── ACTIVITY
```

> A framework can change. A poorly understood domain model can remain a problem for years.

No claim that databases are always the most important decision.

#### 9. Interfaces and boundaries — Good systems know where one responsibility ends.

Application owns business behavior · API exposes deliberate capabilities · Integration connects external systems · Background work moves non-immediate work out of the request · Infrastructure runs the system.

**Boundaries exist for a reason.** Not a microservices sales pitch.

#### 10. Observability — A system should be able to explain itself.

Logs · Metrics · Traces · Events · Audit.

> Operational visibility begins in the design of the system.

Quiet cross-link: `/company/technology` = why observability matters · `/services/cloud-devops` = how we implement it. Do not duplicate that service page.

#### 11. Technology choices — Use the technology that earns its place.

Categories only (no logo wall): Web · Mobile · Backend · Data · Cloud · AI.

For each: chosen according to the product's requirements, team capability, operational context, and expected lifetime.

> Frameworks change. Good engineering decisions remain understandable.

#### 12. Build vs buy — Not everything should be built.

| | |
| --- | --- |
| Build | When the capability is central to the product or requires specific business behavior. |
| Buy | When an existing product already solves the problem well. |
| Integrate | When the capability belongs outside the system but the workflow needs it connected. |

#### 13. AI as a technical decision — AI is another architectural decision.

> A model is one component in an AI-enabled system. Context, data, tool access, permissions, evaluation, cost, latency, fallback behavior, and human oversight all influence whether the design is appropriate.

Compact visual: MODEL + CONTEXT + TOOLS + RULES + EVALUATION = SYSTEM.

No provider logos, benchmarks, or “AI-first architecture.” Do not duplicate `/solutions/ai-automation`.

#### 14. Representative decision record — The right architecture is the one the system can live with.

Eyebrow: `REPRESENTATIVE ENGINEERING DECISION`. Clearly labeled representative — not a real client's architecture.

```text
Requirement — Multi-user business application
Constraints — Changing workflows · Auditability · Small engineering team
Options — Monolith · Service decomposition · Managed platform
Decision — Start as a modular application.
Why — Lower operational complexity. Clear domain boundaries. Room to split later if needed.
Revisit when — Independent scaling or ownership becomes a real requirement.
```

#### 15. Technology changes — Good decisions can survive changing tools.

> The system should not depend on the assumption that one framework, vendor, or infrastructure product will remain the best choice forever. Strong boundaries, clear domain models, tests, documentation, and observable behavior make change possible.

#### 16. Relationship to services — Technical decisions meet delivery here.

Live links:

| | |
| --- | --- |
| Product Engineering | Turn the architecture into software |
| Web Development | Deliver the experience through the browser |
| Cloud & DevOps | Operate the resulting system in production |

#### 17. Honest exit — Sometimes the best architecture is the one you already have.

> An existing system may have the right foundations even if parts of the experience need improvement. We would rather extend, simplify, or replace selectively than redesign the architecture simply because a new approach is more interesting.

#### 18. Company areas

Quiet index: About (live) · Process (live) · Technology (current). Careers absent.

#### 19. Final CTA — Have a technical decision ahead of you?

> Tell us what the system needs to do, what constraints you're working within, and where the uncertainty is.

`Start a conversation →` → `/contact`

One CTA.

### SEO

- **Title:** `Technology & Engineering Approach | SKYEMBER`
- **Description:** `How SKYEMBER approaches architecture, data, security, integrations, observability, AI, and technology choices for long-lived software systems.`
- **H1 / H2 / H3:** as in the composition above
- Phrases in sentences where accurate: software architecture, technology strategy, technical architecture, software engineering, system design, technology consulting, data architecture, application architecture, cloud architecture, software technology choices — no keyword block
- **Schema:** BreadcrumbList (Home → Company → Technology). Site-wide Organization remains canonical. No Service schema. No FAQPage

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/company/technology` | Registered |
| `/company` Explore Technology | Live link activates |
| About / Process company-areas Technology | Live when routed |
| Product Engineering / Web / Cloud & DevOps | Live service links |
| Optional AI solution mention | Cross-link allowed; no page restyle |
| See our work | `/work` |
| Start a conversation | `/contact` |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: e.g. `resources/views/pages/company/technology.blade.php`
- Prefix: `cot-*` (isolated from `co-*` / `coa-*` / `cop-*`)
- Script: e.g. `resources/js/company-technology.js`, `data-cot-*` hooks only
- Feature tests: page, SEO, breadcrumb, Technology current, About+Process live, no stack catalogue, representative labeled, no Service schema, CTA → `/contact`, Explore Technology activated
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like technical judgment, not a technology catalogue
- [x] Architecture decisions come before specific technologies
- [x] Trade-offs are visible
- [x] Simplicity is valued when appropriate
- [x] Domain / data / boundaries / security / operations / evolution are represented
- [x] Technology names do not dominate the page
- [x] Build vs buy vs integrate is addressed
- [x] AI treated as an architectural decision, not a duplicated solution page
- [x] Representative architecture decisions are clearly labeled
- [x] No fake client architecture, scale, uptime, certifications, or vendor partnerships
- [x] Cloud & DevOps linked without duplicating its page
- [x] Product Engineering and Web Development links are meaningful
- [x] Honest “existing architecture may be enough” exit remains
- [x] Mobile deliberately composed
- [x] SEO useful and semantic
- [x] Motion exceptionally restrained
- [x] CTA → `/contact`
- [x] Technology Explore on `/company` activates only when this route ships

### Out of scope

`/insights`, Careers, stack catalogues, restyling Cloud & DevOps / AI / Process / About, a CMS, inventing vendor partnerships or certifications.

### Strategic idea

`/company/technology` answers: **how SKYEMBER makes technical decisions** — so the Company family is complete without becoming a tool list.

## Insights brief (Chunk 25)

**Status:** shipped 2026-10-06. Frozen with other primary surfaces. No CMS. No placeholder articles published as if they were real. Article slug routes wait for genuine essays.

Route: `/insights`

Editorial intelligence layer — what SKYEMBER thinks about software. Not a blog template, card wall, or keyword mill.

### Job

| Question      | Answer                                                                                                              |
| ------------- | ------------------------------------------------------------------------------------------------------------------- |
| User goal     | See how SKYEMBER thinks when not building a project                                                                 |
| Brand message | A technology company with a point of view — thinking clearly about software                                         |
| Visual idea   | Quiet editorial index: one featured thought + numbered typographic list. No masonry, thumbnails wall, or carousel   |
| SEO value     | Distinct Insights URL; crawlable index; Article JSON-LD only on genuine article pages                               |
| Mobile        | Featured stack, then a beautiful reading index — not six stacked cards                                              |
| Motion        | Mostly still. 0.9s featured settle; rows static; hover 220ms; no ScrollTrigger circus                               |

### Distinction (must stay obvious)

```text
Homepage     → What SKYEMBER does
Work         → What the work looks like
Solutions    → What can be put in place
Services     → How it gets built
Company      → Why SKYEMBER works this way
Insights     → What SKYEMBER thinks about software
```

Do not call the page **Blog**.

Personality to protect:

> **Have a real point of view. Teach something useful. Don't invent data.**

### Commercial / trust journey

```text
/insights
    ↓
One featured idea
    ↓
Editorial index
    ↓
/insights/[slug] (later, genuine articles only)
    ↓
/contact
```

### Composition (index)

#### 1. Hero — editorial, not marketing

- Eyebrow: `INSIGHTS`
- **H1:** `Thinking clearly about software.`
- Support: Perspectives on product, design, engineering, AI, and the systems that make software useful.
- Desktop: featured article occupies the opposite side. No stock image, no “latest articles” wall.

#### 2. One featured thought

One important idea, not a grid. Category · title · short argument · reading time. The featured piece must be a **genuinely written SKYEMBER article** — not fake thought leadership.

Until a real article exists: do not invent a published featured post. The index may ship with an honest empty/featured-reserved state, or wait until the first real article is ready. **Placeholder titles from this brief are editorial directions, not live copy.**

#### 3. Taxonomy (small, stable)

Primary categories — areas of thinking, not technologies:

- Engineering
- Product
- Design
- AI + Systems

Not Laravel / React / AWS / Kubernetes / UX / ML as primary nav. Those may become article subjects later.

Desktop filter: `All · Engineering · Product · Design · AI + Systems`  
Mobile: same list, stacked or wrapping. Filters the already-rendered list. No SPA circus. Category URLs later only if volume justifies them. Primary `/insights` stays crawlable.

#### 4. Browse — What we're thinking about

**H2:** `What we're thinking about`

Vertical editorial list, not cards. Each row: category · title · short summary · reading time · date · arrow. No thumbnail required.

#### 5. Signature — the editorial index itself

Typography + hierarchy. Numbered records (03 / 02 / 01) with year, category, and title. No masonry, image grid, Pinterest layout, or carousel.

#### 6. Authors

Do not invent an editorial team. Publisher/author may be **SKYEMBER** where that is genuinely intended. Real contributors later: Name · Role · Bio · Photo.

#### 7. Close

Quiet path: see a problem you recognize? `Start a conversation →` → `/contact`

No newsletter popup, sticky social bar, or lead overlay.

### Content standard (lock in this brief)

Every published insight must:

- Have a real point of view
- Teach something useful
- Use concrete examples
- Avoid generic AI-generated filler
- State uncertainty where relevant
- Separate opinion from fact
- Not invent data
- Not publish for keywords alone

### Editorial pillars (strategy, not live sections)

| Pillar | Territory |
| --- | --- |
| Engineering | Architecture, quality, testing, performance, production, maintainability |
| Product | Requirements, workflows, software decisions, building vs buying |
| Design | Complex interfaces, IA, design systems, accessibility, interaction |
| AI + Systems | Automation, evaluation, AI boundaries, context, human oversight |

### Seed article directions (not published copy)

3–4 genuinely strong articles later — not ten placeholders.

- **Complexity Should Have to Earn Its Place** (Engineering)
- **The Workflow Is the Product** (Product)
- **Designing the State After the Happy Path** (Design)
- **When an AI Workflow Should Stop and Ask** (AI + Systems)

Each article gets its own visual thesis in SKYEMBER's existing language (decision record, workflow surface, interface states, controlled automation) — not generic stock.

### Future article page (`/insights/[slug]`)

Do not register slug routes until a real article exists.

Architecture: Category · Title · Summary · Author / date / reading time · Hero visual · Body · Related insights · About SKYEMBER · `Start a conversation →` `/contact`

Clean editorial reading. No intrusive chrome.

### Data (frontend phase)

Static Blade data only. Eventual fields: Title, Slug, Category, Excerpt, Author, Published, Updated, Reading time, Hero, Body, SEO title/description, Canonical.

Later: Database → Insight model → Admin → Blade. **Not this chunk.**

No site-wide search until volume justifies it.

### SEO (index)

- **Title:** `Insights on Software, Product & Engineering | SKYEMBER`
- **Description:** `SKYEMBER insights on software engineering, product development, UX design, AI automation, architecture, and building systems that last.`
- **H1:** Thinking clearly about software.
- **H2:** Featured (if a real featured article exists) · What we're thinking about
- Do **not** add four category H2s if those labels are only filters
- **Schema (index):** BreadcrumbList (Home → Insights). Site-wide Organization remains canonical. No Article JSON-LD on the index. No FAQPage
- **Schema (future articles):** Article + BreadcrumbList only when the page is a genuine article (`author`, `datePublished`, `dateModified`)

Phrases in sentences where accurate: software engineering, product development, UX design, AI automation, architecture — no keyword block.

### Link and nav, when the page is built

| Control | Change |
| --- | --- |
| GET `/insights` | Registered |
| Insights in primary nav | Live, current on this page (desktop + mobile) |
| Featured / rows | Link only to real `/insights/[slug]` routes |
| Category URLs | Not in this chunk unless content volume exists |
| Start a conversation | `/contact` |
| Frozen pages | No composition restyles |

### CSS / implementation notes (for the build chunk)

- Page: e.g. `resources/views/pages/insights.blade.php`
- Prefix: `ins-*` (isolated)
- Script: e.g. `resources/js/insights.js`, `data-ins-*` hooks only
- Feature tests: page, SEO, Insights nav live, no Blog wording, no fake authors, no placeholder articles-as-live, BreadcrumbList, CTA → `/contact`
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Feels like an editorial publication, not a blog template
- [x] One strong featured idea leads (when a real article exists)
- [x] Vertical editorial index, not a card wall
- [x] Categories few and meaningful
- [x] Engineering / Product / Design / AI + Systems feel like SKYEMBER
- [x] No fake authors or editorial credentials
- [x] No placeholder articles published as if they were real
- [x] Article pages have a clear future architecture
- [x] SEO supports genuine editorial content
- [x] Article structured data only on real articles
- [x] Search not introduced prematurely
- [x] Mobile reads like an editorial index
- [x] Motion almost entirely restrained
- [x] Work/contact paths remain clear
- [x] No homepage restyling

### Out of scope

CMS, database, admin, article slug routes without real copy, category archive URLs, site search, newsletter, fake bylines, restyling Company/Services/Work, Careers.

### Strategic idea

Work shows **what we build**. Company shows **why we work this way**.  
`/insights` shows: **how we think about the industry.**

### Shipped

`resources/views/pages/insights.blade.php`, `ins-*` rules, `resources/js/insights.js`, GET `/insights`, Insights primary nav live. Featured thesis gated until a genuine essay exists. Directions are editorial, not live articles.

## Genuine editorial content brief (Chunk 26)

**Status:** editorially approved 2026-10-06. Four genuine essays exist as unpublished markdown. Publication architecture is Chunk 27 — do not implement routes in this chunk.

Essay 01 unpublished copy: `docs/insights/01-the-workflow-is-the-product.md`.
Essay 02 unpublished copy: `docs/insights/02-complexity-should-have-to-earn-its-place.md`.
Essay 03 unpublished copy: `docs/insights/03-designing-the-state-after-the-happy-path.md`.
Essay 04 unpublished copy: `docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md`.

The publishing shell is already honest. The next work is SKYEMBER's actual point of view — not SEO articles or generic agency thought leadership.

### Editorial position

SKYEMBER should sound like a company that has **done the work**, not one trying to sound clever about technology.

The writing should be:

- precise without being academic
- opinionated without becoming absolute
- practical without becoming tutorial-like
- calm rather than promotional
- interested in systems, decisions, constraints, and consequences
- comfortable saying **“sometimes the answer is simpler”**
- written for experienced product, business, design, and engineering readers

Avoid:

- “In today’s fast-paced digital world…”
- AI-generated thought-leadership language
- generic lists such as “5 ways to…”
- keyword stuffing
- exaggerated claims
- invented project outcomes
- pretending every problem needs AI
- conclusions that simply become a sales pitch

### Four essays (intentionally small and strong)

| # | Category | Title |
| --- | --- | --- |
| 01 | Product | The Workflow Is the Product |
| 02 | Engineering | Complexity Should Have to Earn Its Place |
| 03 | Design | Designing the State After the Happy Path |
| 04 | AI + Systems | When an AI Workflow Should Stop and Ask |

Publishing order matches that table. Essay 01 is foundational.

---

### 01 — Product: The Workflow Is the Product

**Thesis**

Most business software is understood as a collection of screens.

The better unit of design is the **workflow**: what needs to happen, who needs to decide, what information needs to move, what can go wrong, and what needs to remain traceable afterward.

A good interface makes the workflow easier to understand. A good system makes the workflow possible.

**Opening**

A user rarely thinks: “I need a dashboard.” They think: “I need to know what happens next.”

Move from screens → tasks → decisions → system state.

**Core argument**

A workflow has:

`Trigger → Context → Decision → Action → State → Continuation`

The important design questions therefore become:

- What started this?
- What does the person need to know now?
- What decision are they making?
- What changes after that decision?
- Who needs to see that change?
- What happens when the expected path breaks?

**Concrete example**

Use the representative business-operations system carefully. A sale is not simply `Product → Quantity → Checkout`. It can involve `availability → reservation → batch selection → pricing → fulfillment → payment → trace`. The interface is only the visible portion.

**Closing**

The strongest business software does not merely make screens easier to use. It makes the underlying work easier to understand.

**CTA:** See how we approach business software → `/solutions/business-software`

**Hero visual:** `Trigger → Decision → State → Continuation`

**Planned slug (later):** `the-workflow-is-the-product`

---

### 02 — Engineering: Complexity Should Have to Earn Its Place

**Thesis**

Complexity is not inherently bad. Unnecessary complexity is.

Architecture should become more complicated only when the problem genuinely requires another boundary, another state, another dependency, or another operational responsibility.

**Opening**

Software teams often treat complexity as evidence of sophistication. A system with more services, abstractions, queues, layers, frameworks, and infrastructure can look more “serious” than a simpler system. That is the wrong measure.

**Core argument**

Every piece of complexity introduces a cost.

- `New service → deployment boundary`
- `New dependency → failure mode`
- `New abstraction → mental model`
- `New state → edge cases`
- `New integration → operational responsibility`

The question is not “Can we make the architecture more advanced?” It is “What problem does this complexity solve?”

**Useful principle**

Introduce complexity when it creates a meaningful capability: scale, isolation, reliability, organizational boundaries, security, or domain complexity require it. Do not introduce it merely because it is fashionable.

**Closing**

Good architecture is not the architecture with the most parts. It is the architecture where each important part has a reason to exist.

**CTA:** See how we make technical decisions → `/company/technology`

**Hero visual:** `Requirement → Boundary → Cost`

**Planned slug (later):** `complexity-should-have-to-earn-its-place`

---

### 03 — Design: Designing the State After the Happy Path

**Thesis**

The normal flow is rarely where software becomes difficult.

Difficulty appears after the expected flow: an item is unavailable, data is incomplete, a request fails, a person lacks permission, a process is interrupted, or someone needs to recover from a mistake.

That is where product quality becomes visible.

**Opening**

A prototype usually starts here: `Choose → Continue → Confirm`. Production software does not stay there.

Soon it becomes: `Choose → unavailable` · `Continue → validation error` · `Confirm → permission denied` · `Save → network interruption` · `Complete → something still needs attention`

**Core argument**

Each meaningful state is part of the product. Design therefore has to account for: empty, loading, partial, unavailable, invalid, restricted, interrupted, recoverable, completed, irreversible.

The user should never have to guess: What happened? What can I do now? What will happen if I continue? Can I recover?

**Design principle**

Do not treat edge cases as decoration added after the “real” interface. The states are the interface.

**Closing**

A polished happy path can demonstrate a concept. The quality of everything around it determines whether the software can actually be trusted.

**CTA:** See how we approach product experience → `/services/ui-ux-design`

**Hero visual:** `Expected → Interrupted → Recovered`

**Planned slug (later):** `designing-the-state-after-the-happy-path`

---

### 04 — AI + Systems: When an AI Workflow Should Stop and Ask

**Thesis**

A useful AI system is not one that tries to make every decision automatically.

Sometimes the most intelligent behaviour is recognizing uncertainty and handing the decision back to a person.

**Opening**

Automation is often described as `input → AI → answer`. Real operational systems are more complicated.

Sometimes the correct flow is `input → understand → decide → confidence check → act`. And sometimes: `input → understand → uncertainty → ask`.

**Core argument**

AI should operate within explicit boundaries. A production AI workflow needs to know: what it is allowed to decide, what it can recommend, what requires evidence, when uncertainty is too high, when a human must approve, what should be recorded, and how the decision can later be reviewed.

**The important distinction**

**Automation before autonomy.** Automate deterministic work first. Use AI where interpretation, classification, summarization, extraction, or reasoning creates genuine value. Do not give an AI system authority simply because it can produce a convincing answer.

**Example flow:** `Understand → Decide → Confidence / policy check → Act` or `Escalate`

**Closing**

An AI system earns trust not by appearing certain. It earns trust by knowing when certainty is unavailable.

**CTA:** See our approach to AI and automation → `/solutions/ai-automation`

**Hero visual:** `Understand → Decide → Act / Ask`

**Planned slug (later):** `when-an-ai-workflow-should-stop-and-ask`

---

### Editorial design rules

**Length:** approximately 1,200–1,800 words each. Substantial without becoming white papers. Short paragraphs, strong subheadings, diagrams where they clarify, occasional highlighted principles.

**Visual language:** Keep the existing `/insights` aesthetic. No generic article hero imagery. Each essay gets a small conceptual visual — an extension of the site's product-system language, not a decorative illustration.

**Author:** SKYEMBER until there are genuine named contributors and an actual editorial authorship model. Do not invent individual authors.

**Dates:** Do not manufacture publishing dates to make the site look established. Assign real publication dates when essays are approved and published.

**Metadata to prepare with the copy (not a model yet):** title, slug, category, excerpt, body, author, published_at, reading_time, hero_visual, seo_title, seo_description.

### Out of scope for this chunk

`/insights/[slug]` routes, Article JSON-LD, Insight model, admin/CMS, database, fabricated bylines or dates, restyling `/insights`, category archive URLs, site search.

### Quality gate (when copy is written)

- [x] Reads like SKYEMBER's actual point of view, not agency thought leadership
- [x] Precise, opinionated, practical, calm
- [x] No invented outcomes or keyword stuffing
- [x] Representative BOP example used carefully where relevant
- [x] CTAs point at existing proof/practice pages, not a sales close
- [x] Author remains SKYEMBER; dates remain unpublished until live
- [x] Essay 01 establishes voice before 02–04 are finished

### Next after editorial approval

Chunk 27: Insights publication architecture. Routes, Article JSON-LD, and index ungating wait for that brief to be accepted.

## Insights publication architecture brief (Chunk 27)

**Status:** shipped 2026-10-06. `/insights` index composition stays frozen — connected to real essays, not redesigned. No CMS. Author SKYEMBER. `published_at` 2026-10-06.

Route: `/insights/{slug}` for the four genuine essays only.

Essay 04 source of truth (confirmed on disk): `docs/insights/04-when-an-ai-workflow-should-stop-and-ask.md`.

### Job

| Question      | Answer                                                                                                              |
| ------------- | ------------------------------------------------------------------------------------------------------------------- |
| User goal     | Read a genuine SKYEMBER essay, then continue to related thinking or `/contact`                                      |
| Brand message | A considered point of view, now readable — not a publishing shell waiting for copy                                  |
| Visual idea   | Quiet editorial reading: category, title, conceptual hero, long-form body. Not a blog template                      |
| SEO value     | Article URLs; Article + BreadcrumbList; canonical and OG from real copy                                             |
| Mobile        | Long-form reading. Type and measure first. No compressed desktop chrome                                             |
| Motion        | Mostly still. Optional 0.9s hero-visual settle. Hover 220ms. No ScrollTrigger circus                                |

### Distinction (must stay obvious)

```text
/insights            → the editorial index (composition frozen)
/insights/[slug]     → one genuine essay
Work / Solutions     → proof of what gets built
/contact             → conversion
```

Do not call article pages **Blog posts**.

### Commercial / trust journey

```text
/insights
    ↓
Featured essay / index row
    ↓
/insights/[slug]
    ↓
Related essay or essay CTA (existing SKYEMBER page)
    ↓
/contact
```

### Four published essays (when this chunk ships)

| Order | Category | Title | Slug | Essay CTA |
| --- | --- | --- | --- | --- |
| 01 | Product | The Workflow Is the Product | `the-workflow-is-the-product` | `/solutions/business-software` |
| 02 | Engineering | Complexity Should Have to Earn Its Place | `complexity-should-have-to-earn-its-place` | `/company/technology` |
| 03 | Design | Designing the State After the Happy Path | `designing-the-state-after-the-happy-path` | `/services/ui-ux-design` |
| 04 | AI + Systems | When an AI Workflow Should Stop and Ask | `when-an-ai-workflow-should-stop-and-ask` | `/solutions/ai-automation` |

Featured thought on the index: Essay 01 (foundational).

Copy lives in `docs/insights/01-…` through `04-…`. Do not rewrite essays in this chunk except for mechanical publish metadata (`published_at`, reading time).

### Index connection (not a restyle)

On `/insights` only:

- Ungate featured + rows that match these four slugs
- Remove “essay forthcoming” / gated copy for those four
- Keep layout, type, filters, hero, close, and `ins-*` composition as shipped
- Invalid or future slugs remain absent until they exist

### Essay page composition

Accessible article structure:

1. Breadcrumb: Home / Insights / Title
2. Category
3. H1 title
4. Excerpt
5. Byline: **SKYEMBER** · real publication date · reading time
6. Conceptual hero visual (the four sequences below — not stock photography)
7. Body from the approved essay (semantic headings, short paragraphs, highlighted principles)
8. Essay-specific CTA (table above)
9. Related insights (the other three — typographic list, not a card wall)
10. Quiet close: `Start a conversation →` `/contact` (Work may remain a secondary proof path)

Hero visuals:

- 01: `Trigger → Context → Decision → Action → State → Continuation`
- 02: `Requirement → Boundary → Cost`
- 03: `Expected → Interrupted → Recovered`
- 04: `Understand → Decide → Act / Ask`

### Data / “model”

Appropriate to four genuine essays in the frontend phase:

- Static catalog (PHP array or small class), not Eloquent, not a database, not admin
- Fields: title, slug, category, excerpt, body, author, published_at, reading_time, hero_visual, seo_title, seo_description, cta_label, cta_route
- Author is always **SKYEMBER**
- `published_at` / `dateModified` = the real date Chunk 27 ships — do not backdate to look established
- Unknown `{slug}` → HTTP 404 (Laravel abort). No soft “coming soon” article page

Later: Database → Insight model → Admin. **Not this chunk.**

### SEO (article)

- Title / description from each essay’s prepared `seo_title` / `seo_description`
- Canonical: `https://…/insights/{slug}`
- Open Graph / Twitter from the same metadata
- **Schema:** `Article` + `BreadcrumbList` (Home → Insights → Title)
  - `author`: Organization / SKYEMBER (consistent with site-wide Organization)
  - `datePublished` and `dateModified` only with real dates
- Index keeps BreadcrumbList only — no Article JSON-LD on `/insights`
- No FAQPage

### CSS / implementation notes

- Essay pages: e.g. `resources/views/pages/insights/show.blade.php` (or equivalent)
- Prefix: `inse-*` (isolated so index `ins-*` stays frozen)
- Script: e.g. `resources/js/insights-essay.js`, `data-inse-*` only
- Route: `GET /insights/{slug}` named `insights.show`, constrained to the four slugs
- Feature tests: each slug 200; unknown slug 404; Article + BreadcrumbList; author SKYEMBER; no Blog; index links live; CTA destinations; no fake metrics language
- Check 320, 390, 768, 1024, 1440

### Quality gate

- [x] Four genuine essays reachable
- [x] Index connected, not redesigned
- [x] Invalid slug 404s
- [x] Author is SKYEMBER; dates are real publish dates
- [x] Article + BreadcrumbList only on essay pages
- [x] Related essays are a reading list, not a card wall
- [x] Conceptual heroes, not stock images
- [x] Essay CTAs point at existing SKYEMBER pages
- [x] `/contact` remains the conversion path
- [x] No CMS/database/admin
- [x] Frozen surfaces untouched

### Out of scope

CMS, database, admin, category archives, site search, newsletter, named individual authors, inventing publish history, restyling `/insights` or other shipped pages, additional essays.

### Strategic idea

The index already says SKYEMBER has a point of view.  
Chunk 27 lets a visitor **read it**.

### Shipped

`App\Insights\EssayCatalog`, `InsightsEssayController`, `GET /insights/{slug}`, `pages/insights/show.blade.php`, `inse-*` rules, `insights-essay.js`. Index featured + rows ungated. `published_at` 2026-10-06.

## Sitewide final quality pass brief (Chunk 28)

**Status:** shipped 2026-10-06. No new marketing page. Frozen compositions stayed frozen. `ins-*` not restyled. `inse-*` remains isolated to essay pages.

The public IA is complete. The next work is a whole-product polish pass so the site can be considered a finished frontend.

### Job

| Question      | Answer                                                                                         |
| ------------- | ---------------------------------------------------------------------------------------------- |
| User goal     | Move through a complete site without dead ends, fake claims, or broken chrome                  |
| Brand message | Careful and finished — not still assembling                                                    |
| Visual idea   | None. Audit and defect-only polish                                                             |
| SEO value     | Consistent metadata/schema; crawlable sitemap; honest robots                                   |
| Mobile        | Keyboard, menu, overflow, 404, reduced motion as a visitor meets them                          |
| Motion        | Review cost; do not add sequences                                                              |

### Public surface (audit all of these)

```text
/
/contact
/work
/work/business-operations-platform
/solutions
/solutions/business-software
/solutions/saas-products
/solutions/custom-platforms
/solutions/ai-automation
/services
/services/product-engineering
/services/ui-ux-design
/services/web-development
/services/mobile-development
/services/cloud-devops
/company
/company/about
/company/process
/company/technology
/insights
/insights/the-workflow-is-the-product
/insights/complexity-should-have-to-earn-its-place
/insights/designing-the-state-after-the-happy-path
/insights/when-an-ai-workflow-should-stop-and-ask
unknown URL → 404
```

### SEO

- Title / description / canonical consistency (`<x-seo />` on every public page)
- OG + Twitter present and matching the page (essay pages already `og:type=article`)
- XML sitemap covering the live public URLs above (currently missing)
- `robots.txt`: allow public site; add `Sitemap:` once a sitemap exists (current file is allow-all with no sitemap line)
- Structured data: Organization site-wide; page types already shipped stay accurate; Article only on genuine essays; no FAQPage invention
- Internal-link integrity: every `href` on public pages resolves or is honestly ungated

### Accessibility

- One H1; heading order without skipped levels where it matters
- Landmarks: skip link, header, nav, main, footer
- Keyboard navigation and visible focus
- Links vs buttons used correctly
- `prefers-reduced-motion` still skips sequences
- Contrast on text, muted, borders, CTAs

### Performance

- JS that never runs on a given page should remain cheap (boot already no-ops missing roots)
- Image dimensions / font loading
- Animation cost vs benefit
- Layout shift (fonts, images, hero visuals)
- Responsive rendering 320–1440
- Production bundle review (no surprise growth for this chunk)

### UX

- Nav labels, order, and `aria-current` on hubs and children
- CTA destinations: `/contact` conversion; Work as proof
- Custom 404 that feels like SKYEMBER (Laravel default error view today — no branded `resources/views/errors/404.blade.php`)
- Mobile menu open/close, focus, escape
- No theatrical cross-page transitions
- Visual consistency: do **not** restyle frozen surfaces to “harmonize”; only fix defects that make a surface broken or dishonest

### Integrity

- No placeholder/fake claims, authors, metrics, clients, or “forthcoming” leftovers on live destinations
- No dead links
- No orphan public pages
- `ins-*` unchanged except a proven defect
- `inse-*` only on essay pages

### Allowed artifacts when accepted

These are sitewide infrastructure, not new product pages:

- `sitemap.xml` (static or generated from the live route list)
- `robots.txt` Sitemap line
- Branded 404 using existing tokens/shell
- Tests that lock metadata, sitemap, 404, and “no Blog / no forthcoming on live essays”
- Defect fixes discovered in the audit

### Out of scope

New essays, CMS, admin, database, category archives, search, newsletter, Careers, restyling homepage / Work / Solutions / Services / Company / Insights compositions, adding motion, inventing schema.

### Quality gate

- [x] Every public URL in the list above is audited
- [x] Sitemap + robots are production-honest
- [x] 404 is on-brand and useful (home / insights / contact)
- [x] No dead internal links
- [x] No fake claims on live pages
- [x] Frozen compositions not restyled
- [x] `inse-*` still isolated
- [x] Reduced motion still respected
- [x] Production build still clean

### Strategic idea

Stop expanding. Make the complete IA **trustworthy at the edges**.

### Shipped

`App\Support\PublicCatalog`, `SiteSeoController`, `GET /sitemap.xml`, `GET /robots.txt`, `errors/404.blade.php` (`err-*`), `<x-seo />` optional robots, mobile-nav Escape. `SiteQualityPassTest`.