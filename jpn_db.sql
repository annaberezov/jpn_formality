# Author: Anna-Maria Berezovski
# Date: January 4, 2021
# Description: This is the code for creating the tables as well as inserting the data into the tables
#              There is also some queries for resetting the data which was used during development and testing 

# creating the jpn_data table
CREATE TABLE jpn_data (
    id INT NOT NULL, 
    seen INT(1), # 0 indicates not seen and 1 indicates seen
    lang VARCHAR(255) NOT NULL,
    japanese VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE lvl_form (
    id INT NOT NULL,
    level INT, # 1: least formal, 2: middle formal, or 3: most formal
    PRIMARY KEY (id),

    FOREIGN KEY (id) references jpn_data(id) 
);

# inserting the data from the local text file into the database
LOAD DATA LOCAL INFILE '~/capstone/data.txt'
INTO TABLE jpn_data
CHARACTER SET UTF8
FIELDS TERMINATED BY '\t'
LINES TERMINATED BY '\n'
(id,lang,japanese);

# for updating the database after testing to ensure the data is clean and ready to be rated
UPDATE jpn_data SET seen=0 WHERE seen is null;
UPDATE jpn_data SET seen=0 WHERE seen = 1;
DELETE FROM lvl_form WHERE level=0;
