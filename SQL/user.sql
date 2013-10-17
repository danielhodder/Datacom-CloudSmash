CREATE USER 'datacom_cloudsma'@'localhost' IDENTIFIED BY 'datacom';
GRANT USAGE ON * . * TO 'datacom_cloudsma'@'localhost' IDENTIFIED BY 'datacom' 
	WITH 
		MAX_QUERIES_PER_HOUR 0 
		MAX_CONNECTIONS_PER_HOUR 0 
		MAX_UPDATES_PER_HOUR 0 
		MAX_USER_CONNECTIONS 0 ;
GRANT ALL PRIVILEGES ON `datacom\_cloudsmash` . * TO 'datacom_cloudsma'@'localhost' 
	WITH 
		GRANT OPTION ;