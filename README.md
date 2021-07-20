# crowe.project - challenge

## Introdução
A Crowe está iniciando um novo processo seletivo e solicitou ao setor de Tecnologia a criação de um formulário para cadastrar os candidatos que participarem desse processo seletivo. O nosso setor de Recrutamento nos deu algumas premissas que precisam ser seguidas.

Etapa 1 - Criar estrutura de dados para armazenar os dados do candidato.
> Será preciso obrigatoriamente armazenar os seguintes dados:
  * Nome | string
  * Resumo da Entrevista | text
  * Logradouro | string
  * Número | string
  * Complemento | string
  * Cidade | string
  * Estado | string
  * CEP | string

> Se achar necessário incluir outros campos, fique à vontade.

Etapa 2 - Cadastrar o candidato.

  * Criar a interface para cadastrar um candidato
  * Criar a interface para listar todos os candidatos
  * Criar a interface para editar os dados de um candidato através do seu id
  * Criar a interface para excluir um candidato através do seu id
  * Criar a interface para exibir as informações de um candidato através do seu id
 

Etapa 3 - Novas funcionalidades

Durante a utilização do formulário que criamos, setor de Recrutamento nos relatou que estavam gastando muito tempo preenchendo os dados de endereço.
Encontramos uma solução, mas para isso vamos ter que integrar o nosso formulário com a API ViaCep, sendo assim, quando o usuário informar o CEP a nossa aplicação vai consumir a API e preencher todos os campos relacionados ao endereço, exceto Número e Complemento.

 

Etapa 4 – Diferenciais
  * Criar validações;
  * Documentação do Código;

## Conclusão

Primeiramente crie um banco de dados chamado "crowe" e faça a [importação](https://br.godaddy.com/help/importar-arquivos-sql-nos-bancos-de-dados-mysql-6802) das tabelas como explicado abaixo.

Para importar arquivos SQL nos bancos de dados MySQL usando phpMyAdmin

1. Acesse seu banco de dados via PHPMyAdmin (cPanel / Plesk / Managed WordPress).
2. À esquerda, clique no banco de dados que você deseja usar.
3. Selecione a aba Importar.
4. Clique em Buscar, encontre o arquivo SQL no computador, clique em Abrir e, em seguida, clique em Ir.

Isso gera o arquivo SQL e atualiza o banco de dados conforme especificado no seu arquivo SQL. Pode levar alguns minutos para que o banco de dados seja restaurado.

O banco de dados está na pasta fonte do projeto com o título de "[rh.sql](rh.sql)".

> Configure a conexão com o banco de dados em todos os arquivos php de acordo com suas configurações.
> 
Modelo padrão: 
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "crowe";

Após realizar essas etapas, abra a [página inicial](index.html) do projeto (index.html).
