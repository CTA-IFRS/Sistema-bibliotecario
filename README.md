# Sistema bibliotecário
Sistema de gestão de livros para pequenas bibliotecas que o Centro Tecnológico de Acessibilidade do IFRS adotou e está modificando a fim de corrigir bugs e principalmente melhorar a acessibilidade. Segue o link do projeto original: https://github.com/evilnapsis/library-php

## Principais características

- Clientes: gestão de clientes que podem retirar livros
- Categorias de livros
- Autores: gestão de autores de livros
- Editoras: gestão de editoras
- Livros: gestão dos livros que compõem o acervo bibliotecário, assim como os exemplares de cada livro
- Usuário: Possibilidade de 1 ou mais usuário que tem acesso ao sistema
- Emprestimos: Controle de empréstimos dos exemplares dos livros

### Versão 3.0
O projeto original está na versão 2.0, devida as mudanças significativas que fizemos, denominamos essa a versão 3.0 do sistema. Abaixo segue uma relação genérica das mudanças que realizamos:

- Correção de bugs
- Correções no banco de dados
- Melhorias diversas em relação a acessibilidade do sistema principalmente para pessoas que utilizam leitores de tela
- Internacionalização possibilitando múltiplos idiomas

### Requisitos

- Apache 2.0
- PHP 5.2
- MySQL 5

### Como instalar
Processo de instalação manual:

1. Crie um banco de dados utilizando o schema.sql disponível junto ao projeto
2. Coloque os arquivos do projeto no diretório destinado a este proejto no Apache
3. Na raiz deste diretório no apache, onde você colocou estes arquivos, crie um diretório chamado "tmp" e de permissão de leitura e escrita neste novo diretório.
4. Altere as configurações de acesso ao seu banco de dados no arquivo /core/controller/Database.php

OBS: Para acessar a primeira vez o sistema utilize:

- usuário: admin
- senha: admin

Posteriormente mude estes valores por segurança!
