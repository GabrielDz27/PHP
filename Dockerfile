FROM php:8.2-apache

# Instala a extensão mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# (Opcional) habilita o mod_rewrite do Apache se for usar rotas amigáveis
RUN a2enmod rewrite

# Copia os arquivos do projeto para o container
COPY ./src /var/www/html/
