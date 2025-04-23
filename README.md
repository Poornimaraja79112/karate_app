# Karate Academy Registration System

## Overview

The **Karate Academy Registration System** is a web application that allows students to register for classes, view available classes, and manage their registration information. The project leverages **ReactJS** for the frontend, **PHP** for the backend, and **MySQL** for database management. It uses **REST APIs** to fetch and store data, providing a dynamic, user-friendly experience.

---

## Features

- **Student Registration**: Students can register with their name, age, phone number, and preferred class time.
- **Student List**: Display all registered students in a dynamic table.
- **Responsive Design**: The website is responsive and works seamlessly on both desktop and mobile devices.
- **REST API**: A RESTful backend API handles student registrations and fetches data in real-time.

---

## Technologies Used

- **Frontend**:
  - ReactJS
  - HTML5, CSS3, JavaScript
  - Axios (for API calls)
  
- **Backend**:
  - PHP
  - MySQL
  
- **Database**:
  - MySQL

---

## Project Structure

```
/karate_academy
├── /frontend
│   ├── /src
│   │   ├── App.js
│   │   ├── components
│   │   │   ├── Navbar.js
│   │   │   ├── StudentList.js
│   │   ├── index.js
│   ├── /public
│   │   ├── index.html
├── /backend
│   ├── config.php
│   ├── register.php
│   ├── getRegistrations.php
│   ├── /uploads
├── /database
│   ├── karate_academy.sql
├── README.md
└── package.json
```

---

## Setup Instructions

### 1. **Clone the repository**:

Clone the repository to your local machine:

```bash
git clone https://github.com/yourusername/karate_academy.git
```

### 2. **Frontend Setup (ReactJS)**:

1. Navigate to the `frontend` directory:
   ```bash
   cd karate_academy/frontend
   ```

2. Install dependencies:
   ```bash
   npm install
   ```

3. Run the React development server:
   ```bash
   npm start
   ```

   Your app will be live at `http://localhost:3000`.

### 3. **Backend Setup (PHP)**:

1. Make sure you have a local web server like **XAMPP** or **MAMP** installed.

2. Place the `backend` folder inside the **htdocs** directory (for XAMPP) or the appropriate directory for your web server.

3. Set up the database:
   - Open **phpMyAdmin** and create a new database called `karate_academy`.
   - Import the `karate_academy.sql` file (found in `/database`) to set up the required tables.

4. Start your local PHP server, typically via **XAMPP** (or similar software).

### 4. **Configuration**:

- In the `backend/config.php` file, ensure that your **MySQL database** credentials are correct.

---

## How It Works

### **Frontend (ReactJS)**:
1. The React app makes API calls to the **PHP backend** using **RESTful APIs** to interact with the database.
2. When a student registers, the **POST request** sends the form data to `register.php`, which inserts it into the database.
3. The **GET request** to `getRegistrations.php` retrieves the list of students and displays it in a table on the frontend.

### **Backend (PHP)**:
1. **`register.php`** handles student registration by accepting POST data and storing it in the **MySQL database**.
2. **`getRegistrations.php`** returns the list of registered students in **JSON format**, which is used by the frontend to display the data.

---

## Example API Endpoints

- **POST** `/backend/register.php`
  - **Description**: Registers a new student.
  - **Parameters**: `name`, `age`, `phone`, `time`
  - **Response**: Success or failure message.

- **GET** `/backend/getRegistrations.php`
  - **Description**: Retrieves all registered students.
  - **Response**: A JSON array of student objects, e.g.:
    ```json
    [
      {
        "name": "John Doe",
        "age": 25,
        "phone": "1234567890",
        "time": "Morning",
        "registered_at": "2025-04-23T12:00:00Z"
      },
      ...
    ]
    ```

---

## How to Run Locally

1. **Install Dependencies**: 
   - In the `frontend` directory, run `npm install` to install all necessary dependencies.

2. **Start the React App**: 
   - Run `npm start` to launch the React development server on `http://localhost:3000`.

3. **Setup Backend**: 
   - Place the `backend` folder inside your local server directory (like **XAMPP's htdocs**).
   - Set up the database by importing `karate_academy.sql` into phpMyAdmin.
   - Adjust your MySQL database credentials in `config.php`.

4. **Test the Application**: 
   - Open your React app at `http://localhost:3000` and test the registration functionality and view the student list.

---

