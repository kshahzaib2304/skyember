# SKYEMBER SEO Architecture

## Principles

- Server-rendered Blade HTML for all important content
- Semantic elements: `header`, `nav`, `main`, `section`, `footer`, headings in order
- Animation never replaces crawlable text
- One clear H1 per page

## Per-page metadata

Use `<x-seo />` with:

- `title` - unique, brand at end or start consistently
- `description` - ≤ ~160 chars, specific
- `canonical` - absolute URL
- Open Graph + Twitter tags
- Optional `image` for OG

### Home (Chunk 1–2)

- **Title:** `SKYEMBER - Software that moves business forward`
- **Description:** Design and engineering of custom software, business platforms, and digital products for organizations that need more than off-the-shelf tools.
- **H1:** Hero only - “Software built for the way business actually works.”
- **H2:** Capabilities - “Software shaped around how your business actually works.”
- **H2:** Product proof - “Software should be experienced, not described.”
- **H2:** Selected work - “Software built around a real business.”
- **H2:** Process - “Good software is built with intent, not momentum.” The five stages are an ordered list, not extra H3s.
- **H2:** Final CTA - “Have something worth building?”
- **H3:** Business software · Digital products · AI + automation · Cloud + engineering · Sales order SO-10482 · Business Operations Platform
- **H4:** Release, Runtime, Foundation (inside Cloud + engineering)

The proof paragraph carries “custom software platform”, “business workflow”, and “software engineering” once. The order itself is the content. Do not add a second keyword paragraph around the interface.

Selected work is one sentence plus metadata (Industry, Scope, Platform). Labels inside the plate are the story. No keyword block. Do not link `/work/business-operations-platform` until that route exists.

Process is the H2 plus the ordered list. No keyword block around it.

The final CTA is that H2, one sentence, and the action “Start a conversation”, which links to `/contact`.

### Contact

- **Title:** `SKYEMBER - Contact`
- **Description:** Send SKYEMBER a short brief about the software you need, or write to info@skyember.com. We read it and reply with a clear next step.
- **H1:** “Tell us what you're trying to solve.”
- **Schema:** sitewide Organization, plus ContactPage and BreadcrumbList on this URL only

The Organization description is the company line on every page. It does not swap in the contact blurb. The contact point is `info@skyember.com` and `/contact`. No phone, no address, no Service schema.

### Work (Chunk 8)

- **Title:** `SKYEMBER - Work`
- **Description:** Selected work from SKYEMBER: problems turned into software. Three representative systems, beginning with a business operations platform.
- **H1:** “Problems turned into software.”
- **H2:** Business Operations Platform · Field Service Record · Catalog Change
- **Schema:** CollectionPage, BreadcrumbList, and an ItemList of those three names and sentences. Omit `url` on each item until a case study exists. No Review and no Article

“Additional work” is a label, not a heading. Do not link `/work/business-operations-platform` until that route exists. Do not add a keyword block under the H1.

### Case study — Business Operations Platform (Chunk 9)

- **Title:** `Business Operations Platform — SKYEMBER`
- **Description:** A representative business software system connecting pharmacy orders, inventory, batch workflows, reservations, and operational records.
- **H1:** Business Operations Platform
- **H2:** The work is more complicated than the transaction. · One order. Everything it depends on. · Designing around constraints. · The order is only one part of the system. · Designed around the work, not the software. · Software that respects the workflow. · What the system is designed to make possible. · Have a workflow this complicated?
- **H3:** Batch selection · Reservation · Traceability · Workflow
- **Schema:** BreadcrumbList only for this URL (Home → Work → Business Operations Platform). No Article, Review, or fake client Organization. When live, `/work` ItemList may add `url` for this item only

Phrase guidance (in sentences, once each is enough): business software, custom software development, pharmacy operations, inventory workflows, FEFO, software engineering, web application. No keyword block. No Results metrics.

### Solutions (Chunk 10)

- **Title:** `SKYEMBER - Solutions`
- **Description:** Choose the SKYEMBER system shape that matches your work: business software, SaaS products, custom platforms, or AI automation.
- **H1:** “Software for the decision in front of you.”
- **H2:** Business software · SaaS products · Custom platforms · AI & automation · Not sure which path fits?
- **Schema:** CollectionPage, BreadcrumbList, ItemList. Omit child `url` values until each solution route exists. No Service schema yet

