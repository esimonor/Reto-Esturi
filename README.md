# Esturi

Esturi es una web para encontrar tu establecimiento favorito en la ciudad que te encuentres, o en caso de ser dueño de un establecimiento para darlo a conocer

## Comenzando 🚀

Clona [Esturi](https://github.com/agomezdo18dw/esturi) en local y sigue los pasos para tener una copia funciona del proyecto en local
```
git clone https://github.com/agomezdo18dw/esturi.git
```

### Pre-requisitos 📋

**Composer**
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');
```
```
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

**Laravel**
```
sudo apt install php php-common php-bcmath php-json php-mbstring php-xml php-tokenizer php-zip
```
```
composer global require laravel/installer
```
```
export PATH="$PATH:$HOME/.config/composer/vendor/bin"
```

**Base de datos**
Cualquier base de datos compatible con laravel

### Instalación 🔧

Copiamos .env.example con el nombre .env
```
cp .env.example .env
```

Actualizamos dependencias
```
composer update
```

Hacemos la clave de laravel
```
php artisan key:generate
```

Dentro del .env ponemos la base de datos en
```
DB_CONNECTION=mysql (base de datos que vayamos a usar (mariaDB=mysql))
DB_HOST=127.0.0.1 (Host donde esta la base de datos)
DB_PORT=3306 (Puerto de la base de datos)
DB_DATABASE= (Nombre de la base de datos)
DB_USERNAME= (Usuario de la base de datos)
DB_PASSWORD= (Contraseña de la base de datos)
```

## Ejecutando las pruebas ⚙️

_Explica como ejecutar las pruebas automatizadas para este sistema_

## Despliegue 📦

_Agrega notas adicionales sobre como hacer deploy_

## Construido con 🛠️

* [Laravel](https://laravel.com/)
* [Composer](https://getcomposer.org/)
* [Bootstrap 4.4](https://getbootstrap.com/)

## Autores ✒️

* **Adrián Gómez** - *Jefe* - [agomezdo18dw](https://github.com/agomezdo18dw)
* **Eneko Simon** - *Experto en diseño* - [esimonor](https://github.com/esimonor)
* **Aitor Ortiz de Zarate** - *Documentación* - [AitorOrtizdeZarate](https://github.com/AitorOrtizdeZarate)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/agomezdo18dw/esturi/contributors) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles  (Por ahora ninguna)

## Expresiones de Gratitud 🎁

* [Villanuevand](https://github.com/Villanuevand) por ayudar con su readme de ejemplo



---
Gracias de ❤️ por todo el equipo de [esturi]() 😊
