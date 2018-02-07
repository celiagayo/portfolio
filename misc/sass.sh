#/bin/bash

cd "/Users/celia/Google Drive/DISEÑO/DISEÑO WEB/proyectos/portfolio"
echo "Press [CTRL+C] to stop.."

while true
do	
        sass --update resources/assets/sass:public/css
	sleep 5
done