# Railway Deployment Guide

## Prerequisites
- Railway account
- Git repository with your code
- Railway CLI (optional)

## Deployment Steps

### 1. Push to GitHub
Make sure your code is pushed to a GitHub repository:
```bash
git add .
git commit -m "Prepare for Railway deployment"
git push origin main
```

### 2. Create Railway Project
1. Go to [railway.app](https://railway.app)
2. Click "New Project" → "Deploy from GitHub repo"
3. Select your repository
4. Railway will automatically detect the Laravel application

### 3. Configure Environment Variables
In Railway dashboard, set these environment variables:

#### Required Variables
- `APP_KEY`: Generate with `php artisan key:generate --show`
- `APP_ENV`: `production`
- `APP_DEBUG`: `false`
- `APP_URL`: Your Railway URL (e.g., `https://your-app-name.railway.app`)

#### Database Variables (Railway provides these automatically)
- `RAILWAY_DB_NAME`
- `RAILWAY_DB_USERNAME`
- `RAILWAY_DB_PASSWORD`
- `RAILWAY_PRIVATE_DOMAIN`
- `RAILWAY_TCP_PORT`

#### Optional Redis Variables (if using Redis addon)
- `RAILWAY_REDIS_PASSWORD`
- `RAILWAY_REDIS_PORT`

### 4. Add Database Service
1. In your Railway project, click "New Service"
2. Select "Database" → "MySQL" or "PostgreSQL"
3. Railway will automatically provide the connection variables

### 5. Deploy
- Railway will automatically deploy when you push changes
- You can also trigger manual deployments from the dashboard

### 6. Run Migrations
After first deployment, you may need to run migrations:
1. Go to your service in Railway dashboard
2. Click "Logs" tab
3. Click "New Command" → "php artisan migrate --force"

## Railway-Specific Configurations

### railway.json
The `railway.json` file configures:
- Build process (Composer + NPM)
- Start command (Laravel server)
- Health checks
- Environment (PHP 8.2, Node 18)

### Environment Variables
The `.env.example` includes Railway-specific placeholders that will be automatically replaced by Railway's environment variables.

## Troubleshooting

### Common Issues
1. **Database connection errors**: Ensure database service is added and variables are correct
2. **Asset loading issues**: Run `npm run build` before deploying
3. **Permission errors**: Railway handles file permissions automatically
4. **Migration failures**: Use `--force` flag in production

### Logs
Check Railway logs for debugging:
- Service logs for application errors
- Build logs for deployment issues
- Database logs for connection problems

## Production Optimizations
The deployment script automatically:
- Optimizes Composer autoloader
- Caches configuration, routes, and views
- Builds frontend assets
- Runs database migrations

## Custom Domain (Optional)
1. Go to project settings in Railway
2. Add your custom domain
3. Update DNS records as instructed
4. Update `APP_URL` environment variable
