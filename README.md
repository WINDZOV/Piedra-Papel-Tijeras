# 🪨 Piedra Papel Tijeras — Juego Web con Laravel

Este es un proyecto básico del clásico juego "Piedra, Papel o Tijeras" desarrollado con Laravel como parte de mi proceso de aprendizaje. El objetivo principal es practicar conceptos fundamentales de Laravel como rutas, controladores, vistas Blade, formularios con CSRF, base de datos y migraciones.

## 🚀 Características

- Selección de jugada: Piedra, Papel o Tijeras
- Resultado dinámico contra el ordenador
- Historial de las últimas partidas jugadas
- Estilos simples con Bootstrap 5
- Almacenamiento de resultados en base de datos con Eloquent / Query Builder

## 🛠️ Tecnologías usadas

- PHP 8+
- Laravel 10
- Bootstrap 5 (vía CDN)
- MySQL
- HTML5 / CSS3

## 📦 Instalación y uso

1. Clona este repositorio:
   
       ```bash
   
       git clone https://github.com/WINDZOV/Piedra-Papel-Tijeras.git
   
       cd Piedra-Papel-Tijeras
3. Instala las dependencias:

       ```bash
    
       composer install
    
5. Copia el archivo .env:
   
       ```bash
    
        cp .env.example .env
    
6. Configura tu base de datos en el archivo .env.

7. Genera la clave de la aplicación:

       ```bash
        php artisan key:generate
    
6.Ejecuta las migraciones para crear la tabla:
  
    ```bash
    
    php artisan migrate   
    
7.Inicia el servidor:
  
    ```bash
    
    php artisan serve

8.Accede en tu navegador a:

     http://127.0.0.1:8000

     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

🤝 **Agradecimientos**

**Gracias al equipo de Laravel y a la comunidad de desarrolladores por los tutoriales, documentación y soporte. Este es uno de mis primeros pasos en el mundo de los frameworks PHP.
**