Do not turn the page into a keyword block. Do not link child solution URLs until those routes exist.

### Business software (Chunk 11)

- **Title:** `Custom Business Software Development | SKYEMBER`
- **Description:** Custom business software built around your workflows, records, rules, and teams — from operational systems to connected business platforms.
- **H1:** Business software, shaped around the way your business runs.
- **H2:** When the business outgrows the tools around it. · Choose business software when the workflow itself is the problem. · What we put in place. · The software follows the rules of the business. · See one workflow in practice. · We start with the workflow, not the software. · Sometimes the answer isn't custom software. · Have a business workflow worth improving?
- **H3:** Operations · Inventory & assets · Commercial & finance · Management & control · Roles · Approvals · Business rules · Traceability
- **Schema:** BreadcrumbList. `Service` only with accurate properties — no fake offers or ratings. No FAQPage

Phrase guidance in sentences where accurate: custom business software, business software development, operational systems, workflow software, ERP, inventory management, business workflows, web applications, software engineering. No keyword block. No Results metrics.

### SaaS products (Chunk 12)

- **Title:** `SaaS Product Development Company | SKYEMBER`
- **Description:** We design and engineer SaaS products around clear user problems, repeatable workflows, and foundations built to evolve.
- **H1:** Turn a repeatable problem into a product people can use.
- **H2:** A product is more than the first release. · Choose SaaS when the product needs to become part of the user's routine. · What we put in place. · A SaaS product is not a feature pile. · The foundation has to support the product, not fight it. · Start with the workflow people will return to. · From product idea to product ownership. · Sometimes the product should stay internal. · Have a product idea worth testing?
- **H3:** Product foundation · Core experience · Product operations · Product evolution · Shape · Design · Build · Launch · Evolve
- **Schema:** BreadcrumbList. Accurate `Service` only. No FAQPage. Do not present the Business Operations case study as SaaS proof

Phrase guidance in sentences where accurate: SaaS development, SaaS product development, SaaS product design, software product development, web application development, multi-user software, product engineering. No keyword block. No MRR or traction claims.

### Custom platforms (Chunk 13)

- **Title:** `Custom Platform Development | SKYEMBER`
- **Description:** Custom platforms that connect workflows, users, data, and digital experiences when separate systems no longer work as one.
- **H1:** One platform for the work between systems.
- **H2:** The difficult part is what happens between the systems. · Choose a custom platform when the system is bigger than one screen. · A platform is a foundation for experiences. · A platform is not several applications glued together. · Complex underneath. Clear on the surface. · Built for the people who operate the system. · One foundation. Several ways to work. · Start with the system, not the screens. · Sometimes a platform is more than you need. · Have a system that no longer fits in separate tools?
- **H3:** Shared domain · Connected experiences · Workflow + rules · Extension points · Boundaries · Ownership · Consistency · Extensibility · Identity · Permissions · Auditability · Reliability · Administration · Evolution · Map · Model · Shape · Engineer · Evolve
- **Schema:** BreadcrumbList. Accurate `Service` only. No FAQPage. Do not present the Business Operations case study as platform proof

Phrase guidance in sentences where accurate: custom platform development, enterprise platforms, digital platforms, platform engineering, custom software platform, workflow platform, web platform, system integration, business platform. No keyword block. No fake scale, uptime, or stack lists.

### AI & automation (Chunk 14)

- **Title:** `AI Automation & AI Agent Development | SKYEMBER`
- **Description:** AI automation and agentic workflows designed around real business processes, with context, controls, evaluation, and human oversight.
- **H1:** Make the work move without making the system harder to trust.
- **H2:** Not every task needs AI. · Choose AI and automation when the work contains a repeatable decision. · Intelligence where it earns its place. · Start with automation. Add autonomy only when it earns it. · Useful AI has boundaries. · The system needs to know when it is wrong. · The model is rarely the whole system. · A workflow that knows when to act—and when to ask. · Sometimes the best automation is no automation. · Start with the workflow. · Have work worth automating?
- **H3:** Understand · Decide · Act · Escalate · Context · Controls · Evaluation · Oversight · Map · Identify · Prototype · Evaluate · Harden
- **Schema:** BreadcrumbList. Accurate `Service` only. No FAQPage. Do not present the Business Operations case study as AI proof

