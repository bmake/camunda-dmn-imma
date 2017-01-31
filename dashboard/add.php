<!DOCTYPE html>
<html lang="de">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THB Dashboard | Student hinzufügen</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>THB Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/thb-logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Willkommen,</span>
                <h2>THB</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrator</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <!--<li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Studierende <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">anzeigen <span class="label label-success pull-right">Coming Soon</span></a></li>
                      <li><a href="#">bearbeiten <span class="label label-success pull-right">Coming Soon</span></a></li>
                      <li><a href="add.php">hinzufügen</a></li>
                                     
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/thb-logo.png" alt="">THB
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Einstellungen</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Hilfe</a></li>
                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Abmelden</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/student1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Hans Müller</span>
                          <span class="time">vor 3 Minuten</span>
                        </span>
                        <span class="message">
                          Bewerbung für den Studiengang Wirtschaftsinformatik eingegangen.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/student2.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Lisa Klein</span>
                          <span class="time">vor 26 Minuten</span>
                        </span> <a href="add.php"</a>
                        <span class="message">
                          Bewerbung für den Studiengang Betriebswirtschaftslehre eingegangen.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/student3.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Franz</span>
                          <span class="time">vor 2 Stunden</span>
                        </span>
                        <span class="message">
                          Bewerbung für den Studiengang Maschinenbau eingegangen.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/student4.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Susi Smith</span>
                          <span class="time">vor 4 Stunden</span>
                        </span>
                        <span class="message">
                          Bewerbung für den Studiengang Wirtschaftsinformatik eingegangen.
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Alle anzeigen</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Studierende anlegen</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Suchen nach...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Los!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Hier können neue Studierende im System angelegt werden.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Schritt 1<br />
                                              <small>Prüfung der Unterlagen</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Schritt 2<br />
                                              <small>Persönliche Daten</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Schritt 3<br />
                                              <small>Zusätzliche Informationen</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Schritt 4<br />
                                              <small>Speichern</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        
                        <form action="" method="POST">
                          <h2 class="StepTitle">Schritt 1 - Prüfen der Unterlagen</h2>
                          
                          <label>Kreuzen Sie die angekommenen Dokumente an:</label>
                          <br></br>
                          <fieldset>

        <label>
          <input type="hidden"  name="frist_bool" value="false">
          <input type="checkbox" name="frist_bool" value="true">
          Bewerbungsfrist eingehalten
        </label>
     <br>


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
   <button type="submit" class="btn btn-success">Bestätigen</button>

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

  echo "<br><strong>Folgende Unterlagen fehlen:</strong><br> ";
//  echo $decoded;
  echo $decoded->collectResult;


  // http://stackoverflow.com/questions/6516902/how-to-get-response-using-curl-in-php




//echo $decoded['outputs']['missing']['values'][0];
echo "<p class='bg-danger'>" . $decoded['outputs']['missing']['values'][0] . "</p>";
$ausgabe = $decoded['outputs']['missing']['values'][0];
$nachricht = "Sehr geehrte Frau Klein, %0D
%0D
vielen Dank für Ihre Bewerbung an der Technischen Hochschule Brandenburg. %0D
Leider kann Ihre Immatrikulation auf Grund fehlender Unterlagen oder Überschreitung der Frist nicht abgeschlossen werden.%0D
%0D
Grund: $ausgabe %0D
%0D
Fehlende Unterlagen reichen Sie bitte umgehend nach, bei überschreitung der Frist ist eine Immatrikulation nicht mehr möglich.%0D
%0D
Freundliche Grüße,%0D
Studierendensekretariat %0D
Technische Hochschule Brandenburg";



echo  '<br><a href="mailto:lisa.klein@gmail.com?subject=Ihre Bewerbung&body=';
echo $nachricht;
//echo $ausgabe; // hab ich rausgenommen und direkt in den E-Mail Text. PP 
echo '"><button type="submit" class="btn btn-warning">Student per E-Mail benachrichtigen</button></a>';


php?>





                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Schritt 2 - Persönliche Daten</h2>
                        <p>
                          Hier können die persönlichen Daten des Studierenden ergänzt oder korrigiert werden.
                        </p>
                        <p>
                           <label>Persönliche Daten:</label>
                      <p style="padding: 5px;">
                        

                        <form class="form-horizontal form-label-left">
                          

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vorname <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name"  value="Lisa" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nachname <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" value="Klein" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Zwischename</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" value="Marie" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Geschlecht</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender"> &nbsp; männlich &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> weiblich
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Geburtsdatum <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" value="14.02.1990"class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>

                        </form>


                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">3. Schritt - Zusätzliche Informationen</h2>
                        <p>
                          Bitte tragen Sie hier zusätzliche Informationen des Studierenden ein.
                        </p>
                        <p>
                           <label>Zusätzliche Informationen:</label>
                      <p style="padding: 5px;">
                        

                        <form class="form-horizontal form-label-left">
                          

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-Mail Adresse <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="e-mail" value="lisa.marie@gmail.com"required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street">Straße + Nr.<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="street" value="Bahnhofstraße 23" name="street" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="PLZORT" class="control-label col-md-3 col-sm-3 col-xs-12">PLZ + Ort<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="PLZORT" value="13407 Berlin" class="form-control col-md-7 col-xs-12" type="text" name="PLZORT">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Land <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="land" value="Deutschland" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>

                        </form>
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">4. Schritt - Eingaben überprüfen</h2>
                        <p>Bitte überprüfen Sie hier Ihre eingaben. 
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
    <!-- /jQuery Smart Wizard -->
  </body>
</html>