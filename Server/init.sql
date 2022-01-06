CREATE DATABASE fusion_matrix;
USE fusion_matrix;
CREATE TABLE user_info(username varchar(255), password varchar(255), staff_type varchar(15));

CREATE TABLE rooms(room_no int(10), occupancy BIT, customer_name varchar(150), room_type varchar(32), price varchar(32));