Phrase guidance in sentences where accurate: AI automation, AI agents, AI agent development, workflow automation, business process automation, intelligent automation, AI workflows, AI integration, human-in-the-loop AI, AI evaluation. No keyword block. No fake accuracy, savings, ROI, or traction.

### Services index (Chunk 15)

- **Title:** `Software Development Services | SKYEMBER`
- **Description:** Product engineering, UI/UX design, web and mobile development, and cloud & DevOps services for custom software and digital products.
- **H1:** The disciplines behind software that works.
- **H2:** One system. The disciplines it needs. · Product Engineering · Other disciplines · The disciplines change. The system stays one. · What each discipline changes. · Bring us in where the product needs more than a specification. · Specialist when it matters. Integrated when it counts. · See the work behind the disciplines. · Not every project needs every discipline. · Know what needs to be built?
- **H3:** UI/UX Design · Web Development · Mobile Development · Cloud & DevOps · Product Engineering (also under “What each discipline changes”)
- **Schema:** BreadcrumbList (Home → Services). Accurate overall `Service` only. Child Service schemas wait for child pages. No FAQPage

Phrase guidance in sentences where accurate: software development services, product engineering, UI/UX design, web development, mobile app development, cloud and DevOps, custom software development. No keyword block. No fake clients, results, team size, certifications, or technology partnerships.

### Product Engineering (Chunk 16)

- **Title:** `Product Engineering Services | SKYEMBER`
- **Description:** Product engineering from product direction and UX through architecture, software development, testing, and production delivery.
- **H1:** From product intent to production software.
- **H2:** The hardest part is the distance between an idea and software people can rely on. · Bring Product Engineering in when the product needs to become real. · The disciplines stay connected. · One product. One connected engineering effort. · Built beyond the happy path. · The interface is part of the engineering. · The system behind the interface has to make the experience possible. · Confidence is designed into the delivery. · Technology should serve the product. · See one system where product, experience, and engineering meet. · You may not need the full discipline. · Have a product that needs to become real?
- **H3:** Product direction · Experience · Engineering · Quality + delivery · Domain · State · Data · Integration · Quality
- **Schema:** BreadcrumbList (Home → Services → Product Engineering). Accurate `Service` only. No FAQPage. BOP proof carefully scoped — do not claim mobile/cloud expertise from it

Phrase guidance in sentences where accurate: product engineering, product engineering services, digital product development, software product development, full-stack development, software architecture, frontend engineering, backend engineering, product design, software testing. No keyword block. No fake coverage, clients, or scale.

### UI/UX Design (Chunk 17)

- **Title:** `UI/UX Design Services | SKYEMBER`
- **Description:** UI/UX design for complex software: research, information architecture, interaction design, design systems, prototyping, responsive and accessible interfaces.
- **H1:** Make complex software easier to understand.
- **H2:** Good interfaces solve more than visual problems. · Bring UI/UX in when people are struggling with the software. · From user need to usable system. · A good interface carries the decision with it. · A product should not reinvent itself on every screen. · The design has to survive outside the mockup. · Prototype the question before building the answer. · The design gets better when someone tries to use it. · The screen is only one expression of the product. · Clarity is the feature. · Design does not stop at the handoff. · Sometimes the interface isn't the real problem. · Have software people need to understand?
- **H3:** Research · Structure · Interaction · Systematize · Validate · Responsive · Accessible · Content · States
- **Schema:** BreadcrumbList (Home → Services → UI/UX Design). Accurate `Service` only. No FAQPage. No fake research results or outcome claims

Phrase guidance in sentences where accurate: UI/UX design, UX design services, UI design, product design, user research, information architecture, interaction design, design systems, usability testing, accessible design, responsive design, prototyping. No keyword block.

### Web Development (Chunk 18)

