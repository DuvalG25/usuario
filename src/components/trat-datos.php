<?php
include_once('head.php');
include_once('header.php');
require __DIR__ . '/card-pop.php';

?>

<main>
    <section class="banner__container">
        <section class="texto__banner">
            <a href="">Nuestras<span>> Políticas</span></a>
            <h1>Nuestras Políticas</h1>
        </section>
    </section>


    <div class="container-fluid pad">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="col-title">
                    <h1>Tratamiento de datos privados</h1>
                </div>
                <div class="col-body">
                    <p>
                        <small>NORDVITAL IPS SAS.,</small> establece condiciones de uso de los siguientes canales virtuales (página web- WhatsApp robot –
                        Asistente virtual), por favor léalas detenidamente y con la suma cautela que requieren. Si usted no acepta los términos y
                        condiciones establecidos, usted no podrá acceder ni utilizar los servicios de los canales virtuales. Al hacer uso de estos, se
                        dará por entendido que usted está aceptando sin restricción alguna el tratamiento y manejo establecido para esta página web.
                    </p>
                    <p>
                        Tenga en cuenta que los términos y condiciones pueden ser modificados por NORDVITAL IPS SAS en cualquier momento, siempre conforme a la legislación colombiana. 
                        Por ello, es fundamental revisar el contenido de estos términos siempre que desee realizar alguna gestión a través de nuestra plataforma.
                    </p>
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="accordion" id="acordion-ejemplo">

                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="cont-btn--principal">
                                <h1>Nuestros tratamientos privados</h1>
                                <div class="icon-open">
                                    <img src="/Pagina-nordvitalips/images/Grupo 791.svg" alt="">
                                </div>
                            </div>

                            <div class="accordion-content">
                                <!-- Contenido del acordeón -->
                                <div class="accordion--body-principal ">
                                    <p><small>1. PROPOSITO </small>
                                    <p/>

                                    <p>En<small> NORDVITAL IPS SAS,</small> reconocemos la importancia de proteger la privacidad y la confidencialidad de los datos personales. En cumplimiento de la Ley 1581 de 2012, el Decreto 1377 de 2013 y demás normativas vigentes en materia de protección de datos personales en Colombia, adoptamos la presente <Small>Política de Tratamiento de Datos Personales</small>, que establece las pautas para el tratamiento de la información personal que recolectamos, almacenamos, utilizamos y/o procesamos.
                                    </p><br>

                                    <p>Así las cosas, el propósito de la <small>Política de Tratamiento de Datos Personales</small> es el de asegurar un manejo responsable y legal de los datos personales, protegiendo la información de las personas y garantizando el respeto de sus derechos.</p><br>

                                    <p>Estableciendo las directrices que NORDVITAL IPS seguirá para recolectar, almacenar, procesar, utilizar, transmitir y suprimir los datos personales, en cumplimiento de las normas legales vigentes en Colombia</p><br>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const button = item.querySelector('.icon-open');
                const content = item.querySelector('.accordion-content');

                button.addEventListener('click', () => {
                    item.classList.toggle('open');
                });
            });
        });
    </script>
</main>

<?php
    include_once('footer.php');
    require __DIR__ . '/notificacion.php';  
?>