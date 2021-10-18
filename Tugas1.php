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
            echo $animal . " ";
        }
    }

    function store($data)
    {

        array_push($this->animals, $data);
        print_r($data);
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

echo "menampilkan binatang " . "<br>";

$animal->index();
echo "<br>";

// masukin nilai
echo "nilai setelah di isi" . "<br>";
$animal->store(' ikan ');

$animal->index();
echo "<br>";
// update nilai

echo "setelah di update " . "<br>";
$animal->update(0, 'kucing');


// hapus nilai


echo "setelah dihapus" . "<br>";
$animal->destroy(1);
$animal->index();
