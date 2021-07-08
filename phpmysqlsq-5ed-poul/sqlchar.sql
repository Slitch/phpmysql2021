# Run this once on each schema you have (Replace database_name with your schema name)
ALTER DATABASE database_name CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
 
# Run this once for each table you have (replace table_name with the table name)
ALTER TABLE table_name CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
 
# Run this for each column (replace table name, column_name, the column type, maximum length, etc.)
ALTER TABLE table_name CHANGE column_name column_name VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
