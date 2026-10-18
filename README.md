# Symfony Secure API

[![PHP tests](https://github.com/Kadello/symfony-secure-api/actions/workflows/tests.yml/badge.svg)](https://github.com/Kadello/symfony-secure-api/actions/workflows/tests.yml)

A security-minded REST API portfolio project built with **PHP 8.3** and **Symfony 7.4**.

> **Status:** Initial foundation (MVP milestone 1). Authentication, authorization, persistence and security controls are planned, **not yet implemented**. Do not deploy publicly as a production service.

## What works today

- Symfony HTTP application
- `GET /api/health` returning JSON
- PHPUnit test for the endpoint response
- Local Docker setup
- GitHub Actions test workflow

## Run locally

Requires Docker and Docker Compose.

```bash
docker compose up --build
curl http://localhost:8000/api/health
```

Expected response:

```json
{"status":"ok","service":"symfony-secure-api"}
```

Run tests:

```bash
docker compose run --rm api vendor/bin/phpunit
```

Alternatively, with PHP 8.3+ and Composer installed:

```bash
composer install
APP_ENV=dev APP_DEBUG=1 php -S 127.0.0.1:8000 -t public public/router.php
```

## Roadmap

- [x] Symfony application skeleton and health endpoint
- [x] Docker development environment
- [x] First PHPUnit test and GitHub Actions workflow
- [ ] PostgreSQL and Doctrine ORM
- [ ] CRUD endpoints for tasks
- [ ] Authentication and per-resource authorization (prevent BOLA/IDOR)
- [ ] Request validation, safe errors and rate limiting
- [ ] Functional tests and security regression tests
- [ ] OpenAPI documentation and architecture notes

## Why this project?

The goal is to demonstrate backend engineering **and** practical application security. Each security feature will be paired with tests explaining the threat and its mitigation.

## License

MIT
