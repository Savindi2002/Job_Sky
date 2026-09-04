# 🚀 Job Sky – Job Portal Web Application

**Job Sky** is a full-stack job portal designed to connect **job seekers with employers** through a simple and responsive platform. The system allows users to search and apply for jobs, while administrators can manage job postings, categories, and applications.

## 🌟 Features

### 👤 Job Seeker

* User registration and secure login
* Search jobs by title, location, and description
* View detailed job information
* Apply for available jobs
* Track submitted applications

### 🛠️ Admin Panel

* Admin authentication
* Add, edit, and delete job postings
* Manage job categories
* View and manage applications
* Open/close job vacancies
* Manage job listings through a dashboard

## 🛠️ Technologies Used

| Technology    | Purpose                 |
| ------------- | ----------------------- |
| **Laravel**   | Backend framework       |
| **PHP**       | Server-side development |
| **MySQL**     | Database                |
| **HTML5**     | Web structure           |
| **CSS3**      | Styling                 |
| **Bootstrap** | Responsive UI           |

## 🏗️ System Overview

```text
Job Seeker
    ↓
Register / Login
    ↓
Search Jobs
    ↓
View Job Details
    ↓
Submit Application
    ↓
Application Stored in MySQL

Admin
    ↓
Admin Login
    ↓
Dashboard
    ↓
Manage Jobs & Categories
    ↓
Review Applications
    ↓
Manage Job Status
```

## 📂 Main Modules

* **Authentication Module** – User registration and login
* **Job Management Module** – Create, update, delete, and view jobs
* **Job Search Module** – Search and filter available opportunities
* **Application Module** – Submit and manage job applications
* **Category Management** – Organize jobs into categories
* **Admin Dashboard** – Centralized system management

## ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone <your-github-repository-url>
cd Job-Sky
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the `.env.example` file and create your `.env` file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### 4. Configure MySQL Database

Update the database configuration in `.env`:

```env
DB_DATABASE=job_sky
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in MySQL/phpMyAdmin.

### 5. Run Migrations

```bash
php artisan migrate
```

If the project contains seeders:

```bash
php artisan db:seed
```

### 6. Start the Application

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## 📸 Screenshots

Add screenshots of your project here:

```markdown
![Home Page](screenshots/home.png)
![Job Listings](screenshots/jobs.png)
![Admin Dashboard](screenshots/admin-dashboard.png)
```

## 🎯 Project Objectives

* Build a practical full-stack web application
* Simplify the job searching and application process
* Provide organizations with an efficient job management system
* Practice Laravel MVC architecture and database integration
* Develop a responsive and user-friendly web interface

## 🔮 Future Improvements

* Email notifications for applications
* Advanced job filtering
* Resume/CV upload
* Employer accounts
* Application status tracking
* Job recommendation system
* AI-based CV and job matching

## 👩‍💻 Developer

**Savindi Hewage**

Data Science Undergraduate
Sabaragamuwa University of Sri Lanka

## 📄 License

This project was developed for **educational and portfolio purposes**.
