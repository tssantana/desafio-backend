import axios from 'axios';

let company = document.getElementById('company').on;

axios.get('http://localhost:8000/api/company')
    .then(response => (console.log(response, 1)))