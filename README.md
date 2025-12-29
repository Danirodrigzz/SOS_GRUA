# SOS Grúa Express - Modelo de Sitio Web

Este proyecto es un modelo de sitio web para un servicio de grúas y asistencia vehicular llamado **SOS Grúa Express**. Permite a los usuarios solicitar servicios, ver planes de pago y contactar con la empresa.

## 📂 Nueva Estructura del Proyecto

El proyecto ha sido reorganizado para mantener un orden lógico y profesional:

*   **`assets/`**: Contiene todas las imágenes (`.png`, `.jpg`) y videos (`.mp4`) del sitio.
*   **`css/`**: Contiene todos los archivos de estilos (`styles.css`, `info.css`, etc.).
*   **`php/`**: Contiene la lógica del backend (`conexion.php` para la base de datos y `send.php` para el formulario).
*   **`pages/`**: Contiene las páginas HTML secundarias organizadas por módulos:
    *   `auth/`: Páginas de Login y Registro.
    *   `pagos/`: Páginas relacionadas con los paquetes y métodos de pago.
    *   `info/`: Páginas informativas (Sobre nosotros, Servicios, etc.).
*   **`index.php`**: Página principal del sitio.
*   **`contacto.php`**: Página de contacto que integra el formulario.

---

## 🚀 ¿Cómo iniciar el proyecto?

Tienes dos opciones para ejecutar este proyecto en tu máquina local:

### Opción 1: Usando la terminal (Recomendado)
Si tienes PHP instalado en tu sistema o accesible desde la terminal:

1.  Abre una terminal en la carpeta raíz del proyecto.
2.  Ejecuta el siguiente comando para iniciar un servidor local:
    ```bash
    php -S localhost:8000
    ```
3.  Abre tu navegador y entra a: [http://localhost:8000](http://localhost:8000)

### Opción 2: Usando XAMPP (Apache)
Si prefieres usar la interfaz de XAMPP:

1.  Asegúrate de que la carpeta del proyecto esté dentro de `C:\xampp\htdocs\`.
2.  Abre el **Panel de Control de XAMPP**.
3.  Inicia el módulo **Apache** (botón "Start").
4.  Inicia el módulo **MySQL** (botón "Start").
5.  Abre tu navegador y entra a: [http://localhost/sosgrua - modelo/](http://localhost/sosgrua%20-%20modelo/)

---

## 🗄️ Base de Datos (MySQL)

El formulario de contacto guarda la información en una base de datos MySQL local.

**Configuración:**
*   **Base de datos**: `formulario`
*   **Tabla**: `datos`
*   **Usuario**: `root`
*   **Contraseña**: (vacío)
*   **Host**: `localhost`

Si usas XAMPP, asegúrate de tener el módulo MySQL encendido para que el envío de formularios funcione correctamente.

---

## 🛠️ Tecnologías
*   **HTML5**
*   **CSS3** (Estilos personalizados y responsivos)
*   **PHP** (Backend básico)
*   **MySQL** (Base de datos)
*   **JavaScript** (Interacciones básicas)

---
*Organizado y documentado automáticamente por tu Asistente de IA.*
