# Smart Filter App

Aplicação Laravel com Livewire 3 para filtro inteligente de produtos, permitindo busca por nome, múltiplas categorias e múltiplas marcas, com persistência dos filtros na URL e integração com Select2.

## Funcionalidades

- **Filtro por nome do produto**
- **Filtro por múltiplas categorias** (multi-select)
- **Filtro por múltiplas marcas** (multi-select)
- **Persistência dos filtros** na URL (ao recarregar a página, os filtros permanecem)
- **Botão para limpar filtros**
- **Paginação dos resultados**
- **Interface responsiva com TailwindCSS**
- **Select2 integrado via Alpine.js para selects múltiplos**

## Tecnologias

- [Laravel 12](https://laravel.com/)
- [Livewire 3](https://livewire.laravel.com/)
- [Alpine.js](https://alpinejs.dev/)
- [Select2](https://select2.org/)
- [TailwindCSS](https://tailwindcss.com/)
- MySQL (Docker)

## Como rodar o projeto

1. **Clone o repositório**
    ```sh
    git clone <url-do-repo>
    cd smart-filter-app
    ```

2. **Suba os containers Docker**
    ```sh
    docker-compose up -d
    ```

3. **Instale as dependências**
    ```sh
    docker-compose exec app composer install
    ```

4. **Configure o `.env`**
    - Copie `.env.example` para `.env`
    - Ajuste as variáveis de conexão com o banco conforme o `docker-compose.yml`

5. **Rode as migrations e seeders**
    ```sh
    docker-compose exec app php artisan migrate --seed
    ```

6. **Acesse no navegador**
    ```
    http://localhost:8000
    ```
