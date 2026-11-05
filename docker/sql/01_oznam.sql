CREATE TABLE IF NOT EXISTS `announcements` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

INSERT INTO announcements (title, text)
VALUES (
           'Zmena ordinačných hodín',
           'V piatok bude ambulancia zatvorená.'
       );