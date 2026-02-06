# Task Manaager Application

## Overview

This is a Task Manager web Application built using laravel and bootstrap 4.
The application allows users to create, view, edit, update, delete and manage tasks with status tacking (Pending / Completed). The project follows Laravel best practices including resource controllers, migrations, Eloquent ORM, and form validation.

---

## Features

- Create new tasks
- Edit existing tasks
- Delete tasks with configuration
- Mark tasks as Completed or Pending
- View task creation date
- Bootstrap 4 styled interface
- Form vaidation
- Search
- Pagination

---

## Technical Stack 

- **Framework:** Laravel
- **Frontend:** Bootstrap 4
- **Database:** Laravel Migrations
- **ORM:** Eloquent
- **Validation:** Laravel validation rules
- **Version Control:** Git

---

## Setup Instructions

1.Clone the repository:
- git clone https://github.com/densterwilson-png/task-manager.git

2.Navigate into the project:
- cd task-manager

3.Install Dependencies:
- composer install

4. Copy the environment file:
- cp .env.example .env

5. Generate application key:
- php artisan key:generate 

6. Configure database settings in '.env'

7. Run migration:
-php artisan migrate

8. Start the server:
- php artisan serve
- Visit: http://127.0.0.1:8000

---

## Assumptions

- Authentication was not required
- The application was designed for local development
- No deploymnet was required per instructions.

---

## Bonus Features

- Status toggle button
- Bootstrap status badges
- Flash success messages
- Configuration before task deletion
- Add a search bar to filter tasks by title or status
- Add pagination for long task lists
