# TIE -Transparencia-Integrada-Estruturada


Este tutorial especifica o uso do sistema TIE, fornecendo aos desenvolvedores e clientes as informações necessárias para o projeto e  sua implementação, assim como para a realização dos testes e homologação do sistema.


## Getting Started

O projeto foi desenvolvido utilizando XAMPP e SQLyog, caso o desenvolvedor ou usuário tiver outras preferencias como por exemplo Wampp, EasyPHP e MySQL Workbench utilizando de acordo com suas necessidades. 

### Pré-requisitos

Antes de executar o projeto é necessário instalar previamente: 

* [XAMPP versão 7.2.7 (PHP 7.2.7)](https://www.apachefriends.org/index.html) ou superior que poderá ser usado de forma opcional para inicializar o servidor Apache e MySQL
* [SQLyog Community Edition - versão 13.0.1](https://github.com/webyog/sqlyog-community/wiki/Downloads) ou superior que será utilizado 
para criar o banco de dados e executar os scripts de criação e inserção.


### Instalando

1 - Para executar o projeto deve-se iniciar o server através do XAMPP nas opções de Apache e MySQL

2 - Para usuários do servidor XAMPP, clonar ou inserir o projeto(pasta "tie") dentro da pasta "htdocs" que fica dentro da pasta xampp da unidade na qual foi instalada(no Windows por default é localizada na raiz do disco "C:\".

3 - Inicializar o SQLyog com as credenciais de host, usuário e senha, recomenda-se as credenciais default.

4 - Lembre-se do local onde irá descompactar a pasta tie_completo.zip, localizada na pasta scripts/tie completo do projeto, para carregar o script tie_completo.sql .

5 - No SQLyog utilize a opção File>Open para carregar no editor o script do diretório onde está salvo.

6 - Executar os scripts para inserção dos dados no banco de acordo com a ordem informada.

Script para inicialização do banco somente necessário executar esse script:

```
1 - tie_completo.sql
```

Caso queira inserir um script por vez siga a ordem informada:

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

## Executando o projeto

Para executar o projeto é necessário estar com o Apache e MySQL iniciados e acessar o endereço localhost/tie em um navegador web

Após instalação dos dados inicie o aplicativo e execute uma busca padrão do sistema TIE: Consulta 1.


Para execultar uma consulta padrão: 
1. Na tela principal, o usuário deve definir “Consulta 1” como tipo de consulta que deseja realizar.
2. Ao selecionar a “Consulta 1” o sistema deve exibir os campos “nome do parlamentar”, “data início” e “data fim”, para que o usuário possa preenchê-los.


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
