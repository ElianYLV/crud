CREATE TABLE pokemon (
    num_pokedex SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    especie VARCHAR(100),
    altura VARCHAR(10),
    peso VARCHAR(10),
    descripcion TEXT
);

	INSERT INTO pokemon (nombre, especie, altura, peso, descripcion) VALUES
('Sprigatito', 'Pokémon Gato Planta', '0.4 m', '4.1 kg', 'Su pelaje verde libera un aroma dulce que calma a quienes lo huelen. Le encanta ser el centro de atención.');