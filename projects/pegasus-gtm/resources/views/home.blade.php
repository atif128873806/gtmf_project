@extends('layouts.app')

@section('content')
    <a class="skip-link" href="#main-content">Skip to content</a>

    <div class="announcement">
        <div class="container announcement__inner">
            <span>GTMF1 · Revenue operations, GTM systems and AI</span>
            <a href="#brief-form">Book a systems review <span aria-hidden="true">→</span></a>
        </div>
    </div>

    <header class="site-header" data-site-header>
        <div class="container header__inner">
            <a class="brand" href="{{ route('home') }}" aria-label="GTMF1 home">
                <img class="brand__logo" src="{{ asset('assets/brand/gtmf1-logo-dark.png') }}" width="1200" height="188" alt="GTMF1" decoding="async">
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" data-menu-toggle>
                <span class="sr-only">Open menu</span><span class="menu-toggle__icon" aria-hidden="true"></span>
            </button>
            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation" data-primary-nav>
                <div class="nav-group" data-nav-group>
                    <button type="button" class="nav-menu-button" id="nav-revenue-os-trigger" aria-expanded="false" aria-controls="nav-revenue-os-panel" data-nav-trigger>Revenue OS <span class="nav-chevron" aria-hidden="true"></span></button>
                    <div class="nav-mega" id="nav-revenue-os-panel" role="region" aria-labelledby="nav-revenue-os-trigger" data-nav-panel hidden>
                        <div class="nav-mega__inner container">
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">The framework</p>
                                <a class="nav-mega__item" href="#revenue-os"><span>Signal</span><small>Find the right accounts, buyers and buying signals.</small></a>
                                <a class="nav-mega__item" href="#revenue-os"><span>Context</span><small>Keep CRM and account data clean, complete and usable.</small></a>
                            </div>
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">How it runs</p>
                                <a class="nav-mega__item" href="#revenue-os"><span>Agents and automation</span><small>Remove manual work with workflows, routing and AI.</small></a>
                                <a class="nav-mega__item" href="#revenue-os"><span>Flow, Pulse and Loop</span><small>Connect handoffs, trusted reporting and ongoing improvement.</small></a>
                            </div>
                            <div class="nav-mega__column nav-mega__column--feature">
                                <p class="nav-mega__eyebrow">Built inside your stack</p>
                                <p class="nav-mega__summary">Six connected layers that turn your existing GTM stack into scalable revenue infrastructure.</p>
                                <a class="nav-mega__all" href="#revenue-os">Explore Revenue OS <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-group" data-nav-group>
                    <button type="button" class="nav-menu-button" id="nav-services-trigger" aria-expanded="false" aria-controls="nav-services-panel" data-nav-trigger>Services <span class="nav-chevron" aria-hidden="true"></span></button>
                    <div class="nav-mega" id="nav-services-panel" role="region" aria-labelledby="nav-services-trigger" data-nav-panel hidden>
                        <div class="nav-mega__inner container">
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">Systems and operations</p>
                                <a class="nav-mega__item" href="#services"><span>GTM engineering</span><small>Connect Salesforce, HubSpot and the tools around them.</small></a>
                                <a class="nav-mega__item" href="#services"><span>RevOps</span><small>Align lifecycle, pipeline, permissions and governance.</small></a>
                            </div>
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">Data and execution</p>
                                <a class="nav-mega__item" href="#services"><span>Marketing operations</span><small>Connect campaign activity, account signals and pipeline reporting.</small></a>
                                <a class="nav-mega__item" href="#plays"><span>GTM workflows</span><small>Build routing, enrichment and signal-led plays in your tools.</small></a>
                            </div>
                            <div class="nav-mega__column nav-mega__column--feature">
                                <p class="nav-mega__eyebrow">Practical AI</p>
                                <a class="nav-mega__item" href="#agents"><span>AI agents</span><small>Support research, data quality and pipeline inspection, with people reviewing important actions.</small></a>
                                <a class="nav-mega__all" href="#services">See all services <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-group" data-nav-group>
                    <button type="button" class="nav-menu-button" id="nav-industries-trigger" aria-expanded="false" aria-controls="nav-industries-panel" data-nav-trigger>Industries <span class="nav-chevron" aria-hidden="true"></span></button>
                    <div class="nav-mega" id="nav-industries-panel" role="region" aria-labelledby="nav-industries-trigger" data-nav-panel hidden>
                        <div class="nav-mega__inner nav-mega__inner--industries container">
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">Complex operations</p>
                                <a class="nav-mega__item" href="#industries"><span>Manufacturing and industrial</span><small>CRM architecture and connected distributor workflows.</small></a>
                                <a class="nav-mega__item" href="#industries"><span>Logistics and supply chain</span><small>Lifecycle, routing and automation across lanes and regions.</small></a>
                                <a class="nav-mega__item" href="#industries"><span>Real estate and proptech</span><small>Consistent lead management and follow-up.</small></a>
                            </div>
                            <div class="nav-mega__column">
                                <p class="nav-mega__eyebrow">Relationship-led teams</p>
                                <a class="nav-mega__item" href="#industries"><span>Professional services</span><small>Revenue processes and reporting that support growing teams.</small></a>
                                <a class="nav-mega__item" href="#industries"><span>Banking, financial services and insurance</span><small>Governed CRM and data workflows for consistent reporting.</small></a>
                            </div>
                            <div class="nav-mega__column nav-mega__column--feature">
                                <p class="nav-mega__eyebrow">Technology and care</p>
                                <a class="nav-mega__item" href="#industries"><span>B2B SaaS and technology</span><small>Connected GTM platforms, lifecycle definitions and practical automation.</small></a>
                                <a class="nav-mega__item" href="#industries"><span>Healthcare and life sciences</span><small>GTM systems and data operations for complex workflows.</small></a>
                                <a class="nav-mega__all" href="#industries">Explore industries <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#plays">Resources</a>
                <span class="nav-label--inactive" aria-disabled="true">Pricing</span>
                <span class="nav-label--inactive" aria-disabled="true">About</span>
                <a class="button button--small button--primary nav-cta" href="#brief-form">Book a call</a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero__network" aria-hidden="true"></div>
            <div class="container hero__inner">
                <div class="hero__copy">
                    <p class="eyebrow eyebrow--light"><span class="eyebrow__dot"></span>AI-powered Revenue Operations</p>
                    <h1 id="hero-title">Build a GTM engine<br>that thinks, moves<br>and scales faster.</h1>
                    <p class="hero__lede">GTMF1 is a Revenue Infrastructure Partner. We design the systems, data, automation, and AI that connect Sales, Marketing, Customer Success, Finance, and Operations, helping teams operate more efficiently, scale with confidence, and make better decisions.</p>
                    <div class="button-row">
                        <a class="button button--light" href="#brief-form">Book a Revenue Infrastructure Review</a>
                        <a class="button button--outline-light" href="#engagement-title">See How We Work</a>
                    </div>
                    <ul class="trust-points" aria-label="How we work">
                        <li><span aria-hidden="true">✓</span> Built around your existing stack</li>
                        <li><span aria-hidden="true">✓</span> Connects teams, systems and data</li>
                        <li><span aria-hidden="true">✓</span> Designed to scale with your business</li>
                    </ul>
                </div>
                <div class="hero-visual hero-visual--infographic">
                    <img src="{{ asset('assets/client/unified-revenue-engine.png') }}" width="1672" height="941" decoding="async" alt="RevOps connects existing business tools and Marketing, Sales, Customer Success, Finance, and Operations through data foundations, system design, automation, AI, and enablement.">
                </div>
            </div>
        </section>

        <section class="tool-strip" aria-label="Tools the work can run inside">
            <div class="container">
                <p>Built inside the tools you already run</p>
                <ul class="tool-list">
                    @foreach ([['figma/logo-salesforce.png', 'Salesforce', 'salesforce'], ['figma/logo-hubspot.png', 'HubSpot', 'hubspot'], ['tools/marketo.ico', 'Marketo', 'marketo'], ['figma/logo-clay.png', 'Clay', 'clay'], ['figma/logo-n8n.png', 'n8n', 'n8n'], ['tools/gong.svg', 'Gong', 'gong'], ['tools/6sense.ico', '6 Sense', '6sense'], ['tools/leandata.svg', 'Lean Data', 'leandata'], ['figma/logo-slack.png', 'Slack', 'slack'], ['tools/zendesk.png', 'Zendesk', 'zendesk'], ['tools/snowflake.png', 'Snowflake', 'snowflake'], ['tools/stripe.svg', 'Stripe', 'stripe']] as [$logo, $name, $tool])
                        <li><span class="tool-logo tool-logo--{{ $tool }}"><img src="{{ asset('assets/'.$logo) }}" width="20" height="20" alt=""></span><span>{{ $name }}</span></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="section section--cream pains" id="home-pains" aria-labelledby="pains-title">
            <div class="container split-layout">
                <div class="section-heading section-heading--sticky">
                    <h2 id="pains-title">Sound familiar?</h2>
                    <p>Every one of these issues costs you pipeline, time, or confidence in your data. Select what sounds familiar and we’ll bring a focused plan to the call.</p>
                </div>
                <div class="pain-tool" data-pain-tool>
                    <div class="segmented" role="tablist" aria-label="Choose your role">
                        @foreach ($roles as $role)
                            <button type="button" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-controls="role-panel-{{ $role['id'] }}" id="role-tab-{{ $role['id'] }}" data-role-tab="{{ $role['id'] }}">{{ $role['label'] }}</button>
                        @endforeach
                    </div>
                    @foreach ($roles as $role)
                        <div class="role-panel" id="role-panel-{{ $role['id'] }}" role="tabpanel" aria-labelledby="role-tab-{{ $role['id'] }}" data-role-panel="{{ $role['id'] }}" @if (!$loop->first) hidden @endif>
                            <p class="role-panel__audience">{{ $role['audience'] }}</p>
                            <div class="pain-grid">
                                @foreach ($role['issues'] as $issue)
                                    <label class="pain-option"><input type="checkbox" name="pains[]" value="{{ $role['id'] }}-{{ $loop->index }}"><span class="checkbox-mark" aria-hidden="true"></span><span>{{ $issue }}</span></label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <div class="pain-summary" aria-live="polite"><strong data-pain-count>0</strong><span>of 4 selected</span><p>Select what sounds familiar.</p><a class="button button--gold" href="#brief-form" data-brief-from-pains>Book a Revenue Infrastructure Review</a><a class="text-link text-link--gold" href="#home-wf">Not ready? See the difference on one workflow <span aria-hidden="true">↓</span></a></div>
                </div>
            </div>
        </section>

        <section class="section revenue-os" id="revenue-os" aria-labelledby="os-title">
            <div class="container">
                <h2 id="os-title" class="sr-only">GTMF1 Revenue Operations</h2>
                <div class="revenue-framework-image">
                    <img src="{{ asset('assets/client/revenue-operations-framework.png') }}" width="1448" height="1086" alt="GTMF1 Revenue Operations: six connected layers—Signal, Context, Agents, Flow, Pulse, and Loop—turn your existing GTM stack into scalable revenue infrastructure.">
                </div>
                <div class="button-row button-row--center"><a class="button button--primary" href="#brief-form">Book a Revenue Infrastructure Review</a><a class="button button--outline" href="#engagement-title">See How We Work</a></div>
            </div>
        </section>

        <section class="section section--cream workflow" id="home-wf" aria-labelledby="workflow-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><h2 id="workflow-title">The difference, on one workflow</h2><p>An inbound lead becoming a booked meeting: today, in week one, and twelve weeks in.</p></div>
                <div class="workflow-board">
                    <div class="workflow-toolbar"><div class="segmented segmented--small" role="tablist" aria-label="Workflow timeframe">
                        <button type="button" role="tab" aria-selected="true" data-workflow-tab="today">Today</button>
                        <button type="button" role="tab" aria-selected="false" data-workflow-tab="week1">With GTMF1, week 1</button>
                        <button type="button" role="tab" aria-selected="false" data-workflow-tab="week12">Week 12</button>
                    </div><div class="workflow-legend"><span><i></i>Human</span><span><i></i>Agent</span><span><i></i>Automated</span></div></div>
                    <div class="workflow-steps" data-workflow-panel="today">
                        @foreach ([['Lead arrives','Automated','Form lands in a shared inbox'],['Research','Human','Rep searches by hand, if at all'],['Qualify','Human','Gut feel, different for every rep'],['Route','Human','A manager assigns it when free'],['First response','Human','Cold email, hours later'],['Book and log','Human','Notes typed later, often never']] as [$title, $owner, $copy])
                            <article class="workflow-step"><img class="workflow-step__icon" src="{{ asset('assets/figma/workflow-step-'.$loop->iteration.'.svg') }}" width="32" height="32" alt=""><small>Step {{ $loop->iteration }}</small><b>{{ $title }}</b><span class="owner owner--{{ strtolower($owner) }}">{{ $owner }}</span><p>{{ $copy }}</p></article>
                        @endforeach
                    </div>
                    <div class="workflow-steps" data-workflow-panel="week1" hidden>
                        @foreach ([['Lead arrives','Automated','Form is tagged and checked'],['Research','Agent','Account context is added'],['Qualify','Human','Rules show fit and gaps'],['Route','Automated','Territory owner is assigned'],['First response','Human','Rep reviews a drafted reply'],['Book and log','Automated','Meeting and activity are logged']] as [$title, $owner, $copy])
                            <article class="workflow-step"><img class="workflow-step__icon" src="{{ asset('assets/figma/workflow-step-'.$loop->iteration.'.svg') }}" width="32" height="32" alt=""><small>Step {{ $loop->iteration }}</small><b>{{ $title }}</b><span class="owner owner--{{ strtolower($owner) }}">{{ $owner }}</span><p>{{ $copy }}</p></article>
                        @endforeach
                    </div>
                    <div class="workflow-steps" data-workflow-panel="week12" hidden>
                        @foreach ([['Lead arrives','Automated','Validation happens on arrival'],['Research','Agent','Sources refresh in the CRM'],['Qualify','Automated','Shared criteria surface fit'],['Route','Automated','Response clock is visible'],['First response','Human','Rep approves and personalizes'],['Book and log','Automated','Outcomes feed the next review']] as [$title, $owner, $copy])
                            <article class="workflow-step"><img class="workflow-step__icon" src="{{ asset('assets/figma/workflow-step-'.$loop->iteration.'.svg') }}" width="32" height="32" alt=""><small>Step {{ $loop->iteration }}</small><b>{{ $title }}</b><span class="owner owner--{{ strtolower($owner) }}">{{ $owner }}</span><p>{{ $copy }}</p></article>
                        @endforeach
                    </div>
                    <div class="workflow-metrics" data-workflow-panel="today"><div><strong>4 hrs</strong><span>Minutes to first response</span><small>Today’s baseline</small></div><div><strong>10%</strong><span>Leads researched before first touch</span><small>Today’s baseline</small></div><div><strong>25 min</strong><span>Rep minutes of admin per lead</span><small>Today’s baseline</small></div><div><strong>55%</strong><span>CRM records complete</span><small>Today’s baseline</small></div></div>
                    <div class="workflow-metrics" data-workflow-panel="week1" hidden><div><strong>15 min</strong><span>First-response target</span><small>Week one</small></div><div><strong>Every lead</strong><span>Has account context</span><small>Week one</small></div><div><strong>One owner</strong><span>Assigned by shared rules</span><small>Week one</small></div><div><strong>Logged</strong><span>Meeting activity in the CRM</span><small>Week one</small></div></div>
                    <div class="workflow-metrics" data-workflow-panel="week12" hidden><div><strong>On clock</strong><span>First-response timing visible</span><small>Week twelve</small></div><div><strong>Reviewed</strong><span>Signals and rules have sources</span><small>Week twelve</small></div><div><strong>Less admin</strong><span>Fewer manual steps per lead</span><small>Week twelve</small></div><div><strong>Sharper</strong><span>Workflow gets a weekly review</span><small>Week twelve</small></div></div>
                    <p class="workflow-note">A typical B2B inbound workflow. Your own baseline and targets are measured in the GTM systems review.</p>
                </div>
            </div>
        </section>

        <section class="section plays" id="plays" aria-labelledby="plays-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><h2 id="plays-title">GTM plays we build</h2><p>Seven of the systems teams ask for most. Each one runs in your CRM and tools, and is documented so your team can change it.</p></div>
                <div class="play-tabs" role="tablist" aria-label="GTM plays">
                    @foreach ($plays as $play)
                        <button type="button" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}" data-play-tab="{{ $play['id'] }}">{{ $play['label'] }}</button>
                    @endforeach
                </div>
                @foreach ($plays as $play)
                    <div class="play-panel" role="tabpanel" data-play-panel="{{ $play['id'] }}" @if (!$loop->first) hidden @endif>
                        <p class="play-panel__title">{{ $play['title'] }}</p>
                        <div class="product-mockup">
                            <div class="mock-window product-mockup__table"><div class="mock-window__bar"><span class="window-dots"><i></i><i></i><i></i></span><strong>{{ $play['label'] }}</strong></div>
                                <div class="mock-table"><div class="mock-table__head"><span>Account</span><span>Country</span><span>Employees</span><span>CRM</span><span>Open GTM roles</span></div>
                                    @foreach ([['Halden Freight','United States','340','HubSpot','3'],['Riverstone Build','Germany','1,100','Salesforce','5'],['Brightline Steel','United Kingdom','620','Zoho CRM','2'],['Keystone Insure','Singapore','180','HubSpot','1'],['Ardent Logistics','UAE','410','None','4']] as $row)
                                        <div><b><i class="company-mark">{{ strtoupper(substr($row[0],0,1).substr($row[0],1,1)) }}</i>{{ $row[0] }}</b><span>{{ $row[1] }}</span><span>{{ $row[2] }}</span><span>{{ $row[3] }}</span><span>{{ $row[4] }}</span></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mock-window product-mockup__filters"><div class="mock-window__bar"><span class="window-dots"><i></i><i></i><i></i></span><strong>Filters</strong></div>@foreach ($play['items'] as $item)<p><i aria-hidden="true"></i>{{ $item }}</p>@endforeach</div>
                        </div>
                    </div>
                @endforeach
                <p class="section-footnote">The exact workflow is scoped around your CRM, market and tools.</p>
            </div>
        </section>

        <section class="section section--cream architecture" aria-labelledby="architecture-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><h2 id="architecture-title">How a GTMF1 system fits together</h2><p>Your data comes in from wherever it lives. What we build unifies, enriches, scores and routes it. The results land in the tools your team already works in.</p></div>
                <div class="architecture-board">
                    <div class="architecture-column"><h3>Where your data lives</h3>@foreach (['Your CRM|accounts, contacts, deals','Website and product|forms, visits, usage','Data providers|contacts and firmographics','Buying signals|hiring, funding, tech changes','Lists and events|spreadsheets, partners'] as $item)<div class="architecture-node"><b>{{ explode('|',$item)[0] }}</b><span>{{ explode('|',$item)[1] }}</span></div>@endforeach</div>
                    <div class="architecture-column architecture-column--build"><h3>What GTMF1 builds</h3><div class="architecture-stack"><strong>Runs in your stack · documented · yours</strong>@foreach (['Unify','Enrich','Score','Route'] as $stage)<div><b>{{ $stage }}</b><span>{{ ['One record per account and person','Multi-provider waterfall, source kept','Tier rules your team can read','Right owner, response clock'][$loop->index] }}</span></div>@endforeach<div class="architecture-agents"><b>AI agents</b><span>Research, draft and update, reviewed by people</span></div><small>Orchestration: workflows, alerts, logs</small></div></div>
                    <div class="architecture-column"><h3>Where it lands</h3>@foreach (['CRM, updated|one clean record','Sequencer|approved, signal-led outreach','Ad audiences|LinkedIn, Meta, Google','Slack alerts|owner and deadline','Dashboards|pipeline by source and stage'] as $item)<div class="architecture-node"><b>{{ explode('|',$item)[0] }}</b><span>{{ explode('|',$item)[1] }}</span></div>@endforeach</div>
                </div>
            </div>
        </section>

        <section class="section code-section" aria-labelledby="code-title">
            <div class="container code-layout">
                <div class="code-copy"><p class="eyebrow">Built as code</p><h2 id="code-title">Every play is code you own</h2><p>Each system we build is written down: config your team can read, code in your repository, and queries anyone can re-run. When we hand over, nothing lives in one person's head or one vendor's account.</p>
                    <ul class="check-list"><li>Versioned, so every change has an author and a reason</li><li>Documented, with a runbook for when a step fails</li><li>Portable across HubSpot, Salesforce and Zoho</li></ul>
                    <div class="button-row"><a class="button button--primary" href="#services">Explore GTM engineering</a><a class="button button--outline" href="#services">Explore RevOps</a></div>
                </div>
                <div class="code-window" data-code-typing aria-label="Example documented GTM workflow configuration"><div class="code-window__tabs"><span>plays/hiring-signal.yaml</span><span>route.ts</span><span>pipeline.sql</span></div><pre><code><span class="code-comment"># Hiring-signal outbound · every region you sell into</span>
