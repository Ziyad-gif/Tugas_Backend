const second =(value)=> value * 1000;

const showDownload = (result)=>{
    console.log("download selesai");
    console.log(`hasil download : ${result}`);

};

const download = (callback)=>{
    return new Promise((resolve ,reject)=>{
        setTimeout(function() {
            resolve(callback("windows-10.exe"));
            
        }, second(3));

    });

}

async function main(){
    await download(showDownload);
}

main();
