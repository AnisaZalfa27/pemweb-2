<<<<<<< HEAD
<?php

class Lingkaran {
    //Property / variabel
    private $jari;
    const PHI = 3.14;

    //Method / Function
    function __construct($r){
        $this->jari = $r;

    
        function getLuas(){
            return self ::PHI * $this->jari * $this->jari;

        }

        function getKeliling(){
            return 2 * self::PHI * $this->$jari;

        }

    // Instance Object 
    $lingkaran1 = new Lingkaran(10);
    echo'Luas lingkaran1 =' . $lingkaran1->getLuas();





    }
}

=======
<?php

class Lingkaran {
    //Property / variabel
    private $jari;
    const PHI = 3.14;

    //Method / Function
    function __construct($r){
        $this->jari = $r;

    
        function getLuas(){
            return self ::PHI * $this->jari * $this->jari;

        }

        function getKeliling(){
            return 2 * self::PHI * $this->$jari;

        }

    // Instance Object 
    $lingkaran1 = new Lingkaran(10);
    echo'Luas lingkaran1 =' . $lingkaran1->getLuas();





    }
}

>>>>>>> 0397609a30a2e7cbd55612220c68d141c3de009f
?>