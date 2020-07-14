# ambiente_laravel

Tutorial para preparar o ambiente de desenvolvimento com Laravel 7x (compatível com a PHP 7.2.5 ou superior) no Windows 10 (build 1909). 
Caso seja utilizado o windows 7 alguns dos procedimentos poderão ser diferentes.

Preparando o ambiente

	* Instalar MySQL, Apache(opcional) e PHP
		Sugestão é baixar o "XAMPP for Windows 7.4.7" (Embora exiba o nome MySQL, será instalado o MariaDB). 
		Durante a instalação selecione apenas Mysql e phpMyAdmin. O Apache e o PHP são selecionados automaticamente)
		https://www.apachefriends.org/pt_br/index.html
	    - OBS: o Laravel possui um servidor interno. Desta forma o uso do Apache é opcional

	* Composer
		https://getcomposer.org/Composer-Setup.exe
		- OBS: após concluir a instalação abra o "Prompt de Comando (cmd)" e execute:  composer --version
			(deverá exibir um texto com o número da versão)

	* Laravel 7x: após instalar o Composer será preciso fazer o Download do Laravel (abra o Prompt de comando e digite):
		composer global require laravel/installer

		- OBS: após concluir a instalação do Laravel abra o "Prompt de Comando" e execute:  laravel
			(deverá exibir um texto com comandos básicos)

	* IDE para desenvolvimento. Sugestão Visual Studio Code
		https://code.visualstudio.com/download

	* Criando o primeiro projeto (Darei um exemplo para uma pasta chamada "Projetos" no disco local C)
		- Abra o "Prompt de Comando" ( cmd.exe )
		- Crie uma pasta para ficar o projeto (Ex: mkdir c:\Projetos )
		- Acesse a pasta criada	anteriormente ( cd C:\Projetos )
		- Criar o projeto. Dentro da pasta "Projetos" digite o comando:
			laravel new ToDo

	* Sites de referência:
		Laravel: https://laravel.com/	
		Bootstrap: https://getbootstrap.com/

