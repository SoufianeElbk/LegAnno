# LegAnno - Legal Document Annotation System

LegAnno is a web-based application built with Laravel that helps in managing and annotating legal documents. The system provides a user-friendly interface for legal professionals to organize, annotate, and collaborate on legal documents efficiently.

## Features

- User authentication and authorization
- Document management and organization
- Legal document annotation capabilities
- PDF generation and handling
- Secure data storage and management
- Modern and responsive user interface

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Web server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/SoufianeElbk/LegAnno.git
cd LegAnno
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in the `.env` file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=leganno
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Run database seeders (optional):
```bash
php artisan db:seed
```

9. Build frontend assets:
```bash
npm run build
```

10. Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Development

- Run Laravel development server:
```bash
php artisan serve
```

- Run Vite development server:
```bash
npm run dev
```

## Testing

Run the test suite:
```bash
php artisan test
```

