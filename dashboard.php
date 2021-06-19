<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <?php include_once ('./includes/dashboard_sidebar.php');?>

    <div class="main-content">
        <?php include_once  ('./includes/dashboard_header.php'); ?>
        <main>
            <!-- <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Menejo de usuarios</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span>Menejo de doctores</span>
                    </div>
                    <div>
                        <span class="las la-stethoscope"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span>Manejo de pacientes</span>
                    </div>
                    <div>
                        <span class="las la-wheelchair"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Nuevas consultas</span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
                    </div>
                </div>
            </div> -->

            <!--Tabla-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pacientes recientes</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                            </span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>SN</td>
                                            <td>Username</td>
                                            <td>Estado</td>
                                            <td>Estado</td>
                                            <td>Estado</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jhon Deiby</td>
                                            <td>Salazar Rayo</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Victor Manuel</td>
                                            <td>Ciro Ledesma</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julian Andres</td>
                                            <td>Quesada Carmona</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Andres</td>
                                            <td>Hernandez</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Manuel</td>
                                            <td>Chicangana</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julieta</td>
                                            <td>Quesad</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marleny</td>
                                            <td>Salazar Orozco</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelly</td>
                                            <td>Gil Ortiz</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bilma</td>
                                            <td>Ortiz Bermudez</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julian Andres</td>
                                            <td>Salazar Rayo</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jhonatan</td>
                                            <td>Velazco</td>
                                            <td>
                                                <span class="status yellow"></span> Intermdio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Samir</td>
                                            <td>Vidal Carmona</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Karen</td>
                                            <td>Orozco Sanches</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Emiliano</td>
                                            <td>Chicaganda</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jhon Jairo</td>
                                            <td>Salazar Gallego</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="customers">

                    <div class="card">
                        <div class="card-header">
                            <h3>Nuevos pacientes</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                            </span></button>
                        </div>

                        <div class="card-body">

                            <div class="customer">
                                <div class="info">
                                    <img src="avatars/1.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ana Maria Acosta</h4>
                                        <small>Diarrea</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="lab la-whatsapp"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="avatars/2.png" 40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Karen Orozco</h4>
                                        <small>Gripa</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/3.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Kelly Ortiz</h4>
                                        <small>Intoxicación</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/4.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Julian Quesada</h4>
                                        <small>Malestar general</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/5.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Nelson Stiven</h4>
                                        <small>Bartolinitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/6.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Sara Cortez</h4>
                                        <small>Acné</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/7.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Mario Ortiz</h4>
                                        <small>Demencia</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/8.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Leopoldo Sas</h4>
                                        <small>Eccema</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/9.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Stiven Alrboleda</h4>
                                        <small>Encefalitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            <div class="customer ">
                                <div class="info ">
                                    <img src="avatars/10.png " width="40px " height="40px " alt=" ">
                                    <div>
                                        <h4>Brandon Carnadona</h4>
                                        <small>Faringitis</small>
                                    </div>
                                </div>
                                <div class="contact ">
                                    <span class="las la-user-circle "></span>
                                    <span class="lab la-whatsapp "></span>
                                    <span class="las la-phone "></span>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                
            </div>
        </main>

    </div>

</body>

</html>