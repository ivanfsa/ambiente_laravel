# ambiente_laravel

Tutorial para preparar o ambiente de desenvolvimento com Laravel 6x no Windows 10

Preparando o ambiente (Procedimentos foram realizados no Windows 10 64 bits)

	Antes de instalar: O Laravel 6x é compatível com a PHP 7.2 ou superior
	
	* Instalar MySQL, Apache(opcional) e PHP
		Sugestão é baixar o "XAMPP for Windows 7.3.11" (Não possui MySQL e sim o MariaDB)
		https://www.apachefriends.org/download.html
	    - OBS: o Laravel possui um servidor interno. Desta forma o Apache é opcional

	* Composer
		https://getcomposer.org/Composer-Setup.exe
		- OBS: após concluir a instalação abra o "Prompt de Comando" e execute:  composer
			(deverá exibir um texto com comandos básicos)

	* Laravel 6x: após instalar o Composer será preciso fazer o Download do Laravel (abra o Prompt de comando e digite):
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

