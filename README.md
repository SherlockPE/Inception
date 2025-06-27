# 🐳 Proyecto Inception – Instalación y Uso

Este proyecto recrea una infraestructura básica de servicios web utilizando **Docker** y **Docker Compose**, con servicios como **MariaDB**, **WordPress** y **Nginx** sobre un sistema Alpine Linux. Cada servicio corre en su propio contenedor, aislado y configurado con seguridad básica mediante SSL autofirmado.

---

## 📦 Servicios implementados

- **MariaDB** – Base de datos relacional para WordPress.
- **WordPress** – instalado y configurado.
- **Nginx** – Servidor web con HTTPS (SSL autofirmado).

---

## 🧱 Estructura del Proyecto

.
├── Inception.pdf </br>
├── Makefile </br>
├── README.md </br>
└── srcs </br>
    ├── docker-compose.yml </br>
    └── requirements </br>
        ├── mariadb </br>
        │   ├── conf </br>
        │   │   ├── database-setup.sql </br>
        │   │   └── mariadb-conf.cnf </br>
        │   ├── Dockerfile </br>
        │   └── tools </br>
        │       └── script.sh </br>
        ├── nginx </br>
        │   ├── conf </br>
        │   │   └── nginx.conf </br>
        │   ├── Dockerfile </br>
        │   └── tools </br>
        │       └── script.sh </br>
        └── wordpress </br>
            ├── conf </br>
            │   ├── wp-config.php </br>
            │   └── www.conf </br>
            ├── Dockerfile </br>
            └── tools </br>
                └── script.sh </br>



---

## 🛠️ Requisitos previos

- Docker y Docker Compose instalados
- Usuario con permisos `sudo`
- Conexión a internet

---

## 🌐 Configuración del entorno

1. Clona el repositorio:

```bash
git clone https://github.com/sherlockpe/inception.git
cd inception
```

2. Crea el archivo .env con el siguiente contenido:

```
# Usuario y dominio
LOGIN=$USER
DOMAIN=${LOGIN}.42.fr

# Base de datos MariaDB
DB_NAME=wordpress
MDB_USER=$LOGIN
MDB_USER_PASSWORD=1234
MDB_ROOT_PASSWORD=1234

# Configuración de WordPress
WORDPRESS_TITLE=42Inception
WORDPRESS_USERS_EMAIL=$LOGIN@student.42madrid.fr

# Usuario normal de WordPress
WORDPRESS_USER=near
WORDPRESS_USER_PASSWORD=qwerty

# Usuario administrador de WordPress
WORDPRESS_ADMIN_USER=$LOGIN
WORDPRESS_ADMIN_PASSWORD=QWERTY
```

🔐 Seguridad y certificados SSL

El certificado SSL se genera automáticamente usando openssl dentro del contenedor de Nginx.
Se configura mediante las variables DOMAIN y LOGIN, personalizadas para tu sesión.
El sitio es accesible exclusivamente a través de HTTPS (puerto 443).

📂 Volúmenes persistentes

Los datos de la página web no se perderán al reiniciar los contenedores, ya que están almacenados en:

    /home/$USER/data/wordpress-volume

    /home/$USER/data/mariadb-volume

Montados mediante driver_opts en docker-compose.yml

## 🧠 Recordatorio: Modificar el archivo `/etc/hosts`

Para que puedas acceder a tu dominio personalizado (`$LOGIN.42.fr`) desde tu navegador local, necesitas añadir una entrada en tu archivo de hosts:

1. Abre el archivo con permisos de superusuario:

```bash
sudo vim /etc/hosts
```

sustituye *$LOGIN* por tu nombre de usuario real 

```bash
127.0.0.1   $LOGIN$.42.fr
```


```bash
127.0.0.1   mi_usuario.42.fr
```



🧑‍💻 Créditos

Proyecto realizado por Fabricio López Reyes
Estudiante de 42 Madrid
GitHub: SHERLOCKPE