CREATE TABLE pokemon (
    id SERIAL PRIMARY KEY,         
    nombre VARCHAR(50) NOT NULL,   
    especie VARCHAR(100), 
    altura DECIMAL(3,1),            
    peso DECIMAL(4,1),            
    descripcion TEXT   
	);