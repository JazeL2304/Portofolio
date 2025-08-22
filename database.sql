-- database.sql - Script untuk membuat database
CREATE DATABASE portfolio_db;

USE portfolio_db;

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    demo_link VARCHAR(255),
    github_link VARCHAR(255),
    technologies VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample projects
INSERT INTO projects (title, description, image, demo_link, github_link, technologies) VALUES
('E-Commerce Website', 'Website toko online dengan fitur keranjang belanja dan pembayaran', 'project1.jpg', 'https://demo1.com', 'https://github.com/username/project1', 'PHP, MySQL, JavaScript, Bootstrap'),
('Task Management App', 'Aplikasi manajemen tugas dengan fitur drag and drop', 'project2.jpg', 'https://demo2.com', 'https://github.com/username/project2', 'PHP, jQuery, MySQL, CSS3'),
('Blog Website', 'Website blog dengan sistem admin dan komentar', 'project3.jpg', 'https://demo3.com', 'https://github.com/username/project3', 'PHP, MySQL, TinyMCE, Bootstrap');