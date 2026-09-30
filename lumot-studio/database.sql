-- Lumot Studio database
-- Import sa phpMyAdmin (Import tab)

CREATE DATABASE IF NOT EXISTS lumot_studio;
USE lumot_studio;

CREATE TABLE IF NOT EXISTS contact_messages (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(100) NOT NULL,
  email      VARCHAR(150) NOT NULL,
  subject    VARCHAR(150) NOT NULL,
  message    TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Para makita ang laman:
-- SELECT * FROM contact_messages;
