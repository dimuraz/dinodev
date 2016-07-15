# Laravel Base Box

### Descripción
Box basada en Debian Base

### Paquetes
+ Laravel
+ Postgres
+ Apache
+ PHP5

### Preparación de entorno
A pesar de que el equipo se encuentra previamente aprovisionado, se debe
instalar las dependencias de PHP.
+ vagrant up
+ vagrant unificar
+ vagrant ssh
+ cd /vagrant
+ composer install

### Importante

### Versión de box
Este proyecto usa actualmente la versión 0.2.

Se debe remover la box actual con:
+ vagrant box remove educar/laravel

#### Datos DB
+ Database: default_db
+ DB User: default_user
+ DB Pass: kve45vm

#### Iniciar proyecto nuevo
Para usar esta máquina como base para otros proyectos, debe ejecutar
```
./iniciar_proyecto
```

Después de ejecutado no olvide de agregar su repositorio remoto.


#### Configurar su usuario y correo de git
```
git config --global user.name 'Nombre Apellido'
git config --global user.email 'mail@dominio'
```

#### Error: file_put_contents (/XXXXXX) failed to open stream: Permission denied
```
$ cd storage
$ mkdir -pv framework/views app framework/sessions framework/cache
```





