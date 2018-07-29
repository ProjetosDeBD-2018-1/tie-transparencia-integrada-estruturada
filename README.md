# TIE -Transparencia-Integrada-Estruturada


Este tutorial especifica o uso do sistema TIE, fornecendo aos desenvolvedores e clientes as informações necessárias para o projeto e  sua implementação, assim como para a realização dos testes e homologação do sistema.


## Getting Started


### Pré-requisitos

Antes de executar o projeto é necessário instalar previamente: 


* [XAMPP versão 7.2.7 (PHP 7.2.7)](https://www.apachefriends.org/index.html) ou superior que poderá ser usado de forma opcional para inicializar o servidor Apache e MySQL
* [SQLyog Community Edition - versão 13.0.1](https://github.com/webyog/sqlyog-community/wiki/Downloads) ou superior que será utilizado 
para criar o banco de dados e executar os scripts de criação e inserção.


### Instalando

Para executar o projeto deve-se iniciar o server através do XAMPP nas opções de Apache e MySQL, executar os scripts para criação do banco  de acordo com a ordem informada e após inserção dos dados.
Deve-se perstar atenção no nome do banco e senha que será necessário para alterar no script de criação no banco <tietemp.sql> e no login da página Web do projeto.
Scripts para criação do banco:

```
1 - script_tie(2.0).sql
```

Script para Inserção dos dados:

```
1 - parlamentar.sql
2 - endereco.sql
3 - proponente.sql
4 - orgao.sql
5 - proposta.sql
6 - emenda.sql
7 - partido.sql
8 - convenio.sql
9 - fornecedor.sql
10 - pagamento.sql
11 - termo_aditivo.sql
12 - desembolso.sql
13 - tipo_nota.sql
14 - empenho.sql
15 - empenho_desembolso.sql
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


## Construído com 

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

Ver também a lista de contribuidores [contributors](https://github.com//ProjetoDeBD/tie-transparencia-integrada-estruturada/contributors) que participaram neste projeto.

## Licença

Este projeto é licenciado através da Licença padrão MIT

## Reconhecimentos

* Agradecemos a contribuição da Professora Ceça Moraes pela contribuição e resolução de problemas que sem sua ajuda ainda estaríamos na fase pré-projeto
* Nos inspiramos no combate contra corrupção para tornar um país melhor nas futuras gerações

