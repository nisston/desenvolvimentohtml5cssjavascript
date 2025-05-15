CREATE TABLE Clientes (
    ID INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    PRIMARY KEY (ID)
);


INSERT INTO Clientes (Nome, Email) VALUES
('Ana Souza', 'ana.souza@email.com'),
('Bruno Lima', 'bruno.lima@email.com'),
('Carlos Mendes', 'carlos.mendes@email.com'),
('Daniela Rocha', 'daniela.rocha@email.com'),
('Eduardo Silva', 'eduardo.silva@email.com');
