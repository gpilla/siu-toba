#!/bin/bash



RUTA_TOBA=/usr/local/toba

printf "\n\n"
echo "---------------------------------------------------------------------------------------------------"
if [ ! -f $HOME/.toba_instalado ]; then
	echo "La instalación del sistema necesita de la intervención del usuario"
	echo "Se procede a completar la instalación del SIU-Toba en 'modo interactivo'"
	echo "---------------------------------------------------------------------------------------------------"
	printf "\n\n"
	echo ">> Se inicia el proceso de instalación del SIU-Toba (Se necesitara la carga de información)"

	# Instalación básica del SIU-Toba
	sudo $RUTA_TOBA/bin/instalar
	
	if [ -f /etc/apache2/sites-enabled/toba.conf ]; then
		sudo rm /etc/apache2/sites-enabled/toba.conf
	fi
	sudo ln -s $RUTA_TOBA/instalacion/toba.conf /etc/apache2/sites-enabled/toba.conf

	# Post instalación de SIU-Toba 
	ARCHIVO_POST_INSTALACION=/vagrant/.puppet/post_instalacion_toba.sh
	if [ -f $ARCHIVO_POST_INSTALACION ]; then
		bash $ARCHIVO_POST_INSTALACION
	fi
	
	sudo $RUTA_TOBA/bin/toba instalacion cambiar_permisos -u vagrant -g www-data

	# Se reinicia el servidor.
	sudo /etc/init.d/apache2 restart

	# Se da por finalizada la instalación
	touch $HOME/.toba_instalado
	printf "\n\n\n"
	echo "Para editar el proyecto navegar hacia http://192.168.33.10/toba_editor/2.5"
	echo "---------------------------------------------------------------------------------------------------"
	echo "La instalación fue finalizada exitosamente! Muchas gracias."
	echo "---------------------------------------------------------------------------------------------------"
else
	echo "El framework SIU-Toba ya se encuentra instalado. Si desea reinstalarlo por favor borre el archivo $HOME/.toba_instalado"	
fi
# Cargo el entorno
RUTA_ENTORNO_TOBA=/usr/local/toba/bin/entorno_toba_2.5.sh
if [ -f $RUTA_ENTORNO_TOBA ]; then
	. $RUTA_ENTORNO_TOBA
fi
echo "---------------------------------------------------------------------------------------------------"
