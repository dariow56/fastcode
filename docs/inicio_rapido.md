# 📚 Guía de Inicio Rápido

¡Bienvenido a fastcode! Esta guía te enseñará cómo funciona el núcleo del
framework en menos de 5 minutos.

---

## 1. El Flujo de Trabajo

fastcode utiliza el patrón **Front Controller**. Esto significa que TODAS las
peticiones de los usuarios pasan por un único archivo: `public/index.php`.

1. El servidor recibe la URL (ej. `://misitio.com`).
2. El archivo `index.php` carga el `Autoloader.php`.
3. El `Autoloader` localiza las clases necesarias en la directorio raiz `/` y
sus subdirectorios.
4. La clase `core/App` procesa la lógica.

---

## 2. Configuración del Servidor (Apache)

Para que el framework funcione correctamente, necesitas un archivo `.htaccess`
en la raíz para redirigir todo a la carpeta pública:

```apache
RewriteEngine On
RewriteRule ^$ public/index.php [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ public/index.php?url=$1 [QSA,L]
```

No te preocupes, pensamos en esto de antemano y ya lo configuramos por ti.

---

### 3. Creando tu primera Clase

En **fastcode**, la organización es intuitiva: todas las clases se guardan en
diversos directorios; las clases del núcleo se almacenan en `core/`; los modelos
en `models`; los controladores en `controllers`, etc. Como ya podrás darte
cuenta es muy fácil saber donde irá cada clase segun su nombre y propósito.

Para que el sistema las encuentre automáticamente, el nombre
del archivo debe **coincidir exactamente** con el nombre de la clase.

**Ejemplo: `core/Hola.php`**

```php
<?php
namespace Fastcode;

class Hola {
    public function saludar() {
        return "¡Hola desde fastcode!";
    }
}
```

**Uso en `public/index.php`**

```php
<?php

// Requiere el Autoloader nativo
require_once '../autoload.php';

// Incluir clases usando use:
use Fastcode\core\Hola;

// Instanciar la clase
$saludo = new Hola();

// Ejecutar la aplicación
echo $saludo->saludar();
```

---

### 4. Estándares Sugeridos

Para que tu proyecto con **fastcode** se mantenga limpio, profesional y
organizado, te recomendamos seguir estas convenciones de nomenclatura:

- **Nombres de Clases:** Utiliza siempre `PascalCase`. El nombre del archivo
debe ser idéntico al de la clase (ej. `UserController.php`, `Database.php`).
- **Métodos:** Utiliza `camelCase` para definir las funciones dentro de tus
clases (ej. `getData()`, `saveUser()`).
- **Variables:** Puedes optar por `snake_case` o `camelCase`. Lo más importante
es que elijas un estilo y seas **consistente** en todo tu proyecto.

Siguiendo estos estándares, garantizas que cualquier otro desarrollador pueda
leer y entender tu código rápidamente, manteniendo la esencia de simplicidad de
**fastcode**.
