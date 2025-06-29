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


## 👩‍💻 Author

**Monisha A**  
Full Stack Software Developer (Angular & Laravel)  
🔗 [LinkedIn](https://www.linkedin.com/in/monisha-adikeasavan)
📧 k7monisha@gmail.com
