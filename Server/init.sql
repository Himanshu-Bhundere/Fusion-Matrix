CREATE DATABASE fusion_matrix;
USE fusion_matrix;

CREATE TABLE customer_details(customer_id varchar(35), firstname varchar(127), lastname varchar(127), age int, no_of_guests int, room_type varchar(15), gender varchar(15), date_of_birth date, phone_no int, email_id varchar(127), aadhar_no varchar(15), aadhar_file BLOB, address varchar(100), check_in date, check_out date, special_requirements varchar(255));

CREATE TABLE staff_details(staff_id varchar(35), s_profile_img MEDIUMBLOB NOT NULL, staff_type varchar(15), s_firstname varchar(127), s_lastname varchar(127), s_age int, s_gender varchar(15), s_date_of_birth date, s_phone_no int, s_email_id varchar(127), s_aadhar_no varchar(15), s_address varchar(100), username varchar(127));

CREATE TABLE staff_credentials(staff_id varchar(35), username varchar(255), password varchar(255));

CREATE TABLE rooms(room_no int, customer_id varchar(255), occupancy BIT, room_type varchar(31));

CREATE TABLE invoices(invoice_id varchar(255), customer_id varchar(255), room_no int, room_type varchar(31), issue_date date, issue_time time, amount int, days int, details TEXT);

CREATE TABLE catalogue(room_type varchar(31), price varchar(31));