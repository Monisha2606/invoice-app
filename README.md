# 🧾 Laravel Invoice Generator with Email Notification (Event & Queue Based)

This is a Laravel-based Invoice Generator application that:
- Accepts invoice details through a form or API
- Calculates total, tax, and subtotal
- Saves to the database
- Sends an email to the client using queued jobs and event-listener architecture

---

## 🚀 Features

- Invoice creation form (Blade)
- Validation using Form Request
- Event: `InvoiceCreated`
- Listener: `SendInvoiceEmail`
- Mail: `InvoiceDetails`
- Queue-based email sending
- Mailtrap/Gmail SMTP configuration
- Postman/API testing support

---

## ⚙️ Technologies Used

- Laravel 10.x
- PHP 8.x
- Bootstrap 5 (Frontend styling)
- Mailtrap/Gmail SMTP
- MySQL
- Laravel Queue (Database driver)

---

## 🛠️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/monisha2606/invoice-app.git
cd invoice-app

### 2. 🔧 Install dependencies
```bash
composer install

### 3. 🔐 Generate App Key
```bash
php artisan key:generate

### 4. ✉️ Email Configuration

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=****
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS=your@email.com
MAIL_FROM_NAME="Invoice App"

### 5. 🌐 Run the App
```bash
php artisan serve


## 👩‍💻 Author

**Monisha A**  
Full Stack Software Developer (Angular & Laravel)  
🔗 [LinkedIn](https://www.linkedin.com/in/monisha-adikeasavan)
📧 k7monisha@gmail.com
