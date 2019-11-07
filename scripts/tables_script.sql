create table listing_status(listing_id varchar(20)not null primary key,listed int(1)not null);
create table city(city_id varchar(20) primary key not null, city_name varchar(45),province_id varchar(20));
create table house_type(house_id varchar(20) primary key not null, house_type varchar(30));
create table house_info(house_id varchar (20)primary key not null,house_price DECIMAL(18,2), amount_bedrooms int(1), amount_bathrooms int(1),basement int(1),addict int (1));
create table house_place(house_id varchar(20)primary key not null,city_id varchar(20),province_id varchar(20));
CREATE TABLE province(province_id varchar(20)primary key not null, province_short_form char(2), province_name varchar(30));

insert into province(province_id,province_short_form,province_name) VALUES ('1','ON','Ontario');