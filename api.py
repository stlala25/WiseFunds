import requests
import pandas as pd
from sqlalchemy import create_engine
import pyodbc

# SQL Server connection settings
server = 'your_server_name'  # e.g., 'localhost\SQLEXPRESS'
database = 'your_database_name'
username = 'your_username'
password = 'your_password'

# Connection string for SQLAlchemy
engine = create_engine(f'mssql+pyodbc://{username}:{password}@{server}/{database}?driver=ODBC+Driver+17+for+SQL+Server')

# Function to fetch data from an API
def fetch_data(url):
    response = requests.get(url)
    response.raise_for_status()  # Raise an exception for HTTP errors
    data = response.json()
    return data

# Function to insert data into SQL Server
def insert_data(data, table_name):
    # Convert data to a pandas DataFrame
    df = pd.DataFrame(data)
    
    # Insert data into SQL Server
    df.to_sql(table_name, con=engine, if_exists='append', index=False)

# Main function to fetch and insert data
def main():
    url = 'https://api.example.com/data'  # Replace with the actual URL
    table_name = 'your_table_name'  # Replace with your table name
    
    data = fetch_data(url)
    insert_data(data, table_name)

if __name__ == '__main__':
    main()
