# **Dynamic Portfolio Website (Laravel)**  

A dynamic and interactive portfolio website built with Laravel. This project allows you to showcase your work, skills, and achievements in a professional and customizable manner.  

## **Installation Guide**  

### **1. Clone the Repository**  
Open your terminal and run:  

```bash
git clone https://github.com/tauseedzaman/laravel-portfolio.git
cd laravel-portfolio
```

### **2. Install Dependencies**  
Ensure you have Composer installed, then execute:  

```bash
composer install
```

### **3. Set Up the Application**  
Generate the application key:  

```bash
php artisan key:generate
```

### **4. Configure Storage and Database**  
Run the following command to create a symbolic link for storage:  

```bash
php artisan storage:link
```

Run database migrations:  

```bash
php artisan migrate
```

### **5. Start the Development Server**  
Finally, launch the Laravel development server:  

```bash
php artisan serve
```

Your portfolio website should now be accessible at `http://127.0.0.1:8000`.  