- **Title:** `Web Development Services | SKYEMBER`
- **Description:** Responsive web development focused on application behavior, performance, accessibility, SEO, and production-ready frontend experiences.
- **H1:** Web experiences built for the real world.
- **H2:** The design changes when the screen becomes real. · Bring Web Development in when the experience has to work beyond the mockup. · The web is part of the product, not the delivery format. · One experience. Different conditions. · Fast is part of the interface. · The browser should not decide who can use the product. · Search should understand what the visitor can see. · Real web products have states. · Production frontend is more than markup. · The web experience depends on the system behind it. · Designed to survive outside the happy path. · Design and implementation should agree. · When the web is part of the larger product. · Sometimes the web is not the right surface. · Start with the experience the browser needs to deliver. · Have a web experience worth building properly?
- **H3:** Responsive implementation · Application behavior · Performance · Accessibility · Content + discoverability
- **Schema:** BreadcrumbList (Home → Services → Web Development). Accurate `Service` only. No FAQPage. No promised LCP/INP/CLS numbers

Phrase guidance in sentences where accurate: web development, web application development, responsive web development, frontend development, web app development, accessible websites, web performance, technical SEO, frontend engineering. No keyword block.

### Mobile Development (Chunk 19)

- **Title:** `Mobile App Development Services | SKYEMBER`
- **Description:** Mobile app development for iOS and Android, with platform-aware UX, device capabilities, offline behavior, accessibility, testing, and reliable release workflows.
- **H1:** Software built for the moment it is used.
- **H2:** A phone changes the conditions of the work. · Bring Mobile Development in when the work needs to leave the desktop. · Mobile is a product surface, not a smaller viewport. · Design for the moment, not the screen. · One product. Platform-aware experiences. · The app is more than its first screen. · Performance is felt in the hand. · The platform already gives people ways to interact. Use them. · Design on devices, not just in a browser tab. · One task, designed for the hand. · The interaction model comes before the platform code. · Mobile is part of the product, not a separate island. · Sometimes mobile complements the web. Sometimes it replaces it. · Sometimes an app isn't the right answer. · Start with the moment of use. · Have a task that belongs in the hand?
- **H3:** Platform-native experience · Touch + navigation · Device capabilities · Offline + sync · Lifecycle + release · Context · Focus · Design · Build · Validate · Release
- **Schema:** BreadcrumbList (Home → Services → Mobile Development). Accurate `Service` only. No FAQPage. No fake downloads, ratings, or App Store claims

Phrase guidance in sentences where accurate: mobile app development, mobile application development, iOS development, Android development, native mobile apps, cross-platform development, mobile UX, offline-first apps, mobile app engineering. No keyword block.

### Cloud & DevOps (Chunk 20)

- **Title:** `Cloud & DevOps Services | SKYEMBER`
- **Description:** Cloud and DevOps engineering for reliable software delivery: infrastructure as code, CI/CD, observability, security, resilience, and recovery.
- **H1:** From commit to production, with confidence.
- **H2:** Production is where every hidden assumption becomes real. · Bring Cloud & DevOps in when production needs to become predictable. · A production system that can be understood and changed. · A release should leave a trail. · The infrastructure should reflect what the software needs. · Security belongs in the delivery path. · Make the safe path the easy path. · The deployment is only half the story. · Design for the day something fails. · From release to runtime, nothing important should disappear. · Production starts with the software being built. · The production environment shapes the experience. · Sometimes the existing platform is enough. · Start with how the software needs to live. · Need a production environment you can trust?
- **H3:** Cloud foundation · Infrastructure as code · Delivery automation · Observability · Reliability + recovery · Identity · Secrets · Change · Policy · Audit
- **Schema:** BreadcrumbList (Home → Services → Cloud & DevOps). Accurate `Service` only. No FAQPage. No fake uptime, incident, or compliance claims

Phrase guidance in sentences where accurate: cloud DevOps services, DevOps consulting, cloud engineering, infrastructure as code, CI/CD, CI/CD automation, cloud infrastructure, observability, site reliability, deployment automation, DevSecOps, cloud security. No keyword block.

### Company (Chunk 21, live)

