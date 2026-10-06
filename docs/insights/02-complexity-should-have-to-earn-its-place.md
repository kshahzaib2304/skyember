# Essay 02 — Complexity Should Have to Earn Its Place

**Status:** published 2026-10-06 as `/insights/complexity-should-have-to-earn-its-place`. Copy source of truth.

## Metadata (prepared, not published)

| Field | Value |
| --- | --- |
| title | Complexity Should Have to Earn Its Place |
| slug | complexity-should-have-to-earn-its-place |
| category | Engineering |
| excerpt | A practical view of architecture: complexity is sometimes necessary, but it should always have a reason, a boundary, and a cost. |
| author | SKYEMBER |
| published_at | 2026-10-06 |
| reading_time | ~7 min (recalculate at publish) |
| hero_visual | `Requirement → Boundary → Cost` |
| seo_title | Complexity Should Have to Earn Its Place \| SKYEMBER Insights |
| seo_description | Complexity in software is not inherently bad. Unnecessary complexity is. SKYEMBER on architecture that is proportionate to the problem — every important part with a reason to exist. |
| cta | See how we make technical decisions → `/company/technology` |

---

## Body

Complexity has a strange reputation in software.

Sometimes it is treated as a problem to eliminate.

Sometimes it is treated as evidence that the system has become serious enough to matter.

Neither is particularly useful.

Real software systems become complicated because the problems they solve become complicated. There are more users, more states, more rules, more data, more failure modes, more integrations, more security requirements, and more people depending on what happens next.

The goal is not to keep every system simple.

The goal is to make sure every important piece of complexity has a reason to exist.

A useful question is:

**What problem does this complexity solve?**

If there is no good answer, it probably should not be there.

### Complexity is not the enemy

A production system is not a whiteboard diagram.

It has to operate under constraints.

A payment workflow may need transaction boundaries.

A system handling sensitive information may need stronger access controls.

A growing product may eventually need independent scaling.

An organisation with several teams may need clearer ownership boundaries.

A workflow with asynchronous work may genuinely benefit from queues.

These are not examples of bad engineering.

They are examples of complexity that has earned its place.

The mistake happens when the architecture starts accumulating complexity before the problem requires it.

A new service creates another deployment boundary.

A new dependency creates another failure mode.

A new abstraction creates another mental model.

A new state creates another set of transitions that someone eventually has to reason about.

A new integration creates another system that can become unavailable.

Complexity is not free.

Every additional part of a system asks someone to understand, operate, test, document, monitor, secure, and eventually change it.

That cost matters.

### Principle

> Introduce complexity when it buys a capability the problem actually needs. Not because the architecture looks more serious.

If you cannot name the capability, you are not ready to add the part.

### The architecture should follow the problem

There is a temptation in software to choose architecture first and fit the problem into it afterward.

The vocabulary changes over time.

Monolith. Microservices. Event-driven. Serverless. AI-native. Composable.

The labels change. The underlying decision does not.

**What does this particular system need?**

Start there.

What are the domains? What are the important records? Which decisions need to be made? Where are the boundaries? What needs to happen together? What can happen later? What has to remain available? What can fail independently? What needs to be auditable? What will probably change?

These questions tell us more about architecture than a technology trend does.

Sometimes they lead to a relatively straightforward application.

Sometimes they lead to several independently operated services.

Sometimes they lead to something in between.

The architecture should be an answer to the problem, not a declaration of identity.

### Every boundary has a price

Boundaries are useful.

They create separation. They can improve ownership, security, reliability, scaling, and change.

A boundary also creates work.

Consider a system split into several services. That may give each service a clear responsibility. It may also introduce network communication, independent deployment, distributed logging, service discovery, retries, timeout handling, monitoring, version compatibility, and more difficult debugging.

None of those things automatically make the architecture wrong.

They simply mean the boundary needs a reason.

The same applies at smaller levels.

An abstraction can make a codebase easier to change. It can also hide behaviour behind another layer that future developers have to understand.

A shared component can eliminate duplication. It can also force unrelated use cases to evolve together.

A generalised data model can support several workflows. It can also make each workflow harder to express clearly.

The point is not to avoid boundaries, abstractions, or generalisation.

The point is to **price them honestly**.

`Requirement → Boundary → Cost`

If the requirement is real, the boundary can be justified. If the cost is ignored, the boundary is fashion.

### Complexity should buy something

A useful way to think about architecture is that every meaningful increase in complexity should create a corresponding capability.

A new service might buy independent scaling, independent deployment, clear ownership, or isolation of a failure domain.

