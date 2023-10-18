# API de Usuários - Documentação

Bem-vindo à documentação da API de Usuários. Esta API é construída em Laravel para gerenciar cadastro de usuários`.

## Requisitos

Antes de começar, certifique-se de que você tenha os seguintes requisitos instalados em seu sistema:

- Docker: [Instalação do Docker](https://docs.docker.com/get-docker/)
- Docker Compose: [Instalação do Docker Compose](https://docs.docker.com/compose/install/)

## Configuração do Ambiente

Siga as etapas abaixo para configurar o ambiente de desenvolvimento utilizando Docker e Laravel Sail:

1. Clone o repositório do projeto:
```git clone https://github.com/higord3v/example-app.git```

2. Navegue até o diretório do projeto:
```cd se`projeto```

3. Execute o comando Sail para iniciar os contêineres Docker:
``` ./vendor/bin/sail up```

4. Execute as migrações do banco de dados para criar as tabelas necessárias:
``` ./vendor/bin/sail  artisan migrate```

5. Acesse o ambiente de desenvolvimento em [http://localhost](http://localhost).

## Uso da API

A API de Usuários fornece os seguintes recursos:

- `GET /api/usuario`: Obter a lista de todos os usuários.
- `GET /api/usuario/{id}`: Obter informações de um usuário específico.
- `POST /api/usuario`: Criar um novo usuário.
- `PUT /api/usuario/{id}`: Atualizar as informações de um usuário existente.
- `DELETE /api/usuario/{id}`: Excluir um usuário.

Certifique-se de incluir o cabeçalho `Accept: application/json` em suas solicitações para receber respostas no formato JSON.


## Considerações Finais

Agora você está pronto para começar a usar a API de Usuários do projeto. Certifique-se de consultar a documentação do Laravel para obter informações adicionais sobre como desenvolver recursos e autenticar solicitações: [Documentação do Laravel](https://laravel.com/docs/8.x).

Se você tiver alguma dúvida ou encontrar problemas, não hesite em entrar em contato com a equipe de desenvolvimento em higord3v@gmail.com.

Divirta-se!


