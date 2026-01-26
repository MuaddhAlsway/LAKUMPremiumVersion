# 🎨 LAKUM Artspace - Event Management & Cultural Platform

> A modern, fully-responsive event management system and cultural platform for exhibitions, workshops, and seminars in Riyadh, Saudi Arabia.

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-purple.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange.svg)
![Responsive](https://img.shields.io/badge/responsive-mobile%20first-brightgreen.svg)

---

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [Technologies](#technologies)
- [Installation & Setup](#installation--setup)
- [Database Schema](#database-schema)
- [Admin Panel](#admin-panel)
- [API Documentation](#api-documentation)
- [Responsive Design](#responsive-design)
- [File Organization](#file-organization)
- [Configuration](#configuration)
- [Security](#security)
- [Usage Guide](#usage-guide)
- [Troubleshooting](#troubleshooting)
- [Future Enhancements](#future-enhancements)

---

## 🎯 Overview

**LAKUM Artspace** is a comprehensive event management and cultural platform designed to showcase exhibitions, workshops, seminars, and venue rental services. Built with a mobile-first responsive design, it provides both a public-facing website and a powerful admin dashboard for event management.

### Key Highlights
- ✅ Complete event management system (CRUD operations)
- ✅ Responsive design supporting all devices (375px - 2560px+)
- ✅ Admin authentication with secure password hashing
- ✅ RESTful API for dynamic event loading
- ✅ Image gallery management with drag-and-drop
- ✅ Video integration (YouTube/Vimeo)
- ✅ Event calendar with monthly filtering
- ✅ Venue booking and pricing display
- ✅ Client showcase with infinite scrolling

---

## ✨ Features

### 🌐 Frontend Features

| Feature | Description |
|---------|-------------|
| **Responsive Navigation** | Hamburger menu for mobile, desktop menu for larger screens |
| **Event Display** | Dynamic event cards with images, titles, and details |
| **Event Details Page** | Full event information with gallery slider and video player |
| **Event Calendar** | Monthly calendar view with event filtering |
| **Image Galleries** | Responsive grids with drag-and-drop sliders |
| **Venue Information** | Hall pricing, floor maps, and booking forms |
| **Client Showcase** | Infinite scrolling logo carousel |
| **Video Embedding** | YouTube and Vimeo video support |
| **About Section** | Company information with statistics |
| **Shop Page** | Product/service listing |

### 🔐 Admin Panel Features

| Feature | Description |
|---------|-------------|
| **Secure Login** | Username/password authentication with bcrypt hashing |
| **Dashboard** | Statistics cards (total, upcoming, past events) |
| **Event Management** | Create, read, update, delete events |
| **Image Management** | Upload cover images and gallery images |
| **Form Validation** | Client-side and server-side validation |
| **Image Preview** | Real-time preview of cover images |
| **Drag-and-Drop** | Easy gallery image upload |
| **Video Support** | YouTube/Vimeo link validation |
| **Confirmation Dialogs** | Safe deletion with confirmation popups |
| **Session Management** | Secure session handling |

---

## 📁 Project Structure

```
LAKUM/
│
├── 📂 admin/                          # Admin panel files
│   ├── login.php                      # Admin authentication
│   ├── dashboard.php                  # Admin dashboard with statistics
│   ├── events.php                     # Event management list
│   ├── add_event.php                  # Create new events
│   ├── edit_event.php                 # Edit existing events
│   ├── logout.php                     # Session termination
│   ├── auth_check.php                 # Authentication middleware
│   ├── admin-style.css                # Admin panel styling
│   ├── event-form-style.css           # Event form styling
│   └── event-form.js                  # Event form functionality
│
├── 📂 api/                            # REST API endpoints
│   ├── get_events.php                 # Fetch events with filtering
│   └── get_event.php                  # Fetch single event details
│
├── 📂 config/                         # Configuration files
│   ├── database.php                   # Database connection & session
│   └── setup.php                      # Setup utilities
│
├── 📂 uploads/                        # User-uploaded files
│   ├── covers/                        # Event cover images
│   └── events/                        # Event gallery images
│
├── 📂 assest/                         # Static assets
│   ├── logo-lakum-(1).png             # Main logo
│   ├── img-*.jpg/png/HEIC             # Background images
│   └── currency.png                   # SAR currency icon
│
├── 📂 atyp-font-family/               # Custom fonts
├── 📂 Logo/                           # Client logos
├── 📂 About Us/                       # About page images
├── 📂 HADAF Company/                  # Venue photos
├── 📂 saudi arabia/                   # Regional assets
├── 📂 Events & Workshops/             # Event assets
├── 📂 Exhibitions/                    # Exhibition assets
├── 📂 Venue Hire/                     # Venue information
├── 📂 Video/                          # Video assets
│
├── 📄 Main Pages (Root)
│   ├── index.php                      # Home page
│   ├── HomeLukum.php                  # Exhibitions page
│   ├── AboutUs.php                    # About us page
│   ├── Space.php                      # Venue spaces & booking
│   ├── Calender.php                   # Event calendar
│   ├── event-detail.php               # Event details page
│   ├── Shop.php                       # Shop page
│   ├── exhibitions.php                # Exhibitions listing
│   └── update_database.php            # Database migration utility
│
├── 🎨 Styling & Scripts
│   ├── Home.css                       # Main stylesheet (cleaned & organized)
│   ├── Calender.css                   # Calendar styling
│   ├── Home.js                        # Main JavaScript
│   ├── main.js                        # Additional scripts
│   └── responsive-utilities.css       # Responsive utilities
│
├── 📊 Database & Documentation
│   ├── database.sql                   # Complete database schema
│   ├── INSTRUCTIONS.txt               # Setup guide
│   └── README.md                      # This file
│
└── 🔧 Configuration
    └── .htaccess                      # Apache configuration
```

---

## 🛠 Technologies

### Backend
- **PHP 7.4+** - Server-side scripting language
- **MySQL/MariaDB 5.7+** - Relational database management
- **bcrypt** - Password hashing algorithm

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Responsive styling with mobile-first approach
- **JavaScript (Vanilla)** - DOM manipulation and interactivity
- **Fetch API** - Asynchronous HTTP requests

### Libraries & CDN
- **Remix Icon** - Icon library (CDN)
- **Font Awesome** - Additional icons
- **Atyp Kido TRIAL** - Custom typography font

### Development Tools
- **Git** - Version control
- **Apache/Nginx** - Web server
- **phpMyAdmin** - Database management (optional)

---

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache or Nginx web server
- Composer (optional, for dependency management)

### Step 1: Clone or Download Project
```bash
# Clone the repository
git clone https://github.com/yourusername/lakum-artspace.git
cd lakum-artspace

# Or download and extract the ZIP file
```

### Step 2: Create Database
```bash
# Open phpMyAdmin or MySQL command line
# Import the database schema
mysql -u root -p < database.sql

# Or manually:
# 1. Create database: CREATE DATABASE lakum;
# 2. Import database.sql through phpMyAdmin
```

### Step 3: Configure Database Connection
Edit `config/database.php`:
```php
define('DB_HOST', 'localhost');    // Your database host
define('DB_USER', 'root');         // Your database user
define('DB_PASS', '');             // Your database password
define('DB_NAME', 'lakum');        // Your database name
```

### Step 4: Set File Permissions
```bash
# Create upload directories if they don't exist
mkdir -p uploads/covers
mkdir -p uploads/events

# Set proper permissions (Linux/Mac)
chmod 755 uploads/
chmod 755 uploads/covers/
chmod 755 uploads/events/
```

### Step 5: Start Web Server
```bash
# Using PHP built-in server (development only)
php -S localhost:8000

# Or use Apache/Nginx (production)
# Configure your web server to point to the project root
```

### Step 6: Access the Application
- **Frontend:** `http://localhost:8000`
- **Admin Panel:** `http://localhost:8000/admin/login.php`

### Step 7: Login to Admin Panel
**Default Credentials:**
- Username: `admin`
- Password: `admin123`

⚠️ **IMPORTANT:** Change the default password immediately after first login!

---

## 📊 Database Schema

### Tables Overview

#### **admin** Table
Stores administrator credentials for authentication.

```sql
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

| Column | Type | Description |
|--------|------|-------------|
| `id` | INT | Primary key, auto-increment |
| `username` | VARCHAR(50) | Unique username |
| `password` | VARCHAR(255) | Bcrypt hashed password |
| `created_at` | TIMESTAMP | Account creation timestamp |

#### **events** Table
Stores all event information.

```sql
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    event_time VARCHAR(50),
    end_date DATE,
    end_time VARCHAR(50),
    location VARCHAR(255),
    video_link VARCHAR(500),
    cover_image VARCHAR(255),
    status ENUM('upcoming', 'past') DEFAULT 'upcoming',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_event_date (event_date),
    INDEX idx_status (status),
    INDEX idx_created_at (created_at)
);
```

| Column | Type | Description |
|--------|------|-------------|
| `id` | INT | Primary key, auto-increment |
| `title` | VARCHAR(255) | Event title |
| `description` | TEXT | Event description |
| `event_date` | DATE | Event start date |
| `event_time` | VARCHAR(50) | Event start time (HH:MM format) |
| `end_date` | DATE | Event end date |
| `end_time` | VARCHAR(50) | Event end time (HH:MM format) |
| `location` | VARCHAR(255) | Event location/venue |
| `video_link` | VARCHAR(500) | YouTube/Vimeo video URL |
| `cover_image` | VARCHAR(255) | Path to cover image |
| `status` | ENUM | 'upcoming' or 'past' (auto-determined) |
| `created_at` | TIMESTAMP | Event creation timestamp |
| `updated_at` | TIMESTAMP | Last update timestamp |

#### **event_images** Table
Stores gallery images for each event.

```sql
CREATE TABLE event_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE,
    INDEX idx_event_id (event_id)
);
```

| Column | Type | Description |
|--------|------|-------------|
| `id` | INT | Primary key, auto-increment |
| `event_id` | INT | Foreign key to events table |
| `image_path` | VARCHAR(255) | Path to gallery image |
| `created_at` | TIMESTAMP | Image upload timestamp |

---

## 🔐 Admin Panel

### Login Page (`admin/login.php`)
- Secure username/password authentication
- Bcrypt password hashing
- Session-based authentication
- Error messages for invalid credentials

### Dashboard (`admin/dashboard.php`)
Displays key statistics and recent events:
- **Total Events** - Count of all events
- **Upcoming Events** - Events with date >= today
- **Past Events** - Events with date < today
- **Recent Events Table** - Last 5 created events

### Event Management (`admin/events.php`)
- List all events in a table format
- Edit button for each event
- Delete button with confirmation popup
- Status badge (Upcoming/Past)
- Quick access to add new event

### Add Event (`admin/add_event.php`)
Create new events with:
- Event title and description
- Start and end dates/times
- Location/venue
- Cover image upload with preview
- Gallery image upload (drag-and-drop)
- Video link (YouTube/Vimeo)
- Form validation
- Success/error notifications

### Edit Event (`admin/edit_event.php`)
Update existing events:
- Modify all event fields
- Replace cover image
- Add/remove gallery images
- Delete individual gallery images
- View existing gallery
- Form validation
- Success/error notifications

### Authentication Middleware (`admin/auth_check.php`)
- Checks if user is logged in
- Redirects to login if not authenticated
- Protects all admin pages

### Logout (`admin/logout.php`)
- Destroys session
- Clears session variables
- Redirects to login page

---

## 🔌 API Documentation

### Base URL
```
http://localhost:8000/api/
```

### Endpoint 1: Get Events

**URL:** `/api/get_events.php`

**Method:** `GET`

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `type` | string | No | Filter type: `all`, `upcoming`, `past`, `latest`, `closest` (default: `all`) |
| `limit` | integer | No | Maximum number of events to return |

**Example Requests:**
```bash
# Get all events
GET /api/get_events.php

# Get upcoming events only
GET /api/get_events.php?type=upcoming

# Get latest 5 events
GET /api/get_events.php?type=latest&limit=5

# Get closest upcoming event
GET /api/get_events.php?type=closest&limit=1
```

**Response (Success - 200):**
```json
[
  {
    "id": 1,
    "title": "Contemporary Art Exhibition",
    "description": "A showcase of modern contemporary art...",
    "event_date": "2025-11-15",
    "event_time": "17:00",
    "end_date": "2025-11-15",
    "end_time": "22:00",
    "location": "LAKUM Hall 1",
    "video_link": "https://youtube.com/watch?v=...",
    "cover_image": "uploads/covers/event_1.jpg",
    "status": "upcoming",
    "gallery_images": [
      "uploads/events/event_1_img1.jpg",
      "uploads/events/event_1_img2.jpg"
    ],
    "month": "November",
    "month_short": "Nov",
    "day": "15",
    "year": "2025",
    "is_upcoming": true
  }
]
```

### Endpoint 2: Get Single Event

**URL:** `/api/get_event.php`

**Method:** `GET`

**Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `id` | integer | Yes | Event ID |

**Example Request:**
```bash
GET /api/get_event.php?id=1
```

**Response (Success - 200):**
```json
{
  "id": 1,
  "title": "Contemporary Art Exhibition",
  "description": "A showcase of modern contemporary art...",
  "event_date": "2025-11-15",
  "event_time": "17:00",
  "end_date": "2025-11-15",
  "end_time": "22:00",
  "location": "LAKUM Hall 1",
  "video_link": "https://youtube.com/watch?v=...",
  "cover_image": "uploads/covers/event_1.jpg",
  "status": "upcoming",
  "gallery_images": [
    "uploads/events/event_1_img1.jpg",
    "uploads/events/event_1_img2.jpg"
  ],
  "month": "November",
  "month_short": "Nov",
  "day": "15",
  "year": "2025",
  "is_upcoming": true
}
```

**Response (Error - 404):**
```json
{
  "error": "Event not found"
}
```

### Using the API with JavaScript

```javascript
// Fetch upcoming events
fetch('/api/get_events.php?type=upcoming&limit=5')
  .then(response => response.json())
  .then(events => {
    console.log('Upcoming events:', events);
    // Process events...
  })
  .catch(error => console.error('Error:', error));

// Fetch single event
fetch('/api/get_event.php?id=1')
  .then(response => response.json())
  .then(event => {
    console.log('Event details:', event);
    // Display event...
  })
  .catch(error => console.error('Error:', error));
```

---

## 📱 Responsive Design

### Breakpoints

The project uses a mobile-first responsive design with the following breakpoints:

| Breakpoint | Device Type | Width |
|-----------|------------|-------|
| **Mobile Extra Small** | iPhone SE, small phones | 375px - 414px |
| **Mobile Small** | iPhone, Android | 430px - 540px |
| **Mobile Medium** | Larger phones | 540px - 768px |
| **Tablet Portrait** | iPad, tablets | 768px - 820px |
| **Tablet Landscape** | Tablets landscape | 820px - 1024px |
| **Laptop** | Small laptops | 1024px - 1366px |
| **Desktop** | Standard desktop | 1366px - 1675px |
| **Large Desktop** | Large monitors | 1675px - 2560px |
| **Ultra-Wide** | 4K displays | 2560px+ |

### Mobile-First Approach

All styles are written for mobile first, then enhanced for larger screens:

```css
/* Mobile styles (default) */
.element {
  font-size: 16px;
  padding: 10px;
}

/* Tablet and up */
@media (min-width: 768px) {
  .element {
    font-size: 18px;
    padding: 15px;
  }
}

/* Desktop and up */
@media (min-width: 1024px) {
  .element {
    font-size: 20px;
    padding: 20px;
  }
}
```

### Responsive Features

- ✅ Hamburger menu on mobile (≤1024px)
- ✅ Flexible grid layouts
- ✅ Responsive images with max-width
- ✅ Touch-friendly buttons and links
- ✅ Readable font sizes on all devices
- ✅ Proper spacing and padding
- ✅ Optimized navigation
- ✅ Flexible containers

---

## 📄 File Organization

### CSS Files

| File | Purpose | Size |
|------|---------|------|
| **Home.css** | Main stylesheet with all responsive styles | ~6000+ lines |
| **Calender.css** | Calendar-specific styling | ~500 lines |
| **admin-style.css** | Admin panel styling | ~1000 lines |
| **event-form-style.css** | Event form styling | ~800 lines |
| **responsive-utilities.css** | Responsive utility classes | ~200 lines |

### JavaScript Files

| File | Purpose |
|------|---------|
| **Home.js** | Main JavaScript for frontend functionality |
| **main.js** | Additional scripts and utilities |
| **event-form.js** | Event form validation and handling |

### PHP Files

| File | Purpose |
|------|---------|
| **index.php** | Home page with recent exhibitions |
| **HomeLukum.php** | Exhibitions page |
| **AboutUs.php** | About page with statistics |
| **Space.php** | Venue information and booking |
| **Calender.php** | Event calendar |
| **event-detail.php** | Single event details |
| **Shop.php** | Shop/products page |
| **exhibitions.php** | Exhibitions listing |

---

## ⚙️ Configuration

### Database Configuration (`config/database.php`)

```php
// Database credentials
define('DB_HOST', 'localhost');    // Database host
define('DB_USER', 'root');         // Database username
define('DB_PASS', '');             // Database password
define('DB_NAME', 'lakum');        // Database name

// Connection function
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
    return $conn;
}
```

### Upload Directories

```
uploads/
├── covers/          # Event cover images (max 5MB)
└── events/          # Event gallery images (max 5MB each)
```

### Session Configuration

Sessions are automatically started in `config/database.php`:
```php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
```

### Apache Configuration (`.htaccess`)

```apache
# Enable mod_rewrite
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    
    # Redirect to index.php
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
</IfModule>
```

---

## 🔒 Security

### Password Security
- **Algorithm:** bcrypt (PHP's password_hash/password_verify)
- **Cost Factor:** 12 (default)
- **Hashing Example:**
  ```php
  $hashed = password_hash('admin123', PASSWORD_BCRYPT);
  if (password_verify('admin123', $hashed)) {
      // Password is correct
  }
  ```

### SQL Injection Prevention
- **Prepared Statements:** All queries use prepared statements
- **Example:**
  ```php
  $stmt = $conn->prepare("SELECT * FROM events WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  ```

### Session Security
- **Session Management:** PHP sessions with secure cookies
- **Authentication Check:** All admin pages check session before access
- **Logout:** Session destroyed on logout

### Input Validation
- **Client-side:** JavaScript validation on forms
- **Server-side:** PHP validation before database operations
- **File Upload:** Validation of file types and sizes

### Best Practices
- ✅ Never store plain text passwords
- ✅ Use HTTPS in production
- ✅ Validate all user inputs
- ✅ Use prepared statements for all queries
- ✅ Implement CSRF tokens for forms
- ✅ Set proper file permissions (755 for directories, 644 for files)
- ✅ Keep PHP and MySQL updated
- ✅ Use environment variables for sensitive data

---

## 📖 Usage Guide

### For End Users

#### Viewing Events
1. Go to home page (`index.php`)
2. Browse upcoming events
3. Click on event card to view details
4. View event gallery and video
5. Check event date, time, and location

#### Viewing Calendar
1. Navigate to Calendar page (`Calender.php`)
2. Select month from sidebar
3. View events for selected month
4. Click event to view details

#### Booking Venue
1. Go to Space page (`Space.php`)
2. View available halls and pricing
3. Fill booking form
4. Submit booking request

### For Administrators

#### Login
1. Go to `http://localhost:8000/admin/login.php`
2. Enter username: `admin`
3. Enter password: `admin123`
4. Click Login

#### Create Event
1. Click "Add Event" button
2. Fill event details:
   - Title
   - Description
   - Start date and time
   - End date and time
   - Location
   - Cover image (upload or drag-drop)
   - Gallery images (drag-drop multiple)
   - Video link (optional)
3. Click "Create Event"
4. Confirm success message

#### Edit Event
1. Go to Events list
2. Click "Edit" button on event
3. Modify event details
4. Update cover image if needed
5. Add/remove gallery images
6. Click "Update Event"
7. Confirm success message

#### Delete Event
1. Go to Events list
2. Click "Delete" button on event
3. Confirm deletion in popup
4. Event and associated images deleted

#### Change Password
1. Go to admin dashboard
2. Click "Change Password"
3. Enter current password
4. Enter new password
5. Confirm new password
6. Click "Update Password"

#### Logout
1. Click "Logout" button
2. Session destroyed
3. Redirected to login page

---

## 🐛 Troubleshooting

### Common Issues & Solutions

#### Issue: "Connection failed: Connection refused"
**Solution:**
- Check if MySQL server is running
- Verify database credentials in `config/database.php`
- Ensure database name is correct

#### Issue: "404 Not Found" on admin pages
**Solution:**
- Check if `.htaccess` is enabled
- Verify Apache mod_rewrite is enabled
- Check file permissions

#### Issue: Images not uploading
**Solution:**
- Check if `uploads/` directory exists
- Verify directory permissions (755)
- Check file size limits in php.ini
- Verify file type is allowed (JPG, PNG, HEIC)

#### Issue: Session not persisting
**Solution:**
- Check if PHP sessions are enabled
- Verify session.save_path is writable
- Check browser cookie settings
- Clear browser cache and cookies

#### Issue: "Access Denied" on admin login
**Solution:**
- Verify username and password
- Check if admin user exists in database
- Verify password hash is correct
- Check database connection

#### Issue: Videos not playing
**Solution:**
- Verify YouTube/Vimeo link is valid
- Check if video is public (not private)
- Ensure video link format is correct
- Check browser security settings

#### Issue: CSS not loading
**Solution:**
- Check if Home.css file exists
- Verify CSS file path is correct
- Clear browser cache
- Check browser console for errors

#### Issue: JavaScript errors in console
**Solution:**
- Check browser console for specific errors
- Verify JavaScript files are loaded
- Check for syntax errors in JS files
- Clear browser cache

---

## 🚀 Future Enhancements

### Planned Features

- [ ] **User Registration** - Allow users to create accounts
- [ ] **Event Ticketing** - Sell tickets for events
- [ ] **Payment Integration** - Stripe, PayPal, Apple Pay
- [ ] **Email Notifications** - Send event reminders and updates
- [ ] **Social Media Integration** - Share events on social media
- [ ] **Advanced Search** - Filter events by category, date, location
- [ ] **Event Categories** - Organize events by type
- [ ] **User Reviews** - Allow users to review events
- [ ] **Analytics Dashboard** - Track event attendance and engagement
- [ ] **Multi-language Support** - Arabic, English, etc.
- [ ] **Dark Mode** - Dark theme option
- [ ] **Progressive Web App** - Offline support and app-like experience
- [ ] **Mobile App** - Native iOS and Android apps
- [ ] **Booking System** - Automated venue booking
- [ ] **Email Marketing** - Newsletter and promotional emails

### Performance Optimizations

- [ ] Image optimization and lazy loading
- [ ] Database query optimization
- [ ] Caching strategies (Redis, Memcached)
- [ ] CDN integration for static assets
- [ ] Minification of CSS and JavaScript
- [ ] Gzip compression
- [ ] Database indexing improvements

### Security Enhancements

- [ ] Two-factor authentication (2FA)
- [ ] CSRF token implementation
- [ ] Rate limiting
- [ ] DDoS protection
- [ ] SSL/TLS certificate
- [ ] Security headers (CSP, X-Frame-Options, etc.)
- [ ] Regular security audits
- [ ] Penetration testing

---

## 📞 Support & Contact

For issues, questions, or suggestions:

- **Email:** support@lakum.com
- **Phone:** +966 (0) 11 XXXX XXXX
- **Website:** https://www.lakum.com
- **Address:** Riyadh, Saudi Arabia

---

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

---

## 👥 Contributors

- **Project Lead:** LAKUM Team
- **Development:** Full Stack Development Team
- **Design:** UI/UX Design Team

---

## 🙏 Acknowledgments

- Remix Icon for icon library
- Font Awesome for additional icons
- Atyp Kido TRIAL for custom typography
- All contributors and supporters

---

## 📝 Changelog

### Version 1.0.0 (Current)
- ✅ Initial release
- ✅ Complete event management system
- ✅ Admin panel with authentication
- ✅ Responsive design (mobile-first)
- ✅ RESTful API
- ✅ Image gallery management
- ✅ Video integration
- ✅ Event calendar
- ✅ Venue information
- ✅ Client showcase

---

## 🎓 Documentation

For detailed documentation on specific features:

- [Admin Panel Guide](docs/admin-guide.md)
- [API Reference](docs/api-reference.md)
- [Database Schema](docs/database-schema.md)
- [Deployment Guide](docs/deployment.md)
- [Troubleshooting Guide](docs/troubleshooting.md)

---

**Last Updated:** January 26, 2025

**Status:** ✅ Production Ready

---

<div align="center">

### Made with Muaddh AL-Sway❤️ by LAKUM Artspace Team

[⬆ Back to Top](#-lakum-artspace---event-management--cultural-platform)

</div>
