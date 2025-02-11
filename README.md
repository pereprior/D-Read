# 📚 D-Read

D-Read es un proyecto de red social multiplataforma diseñado para los amantes de la lectura. En esta presentación, nos centraremos en la versión web, con énfasis en el diseño de la página y sus plantillas.

Este proyecto ha sido desarrollado aplicando conocimientos adquiridos en varias asignaturas del curso.

---

## 🚀 Requisitos Previos

Antes de iniciar el proyecto, asegúrate de que tienes **D-Read** correctamente instalado en tu equipo.

### 1️⃣ **Ejecutar la Base de Datos con Docker**
D-Read utiliza **MySQL** como base de datos. Para ejecutarla, sigue estos pasos:

1. Asegúrate de que **ningún otro servicio** esté usando el puerto **3306** (el puerto por defecto de MySQL).
2. Ejecuta el siguiente comando en la terminal:

    ```sh
    docker run --rm --name db-read -d -p 3306:3306 pereprior/mysql-dreadb
    ```

Esto descargará y ejecutará el contenedor con la base de datos configurada para D-Read.

---

### 2️⃣ **Iniciar el Servidor PHP**
Una vez la base de datos está en funcionamiento, necesitas iniciar un servidor web con **PHP**:

1. Abre una terminal en la **raíz del proyecto** `d-read/`:
   
    ```sh
    cd /ruta/al/proyecto/d-read/
    ```

2. Ejecuta el siguiente comando para iniciar un servidor web local:

    ```sh
    php -S localhost:8000
    ```

3. Accede a tu navegador y abre la siguiente URL:

    ```
    http://localhost:8000/
    ```

Si ves la página de bienvenida, significa que el despliegue de **D-Read** se ha completado correctamente. 🎉

---

## 🛠️ Tecnologías Utilizadas

- **PHP** (Servidor)
- **MySQL** (Base de datos)
- **JavaScript** (Interactividad)
- **jQuery** (Manipulación DOM)
- **Docker** (Base de datos en contenedor)

---

## 📌 Autor

👨‍💻 Desarrollado por **Pere Prior**  
📅 Proyecto final de curso  

---

¡Disfruta explorando **D-Read**! 🚀📖
