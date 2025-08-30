# Business Control Systems - Quick Setup Guide

## 🚀 Quick Start

This guide will help you get the Business Control Systems project up and running in under 10 minutes.

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** 8.1 or higher
- **Composer** (PHP package manager)
- **Node.js** 16+ and **npm**
- **MySQL** 8.0+ or **MariaDB** 10.3+
- **Git**

### Check Your Environment

```bash
# Check PHP version
php -v

# Check Composer
composer -V

# Check Node.js
node -v

# Check npm
npm -v

# Check MySQL
mysql --version
```

## ⚡ Installation Steps

### 1. Clone the Repository

```bash
git clone <repository-url>
cd bua
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Configure Database

Edit `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bcs_pos
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 6. Create Database

```bash
# Connect to MySQL
mysql -u root -p

# Create database
CREATE DATABASE bcs_pos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

# Exit MySQL
EXIT;
```

### 7. Run Database Migrations

```bash
php artisan migrate
```

### 8. Build Frontend Assets

```bash
# For development
npm run dev

# For production
npm run build
```

### 9. Start Development Server

```bash
php artisan serve
```

Your application should now be running at `http://localhost:8000`

## 🔧 Development Workflow

### Starting Development

```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite dev server
npm run dev
```

### Making Changes

1. **Backend Changes**: Edit PHP files in `app/` directory
2. **Frontend Changes**: Edit Blade templates in `resources/views/`
3. **Styling**: Modify CSS in `resources/css/`
4. **JavaScript**: Update JS in `resources/js/`

### Building for Production

```bash
npm run build
```

## 📁 Project Structure Overview

```
bua/
├── app/                    # Application logic
│   ├── Http/             # HTTP layer
│   │   └── Controllers/  # Controllers
│   └── Models/           # Eloquent models
├── resources/             # Frontend resources
│   ├── views/            # Blade templates
│   ├── css/              # CSS files
│   └── js/               # JavaScript files
├── routes/                # Route definitions
├── database/              # Database files
├── public/                # Public assets
└── storage/               # Application storage
```

## 🌐 Available Routes

| Route | Description | Controller |
|-------|-------------|------------|
| `/` | Landing page | - |
| `/about` | About us page | - |
| `/support` | Support services | - |
| `/retail-pos` | Retail POS solutions | - |
| `/contact` | Contact page | ContactController |
| `POST /contact` | Contact form submission | ContactController |

## 🎨 Frontend Development

### CSS Framework
- **TailwindCSS**: Utility-first CSS framework
- **Custom CSS**: Page-specific styles in `@section('styles')`

### JavaScript
- **Alpine.js**: Lightweight reactive framework
- **GSAP**: Animation library
- **Custom JS**: Page-specific scripts in `@section('scripts')`

### Component System
- **Master Layout**: `resources/views/layouts/master.blade.php`
- **Page Templates**: Extend master layout using `@extends('layouts.master')`

## 🗄️ Database Management

### Running Migrations

```bash
# Create new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Reset database
php artisan migrate:fresh
```

### Database Seeding

```bash
# Create seeder
php artisan make:seeder TableNameSeeder

# Run seeders
php artisan db:seed
```

## 🧪 Testing

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter TestName
```

## 📱 Responsive Design

### Breakpoints
- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

### Testing Responsiveness
- Use browser dev tools
- Test on actual devices
- Check various screen sizes

## 🚀 Deployment

### Production Build

```bash
# Build assets
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Server Requirements
- PHP 8.1+
- MySQL 8.0+
- Composer
- Node.js 16+ (for build)

## 🔍 Troubleshooting

### Common Issues

#### 1. Composer Issues
```bash
# Clear composer cache
composer clear-cache

# Update composer
composer self-update
```

#### 2. Node.js Issues
```bash
# Clear npm cache
npm cache clean --force

# Delete node_modules and reinstall
rm -rf node_modules package-lock.json
npm install
```

#### 3. Laravel Issues
```bash
# Clear application cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Regenerate autoload files
composer dump-autoload
```

#### 4. Database Issues
```bash
# Check database connection
php artisan tinker
DB::connection()->getPdo();

# Reset database
php artisan migrate:fresh
```

### Performance Issues

#### 1. Slow Page Loads
- Check asset compilation: `npm run build`
- Verify database queries
- Enable Laravel debug bar

#### 2. Memory Issues
- Increase PHP memory limit in `php.ini`
- Check for memory leaks in code
- Optimize database queries

## 📚 Additional Resources

### Documentation
- [Laravel Documentation](https://laravel.com/docs)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [Alpine.js Documentation](https://alpinejs.dev/)
- [GSAP Documentation](https://greensock.com/docs/)

### Tools
- **Laravel Telescope**: Debug and monitor your application
- **Laravel Debugbar**: Development debugging
- **MySQL Workbench**: Database management

## 🤝 Getting Help

### Support Channels
- **Documentation**: Check this guide and README.md
- **Issues**: Create GitHub issues for bugs
- **Discussions**: Use GitHub discussions for questions

### Development Team
- **Lead Developer**: [Your Name]
- **Email**: [your-email@businesscontrol.com]
- **Phone**: (800) 233-5876

---

*This setup guide is part of the Business Control Systems project documentation. For more detailed information, refer to the main README.md file.*
