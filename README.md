# 🚑 SOS Grúa Express - Plataforma de Asistencia Vehicular

![Version](https://img.shields.io/badge/version-1.0.0-blue) ![PHP](https://img.shields.io/badge/PHP-8.0%2B-purple) ![Status](https://img.shields.io/badge/estado-En%20Desarrollo-green)

Bienvenido a **SOS Grúa Express**, una solución web moderna diseñada para facilitar la conexión entre conductores con emergencias vehiculares y proveedores de servicios de grúa y asistencia técnica. Este proyecto simula una plataforma completa donde los usuarios pueden solicitar, cotizar y gestionar servicios de auxilio vial de manera rápida y eficiente.

---

## 🌟 Descripción del Proyecto

El objetivo principal de **SOS Grúa Express** es minimizar el estrés de las emergencias en carretera. La página ofrece una interfaz amigable y responsiva que permite a los usuarios:

*   **Solicitar Servicios Urgentes**: Desde grúas hasta recarga de baterías o gasolina.
*   **Consultar Tarifas y Planes**: Visualización clara de paquetes de suscripción o servicios puntuales.
*   **Conocer al Equipo**: Transparencia con perfiles de los conductores y técnicos.
*   **Contacto Directo**: Formularios integrados y enlaces a WhatsApp para atención inmediata.

---

## 🚀 Características Principales

El sistema cuenta con diversos módulos funcionales:

### 🛠️ Servicios Ofrecidos
*   **Servicio de Grúa**: Remolque para todo tipo de vehículos.
*   **Recarga de Batería**: Asistencia con "Battery Booster".
*   **Abastecimiento de Combustible**: Envío de gasolina de emergencia.
*   **Cambio de Neumáticos**: Asistencia rápida para llantas pinchadas.
*   **Cerrajería Vial**: Apertura de vehículos sin daños.
*   **Servicios Especiales**: Maniobras de extracción complejas.

### 📦 Paquetes de Suscripción
Visualización de planes con precios adaptados:
*   **Premium ($75)**: Cobertura completa.
*   **Medio ($48)**: Servicios esenciales.
*   **Normal ($32)**: Asistencia básica.

### 👤 Gestión de Usuarios
*   Páginas maquetadas para **Login** y **Registro** de usuarios.
*   Simulación de flujo de contratación de servicios.

---

## 📂 Estructura del Directorio

El proyecto sigue una arquitectura organizada para facilitar su mantenimiento y escalabilidad:

```
sosgrua - modelo/
├── 📁 assets/          # Recursos multimedia (imágenes, iconos, videos)
├── 📁 css/             # Hojas de estilo (CSS) para el diseño visual
│   ├── styles.css      # Estilos globales
│   └── styles.app.css  # Estilos específicos de la aplicación
├── 📁 js/              # (Opcional) Scripts de JavaScript
├── 📁 pages/           # Vistas secundarias del sitio
│   ├── 📁 auth/        # Módulos de autenticación (Login, Registro)
│   ├── 📁 pagos/       # Módulos de pasarela de pago y selección de planes
│   └── 📁 info/        # Información estática adicional
├── 📁 php/             # Lógica del servidor
│   ├── conexion.php    # (Requiere creación) Conexión a Base de Datos MySQL
│   └── send.php        # Procesamiento de formularios de contacto
├── index.php           # Página de inicio (Landing Page)
├── contacto.php        # Página dedicada al formulario de contacto
├── solicitar.php       # Página de solicitud de servicios
└── vercel.json         # Configuración para despliegue en Vercel
```

---

## � Tecnologías Utilizadas

Este proyecto ha sido construido utilizando estándares web modernos:

*   **Frontend**:
    *   **HTML5**: Estructura semántica.
    *   **CSS3**: Diseño responsivo, Flexbox, Grid y animaciones.
    *   **FontAwesome**: Iconografía vectorial.
*   **Backend**:
    *   **PHP**: Lenguaje principal para la lógica del servidor y manejo de formularios.
*   **Base de Datos**:
    *   **MySQL**: Almacenamiento de datos de contacto y registros (requiere configuración local).
*   **Infraestructura**:
    *   **XAMPP**: Entorno de desarrollo local recomendado.
    *   **Vercel**: Configurado para despliegue en la nube (serverless functions para PHP).

---

## ⚙️ Instalación y Configuración

### Prerrequisitos
*   Tener instalado **XAMPP** (o cualquier servidor LAMP/WAMP/MAMP).
*   Navegador web moderno.

### Pasos para Ejecutar Localmente

1.  **Clonar/Descargar el Repositorio**:
    Coloca la carpeta del proyecto dentro del directorio `htdocs` de tu instalación de XAMPP (usualmente `C:\xampp\htdocs\`).

2.  **Configurar la Base de Datos**:
    *   Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
    *   Crea una base de datos llamada `formulario`.
    *   Crea una tabla `datos` con las columnas necesarias (nombre, telefono, correo, mensaje, etc.) para que coincida con `php/send.php`.

    > **Nota:** Verifica que los credenciales en `php/conexion.php` (si existe) o `php/send.php` coincidan con tu configuración local (usuario por defecto: `root`, sin contraseña).

3.  **Iniciar Servidores**:
    *   Abre el panel de control de XAMPP.
    *   Inicia los servicios **Apache** y **MySQL**.

4.  **Acceder al Sitio**:
    Abre tu navegador y visita:
    `http://localhost/sosgrua - modelo/`

---

## ☁️ Despliegue en Vercel

Este proyecto incluye un archivo `vercel.json` configurado para desplegar aplicaciones PHP en Vercel.

1.  Asegúrate de instalar Vercel CLI o conectar tu repositorio de GitHub a Vercel.
2.  Vercel detectará automáticamente la configuración y desplegará tanto los archivos estáticos como los scripts PHP usando el runtime `vercel-php`.

---

## 🤝 Contribución

Si deseas contribuir a este proyecto:
1.  Haz un Fork del repositorio.
2.  Crea una rama con tu nueva funcionalidad (`git checkout -b feature/NuevaFuncionalidad`).
3.  Realiza tus cambios y haz commit (`git commit -m 'Agrega nueva funcionalidad'`).
4.  Haz push a la rama (`git push origin feature/NuevaFuncionalidad`).
5.  Abre un Pull Request.

---
*Desarrollado con ❤️ para servicios de asistencia venezolana.*
