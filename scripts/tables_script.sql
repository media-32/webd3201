drop table if EXISTS City;
drop TABLE if EXISTS Province; 
drop TABLE if EXISTS Salutations;
drop TABLE if EXISTS Bathrooms;
drop TABLE if EXISTS Bedrooms;
drop TABLE if EXISTS Garage;
drop TABLE if EXISTS Kitchen;
drop table if EXISTS Coldroom;
drop TABLE if EXISTS Gas_Heating;
drop table if EXISTS Electric_Heating;
drop table if exists Second_Floor;
drop TABLE if exists Listings;
DROP TABLE  if EXISTS Listing_Status;


CREATE TABLE Province
(
    province_id varchar(20) primary key not null,
    province_short_form char(2),
    province_name varchar(30)
);
create table City
(
    city_id varchar(20)  not null primary key,
    city_name varchar(45),
    province_id varchar(20) references Province(province_id)
);

create table Salutations
(
    salutation_id varchar(20)not null primary key,
    salutations varchar(90) not null,
    type_of_salutation varchar(20) not null
);
CREATE TABLE Bathrooms
(
    bathroom_id varchar (20) primary key not null,
    bathroom bytea
);
create TABLE Bedrooms
(
    bedroom_id varchar (20) primary key not null,
    bedroom_image bytea
);
create table Garage
(
    garage_id varchar(20) primary key not null,
    garage_image bytea
);
create table Kitchen
(
    kitchen_id varchar (20)  primary key not null,
    kitchen_image bytea
);
create TABLE Coldroom
(
    coldroom_id varchar(20)  primary key not null,
    coldroom bytea
);
create table Gas_Heating
(
    gas_heating_id varchar(20)  primary key not null,
    is_there int
);
create table Electric_Heating
(
    electric_heating_id varchar(20)  primary key not null,
    is_there int
);
create table Second_Floor
(
    second_floor_id varchar(20)  primary key not null,
    second_floor_image bytea
);
CREATE TABLE Listings
(
    listing_id varchar(20)  primary key not null,
    listing_photo bytea not null,
    city_id varchar(20) not null references City(city_id),
    bathroom_id varchar(20) references Bathrooms(bathroom_id),
    bedroom_id varchar(20) references Bedrooms(bedroom_id),
    garage_id varchar(20) references Garage(garage_id),
    kitchen_id VARCHAR(20) REFERENCES Kitchen(kitchen_id),
    coldroom_id VARCHAR(20) REFERENCES Coldroom(coldroom_id),
    gas_heating_id VARCHAR(20) REFERENCES Gas_Heating(gas_heating_id),
    electric_id VARCHAR(20) REFERENCES Electric_Heating(electric_heating_id),
    second_floor_id VARCHAR(20) references Second_Floor(second_floor_id)
);
create table Listing_Status
(
    listing_id varchar(20) not null primary key references Listings(listing_id),
    listing_status char(1)not null
);

