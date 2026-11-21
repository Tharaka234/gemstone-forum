# 💎 Gemstone Forum — Gemology Learning & Marketplace

A PHP and MySQL web application developed for a **Web Development module**. Gemstone Forum brings together gemology learning resources, community discussions, gemstone listings, and market-related information in one website.

## ✨ Key Features

### 📚 Learn Gemology
- Browse gemstone types, including sapphires, ruby, diamond, pearl, and cat's eye.
- Explore guides to gemstone **identification, grading, and treatments**.
- Discover gemological instruments such as loupes, microscopes, refractometers, polariscopes, spectroscopes, and light sources.
- Access a recommended books section.

### 💬 Community Forum
- Browse forum discussions and threads.
- Create threads and post replies.
- Search gemstone-related content.

### 🛍️ Gemstone Marketplace
- View gemstone buy-and-sell listings.
- Submit gemstone advertisements with images and details.
- Add items to a shopping cart and manage cart selections.

### 📈 Market Information
- Explore gemstone market pages, price-tracking views, and charts.
- Participate in gemstone polls.
- Browse news and events.

### 👤 Accounts & Administration
- Registration and login pages.
- Account and address management pages.
- Administrative dashboard and analytics pages.
- Administrative interfaces for marketplace and website content management.

> **Note:** These features are represented in the project source. Availability and behavior depend on the database schema, server configuration, and user permissions.

## 🛠️ Tech Stack

| Layer | Technologies |
| --- | --- |
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Database | MySQL |
| Database access | MySQLi |
| Local server | Apache via XAMPP |
| Development tools | Visual Studio Code, MySQL Workbench |

## 🚀 Run Locally

### Prerequisites
- XAMPP with Apache and PHP
- A running MySQL server (managed through MySQL Workbench or XAMPP)
- Visual Studio Code or another code editor
- A browser

### 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/gemstone-forum.git
```

Move the cloned project folder into your Apache document root, for example:

```text
C:\xampp\htdocs\gemstone-forum
```

### 2. Configure the database

The source currently references a MySQL database named `edu_forum`.

1. Start your MySQL server and open MySQL Workbench.
2. Ensure the `edu_forum` database and its required tables exist.
3. Configure the database host, username, password, and database name in the PHP connection files (`config.php`, `db.php`, and `db_connection.php`, as applicable).
4. Keep credentials private; do not commit real database passwords to GitHub.

**Database setup note:** A SQL schema or dump is not included in the supplied project ZIP. To run the application on a fresh machine, you will need to export the appropriate schema from your existing MySQL database and import it into the target server.

### 3. Start Apache

Open the XAMPP Control Panel and start **Apache**. Start **MySQL** there only if that is the MySQL server you intend to use; otherwise ensure your existing MySQL server is running.

### 4. Open the application

Visit:

```text
http://localhost/gemstone-forum/home.php
```

The URL must match the actual folder name under `htdocs`.

## 📁 Project Structure

```text
gemstone-forum/
├── home.php                 # Home page
├── index.php                # Entry/login page
├── register.php             # User registration
├── forum.php                # Community forum
├── thread.php               # Thread view
├── create_thread.php        # Create a discussion
├── reply.php                # Thread replies
├── gemstone_types.php       # Gemstone catalog / information
├── learn_gemology.php       # Learning resources
├── grading.php              # Gemstone grading
├── treatments.php           # Gemstone treatments
├── identification.php       # Identification resources
├── tools.php                # Gemological tools
├── buy_sell.php             # Marketplace
├── upload_ad.php            # Advertisement submission
├── cart.php                 # Shopping cart
├── gem_market.php           # Gem market page
├── gem-price-tracker.php    # Price tracker
├── news_events.php          # News and events
├── admin_dashboard.php      # Admin dashboard
├── admin_analytics.php      # Admin analytics
├── config.php               # Database configuration (sanitize before publishing)
├── db.php                   # Database connection
├── db_connection.php        # Database connection
└── images/                  # Website image assets
```

## 📸 Screenshots

Add screenshots of your running application here, for example:
- Home page
- Gemstone learning pages
- Community forum
- Marketplace
- Market trends and admin dashboard

## 🔮 Possible Future Improvements

- Responsive design and accessibility refinements.
- Stronger authentication, authorization, and input validation.
- More advanced gemstone search and filtering.
- Improved listing moderation and marketplace workflows.
- Live market-data integration where reliable sources are available.
- Automated tests and a reproducible database migration/setup process.

## 🎓 Project Context

Developed as an academic **Web Development module project**, demonstrating server-side PHP programming, MySQL database integration, dynamic web pages, and community/marketplace functionality.

## 📄 License

No license is specified in the supplied source. Add a `LICENSE` file if you want to grant others permission to reuse or modify the code.
