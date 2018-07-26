# TIE -Transparencia-Integrada-Estruturada


Este tutorial especifica o uso do sistema TIE, fornecendo aos desenvolvedores e clientes as informações necessárias para o projeto e  sua implementação, assim como para a realização dos testes e homologação do sistema.


## Getting Started


### Pré-requisitos

Antes de executar o projeto é necessário instalar previamente: 

```
XAMPP versão 7.2.7 (PHP 7.2.7) ou superior - https://www.apachefriends.org/index.html
SQLyog Community Edition - versão 13.0.1 ou superior - https://github.com/webyog/sqlyog-community/wiki/Downloads
```

### Instalando

Para executar o projeto deve-se iniciar o server através do XAMPP nas opções de Apache e MySQL, executar os scripts para criação do banco  de acordo com a ordem informada e após inserção dos dados.
Deve-se perstar atenção no nome do banco e senha que será necessário para alterar no script de criação no banco <tietemp.sql> e no login da página Web do projeto.
Scripts para criação do banco:

```
1 - tietemp.sql
2 - script_tie(2.0).sql
```

Script para Inserção dos dados:

```
1 - until finished.sql
2 - insert(2.0).sql
```

## Executar o projeto

Para executar o projeto é necessário iniciar o server... e depois acessar o site localhost@3306...

## Executar os testes

Após instalação dos dados inicie o aplicativo e execute uma busca padrão do sistema TIE: Consultar Valor Pago Antes do Início das Obras ou Listar Convênios com Pontos Fora da Curva.

### Executar teste

Para execultar uma consulta padrão: 
1. Na tela principal, o usuário deve definir “Consultar Valor Pago Antes do Início das Obras” como tipo de consulta que deseja realizar.
2. Ao selecionar a “Consultar Valor Pago Antes do Início das Obras” o sistema deve exibir os campos “nome do parlamentar”, “data início” e “data fim”, para que o usuário possa preenchê-los.

```
imagem do resultado
```


## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contribuição

Ao contribuir com este repositório, por favor, primeiro discuta a mudança que você deseja fazer através da aba "Issue", e-mail ou qualquer outro método com os proprietários deste repositório antes de fazer uma alteração.
Checar a página de guia [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) para boas práticas de contribuição.


## Autores

* **Edson Fagner** - *Trabalho Inicial* - [everton-nv](https://github.com/everton-nv)
* **Everton do Nascimento** - *Trabalho Inicial* - [Crissky](https://github.com/Crissky)
* **Evele Lemos** - *Trabalho Inicial* - [lemosevele](https://github.com/lemosevele)
* **Jadiel Eudes** - *Trabalho Inicial* - [Eudess](https://github.com/Eudess)
* **Tiago Sitonio** - *Trabalho Inicial* - [TiagoPSS](https://github.com/TiagoPSS)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## Licença

Este projeto é licenciado através da Licença MIT

## Reconhecimentos

* Agradecemos a contribuição da Professora Ceça Moraes pela contribuição e resolução de problemas que sem sua ajuda ainda estaríamos na fase pré-projeto
* Nos inspiramos no combate contra corrupção para tornar um país melhor nas futuras gerações