- **Title:** `About SKYEMBER | Software Company & Product Engineering`
- **Description:** Learn how SKYEMBER approaches software, product design, engineering, and technology—and the principles behind the systems we build.
- **H1:** We build software with a long-term view.
- **H2:** Software should fit the work, not force the work to fit the software. · What we believe about software. · Look at the whole system. · Different disciplines. Shared responsibility. · We keep the work connected. · Serious about the work. Easy to work with. · We don't build complexity for the sake of it. · The best description of us is still the work. · Explore SKYEMBER. · Let's build something that matters.
- **H3:** Start with the problem · Make complexity understandable · Prove the important parts · Build for what comes next · Product Engineering · UI/UX Design · Web Development · Mobile Development · Cloud & DevOps · Stay close to the problem · Make decisions visible · Leave the system better than we found it · About · Process · Technology
- **Schema:** Site-wide Organization (SEO component). Page adds WebSite + BreadcrumbList (Home → Company). No FAQPage. No invented company facts

Phrase guidance in sentences where accurate: software company, software engineering, product engineering, custom software, digital products, software development, UI/UX design. No keyword block.

### Company About (Chunk 22, live)

- **Title:** `About SKYEMBER | Software Company`
- **Description:** Learn what SKYEMBER is, who we work with, how we approach software, and the principles behind our product, design, and engineering practice.
- **H1:** A software company built around the work.
- **H2:** A technology company with a product mindset. · Software should solve the real problem. · How the company stays close to the work. · We work where software has to fit the business. · Clear conversations. Serious decisions. · The company is broader than any one service. · Built to become better as the company grows. · The work still says the most. · Good work starts with being understood.
- **H3:** Growing businesses · Product teams · Organizations modernizing systems · Teams exploring intelligent automation · Direct · Connected · Accountable · Practical · Honest
- **Schema:** BreadcrumbList (Home → Company → About). Site-wide Organization remains canonical. No duplicate Organization. No FAQPage. No invented company facts

Phrase guidance in sentences where accurate: software company, software engineering, product design, custom software, digital products, business software, technology company. No keyword block.

### Company Process (Chunk 23, live)

- **Title:** `Our Software Development Process | SKYEMBER`
- **Description:** See how SKYEMBER engagements move from problem understanding and product framing through design, engineering, validation, release, and continued evolution.
- **H1:** Good engagements make the work clearer.
- **H2:** It starts with a problem, not a specification. · Understand the situation before choosing the solution. · Turn a broad problem into a shape worth building. · Make the important parts tangible early. · Test the decisions before the system carries them. · Release is a handoff, not a finish line. · The relationship can end. The product doesn't have to. · The work gets easier to trust when the decisions are visible. · The right people join the problem at the right time. · Good software is a shared responsibility. · Clear work needs clear communication. · The scope can change. The reasoning should remain visible. · A good engagement leaves more than software behind. · The process should fit the problem. · Not sure where to start?
- **Schema:** BreadcrumbList (Home → Company → Process). Site-wide Organization remains canonical. No Service schema. No FAQPage. No invented timelines or retainers

Phrase guidance in sentences where accurate: software development process, software project process, product development process, software engineering process, discovery, product design, software development, validation, deployment. No keyword block.

### Company Technology (Chunk 24, live)

- **Title:** `Technology & Engineering Approach | SKYEMBER`
- **Description:** How SKYEMBER approaches architecture, data, security, integrations, observability, AI, and technology choices for long-lived software systems.
- **H1:** Technology is a decision, not an identity.
- **H2:** Choose the architecture for the work it has to do. · Start with the decision. Then choose the technology. · Good engineering does not start with the framework. · Start simple. Add complexity when the problem requires it. · The decisions behind the system. · Security is a property of the system, not a final checklist. · The data model often matters more than the framework. · Good systems know where one responsibility ends. · A system should be able to explain itself. · Use the technology that earns its place. · Not everything should be built. · AI is another architectural decision. · The right architecture is the one the system can live with. · Good decisions can survive changing tools. · Technical decisions meet delivery here. · Sometimes the best architecture is the one you already have. · Have a technical decision ahead of you?
- **H3:** Domain · Data · Interfaces · Security · Operations · Evolution · Product Engineering · Web Development · Cloud & DevOps
- **Schema:** BreadcrumbList (Home → Company → Technology). Site-wide Organization remains canonical. No Service schema. No FAQPage. No stack catalogue or invented vendor partnerships

Phrase guidance in sentences where accurate: software architecture, technology strategy, technical architecture, software engineering, system design, technology consulting, data architecture, application architecture, cloud architecture, software technology choices. No keyword block.

