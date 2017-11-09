<?php
session_start();
 define('HOST','localhost');
	 define('DBNAME','gsbv2');
	 define('USER','root');
	 define('PW',"");
function connect()
     {			 
        try
        {
            $connect = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PW,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connect;
        }
       catch(PDOException $e)
        {
                echo "probleme de connexion :" . $e->getMessage();
                return false;
        }
    }
    $numResa=$_SESSION["numResa"];
// Selection de la base de donn�es et requete SQL
$requete="select nom,prenom,montant,mois,date,libelle from utilisateur, lignefraishorsforfait where type ='visiteur'and id.utilisateur = idVisiteur.fichefrais and idVisiteur.fichefrais = idVisiteur.lignefraishorsforfait";
// Remplissage d'un tableau correspondant � chaque vol
   $bdd= connect();
   try 
   {	
       $sql = $bdd->prepare($requete);
       $sql->execute();

       while($ligne=$sql->fetch(PDO::FETCH_OBJ))
       { 

            $numero=$ligne->numero;
            $depart=$ligne->depart;
            $dateDepart=$ligne->dateDepart;
            $heureDepart=$ligne->heureDepart;
            $arrivee=$ligne->arrive;
            $dateArrivee=$ligne->dateArrivee;
            $heureArrivee=$ligne->heureArrivee;
            $prix=$ligne->prix;
            $nbPlace=$ligne->nbPlace;
            $nom=$ligne->nomClient;
            $prenom=$ligne->prenomClient;
       } 

   }
   catch(PDOException $e)
   {
       echo "Erreur dans la requ�te" . $e->getMessage();
   }
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Times','',13);
//Ajout d'une image
$pdf->Image('../images/avion.png',10,10, 200, 60);
$pdf->Cell(60);
$pdf->Cell(10,150,"Information sur la Reservation");
$pdf->Ln(5);
$pdf->Cell(60,200,"Nom :$nom");
$pdf->Cell(80,200,"Prenom :$prenom");
$pdf->Cell(100,200,"Vol :$numero");
$pdf->Ln(20);
$pdf->Cell(60,200,"Aeroport de depart :$depart");
$pdf->Cell(70,200,"Date de depart :$dateDepart");
$pdf->Cell(100,200,"Heure de depart :$heureDepart");
$pdf->Ln(20);
$pdf->Cell(60,200,"Aeroport d'arrivee :$arrivee");
$pdf->Cell(70,200,"Date d'arrivee :$dateArrivee");
$pdf->Cell(100,200,"Heure d'arrivee :$heureArrivee");
$pdf->Ln(30);
$pdf->Cell(80,180,"Prix :$prix");
$pdf->Cell(100,180,"Nombre de place:$nbPlace");
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();

?>
