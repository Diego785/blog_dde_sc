# Complaints and News Platform · Directorate of Education of Santa Cruz

Public website and internal system for the Departmental Directorate of Education of Santa Cruz, Bolivia: people file complaints online, staff follow them up, and the institution publishes news, resolutions and reference material.

Related system: [realtime_reporte_distritos](https://github.com/Diego785/realtime_reporte_distritos), real-time form tracking for school districts.

## Context

Built between August and December 2024 as a full-stack developer and systems consultant for the Directorate, to move its complaint handling and publications online.

## Features

**Public site**

- News by sub-directorate, with cover images and photo galleries.
- Resolutions and reference material (bibliography by type and area) as downloadable documents.
- **Online complaint form.** Complainant details, with the option to keep their identity confidential and to receive follow-up by email; the people reported (name and position); location (school, district, zone, neighborhood); the facts; and file attachments.

**Admin panel**

- Complaint list with search and status filters.
- Complaint detail: validate the form, assign a technician, change the status and send follow-up comments, which reach the complainant by email when they opted in.
- Complaint form exported to PDF.
- User management with roles and permissions.

## Tech stack

Laravel 11 · Livewire 3 · Jetstream · Spatie Laravel Permission · DomPDF · Tailwind CSS · Flowbite · Vite · Docker

## How it works

Laravel serves both the public site and the admin panel, and Livewire components handle the multi-step complaint form and the admin screens. Follow-up emails use Laravel Mail. A Dockerfile (PHP 8.3 FPM) and a docker-compose file run the app on a shared reverse-proxy network.

## Run locally

```bash
composer install
npm install && npm run dev
cp .env.example .env        # set your database connection
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Or with Docker: run `docker network create server-network` once, then `docker compose up -d --build`.

## Author

Diego Hurtado Vargas · [GitHub](https://github.com/Diego785) · [LinkedIn](https://www.linkedin.com/in/diegohurtadovargas/)
