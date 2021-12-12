const nama = (namas)=>namas.toUpperCase();

function getNama(callback){
    console.log(callback);

}
getNama(nama("sd"));


const second = (value)=> value * 1000;

const diss = (waktu,desc)=>
    new Promise((resolve,reject)=>{
        setTimeout(() => {
            resolve(desc);
            
        }, second(waktu));

    });


function makan(){
    const prim = diss(3,"f");
    return prim;
}
async function main(){
    console.log(await makan());



}

main();