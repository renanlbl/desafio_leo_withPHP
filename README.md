# desafio_leo_withPHP.

### Para abrir é necessario:
- [x] Baixar o XAMPP **Um programa com Apache e MySql** | **_LINK:_** [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- Após baixar o programa, ele normalmente fica no diretório raiz *`C:\`* (nome da pasta: xampp)
- **Abra a pasta xampp > htdocs e apague tudo**
- **Clone o repositório dentro de xampp > htdocs** (a mesma pasta que deletamos tudo)

## Para iniciar o XAMPP:
- Abra o programa e logo aparecerá esta janela, então inicie em **START** o **APACHE** e o **MYSQL**
- ![xampp](https://i.imgur.com/ynUFXBP.png)
</br>

## Agora configurando o MySQL.
- Entre em localhost/phpmyadmin
- **Vamos criar uma nova DATABASE, clique em NEW**
![1passo](https://i.imgur.com/qpmIZsr.png)
- **Crie a DATABASE com nome de `desafio__leo`** e clique em **criar** (importante ter esse nome)
![2passo](https://i.imgur.com/SovtPa0.png)
- **Agora selecione a DATABASE `desafio__leo`** e clique em **importar**
![3passo](https://i.imgur.com/GVmx4O0.png)
- **Agora importe o arquivo `desafio_leo.sql`** **que está dentro da pasta desse repositório.**
- **Clique em escolher arquivo e procure pelo arquivo `desafio__leo.sql`** e clique em **executar**
![4passo](https://i.imgur.com/8QXF6T0.png)

#### Pronto, agora está tudo configurado para acessar o site e realizar o CRUD.
- Acesse localhost no seu navegador e abra a pasta do projeto. (desafio_leo_withPHP)

#### Sobre o trabalho:
- É a versão 1 do teste, mas com painel de controle.
- O crud está quase 100%, não consegui fazer o UPDATE das imagens, mas o CREATE, READE, DELETE está funcionando.
- Agora com banco de dados, o armazenamento é muito maior.

-Utilizei a mais: 
- [x] PHP
- [x] MySql

- **O acesso ao painel** pode ser feito através do **menu dropdown** ou clicando em **adicionar curso** na sessão dos cursos ou acessando a url diretamente: `http://localhost/desafio_leo_withPHP/painel/`
