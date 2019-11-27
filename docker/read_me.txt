para criar a imagem do banco digite o comando na pasta docker:
sudo docker build -t avaliacao_ru_mysql .

para iniciar um container
sudo docker run -d -p 3308:3308 --name avaliacao_ru_mysql \
-e MYSQL_ROOT_PASSWORD=avaliacao_ru_master avaliacao_ru_mysql

para conectar o container do banco
sudo docker exec -it avaliacao_ru_mysql bash

para entrar como usuario root no mysql
mysql -P3308 -uroot -pavaliacao_ru_master
