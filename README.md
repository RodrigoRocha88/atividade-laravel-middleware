# 📦 Atividade: Povoamento de Base de Dados com Laravel (Seeders)

Este repositório contém a implementação prática dos conceitos de povoamento de bases de dados (Seeders) utilizando a framework Laravel. O objetivo do projeto é demonstrar a criação estruturada de tabelas, a inserção massiva de dados e a geração de um script de cópia de segurança (dump) SQL final para garantir o versionamento da estrutura e dos dados.

---

## 🚀 Etapas da Construção

### 1. Criação e Configuração dos Seeders
- Criação da migração para a tabela `produtos`.
- Geração da classe `ProdutoSeeder` via CLI do Artisan (`php artisan make:seeder ProdutoSeeder`).
- Implementação da lógica de inserção massiva dentro do método `run()`, utilizando a Facade `DB::table('produtos')->insert()`.
- Registo da classe no orquestrador central `DatabaseSeeder.php`.

### 2. Execução do Povoamento (Seeding)
- Configuração das credenciais da base de dados MySQL no ficheiro `.env`.
- Execução do comando integrado para recriar as tabelas e povoar a base de dados:
  ```bash
  php artisan migrate:fresh --seed
Validação da integridade dos dados e das regras relacionais diretamente no SGBD (phpMyAdmin).

3. Exportação da Base de Dados (Dump)
Realização do dump completo da base de dados após a validação.

O artefacto gerado (atividade_seeders.sql) encontra-se na raiz deste repositório, contendo as instruções DDL (estrutura) e DML (dados).

🛠️ Como Executar o Projeto Localmente
Clonar o repositório:

Bash


git clone [https://github.com/SEU-USUARIO/atividade-seeders.git](https://github.com/SEU-USUARIO/atividade-seeders.git)
cd atividade-seeders
Instalar as dependências:

Bash


composer install
Configurar o ambiente (.env):
Duplique o ficheiro .env.example para .env e configure as suas credenciais do MySQL:

Snippet de código


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=atividade_seeders
DB_USERNAME=root
DB_PASSWORD=
Gerar a chave da aplicação e limpar a cache:

Bash


php artisan key:generate
php artisan config:clear
Executar as migrações e os seeders:

Bash


php artisan migrate:fresh --seed
📂 Ficheiros de Destaque
Migration: database/migrations/xxxx_xx_xx_xxxxxx_create_produtos_table.php

Seeder: database/seeders/ProdutoSeeder.php

DatabaseSeeder: database/seeders/DatabaseSeeder.php

Dump SQL: atividade_seeders.sql (na raiz do projeto)

Desenvolvido por: Rodrigo Rocha Silva

Link do vídeo: [https://youtu.be/d0sYX6TQBS0](https://youtu.be/d0sYX6TQBS0)
