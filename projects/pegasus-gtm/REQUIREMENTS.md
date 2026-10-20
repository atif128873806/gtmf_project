# Accepted Requirements

Sources: `SRC-FIGMA-001` is the visual/layout source. `SRC-GTMF1-001` is the brand and service-content source, provided by the user.

| ID | Requirement | Acceptance criteria |
| --- | --- | --- |
| REQ-001 | Reproduce the homepage design | Preserve the Figma desktop composition, Inter and JetBrains Mono typography, content hierarchy, section sequence, and supplied illustration assets. Use the GTMF1 brand and service content from the user's HTML. |
| REQ-002 | Provide responsive layouts | Adapt the desktop-only design for tablet and mobile without horizontal overflow; retain the same content and action hierarchy. |
| REQ-003 | Implement visible interactions | Navigation menus and mobile menu, role selection and selectable pain points, workflow timeframe tabs, GTM play tabs, brief form, FAQ disclosure, and cookie preference actions work with keyboard and pointer input. |
| REQ-004 | Use Laravel for the web application | Serve the page and validate the review brief through Laravel routes/controllers. Do not add persistence, analytics, or business workflows absent from the source. |
| REQ-005 | Keep all site navigation local | Do not link to the former company website or invent external destinations. Use relevant in-page anchors; validate the review brief locally without sending or storing it. |
| REQ-006 | Accessible, production-ready frontend | Use semantic HTML, labels, focus states, reduced-motion support, appropriate image alternatives, responsive behavior, and escaped server-rendered content. |
| REQ-007 | Use the GTMF1 identity and service context | Use GTMF1 as the brand. Describe it as a Revenue Infrastructure Partner providing RevOps, CRM/GTM systems, marketing operations, data, automation, AI workflows, and migrations. |
| REQ-008 | Preserve component interaction states | Implement the hover and focus states shown in the Figma component sheet, including navigation triggers, CTA/button variants, role and workflow tabs, prompt examples, and industry links. |

## Limits

The Figma file contains one 1920 px desktop homepage and a separate components sheet; no tablet/mobile frame or FAQ answer copy was present. Responsive behavior is an implementation adaptation. FAQ answers are summarized from approved GTMF1 content and the supplied design. The cookie controls record the selected preference locally; no analytics vendor is configured. The palette retains the Figma colors except the burgundy, which the user selected to replace with dark forest green `#21483A`.
