let text = "";
const  fruits = ["apel","mangga","alpukat"];
function index(){
   
    fruits.forEach(diam);
    function diam(item,index){
        text +=" "+item+" index :"+index + "<br>" ;
        
    }
    console.log(text);
}

function store(name){

    fruits.push(name);
    index();
}

function update(position,name){

    fruits[position] = name;
    index();
}

function destroy(position){

    delete fruits[position];
    index();

}