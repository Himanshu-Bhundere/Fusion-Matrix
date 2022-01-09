CREATE DATABASE fusion_matrix;
USE fusion_matrix;

CREATE TABLE staff_credentials(username varchar(255), password varchar(255), staff_type varchar(15));

CREATE TABLE rooms(room_no int, occupancy BIT, customer_name varchar(127), room_type varchar(31), price varchar(31));

CREATE TABLE invoices(invoice_id varchar(255), customer_id varchar(255), room_no int, room_type varchar(31), issue_date date, issue_time time, amount int, details TEXT);