play: hiring-signal-outbound
market:
  regions: [americas, emea, apac]
  employees: 50-1000
  crm: [hubspot, salesforce, zoho]
signal:
  source: job_posts
  match: ["RevOps", "Sales Operations", "Head of Sales"]
  window_days: 30
enrich:
  providers: [provider_a, provider_b, provider_c] <span class="code-comment"># waterfall, source kept</span>
  fields: [work_email, phone, title]
score:
  tier_1: "signal and fit = strong"
  tier_2: "fit = strong"
route:
  by: [territory, segment]
  respond_within: 15m
sequence:
  tool: your_sequencer
  approval: rep <span class="code-comment"># nothing sends unreviewed</span>
report:
  attribute_to: play</code></pre><div class="code-window__footer"><span>Lives in <b>your repo</b></span><span>Runs in <b>your tools</b></span><span>Handed over, documented</span></div></div>
            </div>
        </section>

        <section class="brief-section" id="brief-form" aria-labelledby="brief-title">
            <div class="container brief-container">
                <div class="brief-layout">
                    <div class="brief-header">
                        <h2 id="brief-title">What do you want to build?</h2>
                        <p class="brief-note" id="brief-note">Your brief is validated on this page. It is not sent or stored.</p>
                    </div>
                    <div class="brief-panel">
                        <form class="brief-form" method="post" action="{{ route('review-brief.store') }}">
                            @csrf
                            <label class="brief-form__label" for="brief">Describe the play, market and tools you run today</label>
                            <textarea id="brief" name="brief" rows="5" maxlength="1200" minlength="8" required placeholder="Describe the play, the market and the tools you run today" aria-describedby="brief-error brief-note brief-hint" aria-invalid="{{ $errors->has('brief') ? 'true' : 'false' }}" data-brief-field>{{ old('brief') }}</textarea>
                            <div class="brief-form__footer">
                                <span class="brief-form__hint" id="brief-hint">8–1,200 characters</span>
                                <button class="button button--gold" type="submit">Send to the review</button>
                            </div>
                        </form>
                        @error('brief')<p class="form-error" id="brief-error" role="alert">{{ $message }}</p>@else<p class="sr-only" id="brief-error"></p>@enderror
                        @if (session('status'))<p class="form-success" role="status">{{ session('status') }}</p>@endif
                    </div>
                </div>
                <div class="brief-examples-header"><h3>Start with an example</h3><p>Select one to fill your brief.</p></div>
                <div class="brief-examples" aria-label="Example briefs">
                    @foreach ([['Find target accounts', 'Find operations directors at logistics companies in Europe and North America with 100 to 1,000 employees'], ['Route inbound leads', 'Route every demo request to the right rep by country and company size within 15 minutes'], ['Clean up CRM reporting', 'Clean up our HubSpot so the pipeline report matches what sales says in the Monday meeting']] as [$title, $example])
                        <button type="button" data-brief-suggestion="{{ $example }}"><span class="brief-example__title">{{ $title }}</span><svg class="brief-example__icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M10 4v12M4 10h12"/></svg><span class="brief-example__copy">{{ $example }}</span></button>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section pillars" aria-labelledby="pillars-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><p class="eyebrow">Revenue OS</p><h2 id="pillars-title">Everything a revenue system needs, built as one</h2><p>Four layers, one CRM. Most teams start with one and add the rest as the first one pays for itself.</p></div>
                <div class="pillar-list">
                    <article class="pillar-row"><div class="pillar-copy"><p class="eyebrow">Data foundations</p><h3>A complete, current record for every account you sell to</h3><p>We map your market into one table, merge what you already know with what providers can add, and keep it refreshed so the CRM stops going stale.</p><ul class="check-list"><li>TAM mapped across every market you sell into</li><li>Enrichment across more than one provider, source kept</li><li>CRM clean-up and ongoing refresh</li></ul><a class="button button--primary" href="#brief-form">Book a GTM systems review</a></div><div class="pillar-visual pillar-visual--figma">@include('figma-data-art')</div></article>
                    <article class="pillar-row pillar-row--reverse"><div class="pillar-copy"><p class="eyebrow">Signals and research</p><h3>Know who to talk to, and why now</h3><p>Hiring, leadership changes, funding, technology moves and site intent, watched continuously and turned into a short reason a rep can use in the first line.</p><ul class="check-list"><li>Signal tracking tuned to your ICP</li><li>Account briefs drafted for rep review</li><li>Scoring rules your team can read and change</li></ul><a class="button button--primary" href="#brief-form">Book a GTM systems review</a></div><div class="pillar-visual pillar-visual--figma pillar-art--signals">@include('figma-signals-art')</div></article>
                    <article class="pillar-row"><div class="pillar-copy"><p class="eyebrow">Orchestration and RevOps</p><h3>One CRM, one definition, every tool connected</h3><p>Routing, handoffs and stage definitions designed once and enforced in the CRM, so every team works from the same record and the same pipeline number.</p><ul class="check-list"><li>Lead and account routing with response clocks</li><li>Stage definitions with exit criteria</li><li>Dashboards that reconcile with the CRM</li></ul><a class="button button--primary" href="#brief-form">Book a GTM systems review</a></div><div class="pillar-visual pillar-visual--figma pillar-art--workflow">@include('figma-workflow-art')</div></article>
                    <article class="pillar-row pillar-row--reverse"><div class="pillar-copy"><p class="eyebrow">Execution</p><h3>Launch a new play in days, not a quarter</h3><p>Approved contacts into the sequencer you already use, messaging that starts from the signal, and every reply and meeting written back so you can see what works.</p><ul class="check-list"><li>Sequencer and ad-audience wiring</li><li>Signal-led messaging, approved by a rep</li><li>Pipeline attributed to the play that made it</li></ul><a class="button button--primary" href="#services">Explore outbound plays</a></div><div class="pillar-visual pillar-visual--figma pillar-art--sequence">@include('figma-sequence-art')</div></article>
                </div>
            </div>
        </section>

        <section class="section section--cream agents" aria-labelledby="agents-title">
            <div class="container">
                <div class="agents-heading"><div><h2 id="agents-title">Agents that do the busywork, with a person in the loop</h2></div><div><p>Account research, data quality checks, call summaries and pipeline inspection, including Claude-based workflows connected to Salesforce, HubSpot, Slack and your GTM tools. People review data changes and customer-facing actions before they run.</p><div class="button-row"><a class="button button--primary" href="#agents">Explore AI agents</a><a class="button button--outline" href="#brief-form">Book a GTM systems review</a></div></div></div>
                <div class="agent-board">
                    <ol class="agent-flow" aria-label="How an agent workflow runs">
                        @foreach ([['Trigger','A meeting, a form, a stale deal'],['Agent works','Reads your CRM, documents and the web'],['Draft or action','A brief, a reply, a field update'],['Human review','Approve, edit or reject'],['Write back and log','CRM updated, every step recorded']] as $index => [$title, $copy])
                            <li class="agent-node{{ $index === 3 ? ' agent-node--review' : '' }}">
                                <span class="agent-node__marker" aria-hidden="true"></span>
                                <b>{{ $title }}</b>
                                <p>{{ $copy }}</p>
                            </li>
                        @endforeach
                    </ol>
                    <div class="agent-evaluate">
                        <p><strong>Evaluate</strong><span>Weekly, on a test set built from your real cases</span></p>
                        <p class="agent-board__note">Nothing important leaves without a person seeing it. Every run is logged and measured.</p>
                    </div>
                </div>
                <ul class="agent-promises"><li>Approved by a person before anything reaches a customer</li><li>Every run logged, every agent measured on your real cases</li><li>Runs on the model provider your security team approves</li></ul>
            </div>
        </section>

        <section class="section industries" id="industries" aria-labelledby="industries-title">
            <div class="container"><div class="section-heading section-heading--wide"><h2 id="industries-title">Built for how your industry sells</h2><p>The systems are the same everywhere. The signals, buying committees and rules are not.</p></div>
                <div class="industry-grid">@foreach ($industries as $industry)<a class="industry-card" href="{{ $industry['link'] }}"><span class="industry-card__icon"><img src="{{ asset('assets/figma/'.$industry['icon']) }}" width="24" height="24" alt=""></span><h3>{{ $industry['title'] }}</h3><p>{{ $industry['copy'] }}</p><span class="industry-card__link">{{ $industry['cta'] }} <span aria-hidden="true">›</span></span></a>@endforeach</div>
            </div>
        </section>

        <section class="section services" id="services" aria-labelledby="services-title">
            <div class="container services-layout"><div class="services-intro"><h2 id="services-title">What we do</h2><p>Three services that share one CRM. Most teams start with one and add the others.</p></div><div class="service-list">
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-engineering.svg') }}" width="24" height="24" alt=""></span><h3>GTM engineering</h3><p>Connect Salesforce, HubSpot and the tools around them so leads, accounts, deals and customer data move cleanly across your stack.</p><ul><li>Signal-driven outbound</li><li>Enrichment across providers</li><li>Lead routing and handoffs</li><li>Zapier, Make and n8n workflows</li></ul><a href="#services">View GTM engineering <span aria-hidden="true">›</span></a></article>
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-revops.svg') }}" width="24" height="24" alt=""></span><h3>RevOps</h3><p>Audit, clean up and redesign Salesforce and HubSpot, aligning lifecycle, pipeline, permissions and governance around trusted reporting.</p><ul><li>CRM architecture and clean-up</li><li>Flows, workflows and validation</li><li>Pipeline and forecast reporting</li><li>Dashboards and attribution</li></ul><a href="#services">View RevOps <span aria-hidden="true">›</span></a></article>
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-agents.svg') }}" width="24" height="24" alt=""></span><h3>AI agents</h3><p>Build practical AI workflows, including Claude-based agentic setups, for research, data quality checks and pipeline inspection, with people reviewing important actions.</p><ul><li>GTM and RevOps agents</li><li>Research, enrichment and summarization</li><li>Renewals, customer health and churn risk</li><li>Competitor and market intelligence</li></ul><a href="#agents">View AI workflows <span aria-hidden="true">›</span></a></article>
            </div></div>
        </section>

        <section class="section engagement" aria-labelledby="engagement-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><h2 id="engagement-title">How an engagement runs</h2><p>The same four steps whatever we build. The first one is small, fixed-fee and useful on its own.</p></div>
                <ol class="engagement-board" aria-label="Four steps in a GTMF1 engagement">
                    @foreach ([['Review','Fixed fee','Written findings on your stack, data and process. Yours whether or not you hire us.'],['Scope','Signed first','What we build, what we do not, which tools it touches, and who owns each part.'],['Build','Weekly releases','Inside your tools. The old way keeps running until the new flow is proven.'],['Hand over','Yours','Documentation, recorded training, and admin access in your name.']] as [$title, $tag, $copy])
                        <li class="engagement-step{{ $loop->first ? ' engagement-step--first' : '' }}">
                            <span class="engagement-step__number" aria-hidden="true">{{ $loop->iteration }}</span>
                            <h3>{{ $title }}</h3>
                            <span class="engagement-step__meta">{{ $tag }}</span>
                            <p>{{ $copy }}</p>
                        </li>
                    @endforeach
                </ol>
                <p class="engagement-note">Optional: ongoing support, published hours, cancellable</p>
            </div>
        </section>

        <section class="section section--cream faq" id="faq" aria-labelledby="faq-title">
            <div class="container faq-layout"><h2 id="faq-title">Questions we<br>get on most calls</h2><div class="faq-list">@foreach ($faqs as $faq)<details class="faq-item"><summary>{{ $faq['question'] }}<span class="faq-item__icon" aria-hidden="true"></span></summary><div class="faq-item__answer"><p>{{ $faq['answer'] }}</p></div></details>@endforeach</div></div>
        </section>

        <section class="cta-band" aria-labelledby="cta-title"><div class="container cta-band__inner"><div><h2 id="cta-title">Rebuild your revenue<br>engine for the AI era</h2><p>Start with a fixed-fee GTM systems review. We map your stack against the six layers of Revenue OS, and you keep the findings whether or not you work with us.</p><div class="button-row"><a class="button button--light" href="#brief-form">Book a GTM systems review</a><a class="button button--outline-light" href="#plays">See the plays</a></div></div><div class="cta-flow-art" data-motion-sequence="cta-flow" data-motion-state="complete" aria-hidden="true"><svg viewBox="0 0 440 260" role="presentation" focusable="false"><g class="cta-flow__teams"><text x="4" y="43">Sales</text><text x="4" y="88">Marketing</text><text x="4" y="133">Customer success</text><text x="4" y="178">Finance</text><text x="4" y="223">Operations</text></g><g class="cta-flow__routes"><path class="cta-flow__route cta-flow__route--one" pathLength="1" d="M112 39 C155 39 156 88 204 91"/><path class="cta-flow__route cta-flow__route--two" pathLength="1" d="M112 84 C154 84 165 108 204 111"/><path class="cta-flow__route cta-flow__route--three" pathLength="1" d="M112 129 H204"/><path class="cta-flow__route cta-flow__route--four" pathLength="1" d="M112 174 C154 174 165 150 204 147"/><path class="cta-flow__route cta-flow__route--five" pathLength="1" d="M112 219 C155 219 156 170 204 167"/></g><g class="cta-flow__source-dots"><circle cx="112" cy="39" r="3"/><circle cx="112" cy="84" r="3"/><circle cx="112" cy="129" r="3"/><circle cx="112" cy="174" r="3"/><circle cx="112" cy="219" r="3"/></g><g class="cta-flow__core"><rect x="204" y="70" width="146" height="118" rx="6"/><path class="cta-flow__core-rule" d="M220 123 H334"/><text class="cta-flow__brand" x="220" y="96">GTMF1</text><text class="cta-flow__label" x="220" y="112">REVENUE SYSTEM</text><text class="cta-flow__capability" x="220" y="143">DATA</text><text class="cta-flow__capability" x="261" y="143">FLOW</text><text class="cta-flow__capability" x="309" y="143">AI</text><circle cx="229" cy="164" r="3"/><circle cx="277" cy="164" r="3"/><circle cx="325" cy="164" r="3"/></g><path class="cta-flow__output" pathLength="1" d="M350 129 H422"/><path class="cta-flow__arrow" d="M415 122 L422 129 L415 136"/></svg></div></div></section>
    </main>

    <footer class="site-footer"><div class="container"><div class="footer-grid"><div class="footer-brand"><a class="brand brand--footer" href="{{ route('home') }}" aria-label="GTMF1 home"><img class="brand__logo" src="{{ asset('assets/brand/gtmf1-logo-light.png') }}" width="1200" height="188" alt="GTMF1" loading="lazy" decoding="async"></a><p>GTMF1 designs and delivers RevOps, CRM and GTM systems, marketing operations, data, automation, AI workflows and migrations.</p></div>
                <div><h2>Services</h2><a href="#revenue-os">GTMF1 Revenue Operations</a><a href="#services">GTM engineering</a><a href="#services">RevOps</a><a href="#agents">AI agents</a><span class="footer-link--inactive" aria-disabled="true">Pricing</span><a href="#brief-form">GTM systems review</a></div>
                <div><h2>Industries</h2><a href="#industries">Manufacturing and industrial</a><a href="#industries">Logistics and supply chain</a><a href="#industries">Professional services</a><a href="#industries">B2B SaaS and technology</a><a href="#industries">Banking and financial services</a><a href="#industries">Healthcare and life sciences</a><a href="#industries">Real estate and proptech</a></div>
                <div><h2>Resources</h2><a href="#plays">GTM plays</a><a href="#industries">Industries</a></div>
                <div><h2>Company</h2><span class="footer-link--inactive" aria-disabled="true">About</span><a href="#brief-form">Contact</a></div>
            </div><div class="footer-bottom"><span>© {{ now()->year }} GTMF1</span><div><span class="footer-link--inactive" aria-disabled="true">Privacy</span><span class="footer-link--inactive" aria-disabled="true">Terms</span><button type="button" data-cookie-settings>Cookie notice</button></div></div></div></footer>

    <aside class="cookie-notice" data-cookie-notice aria-label="Cookie preferences" hidden><p>This site does not use analytics cookies. Your choice only saves this notice preference in this browser.</p><div><button type="button" class="button button--primary button--cookie" data-cookie-choice="dismissed">Got it</button><button type="button" class="button button--outline button--cookie" data-cookie-choice="shown">Keep showing</button></div></aside>
@endsection
