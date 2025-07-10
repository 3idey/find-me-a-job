# Find Me a Job

A Laravel-based job board application for employers and job seekers.

## Features

-   User registration and authentication
-   Employer profile creation with logo upload
-   Job posting and tagging
-   Job search and filtering

## Requirements

-   PHP 8.1+
-   Composer
-   SQLite (default) or MySQL/PostgreSQL
-   Node.js & npm (for frontend assets)

## Setup

1. **Clone the repository**

    ```bash
    git clone <repo-url>
    cd find-me-a-job
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node dependencies and build assets**

    ```bash
    npm install
    npm run build
    ```

4. **Copy and configure environment**

    ```bash
    cp .env.example .env
    # Edit .env as needed
    php artisan key:generate
    ```

5. **Set up the database**

    - By default, uses SQLite. You can change to MySQL/PostgreSQL in `.env`.
    - For SQLite:
        ```bash
        touch database/database.sqlite
        ```
    - Run migrations and seeders:
        ```bash
        php artisan migrate --seed
        ```

6. **Set up storage link**

    ```bash
    php artisan storage:link
    ```

7. **Run the development server**
    ```bash
    php artisan serve
    ```
    Visit [http://localhost:8000](http://localhost:8000)

## File Uploads

-   Employer logos are uploaded to `storage/app/public/logos` and served via `public/storage/logos`.
-   Make sure the `storage` directory is writable by your web server.

## Testing

```bash
php artisan test
```

## License

MIT
