# Documentação do Projeto PHP MVC - Temática Star Wars

## Introdução  
Este projeto temático de Star Wars utiliza uma API para buscar informações sobre os filmes, como personagens, data de lançamento, produtores, entre outros. A principal funcionalidade é permitir que o usuário clique nos cards de filmes para exibir informações detalhadas sobre o filme selecionado.  

---

## Arquitetura  
O projeto segue o padrão MVC (Model-View-Controller). A pasta **Core** funciona como o núcleo do projeto, contendo ferramentas essenciais como:  

- **Banco de Dados**: Configuração e conexão.  
- **App**: Gerencia as rotas da URL.  
- **Autoload**: Responsável por carregar automaticamente as classes necessárias sem precisar incluí-las manualmente em cada arquivo.  
- **Controller**: Garante que as views sejam chamadas corretamente.  

O fluxo de dados no projeto é simples: a view faz uma requisição, que o controller recebe e repassa ao model. O model busca as informações necessárias e devolve ao controller, que então envia os dados de volta à view. Na página principal, são utilizados 3 models e 2 controllers para gerenciar as informações de forma eficiente.  

---

## Instalação  

### Requisitos:  
- PHP 7.4 ou superior.  
- MySQL Workbench.  

### Passos para instalar localmente:  
1. Baixe e extraia o projeto em uma pasta.  
2. Baixe o arquivo **tools** (localizado na pasta instruções) e exporte para `C:\tools`.  
3. Configure o **PATH** no sistema para incluir `C:\tools`.  
4. No MySQL Workbench, faça login localmente, abra o arquivo **db.sql** (na pasta instruções), copie o código e execute em uma aba logada.  
5. Abra o projeto no Visual Studio Code e execute o servidor com o comando: php -S localhost:8000 -t public 
6. No google ou qualquer navegador de sua preferência, acesse por localhost:8000

   # Detalhes Técnicos


## Controllers:
Existem 4 controllers, incluindo:

- Um para a página principal.
- Outro para exibir o banco de dados.
- Um para erros 404.
- Outro sem retorno para a view.

## Models:
Gerenciam funcionalidades como:

- Tradução.
- Busca de informações de filmes.
- Registro de cliques.

## Views:
Gerenciam a interface, como:

- Página inicial.
- Erros.
- Dados do banco.

## Banco de Dados:
Contém registros com:

- ID.
- Data.
- Filme acessado.

---

## Implementações Especiais

- Para traduzir títulos e sinopses, foi criada uma API interna para evitar atrasos.
- O registro de cliques nos cards é feito via JavaScript, que envia os dados para o ApiController, que registra no banco pelo logApi.

---

## Conclusão

A estrutura do projeto está estável, permitindo futuras melhorias, como adição de mais conteúdo sobre o universo Star Wars.

É possível ver o resultado visual clicando [aqui](http://starwars.great-site.net/). Uma limitação do host InfinityFree é o tempo de resposta. No código original no GitHub, o ApiModel usa multi-thread para reduzir o tempo de pesquisa de 8s para cerca de 3s. No host atual, o tempo médio esperado é de 8s devido às limitações.


<div class="warning">
  <strong>Atenção:</strong> Certifique-se de que todos os requisitos estão instalados corretamente antes de executar o projeto.
</div>