### Insights (Chunk 25, shipped)

- **Title:** `Insights on Software, Product & Engineering | SKYEMBER`
- **Description:** SKYEMBER insights on software engineering, product development, UX design, AI automation, architecture, and building systems that last.
- **H1:** Thinking clearly about software.
- **H2:** Featured (only if a real featured article exists) · What we're thinking about
- Categories as filters, not four extra H2s: Engineering · Product · Design · AI + Systems
- **Schema (index):** BreadcrumbList (Home → Insights). Site-wide Organization remains canonical. No Article JSON-LD on the index. No FAQPage
- **Schema (future articles):** Article + BreadcrumbList only on genuine article pages

Phrase guidance in sentences where accurate: software engineering, product development, UX design, AI automation, architecture. No keyword block.

### Genuine Insights essays (Chunk 26–27, published 2026-10-06)

Four essays only. Metadata prepared in the content brief; no live article URLs yet.

| Essay | Planned slug (when published) | Index CTA (after publish) |
| --- | --- | --- |
| The Workflow Is the Product | `/insights/the-workflow-is-the-product` | `/solutions/business-software` |
| Complexity Should Have to Earn Its Place | `/insights/complexity-should-have-to-earn-its-place` | `/company/technology` |
| Designing the State After the Happy Path | `/insights/designing-the-state-after-the-happy-path` | `/services/ui-ux-design` |
| When an AI Workflow Should Stop and Ask | `/insights/when-an-ai-workflow-should-stop-and-ask` | `/solutions/ai-automation` |

- **Schema:** Article + BreadcrumbList (Home → Insights → Title) only on genuine published pages
- **Author:** SKYEMBER until named contributors exist
- **Dates:** real `datePublished` / `dateModified` at publish time — do not invent history
- Do not add Article JSON-LD to `/insights` itself

### Insights publication architecture (Chunk 27, shipped)

- **Routes:** `/insights/{slug}` for the four essays only; unknown slugs 404
- **Schema (essay):** Article + BreadcrumbList (Home → Insights → Title). `author` SKYEMBER. `datePublished` / `dateModified` 2026-10-06
- **Schema (index):** unchanged — BreadcrumbList only
- Canonical and Open Graph derived from each essay’s `seo_title` / `seo_description`
- Index composition frozen; featured + rows linked

Phrase guidance for the capabilities copy: write sentences a buyer understands. The phrases below should occur because they are accurate, once each is enough.

- custom software development
- business software
- web application development
- SaaS development
- AI automation
- cloud and infrastructure
- software engineering

Do not add a keyword block, hidden text, or a Service schema until real service URLs exist.

## Structured data

Chunk 1 ships `Organization` JSON-LD via the SEO component. `/contact` adds `ContactPage` and `BreadcrumbList`. `/company` adds `WebSite` and `BreadcrumbList` (Organization stays site-wide).

Later pages may add: `Service`, `Article` (genuine Insights articles only), `FAQPage` where accurate.

## Technical checklist

- [x] Descriptive title + meta description
- [x] Canonical link
- [x] Semantic landmarks
- [x] Alt text on brand images
- [x] Contact page title, description, H1, ContactPage, breadcrumb
- [x] Work page title, description, H1, CollectionPage, ItemList, breadcrumb
- [x] Case study title, description, H1, BreadcrumbList
- [x] Solutions page title, description, H1, CollectionPage, ItemList, breadcrumb
- [x] Business software title, description, H1, Service, breadcrumb
- [x] SaaS products title, description, H1, Service, breadcrumb
- [x] Custom platforms title, description, H1, Service, breadcrumb
- [x] AI & automation title, description, H1, Service, breadcrumb
- [x] Services index title, description, H1, Service, breadcrumb
- [x] Product Engineering title, description, H1, Service, breadcrumb
- [x] XML sitemap (Chunk 28)
- [x] robots.txt Sitemap line / production tune (Chunk 28)

## Performance ↔ SEO

Core Web Vitals targets guide frontend choices:

- LCP ≤ 2.5s
- INP < 200ms
- CLS < 0.1

Font loading, image dimensions, and limited JS are part of SEO quality for this brand.
