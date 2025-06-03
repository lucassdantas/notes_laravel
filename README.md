# 📝 Laravel Notes App

Este é um projeto de aplicação web desenvolvido em **Laravel**, criado como parte de um curso que estou realizando. Todo o sistema foi implementado em **cerca de 3 dias**, com foco em boas práticas de autenticação, organização de rotas, validação de formulários e operações CRUD.

## 🚀 Sobre o Projeto

O sistema é uma aplicação de **bloco de notas pessoal**, com autenticação de usuários e as seguintes funcionalidades:

- Login e logout
- Criação de novas anotações
- Edição de anotações existentes
- Exclusão com confirmação
- Interface protegida por sessões
- Middleware para controle de acesso

## 🔐 Autenticação

- Verificação de email e senha com `password_verify`
- Sessão segura com dados do usuário
- Redirecionamento com mensagens de erro e sucesso

## 🧠 Funcionalidades

- Criar, editar e excluir notas
- Confirmação antes de exclusão
- Exclusão lógica com `deleted_at`
- Criptografia de IDs
- Validações de formulário com mensagens personalizadas

## 🛡️ Middlewares

- `CheckIsLogged`: Garante que apenas usuários autenticados acessem as rotas protegidas
- `CheckIsNotLogged`: Impede que usuários logados acessem a tela de login

## 🎨 Views

- `login`
- `home`
- `new_note`
- `edit_note`
- `delete_note`
- `note` (componente para renderizar uma nota individual)
- `top_bar` (navegação)
- `layouts/main_layout` (template base)

## 📅 Status do Projeto

✅ Finalizado — desenvolvido como prática intensiva em cerca de 3 dias.

## 👨‍💻 Autor

**Lucas Dantas**  
[https://devdantas.com.br](https://devdantas.com.br)
