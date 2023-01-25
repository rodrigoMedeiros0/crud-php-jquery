<h1 align="center">Crud com Php, jQuery e Bootrstrap</h1>

![image](https://user-images.githubusercontent.com/97979883/214628447-84ed7662-953d-4fa6-a2e4-60a79594b5e5.png)


# 🔨 Funcionalidades do projeto

Desenvolvimento de um projeto de cadastro de alunos CRUD (create, read, update e delete) utilizando o acesso a banco de dados com o MySQL e linguagem PHP no back-end e jQuery e Bootstrap no front-end.

## 💻 Tecnologias 

<p align="left"> <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> 
   <a href="https://www.php.net" target="_blank" rel="noreferrer">
     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> 
   </a> 
   <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer">
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/>
  </a> 
  <a href="https://www.mysql.com/" target="_blank" rel="noreferrer">
     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> 
  </a>
  <a> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/>
  </a> 
  <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a>
  <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> 
  
</p>

## ✔️ Técnicas utilizadas

As técnicas utilizadas pra isso são:

- `:Ajax`: executa uma solicitação HTTP;
- `mysqli_connect`:  Abre uma conexão com o servidor MySQL;
- `$_POST`: Um array associativo de variáveis passados para o script atual via método HTTP POST ;


## 🛠️ Abrir e rodar o projeto

-Projeto disponível no github, faça o clone ou baixe em zip.

-Depois de terminar o download do projeto, descompactar o arquivo do projeto e vá para o diretório XAMPP.

-Lá você encontrará uma pasta com o nome de “htdocs”.

-Dentro da pasta “htdocs”, cole a pasta do projeto (extraída).

-Abra seu navegador; recomendação pessoal: Google Chrome.

-Então, vá para o URL “http://localhost/phpmyadmin“.

-Crie um banco de dados com o nome crud-student

-Depois no banco de dados crie um Table com as seguintes informações:    
            CREATE TABLE students (
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(255) NOT NULL,
                course VARCHAR(255) NOT NULL
            )
            
-Depois de configurar tudo isso, vá para o URL “http://localhost/crud-student“
