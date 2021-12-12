const download = new Promise(function(resolve,reject){
    setTimeout(() => {
        const status = true;

        if(status){
            resolve("download berhasil");
        }else{
            reject("download gagal");
        }
        
    }, 3000);
})

download
.then((result)=>{
    console.log(result);
}).catch((err)=>{
    console.log(err);
});