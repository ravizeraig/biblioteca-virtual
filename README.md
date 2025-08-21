# 📚 Biblioteca Virtual

![Status do Projeto](https://img.shields.io/badge/status-concluído-green)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue.svg)

## Descrição do Projeto

Este projeto é uma aplicação web completa, desenvolvida com o framework Laravel, que simula um sistema de gerenciamento de uma biblioteca virtual. A aplicação permite realizar todas as operações essenciais de um CRUD (Create, Read, Update e Delete) para o recurso "Livros".

O projeto foi construído do zero, focando em práticas modernas e na estrutura MVC (Model-View-Controller) do Laravel.

## 🚀 Funcionalidades

- **Criação de Livros:** Formulário para adicionar novos livros ao banco de dados.
- **Visualização de Livros:** Listagem de todos os livros cadastrados em uma tabela organizada.
- **Edição de Livros:** Formulário para atualizar os dados de um livro existente.
- **Exclusão de Livros:** Opção para remover um livro do banco de dados.
- **Validação de Formulários:** Verificação de dados para garantir a integridade das informações.
- **Interface Responsiva:** Estilização com **Bootstrap 5** para uma experiência de usuário agradável.

## 💻 Tecnologias Utilizadas

- **PHP 8.2+**
- **Laravel 10**
- **Docker & Laravel Sail** (Para o ambiente de desenvolvimento)
- **MySQL** (Banco de dados)
- **Bootstrap 5** (Para estilização da interface)

## ⚙️ Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em seu sistema:

- [**Docker Desktop**](https://www.docker.com/products/docker-desktop/)
- [**WSL (Windows Subsystem for Linux)**](https://learn.microsoft.com/pt-br/windows/wsl/install) (Para usuários de Windows)
- [**Git**](https://git-scm.com/)

## 🔧 Instalação e Configuração

Siga os passos abaixo para colocar o projeto para rodar em sua máquina:

1.  **Clone o repositório Git:**
    ```bash
    git clone [https://www.dio.me/articles/enviando-seu-projeto-para-o-github](https://www.dio.me/articles/enviando-seu-projeto-para-o-github)
    cd [pasta-do-seu-projeto]
    ```

2.  **Inicie o Laravel Sail:**
    ```bash
    ./vendor/bin/sail up -d
    ```

3.  **Acesse o terminal do contêiner:**
    ```bash
    ./vendor/bin/sail shell
    ```

4.  **Instale as dependências PHP:**
    ```bash
    composer install
    ```

5.  **Configure o arquivo `.env`:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    (O Laravel Sail já configura as credenciais do banco de dados automaticamente, mas é bom gerar a APP_KEY).

6.  **Execute as migrações do banco de dados:**
    ```bash
    php artisan migrate
    ```

7.  **Volte ao seu terminal principal (fora do contêiner) e abra o projeto no navegador:**
    ```bash
    # A URL será:
    http://localhost
    ```

## 🗺️ Rotas da Aplicação

- **`http://localhost/`**: Página inicial (bem-vindo).
- **`http://localhost/produtos`**: Listagem de todos os livros.
- **`http://localhost/produtos/create`**: Formulário para criar um novo livro.
- **`http://localhost/produtos/{id}/edit`**: Formulário para editar um livro existente.

## ✍️ Autor

- **Desenvolvido por:** [https://github.com/ravizeraig](https://github.com/ravizeraig)
---
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).