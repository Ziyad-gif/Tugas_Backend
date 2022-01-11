const mysql = require("mysql");

require("dotenv").config();

const {DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE}

const db = mysql.createConnection({
    host:DB_HOST,
    user:DB_USER,
    password:DB_PASSWORD,
    database:DB_DATABASE
});
db.connect((err)=>{
    if(err){
        console.log("gagal");
    }else{
        console.log("sukses");
    }
});

module.exports = db;