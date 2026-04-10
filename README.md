![Logo](logo.png)

**fastcode** es un framework de PHP minimalista diseñado para desarrolladores
que priorizan la velocidad de desarrollo y una curva de aprendizaje casi nula.

Construido bajo el principio de "Simplicidad Primero", fastcode te permite pasar
de la idea al código sin configuraciones pesadas ni dependencias obligatorias.

---

## 🚀 Características Principales

- **Ultra Ligero:** Sin librerías externas por defecto (Cero Dependencies).
- **Curva de Aprendizaje Rápida:** Diseñado para entenderse en minutos, no días.
- **Estructura Limpia:** Organización de directorios intuitiva y funcional.
- **Extensible:** Compatible con Composer si decides añadir paquetes de terceros.
- **Rendimiento Nativo:** Aprovecha al máximo la velocidad de PHP puro.

---

## 📁 Estructura de Directorios

fastcode mantiene todo en su lugar sin complicaciones; es muy intuitivo y es
fácil darse cuenta donde va cada cosa.

Una aplicación en *fastcode* puede comenzar a funcionar con una estructura de
archivos muy básica:

```text
fastcode/
├── core/               # Clases del núcleo del framework (App, Router, etc.)
│   └── App.php
├── public/             # Punto de entrada único y assets (CSS, JS)
│   └── index.php       
└── Autoloader.php      # Cargador automático de clases nativo. Estándar PSR-4
```

Con estos tres archivos tu aplicación ya deberá funcionar correctamente, sin
embargo un proyecto grande depende de muchas otras configuraciones y archivos.
Aún en ese punto *fastcode* sigue manteniendo la Simplicidad en su estructura.

He aquí un ejemplo de un proyecto más grande:

```text
fastcode/
├── core/               # El motor del framework
│   ├── App.php         # Clase principal (Core)
│   ├── Config.php      # Clase para leer archivos de la carpeta /config
│   └── Database.php    # Clase para la conexión PDO
├── config/             # Solo archivos de DATOS (arrays de PHP)
│   ├── app.php         # Nombre de la app, URL, etc.
│   └── database.php    # Credenciales (Host, User, Pass)
├── public/             # Punto de entrada único y assets (CSS, JS)
│   └── index.php
└── Autoloader.php      # Cargador automático de clases nativo. Estándar PSR-4
```

---

## 📈 Filosofía de Desarrollo

**fastcode** nace para resolver el problema de la **sobre-ingeniería**. Mientras
otros frameworks modernos te obligan a aprender cientos de conceptos abstractos
antes de escribir una sola línea de código, *fastcode* te devuelve el control
total de PHP.

Nuestro objetivo es permitir que tanto expertos como novatos construyan
aplicaciones robustas de forma organizada, sin sacrificar la legibilidad ni el
rendimiento.

---

## 🤝 Cómo Contribuir

¡Nos encanta recibir ayuda para hacer a **fastcode** aún más rápido y simple!
Para contribuir, sigue estos pasos:

1. **Haz un Fork** del proyecto.
2. **Crea una rama** para tu mejora: `git checkout -b feat/mejoras`)
3. **Haz un commit** con tus cambios: `git commit -m 'feat: añadir soporte para X'`
4. **Haz Push** a la rama git: `git push origin feat/mejoras`
5. **Abre un Pull Request** explicando tus cambios.

---

## 📄 Licencia

Este proyecto está bajo la **Licencia MIT**. Esto significa que puedes usar,
copiar, modificar y distribuir **fastcode** libremente, incluso en proyectos
comerciales, siempre que mantengas el aviso de copyright original.

Consulta el archivo [LICENSE](LICENSE) para más detalles.
