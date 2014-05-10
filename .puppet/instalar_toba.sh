#!/bin/bash

#set -e

# -- instalar_toba.sh

RUTA_TOBA=/usr/local/src/toba
VERSION="`cat $RUTA_TOBA/VERSION`"
ARCHIVO_TOBA_INSTALADO=$RUTA_TOBA/.toba_instalado

if [ ! -f $ARCHIVO_TOBA_INSTALADO ]; then

	$RUTA_TOBA/bin/instalar -d 0 -t 0 -h localhost -p 5432 -u postgres -c postgres -b toba -k toba

	# Si existe un archivo de configuración sites-enabled lo borro.
	if [ -f /etc/apache2/sites-enabled/toba.conf ]; then
		sudo rm /etc/apache2/sites-enabled/toba.conf
	fi
	sudo ln -s $RUTA_TOBA/instalacion/toba.conf /etc/apache2/sites-enabled/toba.conf

	# Post instalación de SIU-Toba
	ARCHIVO_POST_INSTALACION=/vagrant/.puppet/post_instalacion_toba.sh
	if [ -f $ARCHIVO_POST_INSTALACION ]; then
		bash $ARCHIVO_POST_INSTALACION
	fi

	# Se reinicia el servidor.
	sudo /etc/init.d/apache2 restart

	#sudo $RUTA_TOBA/bin/toba instalacion cambiar_permisos -u vagrant -g www-data

	# Se da por finalizada la instalación
	touch $ARCHIVO_TOBA_INSTALADO
else
	echo "> El framework SIU-Toba ya se encuentra instalado. Si desea reinstalarlo por favor borre el archivo $ARCHIVO_TOBA_INSTALADO"
fi
