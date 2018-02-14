## Despliegue del proyecto
Clonar el proyecto
```
git clone https://github.com/MallonEmanuel/ControlStock.git
```
Luego, dentro de la carpeta del proyecto ejecutar los siguientes comandos.
```
composer update
sudo chmod -R +r public
sudo chmod -R 777 storage
cp .env.example .env
php artisan key:generate
php artisan config:clear
```
