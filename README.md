# Projeto de Cadastro com PHP e MySQL

Este é um pequeno sistema de cadastro de usuários usando PHP e banco de dados MySQL.

## Funcionalidades
- Formulário para inserir nome e email
- Dados são salvos no banco de dados
- Página que lista os cadastros

## Requisitos
- PHP instalado (ex: XAMPP)
- Banco de dados MySQL com a tabela `usuarios`

## Estrutura do Banco de Dados

```sql
CREATE DATABASE cadastro;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  email VARCHAR(100)
);
