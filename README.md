# Projeto Estagiarios - Semed

## Descrição
Sistema de gerenciamento para os estagiarios do setor de TI da secretaria municipal de Educação de Maceio - Semed.

## Configuração

Seguir os respectivos passos para configuração do ambiente de desenvolvimento, De preferencia utilizar o sistema operacional Linux.

- Instalar o [composer](https://getcomposer.org/)
- Instalar o VirtualBox
- Instalar o [vagrant](https://www.vagrantup.com/)
- Instalar a Maquina Virtual do Laravel (Homestead) seguindo os respectivos passos:
	1. Executar o comando -> **git clone https:/github.cm/laravel/homestead.git Homestead**
	2. Acessar o Diretorio do Homestead -> **cd Homestead/**
	3. Executar o comando -> **./init.sh**
	4. Gerar a chave para sua maquina virtual -> **ssh-keygen -t rsa -C "seu email"**. 
	5. Subir a maquina virtual vagrant -> **vagrant up**.
    (Nesse passo o Vagrant irá baixar a maquina virtual, o que fará com que o processo seja demorado)
-  Configurar a maquina virtual
	1. Baixar o arquivo [Homestead.yaml](https://bitbucket.org/joseduda/projetoestagiarios/downloads/) do Repositorio do projeto.
	2. Substuir o arquivo na pasta /workspace/Homestead/
	3. Criar o diretorio Code na pasta raiz do sistema ex /home/duda/Code
	4. Execute o comando na pasta /workspace/Homestead -> **vagrant provision**
- Clonar o projeto
	1. Executar o comando -> **composer update**
	2. Normalmente aparece alguns erros, como por exemplo ausencia de bibliotecas
	3. Executar os comandos -> **sudo apt-get install php7.0-mbstring** || **sudo apt-get install php-xml**
	4. Fazer uma copia do arquivo .env.example Para .env
	5. Executar o comando -> php artisan key:generate
- Apos Esses procedimentos ja é pro sistema está rodando.
- Executar o comando php artisan migrate
- Executar o comando php artisan db:seed


