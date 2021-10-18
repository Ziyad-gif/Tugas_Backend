<?php
class Animal
{

    private $animals;

    function __construct($data)
    {
        $this->animals = $data;
    }
    function index()
    {
        foreach ($this->animals as $animal) {
            echo "Jumlah " . $animal . " <br>";
        }
    }

    function store($data)
    {

        array_push($this->animals = $data);
    }
    function update($index, $data)
    {
        $this->animals[$index] = $data;
    }
    function destroy($index)
    {
        unset($this->animals[$index]);
    }
}
$animal = new Animal(['ayam', 'beruang']);

echo "menampilkan binatang ";

$animal->index();

// masukin nilai
echo "nilai setelah di isi";
$animal->store("ikan");
$animal->index();
// update nilai

echo "setelah di update ";
$animal->update(0, "kucing");


// hapus nilai


echo "setelah dihapus";
$animal->destroy(1);
$animal->index();