SELECT users.id, users.login, users.name, users.city_id, cities.name as gorod FROM fullstack2.users
LEFT JOIN cities ON users.city_id = cities.id;