# Utilizar una imagen base oficial de PHP
FROM php:7.4-apache

# Establecer el directorio de trabajo en /var/www/html
WORKDIR /var/www/html

# Copiar el contenido del directorio actual al contenedor en /var/www/html
COPY . /var/www/html

# Exponer el puerto 80 para que esté disponible fuera del contenedor
EXPOSE 80

# Definir una variable de entorno
ENV NAME Mundo

# Ejecutar apache2-foreground cuando se inicie el contenedor
CMD ["apache2-foreground"]
