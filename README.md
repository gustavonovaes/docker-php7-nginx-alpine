# docker-php7-nginx-alpine

Pre-configured environment for PHP-FPM + Nginx with Docker using alpine images.

# Try development enviroment

```sh
git clone https://github.com/gustavonovaes/docker-php7-nginx-alpine.git
cd docker-php7-nginx-alpine
docker-compose up 
```

# Try production enviroment

```sh
git clone https://github.com/gustavonovaes/docker-php7-nginx-alpine.git
cd docker-php7-nginx-alpine
docker-compose -f docker-compose.prod.yml up
```

# PHP features and extensions available
 - Composer
 - XDebug (only dev)
 - Redis
 - Postgres
 - Opcache (only prod)
 - PHP-FPM optimizations
 - PHP security 

### Disabled by default
 - PHP GD: FreeType, JPG, PNG, GIF, WEBP
 - PHP ImageMagick 6
 - Mysql
 - Zip
 - Calendar
 - Socket

# Nginx features
 - Requests limit per second and address
 - Loading balancing for PHP-FPM
 - Cache
 - Security Headers
 - Optimizations

# Setup info
 This configuration applies to a 2 GB RAM machine where 1.5G is dedicated to php-fpm.

## Configs that you may want to look

### [php-fpm.conf](docker/php/php-fpm.conf) and [www.conf](docker/php/www.conf):
 - process timeout
 - emergency restart threshold/interval
 - idle timeout
 - max children and servers

### Configs in [custom.ini](docker/php/custom.ini) and [custom.prod.ini](docker/php/custom.prod.ini) for set possible restrictions:
 - memory limit
 - max execution time
 - upload limits: max filesize, max files
 - input data restrictions: max post size, max input time, max input vars, input nesting level
 - Opcache definitions
 - Security Cookies: domains, HTTPS
 - General Security: url open/include, disabled_functions

### [nginx.conf](docker/nginx/nginx.conf):
   - max requests per second or IP zones
   - timeouts: keepalive_timeout, fastcgi_read_timeout
   - client_max_body_size (should be at least the same of upload_max_filesize/post_max_size)
   - Security headers: Content-Security-Policy, X-XSS-Protection, X-Content-Type-Options, X-Frame-Options

# Log

The Nginx and PHP-FPM logs are stored in `/var/log`.


# Learn more in

[A php.ini scanner for best security practices (psecio/iniscan)](https://github.com/psecio/iniscan)

[Tuning dynamic php-fpm settings (cmorrell.com/php-fpm)](https://cmorrell.com/php-fpm/)

[Maximizing PHP 7 Performance with NGINX, Part 1: Web Serving and Caching](https://www.nginx.com/blog/maximizing-php-7-performance-with-nginx-part-ii-multiple-servers-and-load-balancing/)

[Maximizing PHP 7 Performance with NGINX, Part 2: Multiple Servers and Load Balancing](https://www.nginx.com/blog/maximizing-php-7-performance-with-nginx-part-ii-multiple-servers-and-load-balancing/)
