Pruebas sobre SIU-Toba
========

Más información de SIU-Toba desde http://toba.siu.edu.ar

Detalles sobre la licencia en: https://repositorio.siu.edu.ar/svn/toba/trunk/licencia.txt

El SIU-Toba esta basado en la revisión 6283 desde https://repositorio.siu.edu.ar/svn/toba/trunk/

Para bajar este proyecto:

git clone https://github.com/gpilla/siu-toba.git

## ¿Que tiene de diferente este repo del original?

### Instalación en un solo paso!

Se modifico toba para poder realizar una instalación en un solo paso:

Ej:

```
{ruta_a_toba}/bin/instalar -d 0 -t 0 -h localhost -p 5432 -u postgres -c postgres -b toba -k toba
```

### Configuración de Vagrant

Para no preocuparse de la instalación de las tecnologías bases de Apache, PostgreSQL, PHP, etc... pueden iniciar Vagrant que se encargara
de iniciar y aprovicionar (instalar los paquetes necesarios) automaticamente.

NOTA: Esto lo pueden usar tanto en Windows como Linux. Pero los comandos estan para Linux, para Windows esta por cuenta de ustedes.

#### ¿Como tengo que hacer para hacer funcionar Vagrant?

* Tener instalado Vagrant: http://www.vagrantup.com/downloads (es mejor si lo bajan que si lo instalan por apt-get)
* Tener instalado VirtualBox: https://www.virtualbox.org/wiki/Downloads

#### Como inicializo Vagrant

Simple:

```sh
vagrant up
```

#### ¿Y ahora que puedo hacer con el Vagrant?

Se puede ingresar a la maquina virtual como si fuera una maquina mas en la red en la IP: 192.168.33.10

Por ejemplo pueden entrar para desde un navegador a: http://192.168.33.10

Para poder entrar al servidor podemos acceder como a cualquier server via SSH con el usuario "vagrant" y la clave "vagrant":

```sh
ssh 192.168.33.10 -l vagrant
```

O de una manera feliz:

```sh
vagrant ssh
```

Por ultimo, si queremos apagar la maquina ejecutamos en nuestra consola:

```sh
vagrant halt
```
