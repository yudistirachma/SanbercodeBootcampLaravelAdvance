<<<<<<< HEAD
<?php

    trait Hewan {
        public $nama, $jumlahKaki, $keahlian, $darah =  50  ;
        public function atraksi(){
            return " {$this->nama} sedang {$this->keahlian} ";
        }
    }

    trait Fight {
        public $attackPower, $defencePower ;

        public function serang($object){
            $object->diSerang($this);
            return "| {$this->nama} sedang menyerang  {$object->nama} |";
        }
        public function diSerang($object){
            // $this->serang($object);
            $this->darah = $this->darah - ($object->attackPower / $this->defencePower);
            echo "| {$this->nama} sedang di serang |";
        }

    }  

    class Elang {
        use Hewan, Fight ;
        public function __construct($nama)
        {
            $this->nama = $nama ;
            $this->jumlahKaki = 2;
            $this->keahlian = "terbang tinggi";
            $this->attackPower = 10 ;
            $this->defencePower = 5 ;           
        }
        public function getInfoHewan(){
            echo "nama " . $this->nama . "<br>";
            echo "darah " . $this->darah . "<br>";
            echo "jumlah kaki " . $this->jumlahKaki . "<br>";
            echo "keahlian ". $this->keahlian . "<br>";
            echo "attck power ". $this->attackPower . "<br>";
            echo "defence power ".$this->defencePower . "<br>";
            echo "jenis hewan" . get_class($this);
        }
        

    }

    class Harimau {
        use Hewan, Fight ;
        public function __construct($nama)
        {
            $this->nama = $nama ;
            $this->jumlahKaki = 4;
            $this->keahlian = "lari cepat";
            $this->attackPower = 7 ;
            $this->defencePower = 8 ;   
        }
        public function getInfoHewan(){
            echo "nama " . $this->nama . "<br>";
            echo "darah " . $this->darah . "<br>";
            echo "jumlah kaki " . $this->jumlahKaki . "<br>";
            echo "keahlian ". $this->keahlian . "<br>";
            echo "attck power ". $this->attackPower . "<br>";
            echo "defence power ".$this->defencePower . "<br>";
            echo "jenis hewan " . get_class($this);
        }
    }

    $harimau1 = new Harimau('harimau1');
    $elang1 = new Elang('elang1');
    echo $harimau1->atraksi();
    echo "<br>";
    echo $elang1->serang($harimau1);
    echo "<br>";
    echo $harimau1->diSerang($elang1);
    echo "<br>";
    echo "<br>";
    echo $harimau1->getInfoHewan();
    echo "<br>";


=======
<?php

    trait Hewan {
        public $nama, $jumlahKaki, $keahlian, $darah =  50  ;
        public function atraksi(){
            return " {$this->nama} sedang {$this->keahlian} ";
        }
    }

    trait Fight {
        public $attackPower, $defencePower ;

        public function serang($object){
            $object->diSerang($this);
            return "| {$this->nama} sedang menyerang  {$object->nama} |";
        }
        public function diSerang($object){
            // $this->serang($object);
            $this->darah = $this->darah - ($object->attackPower / $this->defencePower);
            echo "| {$this->nama} sedang di serang |";
        }

    }  

    class Elang {
        use Hewan, Fight ;
        public function __construct($nama)
        {
            $this->nama = $nama ;
            $this->jumlahKaki = 2;
            $this->keahlian = "terbang tinggi";
            $this->attackPower = 10 ;
            $this->defencePower = 5 ;           
        }
        public function getInfoHewan(){
            echo "nama " . $this->nama . "<br>";
            echo "darah " . $this->darah . "<br>";
            echo "jumlah kaki " . $this->jumlahKaki . "<br>";
            echo "keahlian ". $this->keahlian . "<br>";
            echo "attck power ". $this->attackPower . "<br>";
            echo "defence power ".$this->defencePower . "<br>";
            echo "jenis hewan" . get_class($this);
        }
        

    }

    class Harimau {
        use Hewan, Fight ;
        public function __construct($nama)
        {
            $this->nama = $nama ;
            $this->jumlahKaki = 4;
            $this->keahlian = "lari cepat";
            $this->attackPower = 7 ;
            $this->defencePower = 8 ;   
        }
        public function getInfoHewan(){
            echo "nama " . $this->nama . "<br>";
            echo "darah " . $this->darah . "<br>";
            echo "jumlah kaki " . $this->jumlahKaki . "<br>";
            echo "keahlian ". $this->keahlian . "<br>";
            echo "attck power ". $this->attackPower . "<br>";
            echo "defence power ".$this->defencePower . "<br>";
            echo "jenis hewan " . get_class($this);
        }
    }

    $harimau1 = new Harimau('harimau1');
    $elang1 = new Elang('elang1');
    echo $harimau1->atraksi();
    echo "<br>";
    echo $elang1->serang($harimau1);
    echo "<br>";
    echo $harimau1->diSerang($elang1);
    echo "<br>";
    echo "<br>";
    echo $harimau1->getInfoHewan();
    echo "<br>";


>>>>>>> 957514143b1b33c09c2ea752dc4c2fed7d2c239f
?>