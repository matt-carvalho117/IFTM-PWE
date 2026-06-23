# IFTM - Projetos de Sistemas para Internet

Bem-vindo ao repositório de projetos desenvolvidos durante o curso de **Sistemas para Internet** do **Instituto Federal do Triângulo Mineiro (IFTM)**.

Este repositório contém diversos projetos e exercícios práticos abordando tecnologias web fundamentais, desde desenvolvimento frontend até backend com PHP e bancos de dados.

## 🎓 Sobre

Este repositório é um portfólio de aprendizado que demonstra a progressão nos estudos de desenvolvimento web, com foco em:
- **HTML5** e semântica web
- **CSS3** e design responsivo
- **JavaScript** para interatividade
- **PHP** e arquitetura MVC
- **Bancos de dados** MySQL com PDO
- **Web Design** e UX/UI

## 💻 Tecnologias Utilizadas

- **HTML5**: Estrutura semântica de documentos web
- **CSS3**: Estilização, layouts flexíveis e responsivos
- **PHP**: Backend e lógica de negócios
- **MySQL**: Persistência de dados
- **JavaScript**: Interatividade e dinâmica

## 📁 Glossário

| Sigla | Significado | Descrição |
|-------|-------------|-----------|
| **PWE** | Projeto Web Estático | Disciplina focada em HTML, CSS e estrutura de páginas web estáticas |
| **FSI** | Fundamentos de Sistemas para Internet | Disciplina que cobre conceitos fundamentais de web, arquitetura MVC e persistência de dados |

---

## 📚 Estrutura do repositório

```
1°Periodo/
│
├── PWE/
│   ├── aulas/
│   │   ├── (Exercícios feitos durante as aulas)
│   │
│   └── listas/
│       ├── (Listas de exercícios progressivas (09, 10, 14...))
│
└── FSI/
    └── cadastro-alunos/
        ├── public/
        │   ├── index.php (Interface de listagem)
        │   └── salvar_contato.php (Processamento de requisições)
        │
        ├── config/
        │   ├── Database.php (Conexão PDO com MySQL)
        │   └── bootstrap.php (Inicialização da aplicação)
        │
        ├── app/
        │   ├── Controllers/
        │   │   └── ContatoController.php (Orquestração de requisições)
        │   │
        │   ├── Services/
        │   │   └── ContatoService.php (Validação e regras de negócio)
        │   │
        │   └── Repositories/
        │       └── ContatoRepository.php (Acesso a dados com Prepared Statements)
        │
        └── database/
            └── schema.sql (Estrutura do banco de dados)
```

### 🌐 **PWE - Projeto Web Estático**

Disciplina focada em desenvolvimento frontend com HTML e CSS puros.

**Estrutura:**
- `aulas/` - Exercícios propostos durante as aulas
- `listas/` - Listas de exercícios progressivas (09, 10, 14...)

**Conceitos abordados:**
- Estrutura semântica de HTML5
- Propriedades CSS fundamentais (margin, padding, box-sizing)
- Seletores CSS (element, class, ID, nth-child, ::nth-of-type)
- Layouts com floats e posicionamento
- Navegação e estrutura de listas
- Background images e propriedades visuais

---

### 🗄️ **FSI - Fundamentos de Sistemas para Internet**

Disciplina focada em arquitetura web, backend e persistência de dados.

**Estrutura do Projeto `cadastro-alunos`:**

- **`public/`** - Ponto de entrada da aplicação e assets públicos
  - `index.php` - Interface (View) para o usuário
  - `salvar_contato.php` - Recebe requisições HTTP

- **`config/`** - Configurações da aplicação
  - `Database.php` - Classe de conexão com MySQL via PDO
  - `bootstrap.php` - Carregamento automático de classes

- **`app/Controllers/`** - Camada controladora
  - Orquestra a requisição entre Services e Views

- **`app/Services/`** - Lógica de negócios
  - Valida dados de entrada
  - Aplica regras de negócio

- **`app/Repositories/`** - Acesso a dados
  - Interage com o banco de dados
  - Usa Prepared Statements para segurança

- **`database/`** - Scripts do banco de dados
  - `schema.sql` - Criação de tabelas

**Conceitos abordados:**
- Arquitetura MVC (Model-View-Controller)
- Padrão Repository para acesso a dados
- Service Layer para lógica de negócios
- Conexão com MySQL usando PDO
- Prepared Statements e prevenção de SQL Injection
- Validação de dados no backend
- Fluxo de requisições HTTP em aplicações web

---
## 🎯 Objetivos

- ✅ Dominar HTML5 semântico e acessibilidade
- ✅ Criar layouts responsivos com CSS3
- ✅ Entender arquitetura de aplicações web
- ✅ Trabalhar com bancos de dados relacionais
- ✅ Implementar padrões de design (MVC, Repository)
- ✅ Garantir segurança em aplicações web
- ✅ Desenvolver boas práticas de programação

## 🌐 Acesso aos Projetos

Os projetos estão publicados em **GitHub Pages**:
- 🔗 [GitHub Pages do Repositório](https://matt-carvalho117.github.io/IFTM-PWE/)

## 🏷️ Tópicos

`html5` • `css3` • `layout` • `webdesign` • `php` • `mvc` • `mysql`

## Em desenvovimento por:

[@matt-carvalho117](https://github.com/matt-carvalho117)
> "*Through Knowledge, Victory. Through Unity, Peace.*  
> *Honor, Valor, Allegiance.*  
> *Today. Tomorrow. Forever.*  
> *Together We Rise. Together We Prevail.*  
> *Forward Unto Dawn.*  
> *From Earth, For Earth.*"
