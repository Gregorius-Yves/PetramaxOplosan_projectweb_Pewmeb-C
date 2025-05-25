# InaRISK 🌋🌊

**InaRisk** is a Laravel-based web application that delivers real-time information and messages about ongoing natural disasters across Indonesia. The goal is to keep citizens and communities informed through clear updates, enabling faster response and greater public awareness.

This is **NOT** the official InaRISK web source code. This is a Compter Science project and we do not hold any properties.

Group Name:
- Gregorius Yves Ardhyo Figlio Aviantoro - 235150200111008
- Christopher Jonathan - 235150201111064
- Muhammad Alden Prasbawara - 235150201111014
- Yosua Benedict Parasian - 2351502071111012

## 🚀 Features

- 📢 Real-time disaster messages (earthquakes, floods, volcanoes, etc.)
- 🇮🇩 Focused on Indonesian regions
- 📱 Responsive web design
- 🔒 Secure with Laravel’s built-in protection layers
- 🗃️ Planned integration with BMKG / BNPB APIs

## 🛠 Tech Stack

- **Backend**: Laravel 10+
- **Frontend**: Blade, Tailwind
- **Database**: MySQL
- **Deployment**: Artisan, Laravel Serve, XAMPP

## ⚙️ Installment

```bash
git clone https://github.com/Gregorius-Yves/PetramaxOplosan_projectweb_Pewmeb-C
cd PetramaxOplosan_projectweb_Pewmeb-C

# Create .env from scratch or use the example
cp .env.example .env

composer install

# Run database migration
php artisan migrate

# Create symlink between storage and public dir
php artisan storage:link

# Run the development server
php artisan serve

# Run vite server
npm run dev
```
