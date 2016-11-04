<?

$conn=mysqli_connect("localhost","root","","dailyvendor");

mysql_connect("localhost","root", "");
mysql_select_db("dailyvendor");
$msg1="";

$sql="SELECT * FROM transaction";
$result = mysql_query($sql);
$combinedResults = array();
while ($row = mysql_fetch_array($result)) {
    $combinedResults[$row['transactionid']][] = array( 
    'p1' => $row['p1'],
    'p2' => $row['p2'],
    'p3' => $row['p3'],
    'p4' => $row['p4'],
    'p5' => $row['p5'],
    'p6' => $row['p6'],
    'p7' => $row['p7'],
    'p8' => $row['p8'],
    'p9' => $row['p9'],
    'p10' => $row['p10'],

    'p11' => $row['p11'],
    'p12' => $row['p12']
    );
};


$file = fopen("contacts.csv","w+");

foreach ($combinedResults as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 

print_r($combinedResults['4'][0]['p4']);

?>
