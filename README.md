# TIE -Transparencia-Integrada-Estruturada


Este tutorial especifica a instalação e uso do sistema TIE, fornecendo aos desenvolvedores e clientes as informações necessárias para o projeto, assim como para a realização dos testes e homologação do sistema.


## Getting Started

O projeto foi desenvolvido utilisando o XAMPP e SQLyog e recomendamos sua execução com o mesmo, se o desenvolvedor/usuário tem experiência e preferência em outro servidor PHP como por exemplo Wamp, EasyPHP e Ampps ou com a ferramenda de design de banco de dados MySQL Workbench fica cabível de acordo com as suas próprias necessidades.

### Pré-requisitos

Antes de executar o projeto é necessário instalar previamente: 

* [XAMPP versão 7.2.7 (PHP 7.2.7)](https://www.apachefriends.org/index.html) ou superior que poderá ser usado de forma opcional para inicializar o servidor Apache e MySQL.
* [SQLyog Community Edition - versão 13.0.1](https://github.com/webyog/sqlyog-community/wiki/Downloads) ou superior que será utilizado 
para criar o banco de dados e executar os scripts de criação e inserção.

### Instalando

Primeiro deve-se iniciar o server através do XAMPP nas opções de Apache e MySQL, executar os scripts na ferramenta de edição do banco de dados(SQLyog) para criação do banco  de acordo com a ordem informada e finalmente os scripts inserção dos dados.
Prestar atenção ao nome do usuário e do schema e senha que será necessário para alterar no arquivo de conexão com o banco no arquivo do diretório do projeto api/config/database.php e no login da página Web do servidor(se necessário login).

Scripts para criação do banco:

```
1 - tie_completo.sql
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

No XAMPP, clonar ou inserir a pasta do projeto na pasta "htdocs" que está localizada dentro da pasta xampp na unidade na qual foi instalada e para executar o projeto entrar no endereço em um navegador web "localhost/tie".

## Executar os testes

Após instalação dos dados inicie o aplicativo e execute uma busca padrão do sistema TIE: Consultar Valor Pago Antes do Início das Obras ou Listar Convênios com Pontos Fora da Curva.

### Executar teste

Para execultar uma consulta padrão: 
1. Na tela principal, o usuário deve definir “Consultar Valor Pago Antes do Início das Obras” como tipo de consulta que deseja realizar.
2. Ao selecionar a “Consultar Valor Pago Antes do Início das Obras” o sistema deve exibir os campos “nome do Convênio”, “Valor Total dos Pagamentos” e “Situação do Convênio”, para que o usuário possa preenchê-los.

```
imagem do resultado
```

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

