# Portafolio_CRUD
Prueba03
 #Nombre: Nicolas Huenchual Moreno

# Descripción general del proyecto
Este sistema web corresponde a una aplicación de tipo CRUD (Crear, Leer, Actualizar, Eliminar), orientada a la gestión de proyectos personales o profesionales. Su propósito principal es permitir a los usuarios autenticados administrar un portafolio digital, incorporando información como título, descripción, imagen ilustrativa y enlaces relevantes (por ejemplo, repositorio en GitHub o versión desplegada). El diseño está enfocado en la usabilidad, manteniendo una interfaz intuitiva y responsiva.

 # 🧰 Tecnologías empleadas

Frontend:

HTML5 y CSS3

Framework CSS Bootstrap 5

Librería de íconos FontAwesome

Backend:

Lenguaje PHP (modelo procedural)

Base de datos MySQL

Servidor local:

Apache (recomendado mediante XAMPP o similar)

 # 📌 Instrucciones para la ejecución del sistema
Clonar o descomprimir el proyecto en el directorio raíz del servidor local (por ejemplo, htdocs en XAMPP).

Acceder a phpMyAdmin y crear una base de datos (por ejemplo, crud_proyectos).

Importar el archivo SQL correspondiente que contiene la estructura y datos iniciales del sistema.

Configurar el archivo db.php con los parámetros de conexión adecuados:

-php
Copiar
Editar
$conn = new mysqli("localhost", "root", "", "crud_proyectos");
Iniciar el sistema accediendo a login.php desde el navegador.

Ingresar con credenciales válidas o registrar nuevos usuarios directamente en la base de datos.

# 🤖 Herramientas de inteligencia artificial utilizadas.
ChatGPT (OpenAI):
Se utilizó como apoyo en la generación y refactorización del código fuente, con especial énfasis en la integración visual mediante Bootstrap, la validación básica de entradas, y la optimización general de la estructura del sistema.
También fue útil en la redacción formal de documentación técnica.

(Opcional) GitHub Copilot:
Recomendado como complemento durante el desarrollo en editores compatibles, para sugerencias automatizadas y aceleración de tareas repetitivas.