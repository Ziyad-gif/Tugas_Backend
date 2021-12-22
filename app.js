const express = require("express");
const router = require("./routes/api");
const port = 3000
const app = express();
app.use(express.json());
app.use(express.urlencoded());
app.use(router);

app.listen(port,(req,res)=>{
    console.log(`${port}`);
})
