FROM php:8.2-fpm-alpine AS builder

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libzip-dev \
    zip \
    oniguruma-dev \
    sqlite-dev

# Install PHP extensions
RUN docker-php-ext-install \
    zip \
    mbstring \
    pdo \
    pdo_sqlite \
    pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --no-scripts --no-autoloader

# Production stage
FROM php:8.2-fpm-alpine

# Install runtime dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libzip \
    oniguruma \
    sqlite

# Install PHP extensions
RUN docker-php-ext-install \
    zip \
    mbstring \
    pdo \
    pdo_sqlite \
    pdo_mysql

# Copy PHP configuration
RUN echo "memory_limit = 512M" > /usr/local/etc/php/conf.d/laravel.ini

WORKDIR /app

# Copy application files
COPY . .

# Copy vendor from builder stage
COPY --from=builder /app/vendor ./vendor

# Create necessary directories and set permissions
RUN mkdir -p storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data /app

# Copy Nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/http.d/default.conf

# Copy supervisor configuration
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Finish Composer setup
RUN composer dump-autoload --no-dev

# Expose port
EXPOSE 80

# Health check
HEALTHCHECK --interval=30s --timeout=10s --start-period=5s --retries=3 \
    CMD curl -f http://localhost/health || exit 1

# Start supervisor (which manages both PHP-FPM and Nginx)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]