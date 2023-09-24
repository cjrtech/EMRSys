-- Create the database
CREATE DATABASE my_webapp_db;

-- Use the database
USE my_webapp_db;

-- Create the 'appointments' table
CREATE TABLE appointments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  date DATE NOT NULL,
  reason VARCHAR(100) NOT NULL,
  time TIME NOT NULL
);


-- Create the 'prescriptions' table
CREATE TABLE prescriptions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  medication VARCHAR(100) NOT NULL,
  dosage VARCHAR(20) NOT NULL,
  frequency VARCHAR(50) NOT NULL,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL
);


INSERT INTO appointments (name, date, reason, time)
VALUES
('John Doe', '2023-09-25', 'Routine Checkup', '10:00:00'),

INSERT INTO prescriptions (medication, dosage, frequency, start_date, end_date)
VALUES
('Aspirin', '500mg', 'Once a day', '2023-09-25', '2023-10-05'),
('Amoxicillin', '250mg', 'Twice a day', '2023-09-26', '2023-10-02'),
('Lipitor', '20mg', 'Once a day', '2023-09-27', '2023-10-15'),
('Ventolin', '100mcg', 'As needed', '2023-09-28', '2023-10-10'),
('Zyrtec', '10mg', 'Once a day', '2023-09-29', '2023-10-20');