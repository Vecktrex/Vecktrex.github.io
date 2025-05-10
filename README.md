# Vecktrex.github.io
# CIS224 Final Project

Final project for CIS224
Name: Richard Pitkanen
Date: 5/10/2025

Website:

https://vecktrex.github.io/

Design & Documentation:

This website demonstrates interfacing a PHP POST form submission with an SQL database.
On submission the fields are inserted into the database, and the current database contents are shown to the user.

The database has 5 fields:

1. sku - varchar(10 character limit)
2. Item - varchar(255 character limit)
3. Quantity - int(11 character limit)
4. Cost - decimal(10, 2 character limit)
5. Price decimal(10,2 character limit)

KNOWN ISSUES:

- On occasion the POST php script will fail to pass values along to the database, resulting in a constraint violation.
- Early entries failed to properly display two outstanding digits for decimal values.

