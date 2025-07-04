# Smart Filter App

Aplicação Laravel com Livewire 3 para filtro inteligente de produtos, permitindo busca por nome, múltiplas categorias e múltiplas marcas.

## Funcionalidades
- **Autenticação de usuários**
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

    > **Importante:** Popule o banco com seeders obrigatoriamente para acessar o sistema e criar o usuário administrador padrão.

6. **Acesse no navegador**
    ```
    http://localhost:8000
    ```

7. **Testes**

    Comando para rodar os testes automatizados do projeto:

    ```sh
    docker-compose exec app php artisan test
    ```

## Acesso ao sistema

- **Login:** admin@lmfrotas.com
- **Senha:** 123

## Telas do Sistema
- **Login**
![image](https://github.com/user-attachments/assets/f60f7188-5c8a-42b2-a5ae-dab875063e99)

- **Filtro de prdutos**
![image](https://github.com/user-attachments/assets/4046d0f2-69c2-448a-82d2-0ae0dcfb5b40)

## Observações

- As migrations e seeders estão em `database/migrations` e `database/seeders`.
- O filtro de produtos está disponível na rota `/produtos` (protegida por autenticação).
- O layout utiliza TailwindCSS via CDN.

---

