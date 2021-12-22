const students = require("../data/student")
class studentController{
    index(req,res){
        const data ={
            message:"menampilkan semua data student",
            data:student,
        };
        res.json(data)
    }
    store(req,res){
        const {nama} = req.body;
        student.push = nama;
        const data={
            message :`menambahkan data student ${nama}`,
            data:student,
        };
        res.json(data);
    }
    update(req,res){
        const {nama} = req.body;
        student.push(nama);
        student[id] = nama;
        const data = {
            message: `mengupdate data student id :${id} nama:${nama}`,
            data: student,
        };
        res.json(data)
    }
    destroy(req,res){
        const {id} = req.params;
        student.splice(1,id);

        const data ={
            message:`menghapus data ${student}`,
            data:student,
        };
        req.json(data);
    }
    

    }
    const object = new studentController();
    module.exports = object;
