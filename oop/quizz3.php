create table customers 
    (id int not null auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null);


create table orders
    (id int not null auto_increment primary key,
    amount int not null,
    customer_id int);

alter table orders
add constraint fk_customer_id_customers
foreign key (customer_id)
references customers(id);

insert into customers (name, email, password) values ('John Doe', 'john@doe.com', 'john123'),
('Jane Doe', 'jane@doe.com', 'jenita123');

insert into orders (amount, customer_id) values 
(500, 1),
(200, 2),
(750, 2),
(250, 1),
(400, 2);


