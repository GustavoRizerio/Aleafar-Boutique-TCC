
# Aleafar boutique

Este é o repositório do meu Trabalho de Conclusão de Curso (TCC) em PHP, um projeto que pode ser executado localmente. Ele é flexível, funcionando em servidores locais e por comando do terminal para rodar localmente.

# Sobre o Projeto

Este é o repositório do meu Trabalho de Conclusão de Curso (TCC) em PHP, um projeto que pode ser executado localmente. Ele é flexível, funcionando em servidores locais e por comando do terminal para rodar localmente.

## Requisitos

Antes de começar, certifique-se de ter o seguinte instalado:

PHP - https://www.php.net/manual/en/install.php

MySQL - https://www.mysql.com/

Node.js - https://nodejs.org/en
Servidor local: Recomendado para visualização no navegador.
## Configuração

Clone o repositório:

```bash
  git clone https://github.com/GustavoRizerio/Aleafar-Boutique-TCC
```
Entre no diretório:

```bash
  cd seu/diretório

```
Importe o banco de dados:

```bash
mysql -u seu-usuario -p sua-senha < banco_de_dados.sql
```

Configure o arquivo de conexão com o banco de dados (config.php) com suas credenciais.

Instale as dependências do Node.js:
```bash
npm install

```
Inicie o servidor no arquivo json dentro da config:
```bash
npm run server
```

Inicie o servidor local:

```bash
php -S localhost:8000
```
Acesse o projeto no navegador: http://localhost:8000.

Para iniciar em um servidor local como xampp(https://www.apachefriends.org/pt_br/index.html) por exemplo, instale ele(ou qualquer outro servidor que tenha o apache o mysql), e execute ele pelo localhost.
    
## Licença

[MIT](https://choosealicense.com/licenses/mit/)

