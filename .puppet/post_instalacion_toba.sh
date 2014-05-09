#!/bin/bash

echo ">> Cargando proyecto Kilme"
/usr/local/toba/bin/toba proyecto cargar -i desarrollo -p kilme -d '/usr/local/kilme'
/usr/local/toba/bin/toba proyecto cargar -i desarrollo -p kilme_prod -d '/usr/local/kilme_prod'
