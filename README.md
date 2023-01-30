# Analítico Acadêmico

## Imagens do Sistema
<div align="center"> 
    <img src="https://user-images.githubusercontent.com/54729444/215614567-78df9bf2-aee4-4c3d-9870-52b61bf91f14.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215615000-20056e48-de61-45a2-8f7d-d71300a89472.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215615803-2d20195d-c4a1-40db-ab91-a3a9a9d5cac5.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215616021-0d68d8cf-416b-4a39-a1c2-16db5d61d136.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215616083-6228ff46-f3b0-4ae1-9bba-af7309c93447.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215616152-bcde6119-1aa8-45ed-a1fe-9445dbfb1d75.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215616230-78d9b475-b542-463f-adda-d2e9d5034239.PNG" width="460px"/>
    <img src="https://user-images.githubusercontent.com/54729444/215616267-92540f4c-3df2-40cf-94aa-972015f2b321.PNG" width="460px"/>
</div>


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


