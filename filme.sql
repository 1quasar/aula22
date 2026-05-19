-- Criacão do Banco de Dados
CREATE DATABASE cine_senaithech;
USE cine_senaithech;

-- Criação da Tabela
CREATE TABLE filmes (
	id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    
    -- Insersão de Dados de Teste
    INSERT INTO filmes (titulo, genero, ano) VALUES
    ('Matrix', 'Ficção Científica', 1999),
    ('Senhor dos Anéis: A Sociedade do Anel', 'Fantasia', 2001),
    ('Batman: O Cavaleiro das Trevas', 'Ação', 2008);

SELECT * FROM filmes;