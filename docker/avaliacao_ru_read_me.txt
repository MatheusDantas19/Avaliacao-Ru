Olá, a imagem que gera o container com o nosso banco está no docker hub.
Para baixar e executar o container execute os seguintes comandos no terminal:

1)sudo docker run -d -p 3308:3308 --name avaliacao_ru_mysql -e MYSQL_ROOT_PASSWORD=avaliacao_ru_master vmhernandes/avaliacao_ru_mysql

2)sudo docker exec -it avaliacao_ru_mysql bash

se tudo correu bem no terminal é para estar no bash do container onde para acessar o banco voce deve digitar:

3)mysql -P3308 -uroot -pavaliacao_ru_master

é possível que o comando 3) de erros ao ser digitado logo após os comandos 1) e 2), basta aguardar um pouco (questao de poucos minutos, aproximadamente 4) que ele deve funcionar.
De acordo com o que lemos a respeito isso se deve ao fato de o banco estar ainda executando os scripts e só irá aceitar conexões
após todos os scripts terem sido executados.

após conseguir conectar no mysql execute os seguintes comandos

4)use avaliacao_ru;
5)show tables;

escolha uma tabela(admin por exemplo) e para ver suas colunas basta digitar:
6)show columns from $table | o que segundo o exemplo ficaria: show columns from admin

para sair do cliente do mysql basta utilizar o comando
7)exit

para sair do bash do container basta executar o comando
8)exit

