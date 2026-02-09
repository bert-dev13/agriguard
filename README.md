# Agriguard - Laravel Application

A modern Laravel application for agricultural monitoring and management.

## Deployment

This application is configured to deploy on Railway with automatic health checks.

### Environment Variables Required

- `DB_CONNECTION` - Database connection type (mysql)
- `DB_HOST` - Database host
- `DB_PORT` - Database port (3306)
- `DB_DATABASE` - Database name
- `DB_USERNAME` - Database username
- `DB_PASSWORD` - Database password
- `APP_ENV` - Environment (production)
- `APP_DEBUG` - Debug mode (false)
- `APP_URL` - Application URL

### Health Check

The application includes a health check endpoint at `/health` that returns:
```json
{
  "status": "ok",
  "timestamp": "2024-01-01T12:00:00Z"
}
```

### Features

- User authentication and registration
- Dashboard with agricultural data
- Modern responsive UI with Tailwind CSS
- RESTful API endpoints
- Database migrations and seeding

## Local Development

1. Clone the repository
2. Install dependencies: `composer install` and `npm install`
3. Copy `.env.example` to `.env` and configure
4. Generate app key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Start development server: `php artisan serve`
