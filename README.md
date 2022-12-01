<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p><hr>

## Sobre este projeto

Esse site esta sendo feito para para cadastro de eventos.

Usando PHP e Laravel estou fazendo curso do Matheus Battisti - Hora de Codar.

## Projeto em construção

<li>Esse projeto vai ter o CRUD completo e mais:</li>
<br>
<ul>Cadastro de usuarios</ul>
<ul>Autenticação segura para acesso as demais paginas</ul>
<ul>Pesquisa de eventos</ul>
<ul>Bootstrap</ul>

<li>Requisitos</li>
<br>
<ul>Composer 1.10.13(recomendado)</ul>
<ul>PHP >= 7.4.9</ul>
<ul>MySQL V8.0.30-0ubuntu0.20.04.2<ul>Eu fiz com WSL usando a <a href="https://learn.microsoft.com/pt-br/windows/wsl/tutorials/wsl-database">Documentação do WSL</a></ul></ul>
<ul>Apache + phpMyAdmin<ul>Fiz com WSL usando a <a href="https://marcelo-albuquerque.medium.com/instala%C3%A7%C3%A3o-e-configura%C3%A7%C3%A3o-de-servidor-web-no-wsl-2-ubuntu-20-04-b9ef7c8e949d">Instalar phpmyadmin no WSL </a><p>Certifique-se que estao rodando, Apache + phpMyAdmin e MySQL</p> </ul></ul>

## Instale na sua maquina

<ul>PH</ul>
<ul></ul>
<li>Linux</li>
<ul>No terminal, abra a pasta do projeto</ul>
<ul>Execute: composer install </ul>
<ul>Gere uma chave para acesso ao seu banco</ul>
<ol>
<ul>Execute: cp .env.example .env</ul>
<ul>Execute: php artisan key:generate</ul><span>
</ol>
<ul>Execute: php artisan serve </ul>
<ul>Acesse no navegador: http://127.0.0.1:8000/ </ul>
