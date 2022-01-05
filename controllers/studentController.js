const students = require("../model/Student");
class studentController{
    async index(req,res){
        const data ={
            message:"menampilkan semua data student",
            data:student,
        };
        res.json(data)
    }
    async store(req,res){
        const {nama,nim,email,jurusan,create_at,update_at} = req.body;
        Student.create(nama,nim,email,jurusan,create_at,update_at);
        const data={
            message :`menambahkan data student ${nama}`,
            data:student,
        };
        res.json(data);
    }
    update(req,res){
        const {id} = req.body;
        const {nama} = req.body;
        student.push(nama);
        Student[id] = nama;
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
