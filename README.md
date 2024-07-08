# 🍽️ Thai Food Yum Restaurant

Welcome to the Thai Food Yum Restaurant website project! This repository contains the code for a fictional Thai restaurant's website, featuring delicious dishes and a user-friendly interface. 🍜🥗

## 📋 Table of Contents

- [About](#about)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## 🥢 About

Thai Food Yum Restaurant is a demo project showcasing a fully functional website for a Thai restaurant. The site includes a menu, contact form, and information about the restaurant. The project is built using PHP, PostgreSQL, and modern web technologies. 🍛🍤

## ✨ Features

- 🏠 Home Page: Overview of the restaurant
- 📜 Menu Page: Display of menu items pulled from a PostgresQL database
- 📞 Contact Form: Allows customers to get in touch
- 🥡 Specials Section: Highlights daily specials
- 💬 Responsive Design: Optimized for both desktop and mobile devices

## 🛠️ Installation

Follow these steps to get the project running on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/thai-food-yum-restaurant.git
   cd thai-food-yum-restaurant
   ```

2. **Install dependencies:**
   Make sure you have PHP and PostgreSQL installed. Then set up your environment variables.

   ```bash
   composer install
   ```

3. **Set up the database:**

   ```sql
   CREATE DATABASE restaurant_db;
   CREATE TABLE menu_items (
       id SERIAL PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       description TEXT,
       price DECIMAL(10, 2) NOT NULL,
       image_url VARCHAR(255),
       category VARCHAR(100)
   );
   ```

4. **Populate the database with sample data:**

   ```sql
   INSERT INTO menu_items (name, description, price, image_url, category) VALUES
   ('Pad Thai', 'A traditional Thai dish with stir-fried rice noodles, eggs, tofu, and shrimp.', 12.99, '/static/padthai.jpg', 'Main Course'),
   ('Green Curry', 'Spicy green curry with coconut milk, bamboo shoots, and your choice of meat.', 13.99, '/static/green-curry.jpg', 'Main Course'),
   ('Tom Yum Soup', 'A hot and sour Thai soup with shrimp, mushrooms, tomatoes, and fresh herbs.', 8.99, '/static/tom-yum-soup.jpg', 'Soup'),
   ('Massaman Curry', 'A rich and flavorful curry with potatoes, peanuts, and your choice of meat.', 14.99, '/static/massaman-curry.jpg', 'Main Course'),
   ('Som Tum', 'A refreshing green papaya salad with tomatoes, peanuts, and lime dressing.', 9.99, '/static/som-tum.jpg', 'Salad'),
   ('Mango Sticky Rice', 'Sweet sticky rice served with fresh mango slices and coconut milk.', 7.99, '/static/mango-sticky-rice.jpg', 'Dessert');
   ```

5. **Run the application:**

   ```bash
   php -S localhost:8000
   ```

6. **Visit in your browser:**
   Open `http://localhost:8000` to see the website in action. 🌐

## 🚀 Usage

- **View the Menu:** Navigate to the "Our Menu" section to see the delicious offerings.
- **Contact Us:** Fill out the contact form to send a message to the restaurant.
- **Specials:** Check out the daily specials on the "Our Specials" page.

## 🤝 Contributing

We welcome contributions to improve the project! Please fork the repository and create a pull request with your changes. 🌟

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a pull request

## 📝 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Thank you for visiting Thai Food Yum Restaurant! Enjoy exploring the code and have a delicious day! 🍲🍚🍹
