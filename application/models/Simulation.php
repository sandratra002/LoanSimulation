<?php
// Fonction pour calculer la mensualité
class Simulation extends CI_Model
{
    public function calculerMensualite($C, $i, $n)
    {
        return ($C * $i * pow(1 + $i, $n)) / (pow(1 + $i, $n) - 1);
    }

    public function calculerInterets($CRD, $i)
    {
        return $CRD * $i;
    }

    public function calculerCapitalAmorti($M, $I)
    {
        return $M - $I;
    }

    public function calculerCapitalRestantDû($CRD, $CA)
    {
        return $CRD - $CA;
    }

    public function calculAmortissement($C, $TEG, $dureeMois, $dateDebut)
    {
        $i = $TEG / 12;

        $CRD = $C;
        $mensualite = $this->calculerMensualite($C, $i, $dureeMois);
        $tableauAmortissement = array();

        for ($mois = 1; $mois <= $dureeMois; $mois++) {
            $I = $this->calculerInterets($CRD, $i);
            $CA = $this->calculerCapitalAmorti($mensualite, $I);
            $CRD = $this->calculerCapitalRestantDû($CRD, $CA);

            $dateVersement = date('d/m/Y', strtotime("+$mois month", strtotime($dateDebut)));
            $tableauAmortissement[] = array(
                'num_mensualite' => $mois,
                'versement' => $dateVersement,
                'initial' => round($CRD + $CA, 2),
                'mensualite' => round($mensualite, 2),
                'capital_rembourse' => round($CA, 2),
                'interet' => round($I, 2),
                'capital_restant' => round($CRD, 2)
            );
        }

        return $tableauAmortissement;
    }
}


// $table = calculAmortissement(100000, 0.05, 36, '1/1/2008');

// echo 'N° Mensualité' . " | " . 'Date du versement' . " | " . 'Solde Initial' . " | " . 'Mensualité' . " | " . 'Capital Remboursé' . " | " . 'Intérêts' . " | " . 'Capital Restant dû' . " | " . "\n";
// for ($i = 0; $i < count($table); $i++) {
//     echo $table[$i]['N° Mensualité'] . " | " . $table[$i]['Date du versement'] . " | " . $table[$i]['Solde Initial'] . " | " . $table[$i]['Mensualité'] . " | " . $table[$i]['Capital Remboursé'] . " | " . $table[$i]['Intérêts'] . " | " . $table[$i]['Capital Restant dû'] . " | " . "\n";
// }
