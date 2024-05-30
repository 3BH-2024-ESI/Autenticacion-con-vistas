Para probar en casita:

Primero crear una base de datos, y crearle esta tabla:
```
CREATE TABLE pizzas (
  id int AUTO_INCREMENT,
  nombre varchar(255),
  precio int,
  created_at datetime,
  updated_at datetime,
  deleted_at datetime,
  PRIMARY KEY (`id`)
)
```
Luego, clonar el repo:
```
git clone https://github.com/3BH-2024-ESI/Ejemplo-basico-Laravel.git

cd Ejemplo-basico-Laravel
composer install
```

Luego copiar .env.example en .env, y poner nombre de la base y en DB_NAME