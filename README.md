# PHP-Blog

### Чтобы запустить Tailwind Css понадобится данная команда

- npx tailwindcss -i ./assets/css/input.css -o ./assets/css/style.css --watch

## .htaccess

`RewriteEngine On
RewriteCond %{REQUEST_URI}  !(\.png|\.jpg|\.webp|\.gif|\.jpeg|\.zip|\.css|\.svg|\.js|\.pdf)$
RewriteRule (.*) routes.php [QSA,L]`
