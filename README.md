# 🍯 Honey & Natural Products E-commerce Platform

**A bilingual online platform for selling honey and natural products** like herbs, essential oils, beeswax, and more — built with Laravel, Blade, Livewire, and the repository pattern, with full Arabic and English support.

---

## 🌟 Project Overview

This platform aims to provide a smooth and simple shopping experience for customers interested in natural products, while offering an easy-to-use admin dashboard for managing inventory, orders, and customer accounts.

---

## 🧑‍💻 Tech Stack

| Layer         | Technology                       |
|---------------|----------------------------------|
| Backend       | Laravel 11                       |
| Frontend      | Blade + TailwindCSS              |
| Realtime      | Laravel Livewire                 |
| Architecture  | Repository Pattern + Service Layer |
| Localization  | Laravel built-in localization    |
| Auth          | Laravel Breeze (or Fortify)      |
| Database      | MySQL                            |
| Versioning    | Git + GitHub                     |
| Payments      | Stripe / COD (later)             |

---

## 🗂️ Features

### 🛍️ Client Side
- Browse and search products by category
- Add to cart and checkout
- User registration and login
- Multi-language support (Arabic / English)
- Responsive and mobile-friendly

### 🧑‍💼 Admin Dashboard (Livewire)
- Product management (CRUD)
- Category management
- Order management
- User management
- General settings (logo, contact, language)

---

## 🧾 User Stories

#### 👤 As a guest:
- I want to browse and view products without logging in.
- I want to search and filter by category.

#### 👤 As a customer:
- I want to register and log in.
- I want to add items to my cart and checkout.
- I want to view my order history.

#### 👨‍💼 As an admin:
- I want to manage products and orders from a dashboard.
- I want to switch language and update site settings.

---

## 🌍 Localization

- Arabic (`lang/ar/messages.php`)
- English (`lang/en/messages.php`)
- Language toggle on frontend
- All views use `@lang()` helper or `__('key')`

---

## 📁 Project Structure (Simplified)

app/
├── Models/
├── Http/
│ ├── Controllers/
│ ├── Livewire/
├── Repositories/
│ ├── Interfaces/
│ └── Eloquent/
├── Services/
resources/
├── views/
│ ├── frontend/
│ └── admin/
routes/
├── web.php
├── admin.php
lang/
├── en/
├── ar/

yaml
Copy
Edit

---

## 📆 Development Timeline

| Phase              | Description                     | Duration |
|--------------------|----------------------------------|----------|
| UI Design          | Homepage, Product, Dashboard    | 3 days   |
| Project Setup      | Laravel + DB + Language support | 2 days   |
| Client Frontend    | Store pages & cart              | 4 days   |
| Admin Dashboard    | Product, order, settings CRUD   | 4 days   |
| Testing & Cleanup  | Bugs, polish, performance       | 2 days   |

---

## 🧪 Non-Functional Requirements

- Fast page load (< 2s)
- Secure (CSRF, SQLi, XSS protected)
- Fully responsive on all devices
- Clean code using repositories and services

---

## 🚀 How to Run

```bash
git clone git@github.com:Ahmedeisa7/honey-store.git
cd honey-store
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
📌 Todo
 Design frontend UI

 Build database schema and migrations

 Implement repositories

 Implement multilingual Blade views

 Admin dashboard with Livewire

 Payment integration (Stripe or COD)

📞 Contact
For inquiries, reach out at:
📧 ahmed.hamdy.eisa@email.com
📸 Instagram: @ahmed_eisa_

🔐 License
This project is open-source and for educational & commercial use.

