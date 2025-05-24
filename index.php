 <?php

// class Outer {
//    private $prop = 1;
//    protected $prop2 = 2;

//    protected function func1() {
//     return 3;
//    }
//    public function func2() {
//     return new class($this->prop) extends Outer {
//         private $prop3;
//         public function __construct($prop) {
//             $this->prop3 = $prop;
//         }
//         public function func3() {
//             return $this->prop2 + $this->prop3 + $this->func1();
//         }
//     };
//    }
// }

// echo  (new Outer)->func2()->func3(); -->

// function anonymous_class() {
//     return new class {};
// }

// if (get_class(anonymous_class()) === get_class(anonymous_class())) {
//     echo "same class.";
// } else {
//     echo "different class.";
// }

// var_dump(new readonly class('[DEBUG]') {
//     public function __construct(
//         public string $prefix
//     ) {}

//     public function log(string $msg): void {
//         echo $this->prefix . ' ' . $msg;
//     }
// });

// class Voiture {
//     public string $marque;

//     public function demarrer() {
//         echo "La voiture démarre";
//     }
// }

// // $maVoiture = new Voiture();
// // $maVoiture->marque = "Toyota";
// // $maVoiture->demarrer(); // Affiche "La voiture démarre"

// $voiture = new Voiture("Peugeot");
// echo $voiture->marque; // Affiche "Peugeot"

// class Animal {
//     public function crier() {
//         echo "Cri d'animal";
//     }
// }

// class Chien extends Animal {
//     public function crier() {
//         echo "Ouaf !";
//     }
// }

// $rex = new Chien();
// $rex->crier(); // Affiche "Ouaf !"
class Utils {
    public static function afficherDate() {
        $formatter = new IntlDateFormatter(
            'fr_FR',               // Locale
            IntlDateFormatter::FULL, // Format date
            IntlDateFormatter::NONE // Pas d'heure
        );
        echo $formatter->format(new DateTime());
    }
}

Utils::afficherDate();
// Exemple de sortie : jeudi 23 mai 2025


