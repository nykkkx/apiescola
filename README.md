
# API Escola - Dupla 6

Projeto desenvolvido no curso de Sistemas de Informação do ISULPAR, com orientação do professor Luiz Efigênio.

O trabalho consiste no desenvolvimento de uma API REST utilizando Laravel e MySQL, simulando um sistema escolar para gerenciamento de alunos, disciplinas e notas.

## Tecnologias utilizadas

- PHP
- Laravel
- MySQL
- Docker
- Laravel Sail
- Thunder Client
- Git e GitHub

## Funcionamento do projeto

A API foi desenvolvida utilizando três models, três controllers e três migrations, responsáveis pelo gerenciamento dos alunos, disciplinas e notas.

Para os alunos, foram criadas as rotas GET e POST em `/api/alunos`, permitindo consultar e cadastrar novos registros. Também foram implementadas validações para evitar matrículas e e-mails duplicados.

As disciplinas seguem o mesmo funcionamento, utilizando as rotas GET e POST em `/api/disciplinas`, com informações sobre o nome da disciplina, carga horária e professor responsável.

Por fim, a rota GET `/api/notas/resumo` realiza a contagem das notas cadastradas no banco de dados e calcula a média geral.

## Execução

Com Docker, PHP e Composer instalados, clone o repositório e execute:

```bash
composer install
cp .env.example .env
```

Após configurar o banco de dados no arquivo `.env`, execute:

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
```

O projeto estará disponível em http://localhost.

## Testes realizados

Durante o desenvolvimento, utilizamos o Thunder Client para testar as requisições GET e POST e verificar a comunicação entre o Laravel e o MySQL.

Também inserimos duas notas diretamente no banco de dados, com valores de 8.5 e 9.5, para verificar o cálculo da média geral. O resultado obtido foi:

```json
{
    "total_notas": 2,
    "media_geral": 9
}
```

Todas as cinco rotas foram testadas e apresentaram os resultados esperados.

## Integrantes

- Nykollas Armindo Rodrigues
- Nicolly Correia Santos e Silva

Sistemas de Informação - ISULPAR - 2026
