
<?php  

function fetch_data()  
{  
$output = '';  
$conn = mysqli_connect("localhost", "root", "", "partenaire",3308);  
$sql = "SELECT * FROM partenaire2";  
$result = mysqli_query($conn, $sql);  
while($row = mysqli_fetch_array($result))  
{       
$output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["debutContrat"].'</td>  
<td>'.$row["finContrat"].'</td>  
<td>'.$row["natureContrat"].'</td>  
</tr>  
';  
}  
return $output;  
}  
if(isset($_POST["generate_pdf"]))  
{  
require_once('../../library/tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Listes des contrats");   
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->AddPage();
$obj_pdf->writeHTML($logo, true, false, false, false, '');
$content = '';  
$content .= '  
<h4 align="center">Liste des Contrats sur Whyrim</h4><br /> 
<table align="center" border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="25%">Id</th>  
<th width="25%">debutContrat</th>  
<th width="25%">finContrat</th>  
<th width="25%">natureContrat</th>  
</tr>  
';  
$content .= fetch_data();  
$content .= '</table>';  
$obj_pdf->writeHTML($content); 
ob_end_clean(); 
$obj_pdf->Output('chauffeurs.pdf', 'I');  
}  
?> 