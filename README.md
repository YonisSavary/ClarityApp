# Clarity Application

This template makes the use of Clarity framework easier

## Getting Started 

Before using Clarity, you need to clone this repository or use it as a template,
then, you can run :

```bash
git clone --recursive https://github.com/YonisSavary/ClarityApp.git
# or 
git clone --recursive <repo-that-use-ClarityApp>

cd <your-repo>

# if Clarity/ don't contain anything, run 
# git submodule update --init --recursive

# Create a default configuration for the framework
php craft create-config
```

### Create an application

To create an Application, run

```bash
php craft create-app <your-app-name>
```

This should create every needed files in your project

### Serving

```bash
cd Public
php -S localhost:8000
```



## A glance at Clarity

```php
// Routes declaration
Router::any("/message/list", [MessageController::class, "list"]);
Router::get("/article/{id}", [ArticleController::class, "seeArticle"]);
Router::post("/login", function(){ /*...*/ });
Router::view("/about", "static/about");

// Model Usage
Contact::update()->set("type", 5)->where("id", 12)->fetch();

// Interaction with components
Config::isTrue("enable_my_component");
Cache::get("myKey", "myDefaultValue");
Auth::attempt($theLogin, $thePassword);

// Simple Response System (HTML, Json, File ...etc)
Response::json($myObject);
Response::file("/path/to/my/file", "SomeNiceApplication.zip");
Response::html("<h1>Hello !</h1>");
Renderer::render("home", ["title" => "Hello there !"]);
```

## Tutorials and documentation

You can find Clarity's documentation in [`Clarity/Docs`](./Clarity/Docs/)


## What can I expect ?

By using Clarity, you can expect :
- **A light application** : so far Clarity weights < 500 kb
- **Some sweet syntaxes**: that are clear and intuitives
- **A light software** : only used classes are loaded
- **A clear file hierarchy** : you cannot be lost when looking inside a project
- **Framework that doesn't break your IDE** : looking for a function ? Your IDE plugin should work just fine !
- **Customization** : The majority of Clarity's implementations are easily replaceable


## Features

Clarity got theses features :
- Core
  - Simple component design
  - Routing (with caching/indexing and slugs)
  - Controllers
  - Middlewares
  - Views
- Data
  - Automatic models
  - Automatic API routes for your models (Autobahn)
- Utilitaries
  - Authentication
  - Command Line Interface (With custom commands support)

... And more !


## Requirements

Only PHP8 is required - Clarity is **dependancy-free** !

But you **can** use some composer packages if you want to ! The framework will load them


