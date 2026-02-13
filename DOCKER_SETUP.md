# Docker Setup for ZyncWeb-Solutions (Render)

## Prerequisites
- Docker installed locally
- Render account

## Local Testing

### 1. Generate Laravel Key
```bash
docker-compose run --rm app php artisan key:generate
```

### 2. Build and Run
```bash
docker-compose up -d
```

### 3. Run Migrations
```bash
docker-compose exec app php artisan migrate --force
```

### 4. Access Application
Open http://localhost in your browser

## Deployment to Render

### 1. Push to GitHub
```bash
git add .
git commit -m "Add Docker configuration"
git push origin main
```

### 2. Create New Web Service on Render
- Go to https://dashboard.render.com
- Click "New +"
- Select "Web Service"
- Connect your GitHub repository
- Fill in the following:
  - **Name**: zyncweb-solutions
  - **Environment**: Docker
  - **Region**: Select closest to your users
  - **Plan**: Choose based on your needs

### 3. Set Environment Variables
In Render dashboard, add under "Environment":
```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app.render.com
DB_CONNECTION=sqlite
SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
LOG_CHANNEL=stack
```

### 4. Deploy
- Build command: (leave empty, Docker handles it)
- Start command: `supervisord -c /etc/supervisor/conf.d/supervisord.conf`
- Click "Create Web Service"

## Important Notes

- **Database**: Uses SQLite. For production, consider migrating to PostgreSQL
- **Sessions & Cache**: Database-backed for distributed systems
- **Persistent Storage**: Mount `/app/storage` and `/app/database` as volumes
- **Logs**: Check via `render logs` command

## Post-Deployment

After deployment, run initial setup:
```bash
# SSH into Render instance and run:
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
```

## Troubleshooting

- **502 Bad Gateway**: Check logs with `render logs`
- **Permission Issues**: The Dockerfile sets proper permissions with `www-data`
- **Out of Memory**: Increase Render plan or optimize queries