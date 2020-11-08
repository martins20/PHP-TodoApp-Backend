# :pushpin: PHP-TodoApp-Backend :pushpin:

An Rest-api for todo app, for study php language.

## :thinking: How to install

<br>

💭 should be have installed <a href="">PHP 7</a> and <a href="https://lumen.laravel.com/docs/8.x/installation">Lumen</a> into your machine.

<br>

**:one: Clone the repository.**

```
$ git clone https://github.com/martins20/PHP-TodoApp-Backend.git

$ cd PHP-TodoApp-Backend
```

**:two: Set .env file cloning the example.**

```
$ cp .env.example .env
```

**:three: Create the database file.**

```
$ cd database

$ touch database.sqlite
```

**:four: Connect and create all table in database file.**

```
$ php artisan migrate:install

$ php artisan migrate
```

**:five: Connect and create all table in database file.**

```
$ php -S localhost:3333 -t public
```

## :telescope: Endpoints

### Todo

#### **GET - /todos/:todo_id**

_Return a todo_

#### **GET - /todos**

_Return list of todos_

#### **POST - /todos**

```typescript
todo_name: string;
is_completed?: boolean;
```

_Return the created todo_

#### **DELETE - /todos/:todo_id**

_Empty return_

### :wrench: Technologies

**Language**

-   [x] PHP 7

**Frameworks**

-   [x] Lumen
-   [x] Laravel

**Database and ORM**

-   [x] Sqlite3
-   [x] Eloquent

**Console**

-   [x] Artisan

**Development techs**

-   [x] DotEnv

#### Made with for :heart: <a href="https://www.github.com/martins20">Martins20</a> :heart:
