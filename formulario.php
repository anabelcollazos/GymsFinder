<?php include_once 'include/Head.php';?>
<body>
    <?php include_once 'include/Encabezado.php'?>

    <nav class="navbar navbar-default navbar-static-top"id="con3">
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!-- llenar espacio -->
                    <div id="carouselIzquierda" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselIzquierda" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIzquierda" data-slide-to="1"></li>
                            <li data-target="#carouselIzquierda" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chica1.jpg" style="width:100%" id="imagen">
                            </div>
                            <div class="item">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chica2.jpg" style="width:100%" id="imagen">
                            </div>
                            <div class="item">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chica3.png" style="width:100%" id="imagen">
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-12">
                    <style>
                        :focus{
                            outline: none;
                        }

                        body{
                            /* background: #DBDBDB; */
                            font-family: 'Open sans';
                        }

                        /* FORMULARIO =================================== */

                        .form_wrap{
                            /* width: 1050px; */
                            width: 100%;
                            /* height: 530px; */
                            height: 530px;
                            /* margin: 50px auto; */
                            display: flex;

                            background: #fff;
                            border-radius: 10px;
                            overflow: hidden;
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                        }

                        /* Informacion de Contacto*/

                        .cantact_info::before{
                            content: '';
                            width: 100%;
                            height: 100%;

                            position: absolute;
                            top: 0;
                            left: 0;

                            background: #4091EC;
                            opacity: 0.9;
                        }

                        .cantact_info{
                            /* width: 38%; */
                            width: 100%;
                            position: relative;

                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;

                            background-image: url('img/portada.jpg');
                            background-size: cover;
                            background-position: center center;

                        }

                        .info_title,
                        .info_items{
                            position: relative;
                            z-index: 2;
                            color: #fff;
                        }

                        .info_title{
                            margin-bottom: 60px;
                        }

                        .info_title span{
                            font-size: 100px;
                            display: block;
                            text-align: center;
                            margin-bottom: 15px;
                        }

                        .info_title h2{
                            font-size: 35px;
                            text-align: center;
                        }

                        .info_items p{
                            display: flex;
                            align-items: center;

                            font-size: 16px;
                            font-weight: 600;
                            margin-bottom: 10px;
                        }

                        .info_items p:nth-child(1) span{
                            font-size: 30px;
                            margin-right: 10px;
                        }

                        .info_items p:nth-child(2) span{
                            font-size: 50px;
                            margin-right: 15px;
                            margin-left: 4px;
                        }


                        /* Formulario de contacto*/
                        form.form_contact{
                            /* width: 62%; */
                            width: 100%;
                            padding: 30px 40px;
                        }

                        form.form_contact h2{
                            font-size: 25px;
                            font-weight: 600;
                            color: #303030;
                            margin-bottom: 30px;
                        }

                        form.form_contact .user_info{
                            display: flex;
                            flex-direction: column;
                        }

                        form.form_contact label{
                            font-weight: 600;
                        }

                        form.form_contact input,
                        form.form_contact textarea{
                            width: 100%;
                            padding: 8px 0px 5px;
                            margin-bottom: 20px;

                            border: none;
                            border-bottom: 2px solid #D1D1D1;

                            font-family: 'Open sans';
                            color: #5A5A5A;
                            font-size: 14px;
                            font-weight: 400;
                        }

                        form.form_contact textarea{
                            max-width: 100%;
                            min-width: 100%;
                            max-height: 90px;
                        }

                        form.form_contact input[type="submit"]{
                            width: 180px;
                            background: #4091EC;
                            padding: 10px;
                            border: none;
                            border-radius: 25px;

                            align-self: flex-end;

                            color: #fff;
                            font-family: 'Open sans';
                            font-size: 16px;
                            font-weight: 600;
                            cursor: pointer;
                        }

                        form.form_contact input[type="submit"]:hover{
                            background: #3371B6;
                        }

                        /* Ventana de errores*/
                        .modal_wrap{
                            width: 100%;
                            height: 100vh;
                            background: rgba(0,0,0,0.7);

                            position: fixed;
                            top: 0;
                            left: 0;
                            z-index: 3;

                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .mensaje_modal{
                            background: #fff;
                            box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
                            width: 400px;
                            padding: 30px 20px 15px;
                        }

                        .mensaje_modal h3{
                            text-align: center;
                            font-family: 'Ubuntu';
                            font-size: 20px;
                            font-weight: 400;
                        }

                        .mensaje_modal h3:after{
                            content: '';
                            display: block;
                            width: 100%;
                            height: 1px;
                            background: #C5C5C5;
                            margin: 10px 0px 15px;
                        }

                        .mensaje_modal p{
                            font-size: 16px;
                            color: #606060;
                        }

                        .mensaje_modal p:before{
                            content: "\f00d";
                            font-family: FontAwesome;
                            display: inline-block;
                            color: #E25151;
                            margin-right: 8px;
                        }

                        #btnClose{
                            display: inline-block;
                            padding: 3px 10px;
                            margin-top: 10px;

                            background: #E25151;
                            color: #fff;
                            border: 2px solid #B14141;
                            cursor: pointer;

                            float: right;
                        }

                        /* MENSAJE EXITOSO*/

                        .mensaje-exito{
                            width: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                        }

                        .mensaje-exito h1{
                            font-size: 35px;
                            display: block;
                            text-align: center;
                            margin-bottom: 20px;
                        }

                        .mensaje-exito a{
                            display: block;
                            padding: 10px 30px;
                            background: #4091EC;
                            text-decoration: none;
                            color: #fff;
                        }

                        .mensaje-exito a:hover{
                            background: #3371B6;
                        }
                    </style>
                    <section class="form_wrap">
                        <section class="cantact_info">
                            <section class="info_title">
                                <span class="fa fa-user-circle"></span>
                                <h2>INFORMACION<br>DE CONTACTO</h2>
                            </section>
                            <section class="info_items">
                                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
                            </section>
                        </section>

                        <form action="enviar.php" method="post" class="form_contact">
                            <h2>Envia un mensaje</h2>
                            <div class="user_info">
                                <label for="names">Nombres *</label>
                                <input type="text" id="names" name="nombre" required>

                                <label for="phone">Telefono / Celular</label>
                                <input type="text" id="phone" name="telefono">

                                <label for="email">Correo electronico *</label>
                                <input type="text" id="email" name="correo" required>

                                <label for="mensaje">Mensaje *</label>
                                <textarea id="mensaje" name="mensaje" required></textarea>

                                <input type="submit" value="Enviar Mensaje" id="btnSend">
                            </div>
                        </form>
                    </section>
                </div>
            
                <div class="col-lg-3 col-md-12" id="Con1">
                    <!-- llenar espacio -->
                    <div id="carouselDerecha" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselDerecha" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselDerecha" data-slide-to="1"></li>
                            <li data-target="#carouselDerecha" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chico1.jpeg" style="width:100%" id="imagen">
                            </div>
                            <div class="item">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chico2.jpg" style="width:100%" id="imagen">
                            </div>
                            <div class="item">
                                <img class="img-fluid img-thumbnail" src="img/Modelos/chico3.jpg" style="width:100%" id="imagen">
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </nav>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>