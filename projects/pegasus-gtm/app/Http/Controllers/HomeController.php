<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewBriefRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'roles' => [
                ['id' => 'sales', 'label' => 'Sales leaders', 'audience' => 'For CROs and VPs of Sales', 'issues' => ['Your forecast changes depending on who you ask.', 'Reps spend more time researching and updating CRM than selling.', 'Inbound leads wait too long for follow-up.', 'You can’t clearly see which plays actually create pipeline.']],
                ['id' => 'marketing', 'label' => 'Marketing leaders', 'audience' => 'For CMOs and VPs of Marketing', 'issues' => ['Campaign performance and pipeline numbers don’t reconcile.', 'We can’t clearly see which accounts are showing real buying intent.', 'Leads and signals come in, but routing and follow-up are inconsistent.', 'Attribution changes depending on which report or platform you look at.']],
                ['id' => 'revops', 'label' => 'RevOps', 'audience' => 'For RevOps and systems teams', 'issues' => ['Your CRM has become harder to trust than to use.', 'Routing and handoffs break every time the business changes.', 'Teams disagree on what the funnel and pipeline actually mean.', 'RevOps spends too much time fixing data instead of driving growth.']],
                ['id' => 'gtm', 'label' => 'Heads of GTM', 'audience' => 'For founders and heads of GTM', 'issues' => ['Revenue processes depend too heavily on tribal knowledge and individual people.', 'New GTM plays take too long to turn into working processes and systems.', 'It’s hard to see where leads, deals, or customers are getting stuck.', 'Teams are experimenting with AI and automation without clear ownership or governance.']],
            ],
            'layers' => [
                ['Signal', 'Sense', 'Know who to talk to, and why now', 'GTM engineering'],
                ['Context', 'Unify', 'One complete, current record for every account', 'RevOps'],
                ['Agents', 'Execute', 'AI agents do the busywork; people make the calls', 'AI agents'],
                ['Flow', 'Orchestrate', 'Every lead and deal moves to the right owner, on a clock', 'GTM engineering'],
                ['Pulse', 'Measure', 'One pipeline number everyone trusts', 'RevOps'],
                ['Loop', 'Improve', 'Every system evaluated and sharpened every week', 'All three'],
            ],
            'plays' => [
                ['id' => 'tam', 'label' => 'TAM mapping', 'title' => 'Every account in your market, in one table you can filter.', 'items' => ['Sells into your target markets', '50–1,000 employees', 'Hiring in sales or RevOps', 'CRM is known']],
                ['id' => 'routing', 'label' => 'Inbound routing', 'title' => 'Every inbound lead reaches the right person, while the context is fresh.', 'items' => ['Territory and segment rules', 'Fast first response', 'Ownership visible in the CRM', 'Exceptions sent for review']],
                ['id' => 'scoring', 'label' => 'Lead scoring', 'title' => 'A fit score your team can inspect and adjust.', 'items' => ['Clear fit criteria', 'Signals have a source', 'Thresholds are documented', 'People review edge cases']],
                ['id' => 'outbound', 'label' => 'Signal outbound', 'title' => 'Useful signals become timely, relevant outreach.', 'items' => ['Hiring, funding and technology changes', 'Account context collected', 'Drafts reviewed by a person', 'Sequence stays in your tools']],
                ['id' => 'enrichment', 'label' => 'CRM enrichment', 'title' => 'Current account and contact data, with its source recorded.', 'items' => ['More than one provider', 'Source retained', 'Duplicate checks', 'Refresh rules documented']],
                ['id' => 'research', 'label' => 'Rep research', 'title' => 'Account research prepared before the first conversation.', 'items' => ['Company and role context', 'Sources linked', 'Useful details highlighted', 'Rep remains in control']],
                ['id' => 'reporting', 'label' => 'Pipeline reporting', 'title' => 'One pipeline view that reconciles with the CRM.', 'items' => ['Stage definitions aligned', 'Changes visible over time', 'Shared source of truth', 'Runbook for exceptions']],
            ],
            'industries' => [
                ['icon' => 'industry-manufacturing-exact.svg', 'title' => 'Manufacturing and industrial', 'copy' => 'CRM architecture, data governance and connected workflows for complex sales and distributor operations.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-logistics-exact.svg', 'title' => 'Logistics and supply chain', 'copy' => 'Lifecycle, routing and automation designed for teams working across lanes, regions and account groups.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-professional-exact.svg', 'title' => 'Professional services', 'copy' => 'Revenue processes, data and reporting that support relationship-led teams as they grow.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-saas-exact.svg', 'title' => 'B2B SaaS and technology', 'copy' => 'Connected GTM platforms, clear lifecycle definitions and practical automation across sales and marketing.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-bfsi-exact.svg', 'title' => 'Banking, financial services and insurance', 'copy' => 'Governed CRM and data workflows that give teams consistent processes and reporting.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-healthcare-exact.svg', 'title' => 'Healthcare and life sciences', 'copy' => 'GTM systems, integrations and data operations designed around complex teams and workflows.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-realestate-exact.svg', 'title' => 'Real estate and proptech', 'copy' => 'Lead management and connected operations that help teams respond and follow up consistently.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
                ['icon' => 'industry-question-exact.svg', 'title' => 'Another industry?', 'copy' => 'The right system depends on your operating model, data and tools. Share the challenge and GTMF1 can assess the fit.', 'link' => '#brief-form', 'cta' => 'Discuss your systems'],
            ],
            'faqs' => [
                ['question' => 'What does GTMF1 do?', 'answer' => 'GTMF1 is a Revenue Infrastructure Partner. The work spans RevOps, CRM and GTM systems, marketing operations, data, automation, AI workflows and platform migrations.'],
                ['question' => 'What is GTM engineering, and how is it different from RevOps?', 'answer' => 'RevOps makes the CRM, pipeline definitions and reporting consistent. GTM engineering builds the signals, enrichment, routing and outreach workflows that operate across your tools. The design shows these working together.'],
                ['question' => 'Do we have to change our CRM?', 'answer' => 'We work inside the CRM and tools you already own. Salesforce and HubSpot are core platforms; a systems review maps your current stack before changes are scoped, so you can get more value from the systems already in place.'],
                ['question' => 'Which tools do you work with?', 'answer' => 'Salesforce and HubSpot sit at the center of the work. Connected tools can include Gong, Outreach, Clay, Apollo, ZoomInfo and Slack, with Zapier, Make and n8n for automation. Marketing, scheduling, contracts and analytics tools such as Marketo, Pardot, Calendly, DocuSign and Tableau are scoped around your current stack.'],
                ['question' => 'Who owns what you build?', 'answer' => 'The design says workflows are documented and code lives in your repository. The intent is that your team can understand and maintain the systems after handover.'],
                ['question' => 'What do your AI agents actually do?', 'answer' => 'AI workflows can support account research, meeting preparation, data quality checks, enrichment, summarization, routing, pipeline inspection and internal knowledge workflows. This includes Claude-based agentic setups connected to your CRM and GTM tools, with people reviewing data changes and customer-facing actions.'],
                ['question' => 'How does an engagement start?', 'answer' => 'It starts with a fixed-fee review, followed by an agreed scope, weekly build and a documented handover. The review findings are yours whether or not you continue.'],
                ['question' => 'Are the examples on this page real clients?', 'answer' => 'The page presents example workflows and interface concepts. It does not identify them as customer case studies or attribute results to named clients.'],
            ],
        ]);
    }

    public function submitBrief(StoreReviewBriefRequest $request): RedirectResponse
    {
        $request->validated();

        return redirect()->route('home', '#brief-form')->with('status', 'Your brief passed validation. This form does not send or store it.');
    }
}
