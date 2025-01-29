# TATTOO SHOP

Fork este repo

## EJERCICIO CLASE

Una vez analizado el código que os suministro vamos a realizar un ejercicio que ponga en práctica la inserción de otros datos en la base de datos y la realización de operaciones de validación sobre dichas inserciones.

### INSERCIÓN DE TATUADOR EN LA BASE DE DATOS
Desarrolla una parte de la aplicación que permita dar de alta a nuevos tatuadores en nuestra base de datos. Deberás seguir las siguientes indicaciones:

1. *Tabla de la base de datos*
La tabla que almacenará a los tatuadores dentro de nuestra base de datos se llamará "**tatuadores**" y contendrá los siguientes campos.

| Campo    | Tipo de Dato          | Tamaño | Descripción                |
|----------|----------------------|--------|----------------------------|
| id       | INT AUTO_INCREMENT   | -      | Identificador único       |
| nombre   | VARCHAR              | 100    | Nombre del usuario        |
| email    | VARCHAR              | 150    | Correo electrónico único  |
| password | VARCHAR              | 255    | Contraseña     |
| foto     | VARCHAR              | 255    | URL de la foto de perfil  |
| creado_en | TIMESTAMP DEFAULT CURRENT_TIMESTAMP | - | Fecha de creación |

#### Explicación de la Tabla:
- **`id`**: Identificador único (clave primaria).
- **`nombre`**: Almacena hasta 100 caracteres.
- **`email`**: Almacena hasta 150 caracteres y es único.
- **`password`**: Hasta 255 caracteres (permite almacenar contraseñas)
- **`foto`**: URL o ruta de la imagen del usuario.
- **`creado_en`**: Guarda la fecha y hora de creación automáticamente.

2. *Clases PHP y lógica de aplicación*
Debemos controlar desde el fichero **`index.php`** que cuando llegue una petición a la URI *`/tattooshop_php/tatuadores/alta`* se llame al *Controller* de Tatuadores para que, o bien se muestre el formulario que permita dar de alta un nuevo tatuador, o bien que se realice la inserción del tatuador en la base de datos.

#### Explicación de las peticiones
- **`/tattooshop_php/tatuadores/alta`** y **`REQUEST_METHOD = GET`**: Se muestra el formulario de alta.
- **`/tattooshop_php/tatuadores/alta`** y **`REQUEST_METHOD = POST`**: Se realiza el alta del tatuador en la BD.

#### Explicación de la lógica de aplicación
- **`TatuadorController.php`**: Clase que se encarga de mostrar las vistas relacionadas con Tatuadores y de llamar al `TatuadorModel.php` para interactuar con la base de datos.
- **`TatuadorModel.php`**: Clase que se encarga de interactuar con la base de datos. Contendrá métodos para insertar, leer, modificar y eliminar registros de la tabla `tatuadores` de la base de datos.
- **`TatuadorViews`**: Diferentes ficheros que contendrán las vistas relacionadas con Tatuadores.
    - `TatuadorAltaView.php`: Fichero que contiene el formulario de alta de Tatuadores.
    - `TatuadorAltaCorrectaView.php`: Fichero que contiene una página para mostrar un mensaje al usuario para indicarle que el alta ha ido bien.




