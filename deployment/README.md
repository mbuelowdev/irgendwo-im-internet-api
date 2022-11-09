# Deployment

### How it's deployed

1. Clone Repository A (https://github.com/mbuelowdev/irgendwo-im-internet) into /var/www/irgendwo-im-internet.de/frontend
2. Clone Repository B (https://github.com/mbuelowdev/irgendwo-im-internet-api) into /var/www/irgendwo-im-internet.de/backend
3. Install nginx and php8.1-fpm
4. Configure nginx with the following active site config
5. Install certbot and request certs with --nginx flag set

```
server {
        listen 443 ssl;
        listen [::]:443 ssl;

        server_name             irgendwo-im-internet.de;

        root /var/www/irgendwo-im-internet.de/frontend/;

        index index.html index.htm index.js;

        location ~ ^/api/ {
                root /var/www/irgendwo-im-internet.de/backend/public;
                fastcgi_param SCRIPT_FILENAME /var/www/irgendwo-im-internet.de/backend/public/index.php;
                include fastcgi_params;
                fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        }

        location ~ / {
                try_files $uri $uri/ /index.html =404;
        }

        ssl_certificate /etc/letsencrypt/live/irgendwo-im-internet.de/fullchain.pem; # managed by Certbot
        ssl_certificate_key /etc/letsencrypt/live/irgendwo-im-internet.de/privkey.pem; # managed by Certbot

}
```