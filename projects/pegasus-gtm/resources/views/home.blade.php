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
                <span class="brand__wordmark">GTMF1</span>
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" data-menu-toggle>
                <span class="sr-only">Open menu</span><span class="menu-toggle__icon" aria-hidden="true"></span>
            </button>
            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation" data-primary-nav>
                <a href="#revenue-os">Revenue OS</a>
                <div class="nav-group" data-nav-group>
                    <button type="button" class="nav-menu-button" aria-expanded="false" data-nav-trigger>Services <span class="nav-chevron" aria-hidden="true"></span></button>
                    <div class="nav-dropdown" data-nav-panel hidden>
                        <a href="#services">GTM engineering</a>
                        <a href="#services">RevOps</a>
                        <a href="#agents">AI agents</a>
                    </div>
                </div>
                <div class="nav-group" data-nav-group>
                    <button type="button" class="nav-menu-button" aria-expanded="false" data-nav-trigger>Industries <span class="nav-chevron" aria-hidden="true"></span></button>
                    <div class="nav-dropdown" data-nav-panel hidden>
                        <a href="#industries">Manufacturing</a>
                        <a href="#industries">Logistics</a>
                        <a href="#industries">B2B SaaS</a>
                        <a href="#industries">Healthcare</a>
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
                        <a class="button button--light" href="#brief-form">Book a GTM systems review</a>
                        <a class="button button--outline-light" href="#revenue-os">Explore Revenue OS</a>
                    </div>
                    <ul class="trust-points" aria-label="How we work">
                        <li><span aria-hidden="true">✓</span> Built in your stack, owned by you</li>
                        <li><span aria-hidden="true">✓</span> Sharper every week</li>
                        <li><span aria-hidden="true">✓</span> Written scope before any build</li>
                    </ul>
                </div>
                <div class="hero-visual" aria-label="Illustrative revenue operations interface">
                    <div class="mock-window mock-window--accounts">
                        <div class="mock-window__bar"><span class="window-dots"><i></i><i></i><i></i></span><strong>Target accounts · all regions</strong></div>
                        <div class="mock-table mock-table--hero">
                            <div class="mock-table__head"><span>Account</span><span>Signal</span><span>Tier</span><span>Owner</span><span>Status</span></div>
                            <div><b><i class="company-mark company-mark--accent">HF</i> Halden Freight</b><span>Hiring: RevOps lead</span><em class="tag tag--accent">T1</em><span>Sofia R.</span><em class="tag">Routed</em></div>
                            <div><b><i class="company-mark company-mark--gold">CH</i> Corva Health</b><span>New CRO, 14 days in role</span><em class="tag tag--accent">T1</em><span>Omar S.</span><em class="tag tag--cream">Sequenced</em></div>
                            <div><b><i class="company-mark">BS</i> Brightline Steel</b><span>Opened 2 sales roles</span><em class="tag">T2</em><span>Rohan M.</span><em class="tag">Enriched</em></div>
                            <div><b><i class="company-mark company-mark--gold">TE</i> Tessel Energy</b><span>Visited pricing twice</span><em class="tag tag--accent">T1</em><span>Layla H.</span><em class="tag">Routed</em></div>
                            <div><b><i class="company-mark company-mark--accent">MR</i> Marlow Realty</b><span>Moved to HubSpot</span><em class="tag">T2</em><span>Lukas W.</span><em class="tag">Enriched</em></div>
                        </div>
                    </div>
                    <div class="mock-window mock-window--rule"><div class="mock-window__bar"><span class="window-dots"><i></i><i></i><i></i></span><strong>Tier rule</strong></div><code><b>T1</b> if hiring in sales or RevOps<br>&nbsp;&nbsp;and 50–1,000 employees<br>&nbsp;&nbsp;and uses HubSpot, Salesforce or Zoho<br><b>T2</b> if two of the three</code></div>
                    <div class="mock-window mock-window--coverage"><div class="mock-window__bar"><span class="window-dots"><i></i><i></i><i></i></span><strong>Work email coverage</strong></div><p>Provider A <span class="meter"><i style="--meter:62%"></i></span><small>62%</small></p><p>+ Provider B <span class="meter"><i style="--meter:81%"></i></span><small>81%</small></p><p>+ Provider C <span class="meter"><i style="--meter:88%"></i></span><small>88%</small></p></div>
                    <div class="mock-window mock-window--notification"><div class="notification__brand">G</div><div><strong>GTMF1</strong> <small>11:02</small><p>New T1 lead from Tessel Energy routed to <b>Layla H.</b> Respond by 11:17.</p><span class="mini-button">Open in CRM</span><span class="mini-button">Snooze</span></div></div>
                </div>
            </div>
        </section>

        <section class="tool-strip" aria-label="Tools the work can run inside">
            <div class="container">
                <p>Built inside the tools you already run</p>
                <ul class="tool-list">
                    @foreach ([['hubspot','HubSpot'],['salesforce','Salesforce'],['zoho','Zoho CRM'],['clay','Clay'],['n8n','n8n'],['apollo','Apollo'],['instantly','Instantly'],['smartlead','Smartlead'],['slack','Slack']] as [$logo, $name])
                        <li><img src="{{ asset('assets/figma/logo-'.$logo.'.png') }}" width="20" height="20" alt=""><span>{{ $name }}</span></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="section section--cream pains" id="home-pains" aria-labelledby="pains-title">
            <div class="container split-layout">
                <div class="section-heading section-heading--sticky">
                    <h2 id="pains-title">Sound familiar?</h2>
                    <p>Every one of these leaks pipeline, rep time or trust in the number. Tick what is true for you, in any role, and we will bring a plan for the biggest one to the call.</p>
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
                    <div class="pain-summary" aria-live="polite"><strong data-pain-count>0</strong><span>of 16 ticked</span><p>Tick the ones that are true for you, in any role.</p><a class="button button--gold" href="#brief-form" data-brief-from-pains>Book a review with these in the brief</a><a class="text-link text-link--gold" href="#home-wf">Not ready? See the difference on one workflow <span aria-hidden="true">↓</span></a></div>
                </div>
            </div>
        </section>

        <section class="section revenue-os" id="revenue-os" aria-labelledby="os-title">
            <div class="container">
                <div class="section-heading section-heading--wide"><h2 id="os-title">GTMF1 Revenue Operations</h2><p>Six layers, built inside your stack and improved every week. A framework you own, not a platform you rent.</p></div>
                <div class="os-board">
                    <div class="os-layers">
                        @foreach ($layers as [$name, $tag, $description, $owner])
                            <div class="os-layer"><span class="os-layer__number">{{ $loop->iteration }}</span><strong>{{ $name }}</strong><span class="os-layer__tag">{{ $tag }}</span><p>{{ $description }}</p><small>{{ $owner }}</small></div>
                        @endforeach
                    </div>
                    <div class="os-cycle" aria-hidden="true"><span>weekly</span><svg viewBox="0 0 90 360" role="presentation"><path d="M5 4C78 4 78 350 5 350" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="m1 344 4 7 6-4" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></div>
                    <div class="os-foundation">Built inside your stack: CRM, data warehouse, sequencer, ad platforms, Slack</div>
                </div>
                <div class="button-row button-row--center"><a class="button button--primary" href="#revenue-os">Explore Revenue OS</a><a class="button button--outline" href="#brief-form">Book a GTM systems review</a></div>
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
                <div class="code-window" aria-label="Example documented GTM workflow configuration"><div class="code-window__tabs"><span>plays/hiring-signal.yaml</span><span>route.ts</span><span>pipeline.sql</span></div><pre><code><span class="code-comment"># Hiring-signal outbound · every region you sell into</span>
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
                <h2 id="brief-title">What do you want to build?</h2>
                <form class="brief-form" method="post" action="{{ route('review-brief.store') }}">
                    @csrf
                    <label for="brief" class="sr-only">Describe the play, market and tools you run today</label>
                    <textarea id="brief" name="brief" rows="3" maxlength="1200" minlength="8" placeholder="Describe the play, the market and the tools you run today" aria-describedby="brief-error brief-note" data-brief-field>{{ old('brief') }}</textarea>
                    <button class="button button--gold" type="submit">Send to the review</button>
                </form>
                @error('brief')<p class="form-error" id="brief-error" role="alert">{{ $message }}</p>@else<p class="sr-only" id="brief-error"></p>@enderror
                @if (session('status'))<p class="form-success" role="status">{{ session('status') }}</p>@endif
                <div class="brief-examples" aria-label="Example briefs">
                    <button type="button" data-brief-suggestion="Find operations directors at logistics companies in Europe and North America with 100 to 1,000 employees">Find operations directors at logistics companies in Europe and North America with 100 to 1,000 employees</button>
                    <button type="button" data-brief-suggestion="Route every demo request to the right rep by country and company size within 15 minutes">Route every demo request to the right rep by country and company size within 15 minutes</button>
                    <button type="button" data-brief-suggestion="Clean up our HubSpot so the pipeline report matches what sales says in the Monday meeting">Clean up our HubSpot so the pipeline report matches what sales says in the Monday meeting</button>
                </div>
                <p class="brief-note" id="brief-note">Your brief is validated on this page. It is not sent or stored.</p>
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
                <div class="agents-heading"><div><p class="eyebrow">AI agents</p><h2 id="agents-title">Agents that do the busywork, with a person in the loop</h2></div><div><p>Research before every call, first answers to inbound enquiries, CRM clean-up, call notes and first drafts. Each agent works inside your tools, shows its sources, and hands anything that matters to a person.</p><div class="button-row"><a class="button button--primary" href="#agents">Explore AI agents</a><a class="button button--outline" href="#brief-form">Book a GTM systems review</a></div></div></div>
                <div class="agent-board"><div class="agent-flow">@foreach ([['Trigger','A meeting, a form, a stale deal'],['Agent works','Reads your CRM, documents and the web'],['Draft or action','A brief, a reply, a field update'],['Human review','Approve, edit or reject'],['Write back and log','CRM updated, every step recorded']] as [$title,$copy])<article class="agent-node"><b>{{ $title }}</b><p>{{ $copy }}</p></article>@endforeach</div><div class="agent-evaluate"><strong>Evaluate</strong><span>Weekly, on a test set built from your real cases</span></div><p class="agent-board__note">Nothing important leaves without a person seeing it. Every run is logged and measured.</p></div>
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
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-engineering.svg') }}" width="24" height="24" alt=""></span><h3>GTM engineering</h3><p>Build the GTM systems that connect signals, enrichment, scoring, routing and outreach across the tools your team already uses.</p><ul><li>Signal-driven outbound</li><li>Enrichment across providers</li><li>Lead and account routing</li></ul><a href="#services">View GTM engineering <span aria-hidden="true">›</span></a></article>
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-revops.svg') }}" width="24" height="24" alt=""></span><h3>RevOps</h3><p>Align lifecycle, funnel, lead management, routing, governance and forecasting so teams work from shared definitions and trusted reporting.</p><ul><li>CRM architecture and clean-up</li><li>Pipeline and forecast definitions</li><li>Dashboards and attribution</li></ul><a href="#services">View RevOps <span aria-hidden="true">›</span></a></article>
                <article class="service-card"><span class="service-card__icon"><img src="{{ asset('assets/figma/service-agents.svg') }}" width="24" height="24" alt=""></span><h3>AI agents</h3><p>Apply AI and automation to research, enrichment, prioritization, data operations and rep productivity, with people reviewing important actions.</p><ul><li>GTM and RevOps agents</li><li>Renewals, customer health and churn risk</li><li>Competitor and market intelligence</li></ul><a href="#agents">View AI workflows <span aria-hidden="true">›</span></a></article>
            </div></div>
        </section>

        <section class="section engagement" aria-labelledby="engagement-title">
            <div class="container"><div class="section-heading section-heading--wide"><h2 id="engagement-title">How an engagement runs</h2><p>The same four steps whatever we build. The first one is small, fixed-fee and useful on its own.</p></div><div class="engagement-board">
                @foreach ([['Review','Fixed fee','Written findings on your stack, data and process. Yours whether or not you hire us.'],['Scope','Signed first','What we build, what we do not, which tools it touches, and who owns each part.'],['Build','Weekly releases','Inside your tools. The old way keeps running until the new flow is proven.'],['Hand over','Yours','Documentation, recorded training, and admin access in your name.']] as [$title,$tag,$copy])<article class="engagement-step"><span class="engagement-step__number">{{ $loop->iteration }}</span><h3>{{ $title }}</h3><span class="os-layer__tag">{{ $tag }}</span><p>{{ $copy }}</p></article>@endforeach
                <div class="engagement-loop" aria-hidden="true"></div><p class="engagement-note">Optional: ongoing support, published hours, cancellable</p>
            </div></div>
        </section>

        <section class="section section--cream faq" id="faq" aria-labelledby="faq-title">
            <div class="container faq-layout"><h2 id="faq-title">Questions we<br>get on most calls</h2><div class="faq-list">@foreach ($faqs as $faq)<details class="faq-item"><summary>{{ $faq['question'] }}<span class="faq-item__icon" aria-hidden="true"></span></summary><div class="faq-item__answer"><p>{{ $faq['answer'] }}</p></div></details>@endforeach</div></div>
        </section>

        <section class="cta-band" aria-labelledby="cta-title"><div class="container cta-band__inner"><div><h2 id="cta-title">Rebuild your revenue<br>engine for the AI era</h2><p>Start with a fixed-fee GTM systems review. We map your stack against the six layers of Revenue OS, and you keep the findings whether or not you work with us.</p><div class="button-row"><a class="button button--light" href="#brief-form">Book a GTM systems review</a><a class="button button--outline-light" href="#plays">See the plays</a></div></div><div class="orbit-art" aria-hidden="true"><i></i><i></i><i></i></div></div></section>
    </main>

    <footer class="site-footer"><div class="container"><div class="footer-grid"><div class="footer-brand"><a class="brand brand--footer" href="{{ route('home') }}" aria-label="GTMF1 home"><span class="brand__wordmark">GTMF1</span></a><p>GTMF1 designs and delivers RevOps, CRM and GTM systems, marketing operations, data, automation, AI workflows and migrations.</p></div>
                <div><h2>Services</h2><a href="#revenue-os">GTMF1 Revenue Operations</a><a href="#services">GTM engineering</a><a href="#services">RevOps</a><a href="#agents">AI agents</a><span class="footer-link--inactive" aria-disabled="true">Pricing</span><a href="#brief-form">GTM systems review</a></div>
                <div><h2>Industries</h2><a href="#industries">Manufacturing and industrial</a><a href="#industries">Logistics and supply chain</a><a href="#industries">Professional services</a><a href="#industries">B2B SaaS and technology</a><a href="#industries">Banking and financial services</a><a href="#industries">Healthcare and life sciences</a><a href="#industries">Real estate and proptech</a></div>
                <div><h2>Resources</h2><a href="#plays">GTM plays</a><a href="#industries">Industries</a></div>
                <div><h2>Company</h2><span class="footer-link--inactive" aria-disabled="true">About</span><a href="#brief-form">Contact</a></div>
            </div><div class="footer-bottom"><span>© {{ now()->year }} GTMF1</span><div><span class="footer-link--inactive" aria-disabled="true">Privacy</span><span class="footer-link--inactive" aria-disabled="true">Terms</span><button type="button" data-cookie-settings>Cookie notice</button></div></div></div></footer>

    <aside class="cookie-notice" data-cookie-notice aria-label="Cookie preferences" hidden><p>This site does not use analytics cookies. Your choice only saves this notice preference in this browser.</p><div><button type="button" class="button button--primary button--cookie" data-cookie-choice="dismissed">Got it</button><button type="button" class="button button--outline button--cookie" data-cookie-choice="shown">Keep showing</button></div></aside>
@endsection
