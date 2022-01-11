const express = require("express");
const app = express();
let kelas = [
    {id :1, nama:"ziyad"},
    {id:2,nama:"kamil"}
];
app.get('/',function(req,res){


};
    res.json(kelas);
});
app.get('/about',function(req,res){
    res.json(kelas);
});
app.get('/users',function(req,res){
    res.json(kelas);

});
app.post('/users',function(req,res){
    res.send(kelas);

});
app.put('/users:id',function(req,res){
    const id = request.params.id;
    kelas.filter()=>{
        if(kelas.id == id){
            kelas.id = id
            kelas.name = request.body.name
            return kelas;
        }
    }
    res.send(kelas);
});
app.delete('/users/:Userid',function(req,res){
    let id = request.params.kelasid;
    kelas = kelas.filter(kelas =>kelas.id != id)
    res.send(request.params);
});
app.listen(3000,function(){
    console.log("server is okay");
});