A queue might buy work that does not need to happen inside the user's request, retry behaviour, or protection from temporary downstream failures.

A stronger authorisation model might buy separation of responsibilities, safer access to sensitive operations, or better auditability.

A richer state model might buy a workflow that reflects what is actually happening.

That trade can be worth it.

Complexity introduced without a meaningful capability is difficult to defend.

Adding another layer because “this is more scalable” is not enough. Scalable for what?

Adding a service because “microservices are better for large systems” is not enough. Large in what sense?

Adding AI because “this workflow could be intelligent” is not enough. What decision improves? What becomes possible? What becomes safer?

The explanation matters.

### There is another kind of complexity

Not all complexity lives in the architecture diagram.

Some of the most expensive complexity is invisible until a person uses the software.

A form may have one screen but twelve possible states.

A sale may look like one transaction while actually affecting inventory, customer credit, payments, pricing, and audit history.

A booking may appear simple until cancellation, rescheduling, partial completion, no-shows, refunds, and capacity rules enter the picture.

A workflow becomes complex because reality is complex.

Trying to hide that complexity does not make it disappear. It usually makes it harder to understand.

This is where good product design and good engineering meet.

The system should represent the important complexity clearly enough that people can work with it without reconstructing its logic in their heads.

The objective is not to make the system look simple.

It is to make the system understandable.

Those are different things.

Essay 01 argued that the workflow is the product. This is the engineering half of that claim. If the important distinctions are not in the model, they will live in spreadsheets, side channels, and memory.

### The simplest system is not always the best system

“Simpler is better” is useful advice until it becomes a rule.

Consider two designs.

The first has fewer tables, fewer services, fewer states, and fewer rules.

The second has more of all four because the business actually needs them.

If the second design reflects reality and the first forces important distinctions into manual workarounds, the second may be the simpler system from the user's perspective.

A system can have sophisticated internals and still offer a straightforward experience.

The reverse is also true.

A supposedly simple system can produce complexity everywhere else.

Someone keeps spreadsheets because the application cannot represent a real state.

People maintain side channels because the workflow is incomplete.

Staff memorise exceptions because the system has nowhere to record them.

Developers repeatedly patch the same edge case because the underlying model does not express it correctly.

That is complexity too.

It has simply been pushed outside the architecture.

### A useful test before adding another part

Before introducing another abstraction, service, dependency, state, or integration, ask a few uncomfortable questions.

**What problem exists today?** Not the problem we might have someday. The problem that exists now.

**What does this addition solve?** The answer should be specific enough that someone else can understand it.

**What becomes easier because of it?** Development, operations, security, scaling, ownership, recovery, or the user's workflow.

**What becomes harder?** Deployment, debugging, monitoring, testing, onboarding, data consistency, or future change.

**Can the same problem be solved with what already exists?** Not elegantly in theory. Actually.

**What happens if we do nothing?** Sometimes the cost of waiting is higher than the cost of complexity. Sometimes the opposite is true.

That final question is particularly important.

Avoiding complexity blindly can be just as damaging as adding it casually.

### Complexity should have a boundary

There is another reason to make complexity justify itself.

Systems change.

The architecture that is appropriate today may not be appropriate later.

A good system should therefore make its complexity visible.

A boundary should have an owner.

A dependency should have a reason.

A state should have a transition.

An integration should have a failure path.

An automated action should have a limit.

An important decision should leave enough information behind to understand what happened.

This makes future change possible.

Without those boundaries, complexity tends to spread.

One exception becomes three.

One workaround becomes a hidden rule.

One integration becomes a dependency nobody wants to remove.

One temporary abstraction becomes permanent infrastructure.

The system gradually becomes difficult not because any individual decision was catastrophic, but because no one stopped asking whether each decision was still necessary.

### Closing

The goal is not less software.

The goal is software with fewer unexplained decisions.

There will always be complexity in serious systems. Some domains are inherently complex. Some workflows have legitimate regulatory, financial, operational, or security requirements. Some products genuinely need distributed architecture. Some systems genuinely need several layers of infrastructure.

That is fine.

The question is whether the complexity is doing useful work.

Good engineering does not mean choosing the smallest possible architecture.

It means choosing an architecture that is **proportionate to the problem**.

Start with what the system needs.

Add complexity when reality demands it.

Make the cost visible.

Give each important boundary a reason.

And when the reason disappears, be willing to remove it.

Sophistication is not measured by how many parts a system contains.

It is measured by how well those parts serve the problem.

Complexity should have to earn its place.

---

See how we make technical decisions → `/company/technology`
