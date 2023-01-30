# Analítico Acadêmico
https://github.com/sergiosaruijr/Projeto-Analitico-Academico/issues/1#issue-1563320565


## Introdução
Este é um sistema web, elaborado para a criação e manipulação de dados relacionados ao relatório acadêmico entregue anualmente por diversas áreas da UniFil.

## Tecnologias e Ferramentas utilizadas
* Download do iso do CentOS 7. [(Link)](http://isoredirect.centos.org/centos/7/isos/x86_64/);
* Oracle VM VirtualBox 6. [(Link)](https://www.virtualbox.org/wiki/Download_Old_Builds_6_0);
* Git 1.8.3.1.;
* Nginx 1.16.1.;
* MySQL 15.1;
* PHP 7.4.8;
* Composer 1.10.8;
* Laravel 6.18.25.

## Instalações que iram preparar o ambiente
### Git 
Dentro do terminal do centOS, com o acesso root, basta digitar:
* yum install git 

### Nano
Dentro do terminal do centOS, com o acesso root, basta digitar:
* yum install nano

### Unzip
Dentro do terminal do centOS, com o acesso root, basta digitar:
* yum install unzip

## Guia para instação principal
### Linux, Nginx, MySQL
* Entrar no link para incluir o Nginx e mariaDB no seu CentOS. Porém antes de iniciar o install do Nginx, realizar o "yum update".
[(Link para instruções)](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-centos-7)

### PHP
* Em relacao ao PHP:<br/>
Será utilizado o mesmo artigo para a instalação, porém com algumas observações. 
* Antes de instalar o remi:<br/>
-> sudo yum -y install yum-utils
* Para verificar as versões diponiveis:<br/>
-> yum --disablerepo="*" --enablerepo="remi-safe" list php[7-9][0-9].x86_64
* Para habiliar o remi:<br/>
-> sudo yum-config-manager --enable remi-php74
* Para instalar o php, já contendo outros detalhes para preparação ao Laravel:<br/>
-> yum install php php-gd php-intl php-mbstring php-pdo [php]-process php-xml php-cli php-mcrypt php-fpm
* Após isso, seguir a etapa 3 do link disponibilizado, a partir da configuração do arquivo "www.conf" que está presente no caminho "sudo nano /etc/php-fpm.d/www.conf".<br/> [(Link para instruções)](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-centos-7)
* Depois de iniciar o php, verificar seu status e então habilitar, como indicado abaixo:<br/>
-> systemctl status php-fpm<br/>
-> systemctl enable php-fpm
* Observação: caso queira criar a página de teste do php, basta continuar o tutorial depois da etapa 3.

### Arrumar o firewall
* firewall-cmd --permanent --zone=public --add-service=http
* firewall-cmd --permanent --zone=public --add-service=https
* firewall-cmd --reload

### Laravel
* Para iniciar sua preparação e instalação, basta acessar o link disponibilizado, mas iniciar somente a partir do tópico "Configuring Nginx and PHP-FPM", após a configuração ja feita do "www.conf".<br/>
[(Link para o tutorial)](https://www.hugeserver.com/kb/install-laravel-centos-nginx/)

Observação: Continuar com deploy e configuração correta de permissões;


