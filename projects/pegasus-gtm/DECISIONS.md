# Decisions

| ID | Decision | Status | Source | Consequence |
| --- | --- | --- | --- | --- |
| DEC-001 | Keep the GTMF1 website in a separate project under the existing AI Workspace. | approved | User reply, 2026-10-19 | The AI Workspace foundation and its Python CLI remain unchanged. |
| DEC-002 | Use the supplied Figma page and its visible interactions as the scope. | approved | User request and reply, 2026-10-19; `SRC-FIGMA-001` | Do not add analytics, CRM integrations, lead storage, or other backend features. |
| DEC-003 | Use Laravel 13 + Blade with a focused route/controller and no persistence layer. | approved | User's Laravel implementation instruction; `SRC-FIGMA-001` | Create only backend behavior needed for the page and review brief. |
| DEC-004 | Use destinations explicitly present in the Figma file; do not guess missing destinations. | superseded | User reply, 2026-10-19 | Superseded for company-site URLs and review submission by DEC-007. |
| DEC-005 | Adapt the desktop frame for tablet/mobile because no corresponding Figma frames exist. | approved | User request and reply, 2026-10-19; `SRC-FIGMA-001` | Responsive details are recorded as implementation assumptions in DESIGN.md. |
| DEC-006 | Use GTMF1 as the brand and the supplied HTML as the source for company context and services. | approved | User-provided HTML `SRC-GTMF1-001`, 2026-10-19 | Replace the former brand and align site copy to the provided service description while retaining the Figma composition. |
| DEC-007 | Remove external company-site destinations and keep review submission local. | approved | User instruction, 2026-10-19 | CTAs navigate to local sections; the form validates without sending or storing the brief. |
| DEC-008 | Replace the Figma burgundy accent `#7A1E3A` with dark forest green `#21483A`; retain the other Figma palette colors. | approved | User selection, 2026-10-19 | Use forest green for primary accents and compatible green tints/shades for accent states and illustrations. |
