DROP TABLE restaurant;
DROP TABLE customer;
DROP TABLE deliverer;
DROP TABLE ordered;

CREATE TABLE restaurant(
	RestaurantID int not null PRIMARY KEY,
	RestStreet varchar(255) not null,
	RestCity varchar(255) not null,
	RestState varchar(50) not null,
	RestZipcode varchar (10) not null,
	RestPhone varchar(100) not null
);

CREATE TABLE customer (
	CustomerID int not null PRIMARY KEY,
	CustName varchar(255),
	CustPhone varchar(100)
);

CREATE TABLE deliverer (
	DelivererID int not null PRIMARY KEY,
	DelivName varchar(255),
	DelivPhone varchar(100)
);

CREATE TABLE ordered (
	OrderID int not null PRIMARY KEY,
	OrderDate varchar(255),
	OrderTime varchar(255),
	RestaurantID int,
	CustomerID int,
	DelivererID int,
	FOREIGN KEY (RestaurantID) REFERENCES restaurant(RestaurantID),
	FOREIGN KEY (CustomerID) REFERENCES customer(CustomerID),
	FOREIGN KEY (DelivererID) REFERENCES deliverer(DelivererID)
);
