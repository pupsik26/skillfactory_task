# skillfactory_task

.htaccess
# Включаем перенаправление
RewriteEngine On
# Не применять к существующим файлам файлам
RewriteCond %{REQUEST_FILENAME} !-f
# Не применять к существующим директориям
RewriteCond %{REQUEST_FILENAME} !-d
# Редирект всех запросов на index.php
# L означает Last, нужен чтобы на этом этапе mod_rewrite сразу остановил работу.
# Короче, небольшое увеличение производительности.
RewriteRule ^(.*)$ index.php?url_param=$1 [L,QSA]
