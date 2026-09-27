# 📖 Agenda de Amigos — Sistema Web CRUD com Autenticação

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=flat&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![W3.CSS](https://img.shields.io/badge/CSS-W3.CSS-282A36?style=flat)](https://www.w3schools.com/w3css/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Aplicação web modular desenvolvida para a disciplina de **Programação WEB II**. O sistema permite o gerenciamento completo de contatos (CRUD) de forma estruturada e segura, contando com um módulo de autenticação de usuários via sessão.

---

## 📌 Sumário
- [Visão Geral](#-visão-geral)
- [Arquitetura do Sistema](#-arquitetura-do-sistema)
- [Stack Tecnológica](#-stack-tecnológica)
- [Estrutura do Banco de Dados](#-estrutura-do-banco-de-dados)
- [Funcionalidades e Fluxo CRUD](#-funcionalidades-e-fluxo-crud)
- [Como Executar o Projeto](#-como-executar-o-projeto)
- [Estrutura de Arquivos](#-estrutura-de-arquivos)

---

## 🎯 Visão Geral
O projeto **Agenda de Amigos** foi projetado para resolver a necessidade de gestão de contatos pessoais/acadêmicos. A aplicação foi construída focando em boas práticas de modularização em PHP, separação de responsabilidades entre regras de negócio e interface, e controle estrito de acesso através de variáveis de sessão (`$_SESSION`).

---

## 📐 Arquitetura do Sistema
A aplicação adota uma arquitetura modular baseada no modelo **Cliente-Servidor**:

- **Design Modular:** Reutilização de elementos de interface centralizados em `cabecalho.php` e `rodape.php`.
- **Controle de Acesso:** Proteção de rotas privadas utilizando verificação de sessão ativa via `verificarAcesso.php`.
- **Conexão Centralizada:** Ponto único de comunicação com o banco de dados configurado no arquivo `conexaoBD.php`.
- **Separação de Ações:** Separação entre as telas de interface (formulários/tabelas) e os scripts de processamento no banco (`cadastroAction.php`, `atualizarAction.php`, `excluirAction.php`).
- **Mapeamento por Chave Primária:** Uso do identificador `idamigo` para garantir integridade nas operações de alteração e exclusão.

---

## 🛠️ Stack Tecnológica

| Camada | Tecnologia / Ferramenta |
| :--- | :--- |
| **Ambiente Servidor** | XAMPP (Apache + MariaDB/MySQL) |
| **Linguagem Back-end** | PHP 8+ (Driver MySQLi) |
| **Banco de Dados** | MySQL / MariaDB (Banco `pwv`) |
| **Front-end / UI** | HTML5, CSS3, W3.CSS, Font Awesome |
| **Controle de Versão** | Git & GitHub |

---

## 🗄️ Estrutura do Banco de Dados

O banco de dados do projeto chama-se **`pwv`** e possui a seguinte estrutura de tabelas:

### Tabela: `usuario` (Autenticação)
| Coluna | Tipo | Descrição |
| :--- | :--- | :--- |
| `idusuario` | INT (PK, Auto) | Identificador do usuário |
| `nome` | VARCHAR | Login de acesso |
| `senha` | VARCHAR | Credencial de acesso |

### Tabela: `amigos` (Gerenciamento de Contatos)
| Coluna | Tipo | Descrição |
| :--- | :--- | :--- |
| `idamigo` | INT (PK, Auto) | Chave primária do contato |
| `nome` | VARCHAR | Nome completo |
| `apelido` | VARCHAR | Apelido |
| `email` | VARCHAR | Endereço de e-mail |

---

## 🔄 Funcionalidades e Fluxo CRUD

1. **Autenticação de Usuários (`index.php` / `loginAction.php`)**
   - Validação de credenciais no banco de dados.
   - Inicialização do estado de acesso com `session_start()`.
2. **Listagem / Read (`listar.php`)**
   - Consulta dinâmica (`SELECT * FROM amigos`).
   - Mapeamento dinâmico da chave `idamigo` para geração de ações individuais.
3. **Cadastro / Create (`cadastro.php` / `cadastroAction.php`)**
   - Inserção segura de novos amigos com comandos SQL (`INSERT INTO`).
4. **Atualização / Update (`atualizar.php` / `atualizarAction.php`)**
   - Edição de dados existentes filtrados estritamente pelo campo `idamigo`.
5. **Exclusão / Delete (`excluir.php` / `excluirAction.php`)**
   - Remoção de registros com confirmação e validação pela chave primária.

---

## 🚀 Como Executar o Projeto

1. **Baixar e Instalar o XAMPP** (com suporte a PHP 8+ e MySQL).
2. **Clonar o Repositório:**
   ```bash
   git clone [https://github.com/seu-usuario/agenda-amigos.git](https://github.com/seu-usuario/agenda-amigos.git)
