create table patient_info(
    id_patient SERIAL not null primary key,
    password VARCHAR(120) not null,
    name VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    phone_number VARCHAR(30),
    email VARCHAR(100),
    status VARCHAR(1),
    birthdate DATE NOT NULL,
    home_address VARCHAR(100),
    gender VARCHAR(1) NOT NULL,
    nacionality VARCHAR(100) NOT NULL,
    civil_status VARCHAR(50),
    occupation TEXT,
    admission_date DATE
);

create table medic_info(
    id_medic SERIAL not null primary key,
    password VARCHAR(120) not null,
    name VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    phone_number VARCHAR(30),
    email VARCHAR(100),
    status VARCHAR(1),
    birthdate DATE NOT NULL,
    home_address VARCHAR(100),
    gender VARCHAR(1) NOT NULL,
    nacionality VARCHAR(100) NOT NULL,
    civil_status VARCHAR(50),
    occupation TEXT,
    admission_date DATE
);

CREATE TABLE department (
    id_department SERIAL NOT NULL PRIMARY KEY,
    description TEXT NOT NULL
);


CREATE TABLE floors (
    id_floor SERIAL NOT NULL PRIMARY KEY,
    description VARCHAR(200) NOT NULL,
    floor_number int not null
);

CREATE TABLE specialities (
    id_speciality SERIAL NOT NULL PRIMARY KEY,
    description VARCHAR(300) NOT NULL,
    status VARCHAR(1)
);

CREATE TABLE doctors (
    id_doctor SERIAL NOT NULL PRIMARY KEY,
    doctor_password VARCHAR(200),
    doctor_name VARCHAR(50) NOT NULL,
    doctor_lastname VARCHAR(50) NOT NULL,
    doctor_email VARCHAR(200),
    birthdate DATE NOT NULL,
    nacionality VARCHAR(100),
    status VARCHAR(1),
    admission_date DATE NOT NULL,
    id_speciality INT NOT NULL REFERENCES specialities(id_speciality),
    id_department INT NOT NULL REFERENCES department(id_department)
);

CREATE TABLE role (
    id_role VARCHAR(50) NOT NULL PRIMARY KEY,
    description TEXT,
    status VARCHAR(1)
);

CREATE TABLE appointments (
    id_appointment SERIAL NOT NULL PRIMARY KEY,
    ap_date DATE NOT NULL,
    ap_time TIME NOT NULL,
    comment TEXT,
    id_patient INT NOT NULL REFERENCES patient_info(id_patient),
    id_doctor INT NOT NULL REFERENCES doctors(id_doctor),
    id_floor INT NOT NULL REFERENCES floors(id_floor),
    id_department INT NOT NULL REFERENCES department(id_department)
 INT NOT NULL REFERENCES patient_info(id_patient),
);  

INSERT INTO floors (description, floor_number) VALUES ('Primary Care',1);
INSERT INTO floors (description, floor_number) VALUES ('Secondary Care',2);
INSERT INTO floors (description, floor_number) VALUES ('Tertiary Care',3);
INSERT INTO floors (description, floor_number) VALUES ('Quaternary Care',4);

ALTER TABLE department
ADD id_floor INT REFERENCES floors(id_floor);

INSERT INTO department (description) VALUES ('Anesthesiology');
INSERT INTO department (description) VALUES ('Cardiovascular and Thoracic Surgery');
INSERT INTO department (description) VALUES ('Emergency Medicine');
INSERT INTO department (description) VALUES ('Family and Geriatric Medicine');
INSERT INTO department (description) VALUES ('Medicine');
INSERT INTO department (description) VALUES ('Neurology');
INSERT INTO department (description) VALUES ('Neurosurgery');
INSERT INTO department (description) VALUES ('Obstetrics');
INSERT INTO department (description) VALUES ('Gynecology & Women''s Health');
INSERT INTO department (description) VALUES ('Ophthalmology & Visual Sciences');
INSERT INTO department (description) VALUES ('Orthopedics');
INSERT INTO department (description) VALUES ('Otolaryngology Head & Neck Surgery and Communicative Disorders');
INSERT INTO department (description) VALUES ('Pathology and Laboratory Medicine');
INSERT INTO department (description) VALUES ('Pediatrics');
INSERT INTO department (description) VALUES ('Psychiatry and Behavioral Sciences');
INSERT INTO department (description) VALUES ('Radiation Oncology');
INSERT INTO department (description) VALUES ('Radiology');
INSERT INTO department (description) VALUES ('Surgery');
INSERT INTO department (description) VALUES ('Urology');
INSERT INTO department (description) VALUES ('Dermatology');
INSERT INTO department (description) VALUES ('Dentistry');
INSERT INTO department (description) VALUES ('Physical therapy');

