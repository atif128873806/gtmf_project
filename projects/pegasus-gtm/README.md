# GTMF1

An isolated Laravel implementation of the Figma homepage, using GTMF1 brand and service details from the user-provided HTML.

## Local development

Requirements: PHP 8.5+, Composer, Node.js 22+ and npm.

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Use `npm run dev` instead of `npm run build` while developing. The review brief is validated locally and is not sent or stored.

## Checks

```bash
php artisan test
vendor/bin/pint --format agent
npm run build
```

The review form validates the brief locally and displays a status message. Briefs are not saved or sent by this app. Cookie notice dismissal is stored only in the visitor's browser; there is no analytics integration.
