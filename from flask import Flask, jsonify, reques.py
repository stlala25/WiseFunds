from flask import Flask, jsonify, request
from bs4 import BeautifulSoup
import requests

app = Flask(__name__)

@app.route('/')
def home():
    return "Welcome to the AMFI NAV Data API"

if __name__ == '__main__':
    app.run(debug=True)
