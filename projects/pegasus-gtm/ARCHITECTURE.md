# Architecture

- **Runtime:** Laravel 13, PHP 8.5, Blade, Vite, plain JavaScript and CSS.
- **Page:** `GET /` renders the single homepage from data passed by a focused controller.
- **Review brief:** a CSRF-protected `POST /review-brief` validates a short text brief and returns to the local form with a status message. It does not send, store, or log the brief.
- **Interactive UI:** small client-side state for menus, tabs, checkboxes, FAQ disclosure and cookie preference. The site has no database domain, accounts, admin panel, analytics integration, or persistent lead storage.
- **Assets:** Figma assets live under `public/assets/figma`; production code must not reference temporary `figma.com/api/mcp/asset/` URLs.
- **Build:** Vite compiles the local stylesheet and JavaScript. Laravel handles routing and server-side validation; no SPA framework is needed.
- **Navigation:** website links stay on local routes or page anchors; no external website destinations are configured.
