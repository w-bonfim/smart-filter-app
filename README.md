# Smart Filter App

Aplicação Laravel com Livewire 3 para filtro inteligente de produtos, permitindo busca por nome, múltiplas categorias e múltiplas marcas.

![image](https://github.com/user-attachments/assets/ac9f24d5-ac9f-4d02-adbb-6aaf6ab88e46)

## Funcionalidades

- **Filtro por nome do produto**
- **Filtro por múltiplas categorias** (multi-select)
- **Filtro por múltiplas marcas** (multi-select)
- **Persistência dos filtros** na URL (ao recarregar a página, os filtros permanecem)
- **Botão para limpar filtros**

## Tecnologias

- Laravel 12
- Livewire 3
- MySQL
- Docker

## Como rodar o projeto

1. **Clone o repositório**
    ```sh
    git clone https://github.com/w-bonfim/smart-filter-app.git
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
