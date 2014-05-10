# Cargo el entorno
RUTA_TOBA=/usr/local/src/toba
RUTA_ENTORNO_TOBA=$RUTA_TOBA/bin/entorno_toba_2.5.sh

if [ -f $RUTA_ENTORNO_TOBA ]; then
    . $RUTA_ENTORNO_TOBA
fi
