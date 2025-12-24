# 🎫 Smart Queue Management System (Laravel 12)

A modern, real-time Queue Management System built with **Laravel 12**, **Docker**, and **Tailwind CSS**. This system helps businesses manage customer flows efficiently with automated token issuing, real-time counter management, and public displays.

## 🚀 Key Features

* **Self-Service Kiosk:** Customers can generate a token by entering their email.
* **Real-time Admin Dashboard:** Centralized control panel to view live queue statistics (Wait times, Calling numbers).
* **Counter Management:** Dedicated interface for staff to call the next customer with a single click.
* **Public Display Screen:** High-visibility screen for waiting areas with **Voice Announcements** (Text-to-Speech) using the Web Speech API.
* **Email Notifications & Tracking:** Automated emails sent to customers with a **QR Code** to track their live queue position via mobile.
* **Public Access with ngrok:** Fully compatible with ngrok for remote mobile tracking.

## 🛠️ Tech Stack

* **Framework:** Laravel 12
* **Frontend:** Tailwind CSS, Blade Templates
* **Backend:** PHP 8.3
* **Database:** MySQL
* **Environment:** Docker (Laravel Sail)
* **Real-time Elements:** JavaScript & Web Speech API
* **Tools:** ngrok for tunneling, Mailtrap for email testing

## 📦 Installation & Setup

1.  **Clone the project:**
    ```bash
    git clone [https://github.com/your-username/smart-queue-laravel.git](https://github.com/your-username/smart-queue-laravel.git)
    cd smart-queue-laravel
    ```

2.  **Start the Docker environment:**
    ```bash
    ./vendor/bin/sail up -d
    ```

3.  **Install dependencies & Migration:**
    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail php artisan migrate
    ```

4.  **Setup Environment Variables:**
    * Copy `.env.example` to `.env`.
    * Configure your **Mailtrap** SMTP credentials.
    * Set your **ngrok** URL in the Kiosk view.

5.  **Run the application:**
    Access the system at `http://localhost:8080`

## 🖥️ Project Structure

* `/` - Customer Kiosk (Get Token)
* `/admin-dashboard` - Central Control Panel
* `/counter` - Staff Interface
* `/display` - Public Display Screen (TV)
* `/my-token/{id}` - Customer Mobile Tracking Page

---

## pages

admin-dashboard
<img width="1920" height="912" alt="Image" src="https://github.com/user-attachments/assets/7bc6eb64-ca26-4225-b59f-35d1b639f3ee" />

get the token 
<img width="1920" height="912" alt="Image" src="https://github.com/user-attachments/assets/eb64dfa8-0a79-4c7a-86ab-228faf7cbf5f" />

counter
<img width="1920" height="912" alt="Image" src="https://github.com/user-attachments/assets/03ed7a62-bd1b-44b9-bddd-79e127c9aed5" />

display
<img width="1920" height="980" alt="Image" src="https://github.com/user-attachments/assets/1d52049f-ccba-428c-a5e0-b0cc0b2f4e9c" />

Developed by Sandun Bandara
