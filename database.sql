CREATE TABLE users (
  id INT AUTO_INCREMENT,
  username VARCHAR(50),
  password VARCHAR(256),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
);