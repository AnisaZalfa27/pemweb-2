<<<<<<< HEAD
<?php
class Mahasiswa {
    // Property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
       
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif ($this->ipk >= 3.0 && $this->ipk <= 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4){
            return 'CUMLAUDE';
        } else {
            return 'Nilai diluar jangkauan';
        }
    }
=======
<?php
class Mahasiswa {
    // Property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
       
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif ($this->ipk >= 3.0 && $this->ipk <= 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4){
            return 'CUMLAUDE';
        } else {
            return 'Nilai diluar jangkauan';
        }
    }
>>>>>>> 0397609a30a2e7cbd55612220c68d141c3de009f
}