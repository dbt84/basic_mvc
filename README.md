Test de applicatie

    Maak een database mvc_app en voeg een tabel users toe:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);

INSERT INTO users (name) VALUES ('Jan'), ('Piet'), ('Klaas');
