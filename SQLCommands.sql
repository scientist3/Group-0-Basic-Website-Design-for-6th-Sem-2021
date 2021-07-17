--  Reference Link : https://www.javatpoint.com/dbms-sql-command
-- DLL COmmands
  -- Create table 
    -- Syntax:
      CREATE TABLE TABLE_NAME (COLUMN_NAME DATATYPES[,....]); 
    
    -- Example:
      CREATE TABLE employee_tbl (Name VARCHAR(20), Email VARCHAR(100), DOB DATE);

  -- Delete Table
    -- Syntax:
      DROP TABLE table_name;  
    -- Example:
      DROP TABLE employee_tbl;  
  
  -- ALTER TABLE / UPDATE/MODIFY
      -- Add New Column:
        -- Syntax:
          ALTER TABLE table_name ADD column_name COLUMN-definition;    
        -- Example:
          ALTER TABLE employee_tbl ADD id int(11)

  -- Change the column position:
    -- Example:
      ALTER TABLE `employee_tbl` CHANGE `id` `id` INT(11) NULL DEFAULT NULL FIRST


-- DML COmmands 
  -- Fetch data form database
    -- Syntax:
      SELECT expressions FROM TABLES WHERE conditions;  
    
    -- Example1: Fetches all data form the employee_tbl
      SELECT * FROM `employee_tbl`
    
    -- Example2: Fetch Name column form employee_tbl
      SELECT Name FROM `employee_tbl`

    -- Example3: 
      SELECT * FROM `employee_tbl` WHERE id >= 2



  -- Insert Data
    -- Syntax:
      INSERT INTO TABLE_NAME 
              (col1, col2, col3,.... col N) 
      VALUES  (value1, value2, value3, .... valueN);  
    -- Example:
      INSERT INTO `employee_tbl` 
              (`Name`, `Email`,           `DOB`) 
      VALUES  ('Adil', 'adil@gmail.com', '2021-07-11');

  -- Update Data:
    -- Syntax:
      UPDATE table_name SET [column_name1= value1,...column_nameN = valueN] [WHERE CONDITION] 

    -- Exapmle:
      UPDATE students 
      SET User_Name = 'Sonoo'
      WHERE Student_Id = '3'  

      UPDATE employee_tbl SET id = 1 WHERE Name = "Abc"

  -- DELETE DATA
    -- Syntax:
      DELETE FROM table_name [WHERE condition];  
    -- Example:
      DELETE FROM employee_tbl WHERE id = 3;  