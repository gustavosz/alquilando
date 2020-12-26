## Code Challenge - Alquilando

- Framework Laravel v8
- El objetivo de este TP es desarrollar una sencilla API RESTful que permita crear, obtener,
  actualizar y eliminar registros de una tabla MySQL. La API debe poder consumir y enviar la
  información en formato JSON.
  
- Base de datos MySQL. Debe contener una tabla con los siguientes campos:
    - id
    - nombre
    - apellido
    - email
    - usuario

- Endpoints
    - GET/ api/users (index)
    - POST/ api/users (store)
    - GET/ api/users/{user} (show)
    - PUT/ api/users/{user} (update)
    - DELETE api/users/{user} (destroy)

## Instalación del proyecto

- Clonar repositorio.
- Tener instalado Composer y PHP "^7.3|^8.0"
- Correr el comando "composer-install"
- Configurar base de datos en archivo .env
- Correr migraciones "php artisan migrate"


