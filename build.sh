#!/bin/bash
echo "Сборка проекта..."
#Получение имени ветки
vers = $(git symbolic-ref --short -q HEAD>version)
$(git clone https://github.com/rok9ru/trpo-core core)
echo "Все сделано! || Запустите программу!"
