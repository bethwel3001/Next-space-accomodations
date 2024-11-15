
# Hotel Booking System

Welcome to the **Hotel Booking System**, a web-based application that allows users to browse, view, and book rooms in a hotel. This project provides a simple, interactive interface for customers to book rooms based on different categories and includes features for user authentication, booking management, and a streamlined booking experience.

---

## Table of Contents

1. [Tech Stack](#tech-stack)
2. [Features](#features)
3. [Functionalities](#functionalities)
4. [Getting Started](#getting-started)
5. [Usage](#usage)
6. [Contributing](#contributing)
7. [Acknowledgments](#acknowledgments)

---

## Tech Stack

This project utilizes the following technologies:

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Libraries**: Font Awesome (icons), Lottie Icons (animations)

### Getting the Tech Stack

To install and set up the environment, you'll need:

- **XAMPP or WAMP** (for local development environment with PHP and MySQL)
- **Git** (for cloning the repository and managing version control)
- **VS Code** or any preferred code editor

For MySQL database setup, refer to [MySQL Documentation](https://dev.mysql.com/doc/) for installation instructions and configuration.

---

## Features

- **User Authentication**: Login and sign-up functionality for users.
- **Room Booking**: Users can view available rooms and book them based on category (Basic, Premium, VIP).
- **Responsive Design**: Fully responsive for both desktop and mobile screens.
- **Booking Confirmation**: After booking, users receive a unique booking confirmation page with room details.
- **Printable Receipts**: A feature for users to print their booking receipt with booking details.
- **Animations & Icons**: Added animations and icons for a modern, engaging user interface.
- **Admin Panel** (optional): Can be added for managing rooms, bookings, and user accounts.

---

## Functionalities

1. **User Sign-up and Login**: New users can sign up, and existing users can log in to access booking functionalities.
2. **Browse Room Categories**: View available rooms categorized as Basic, Premium, and VIP.
3. **View Room Details**: See details of each room, including price, availability, and amenities.
4. **Booking Confirmation**: Confirmation page shows the booked room's details, user details, and booking date.
5. **Print Booking Receipt**: Print a receipt of the booking confirmation with details for record-keeping.
6. **Responsive UI**: The layout is fully responsive for seamless use on both desktops and mobile devices.

---

## Getting Started

### Prerequisites

1. **XAMPP/WAMP**: Install XAMPP or WAMP to set up a local server environment.
2. **Clone the Repository**: Clone the repository to your local machine.
    ```bash
    git clone https://github.com/your-username/hotel-booking-system.git
    ```

### Installation

1. **Start XAMPP**: Open XAMPP and start the Apache and MySQL services.
2. **Database Setup**:
   - Open PHPMyAdmin (usually at `http://localhost/phpmyadmin`).
   - Create a new database named `hotel_booking`.
   - Import the `database.sql` file from the project folder to set up the database tables and initial data.
3. **Configure Database Connection**:
   - Open `config/database.php` in the project.
   - Update the database credentials (username, password, etc.) as per your setup.
4. **Run the Project**:
   - Place the project folder in the `htdocs` directory of XAMPP.
   - Open your browser and go to `http://localhost/hotel-booking-system`.

---

## Usage

Once everything is set up, you can access the following features:

- **Home Page**: Landing page with a welcome message, room categories, and options to login or sign up.
- **Sign Up/Login**: Sign up for a new account or log in to access booking features.
- **Room Categories**: View available rooms across different categories and select one to view details.
- **Book Room**: Confirm booking and receive booking details on a confirmation page.
- **Print Receipt**: Print the booking details as a receipt for record-keeping.

---

## Contributing

Contributions are welcome! To contribute:

1. **Fork the Project**: Click on the "Fork" button on the top right of this repository.
2. **Clone the Forked Repository**:
   ```bash
   git clone https://github.com/bethwel3001/Hotel-book.git

3. git checkout -b feature/your-feature-name
4. git commit -m "Add your feature name"
5. git push origin feature/your-feature-name
6. Create a pull request to merge your feature into the main branch.
7. Follow the standard coding conventions and best practices.
8. Ensure that your code is well-documented and follows the existing coding style.
  ```

## Acknowledgments
- Special thanks to the developers of PHP and MySQL for providing a robust  backend solution.
- Shoutout to Font Awesome and Lottie Icons for icons and animations.
- Thanks to everyone who contributed to testing and debugging the project!

*Dev Bethwel Kiplagat*
********************************
*Leave a like!*
