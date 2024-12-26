## How to Install the Inerview Project

## Requirements

- PHP >= 8.2
- Composer
- Node.js and npm
- MySQL or other compatible database
- Git

## Installation

Follow these steps to get the project up and running locally.

### 1. Clone the Repository

Clone the repository to your local machine using Git:

```bash
git clone https://github.com/shohidulislamapu71/interview.git
cd interview-project
composer install
cp .env.example .env{database setting}
php artisan key:generate
php artisan migrate
npm install
npm run dev
npm run prod
php artisan serve
http://127.0.0.1:8000 {Live link in your local windows server}
````

## Task 1: Blog Post CRUD API (10 minutes)

#### Create Post API

```http
  POST /api/createPost
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required**. Your API key |
| `content` | `text` | **Required**. Your API key |

#### List All Posts API

```http
  GET /api/allPost
```
#### View a Single Post API
```http
  GET /api/readPost/{id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id` | `string` | **Required**. Your API key |


## Task 2: User Registration API (10 minutes)

#### Creat User API

```http
  POST /api/createUser
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**. Your API key |
| `email` | `text` | **Required**. Your API key |
| `password` | `text` | **Required**. Your API key |

## Task 3: Task Management API (10 minutes)
#### Add a Task API

```http
  POST /api/createTask 
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required**. Your API key |

#### Mark Task as Completed API

```http
  POST /api/updateTask/{id}
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required**. Your API key |
| `is_completed` | `boolean{true=1,false=0}` | **Required**. Your API key |

#### Get Pending Tasks API

```http
  GET /api/getPendingTasks
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `is_completed` | `boolean{false=0}` | **Required**. Your API key |
