
<html>
<head>
</head>
<body>

 <form action="" method="POST">
  <h3>Kreuzen Sie die angekommenen Dokumente an:</h3>
  <fieldset>


        <label>
          <input type="hidden"  name="id_bool" value="false">
          <input type="checkbox" name="id_bool" value="true">
          Kopie von Personalausweis oder Reisepass
        </label>
     <br>

        <label>
          <input type="hidden"  name="hzb_bool" value="false">
           <input type="checkbox" name="hzb_bool" value="true">
           Amtlich beglaubigte Kopie der Hochschulzugangsberechtigung mit dem Nachweis der Durchschnittsnote
        </label>
     <br>

        <label>
          <input type="hidden"  name="Zeugnis_bool" value="false">
          <input type="checkbox" name="Zeugnis_bool" value="true" >
          amtlich beglaubigte Kopien von Abschlusszeugnis
        </label>
        <br>
      <label>
         <input type="hidden"  name="vesicherung_bool" value="false">
          <input type="checkbox" name="vesicherung_bool" value="true">
          Versicherungsbescheinigung einer gesetzlichen Krankenkasse
        </label>
        <br>
        <label>
       <input type="hidden"  name="passbild_bool" value="false">
          <input type="checkbox" name="passbild_bool" value="true">
          Passbild
        </label>
        <br>
  </fieldset>
   <button type="submit">Auswahl</button>
</form>


<?php
$data = array();

 foreach ($_POST as $key => $value) {

 //  echo $key . " = " . $value . ", ";
    $input = array(
      'type' => 'boolean',
      'value' =>  $value
    );
    $data[$key] = $input;
 }

//  echo "<br> Data String: json_encode <BR> ";
    $data_string = json_encode($data);
    $data_string = str_replace('"true"',"true",$data_string);
    $data_string = str_replace('"false"',"false",$data_string); // sonst geht das nicht...
//    echo $data_string;


$service_url = 'https://dmn.camunda.cloud/api/v1/decision/decision-2b40f127-bb9b-11e6-9f6a-0242ac120008';

   $curl = curl_init($service_url);

  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

  $curl_response = curl_exec($curl);


  if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. ' . var_export($info));
  }

  curl_close($curl);

//  echo "<br> CURL RESPONSE: <BR> ";



  $decoded = json_decode($curl_response,true);

  echo "<br> Decoded: <BR> ";
//  echo $decoded;
  echo $decoded->collectResult;


  // http://stackoverflow.com/questions/6516902/how-to-get-response-using-curl-in-php




echo $decoded['outputs']['missing']['values'][0];
$ausgabe = $decoded['outputs']['missing']['values'][0];


echo  '<br><a href="mailto:m.mustermann@domain.de?body=';
echo $ausgabe;
echo '">E-Mail schreiben</a>';


php?>
</body>
</html>
