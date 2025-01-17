<?php
require __DIR__ . '/head.php';
require __DIR__ . '/header.php';
require __DIR__ . '/card-pop.php';

?>

<body>
  <main>
<section class="banner__container-4">
  <section class="texto__banner">
    <a href="/Pagina-nordvitalips/index.php">Inicio <span>> Servicios</span></a>
    <h1>Servicios</h1>
  </section>
</section>

<div class="card">
  <div class="card-body">

      <!-- Pills Tabs -->
      <ul class="nav nav-pills  servicios__uno-tab gap-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/icos-se-9.svg" alt="" class="icon">
                  <p>Medicina General</p>
                </div>
            </button>
        </li>
        <li class="nav-item" role="presentation align-items-center justify-content-center">
            <button class="nav-link rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se-6.svg" alt="" class="icon">
                  <p>Odontología</p>
                </div>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-laboratorio-tab" data-bs-toggle="pill" data-bs-target="#pills-laboratorio" type="button" role="tab" aria-controls="pills-laboratorio" aria-selected="false">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se-3.svg" alt="" class="icon">
                  <p>Laboratorio clínico</p>
                </div>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-medicina-tab" data-bs-toggle="pill" data-bs-target="#pills-medicina" type="button" role="tab" aria-controls="pills-medicina" aria-selected="false">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/icos-se-8.svg" alt="" class="icon">
                  <p>Medicina especializada</p>
                </div>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-diagnostico-tab" data-bs-toggle="pill" data-bs-target="#pills-diagnostico" type="button" role="tab" aria-controls="pills-diagnostico" aria-selected="false">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se-5.svg" alt="" class="icon">
                  <p>Imágenes diagnósticas</p>
                </div>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-3 servicios__dos-btn border border-secondary custom-button" id="pills-mantenimiento-tab" data-bs-toggle="pill" data-bs-target="#pills-mantenimiento" type="button" role="tab" aria-controls="pills-mantenimiento" aria-selected="false">
                <div class="btn__decoracion d-flex align-items-center gap-2">
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se-4.svg" alt="" class="icon">
                  <p>Mantenimiento de la salud</p>
                </div>
            </button>
        </li>
    </ul>
      <div class="tab-content mt-5 mb-5" id="myTabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
          <!-- MEDICINA GENERAL -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Medicina General</h1>
              <p>La medicina general representa el primer nivel de atención médica.</p><br>
              <p>Los médicos y médicas generales son profesionales con preparación académica para la prevención, detección, tratamiento y seguimiento de enfermedades agudas y crónicas. Tienen la capacidad de resolver problemas de salud de forma transversal y de decidir la derivación a especialistas cuando una patología se descompensa o lo requiere.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adulto y adulto mayor.</p>
                <hr>
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
          <!-- ODONTOLOGIA -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Odontología</h1>
              <p>La atención de consulta externa en odontología general, incluye consultas iniciales y de control, esta enfocada en la atención preventiva y curativa, realizando el tratamiento clínicos bucales a pacientes con el fin de preservar su salud bucal y brindando bienestar.</p><br>
              <p>La atención por odontología general, comienza con la fase de higiene oral, en el cual se realiza el tratamiento preventivo incluyendo educación en salud oral y según los hallazgos se realiza tratamiento integral con la participación de especialistas si el caso lo requiere.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adulto y adulto mayor.</p>
                <hr>
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>

          <h2 class="text-center servicios__titulo">Te ofrecemos:</h2>


          <div class="ips__servicios">
            <div class="servicio__ofrecidos">
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-1.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Cirugía maxilofacial</h6>
                  <p>Es una especialidad quirúrgica que se enfoca en el diagnóstico y tratamiento de infecciones relacionadas con la boca, mandíbula y estructuras faciales.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-2.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Cirugía oral</h6>
                  <p>Hace referencia a cualquier procedimiento quirúrgico en la boca y la mandíbula o en las áreas circundantes.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-3.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Rehabilitación oral</h6>
                  <p>Se encarga de restaurar la función y la estética de la boca mediante tratamientos como prótesis dentales, implantes y otros procedimientos.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-4.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Periodoncia</h6>
                  <p>Es el diagnóstico, tratamiento y prevención de enfermedades que afectan las encías y las estructuras de soporte de los dientes.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-5.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Odontología General</h6>
                  <p>Abarca el diagnóstico, tratamiento y prevención de enfermedades bucales comunes.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/odontologia/odo-6.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Endodoncia</h6>
                  <p>Es la especialidad de la odontología que se centra en el tratamiento de los conductos radiculares.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-laboratorio" role="tabpanel" aria-labelledby="laboratorio-tab">
          <!-- LABORATORIO CLINICO -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Laboratorio Clínico</h1>
              <p>En NordVital IPS, entendemos que la precisión y la rapidez en los resultados de los análisis clínicos son esenciales para un diagnóstico médico efectivo y un tratamiento adecuado. Nuestro Laboratorio Clínico se destaca por su compromiso con la excelencia y la innovación, garantizando que cada prueba se realice con los más altos estándares de calidad y utilizando tecnología de punta.</p><br>
              <p>Contamos con un equipo de profesionales altamente capacitados y dedicados, cuyo objetivo principal es brindar un servicio confiable y seguro. Nuestra infraestructura está diseñada para optimizar cada etapa del proceso, desde la recolección de muestras hasta la entrega de resultados, asegurando así la comodidad y tranquilidad de nuestros pacientes.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adulto y adulto mayor.</p>
                <hr>
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>

          <h2 class="text-center servicios__titulo">Te ofrecemos:</h2>

          <div class="laboratorio-serv-items">
            <div class="laboratorio-item">
              <h5>Inmunoquímica</h5>
              <p>Detectamos y medimos sustancias en la sangre para ayudar en el diagnóstico y monitoreo de diversas enfermedades.</p>
            </div><hr>
            <div class="laboratorio-item">
              <h5>Inmunoserología</h5>
              <p>Evaluamos la respuesta inmunológica del cuerpo frente a infecciones y enfermedades a través del análisis de sueros.</p>
            </div><hr>
            <div class="laboratorio-item">
              <h5>Hematología</h5>
              <p>Analizamos la sangre y sus componentes para diagnosticar condiciones como anemia, infecciones y trastornos hematológicos.</p>
            </div><hr>
            <div class="laboratorio-item">
              <h5>Coagulación</h5>
              <p>Examinamos los procesos de coagulación sanguínea para identificar trastornos que afectan la hemostasia.</p>
            </div><hr>
            <div class="laboratorio-item">
              <h5>Microscopía</h5>
              <p>Utilizamos técnicas microscópicas avanzadas para observar células y tejidos, proporcionando diagnósticos precisos y detallados.</p>
            </div>
          </div>

          <div class="resultados-lab-container">
            <div class="resultados-info_lab">
              <h1>¡Obtén tus Resultados de Laboratorio con <span>NordVital IPS!</span></h1>
              <p>Tu salud es nuestra prioridad. Ahora puedes acceder a tus resultados de laboratorio de manera rápida y segura desde la comodidad de tu hogar.</p><br>
              <p>Simplemente ingresa a nuestro portal en línea y obtén toda la información que necesitas al instante.</p><br>
              <a href="/Pagina-nordvitalips/html/resultado-laboratorio.php">Ver más</a>
            </div>
            <div class="resultados-img-lab">
              <img src="/Pagina-nordvitalips/images/Servicios/servicio__enfermeras.png" alt="">
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-medicina" role="tabpanel" aria-labelledby="medicina-tab">
          <!-- MEDICINA ESPECIALIZADA -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Medicina Especializada</h1>
              <p>Nordvital IPS tiene un modelo de atención basado en la medicina familiar fundamentado en el abordaje integral del paciente desde los aspectos biológicos, psicológicos y sociales para modificar los factores de riesgo y creando una cultura de compromiso para la promoción de la salud y prevención de la enfermedad. Este enfoque hace eficiente el proceso de atención y asegura la pertinencia de las remisiones a otros niveles de atención.</p><br>
              <p>En este espacio encontrarás nuestras especialidades y subespecialidades médicas enfocadas en la alta complejidad. Nuestro enfoque integral involucra a un equipo multidisciplinario de profesionales en áreas de la salud, apoyados por la más avanzada tecnología.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adulto y adulto mayor.</p>
                <hr>
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>

          <h2 class="text-center servicios__titulo">Te ofrecemos:</h2>

          <div class="ips__servicios">
            <div class="servicio__ofrecidos">
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-1.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Medicina Familiar</h6>
                  <p>Es una especialidad médica que proporciona cuidado y atención sanitaria continua e integral a las personas y familias.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-2.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Medicina Interna</h6>
                  <p>Es una especialidad médica que permite el diagnóstico y el tratamiento integral de los pacientes adultos.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-3.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Pediatria</h6>
                  <p>La Pediatría se dedica al cuidado integral de la salud de los niños, desde el nacimiento hasta la adolescencia.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-4.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Cardiología</h6>
                  <p>La Cardiología se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-4.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Cardiología Pediatrica</h6>
                  <p>La Cardiología pediátrica se especializa en el diagnóstico y tratamiento de problemas cardíacos en niños.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-6.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Ginecobstetricia</h6>
                  <p>La Ginecobstetricia se especializa en la salud femenina, abarcando el embarazo, parto y cuidados postnatales.</p>
                </div>
              </div>
            </div>
            <button id="see-more-btn" class="btn-vr">Ver más</button>
            <div class="servicio__ofrecidos hidden" id="extra-services">
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-7.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Endocrinología</h6>
                  <p>Es el campo de la medicina que se relaciona con los sistemas que controlan las hormonas.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-7.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Endocrinología Pediátrica</h6>
                  <p>Se dedica a evaluar y tratar a pacientes pediátricos con enfermedades endocrinas y desequilibrios hormonales.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-9.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Otorrinolaringología</h6>
                  <p>La Otorrinolaringología se especializa en el diagnóstico y tratamiento de enfermedades del oído, nariz y garganta.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-11.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Neumología</h6>
                  <p>Es la disciplina de la medicina que estudia las enfermedades que afectan el aparato respiratorio.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-11.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Neumología Pediátrica</h6>
                  <p>La Neumología pediátrica se dedica al diagnóstico y tratamiento de enfermedades respiratorias en niños.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-12.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Dermatología</h6>
                  <p>Es la disciplina de la medicina que se encarga de estudiar la estructura y función de la piel.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-10.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Nefrología</h6>
                  <p>La Nefrología se encarga del estudio, diagnóstico y tratamiento de enfermedades del riñón y del sistema urinario.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-10.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Nefrología Pediatrica</h6>
                  <p>La Nefrología pediátrica se especializa en el diagnóstico y tratamiento de enfermedades renales en niños.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-15.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Reumatología</h6>
                  <p>La Reumatología trata enfermedades de articulaciones, músculos, huesos y tejidos conectivos para mejorar la calidad de vida del paciente.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-16.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Neurología</h6>
                  <p>Diagnostica y trata enfermedades del sistema nervioso central y periférico, incluyendo cerebro, médula espinal, nervios y músculos.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-17.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Nutrición y Dieta</h6>
                  <p>Nuestro servicio de Nutrición ofrece atención personalizada, proporcionando orientación y análisis para desarrollar un plan de acción que mejore su salud.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-18.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Oftalmología</h6>
                  <p>Trata enfermedades de los ojos y tejidos cercanos, colaborando con Optometría para manejar defectos visuales y condiciones médico-quirúrgicas.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-16.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Infectología Pediátrica</h6>
                  <p>Se especializa en el manejo de enfermedades pediátricas causadas por microorganismos.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/Servicios-ofrecidos/servicio-20.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Psicología</h6>
                  <p>Nuestro servicio de psicología proporciona atención psicológica adaptada a las necesidades individuales de cada paciente.</p>
                </div>
              </div>
            </div>
            <button id="see-less-btn" class="hidden btn-vr">Ver menos</button>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-diagnostico" role="tabpanel" aria-labelledby="diagnostico-tab">  
          <!-- IMAGENES DIAGNOSTICAS -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Imagenes Diagnósticas</h1>
              <p>La complementación terapéutica es un apoyo esencial tanto para la atención médica como odontológica, ya que proporciona herramientas y recursos adicionales que facilitan un diagnóstico preciso y una intervención efectiva.</p><br>
              <p>Este proceso incluye una variedad de ayudas paraclínicas, tales como exámenes de laboratorio, estudios de imagen, pruebas de función y otros métodos de evaluación que son cruciales para confirmar los diagnósticos iniciales realizados por los profesionales de la salud.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adulto y adulto mayor.</p>
                <hr>
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>

          <h2 class="text-center servicios__titulo">Te ofrecemos:</h2>

          <div class="ips__servicios">
            <div class="servicio__ofrecidos">
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-1.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Toma de Muestras</h6>
                  <p>Proceso de recolectar muestras biológicas para análisis.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-2.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Laboratorio Clínico</h6>
                  <p>Realiza análisis de sangre, orina y otros fluidos para diagnóstico médico.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-3.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Terapia Respiratoria</h6>
                  <p>Tratamiento de gestión de enfermedades y condiciones respiratorias.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-4.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Fisioterapia</h6>
                  <p>Terapia para mejorar la movilidad y función física tras lesiones o enfermedades.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-5.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Fonoaudiología</h6>
                  <p>Tratamiento de problemas del habla, lenguaje y comunicación. </p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-1.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Toma de Muestras de Ginecológicas</h6>
                  <p>Recolección de muestras para detectar enfermedades ginecológicas</p>
                </div>
              </div>
            </div>
            <button id="see-more-btn-2" class="btn-vr">Ver más</button>
            <div class="servicio__ofrecidos hidden-2" id="extra-services-2">
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-7.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Imágenes diagnósticas</h6>
                  <p>Diagnóstico mediante ecografías, ecografías obstetricas, ginecológicas y radiografias orales.</p>
                </div>
              </div>
              <div class="servicio">
                <div class="servicio__ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/imagenes_diagnosticas/img-dig-8.svg" alt="">
                </div>
                <div class="servicioips__dscrpn">
                  <h6>Diagnóstico vascular</h6>
                  <p>Evaluación de arterias y venas para detectar problemas circulatorios.</p>
                </div>
              </div>
            </div>
            <button id="see-less-btn-2" class="hidden-2 btn-vr">Ver menos</button>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-mantenimiento" role="tabpanel" aria-labelledby="mantenimiento-tab">
          <!-- MANTENIMIENTO DE LA SALUD -->
          <div class="servicio__item-container">
            <div class="servicio__item-dscpn">
              <div class="d-flex align-items-center">
                <img src="/Pagina-nordvitalips/images/Servicios/ico-se1.svg" alt="">
                <h5><em>Servicios</em></h5>
              </div>
              <h1>Mantenimiento de la Salud</h1>
              <p>El nuevo Modelo de Atención en Salud hace énfasis en las actividades de promoción de la salud y prevención de la enfermedad.</p><br>
              <p>Por esta razón, Nordvital IPS cuenta con estrategias de educación, cultura, adopción de estilos de vida saludables y concienciación dirigidas a la población, incluyendo a usuarios, familias y la sociedad en general.</p><br>
              <p>Dentro de los programas de Promoción y Prevención (P&P) se incluyen actividades de acompañamiento, orientación y capacitaciones prácticas sobre alimentación sana, ejercicio adecuado, asistencia, manejo de medicamentos y controles médicos.</p>
            </div>
            <div class="servicio__item-contacto rounded-5">
              <div class="servicio__contacto">
                <h5>Contáctenos</h5>
                <hr>
                <p>Contamos con <strong>atención 12 horas</strong> del día (De 7:00 a.m. a 7:00 p.m.), en nuestro <strong>servicio de cita prioritaria</strong> para niños, adolescente, adultos y adultos mayores
                <p>En nuestro servicio de consulta institucional, tenemos horarios según la agenda de citas.</p>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p><strong>Comunícate con nuestro Call Center</strong></p>
                  <img src="/Pagina-nordvitalips/images/Servicios/ico-se2.svg" alt="">
                </div>
              </div>
            </div>
          </div>

          <h2 class="text-center servicios__titulo">Te ofrecemos:</h2>

          <div class="mantenimiento-service-container">
            <div class="mantenimiento-item">
              <div class="mantenimiento-contenido">
                <div class="mant-ico">
                  <img src="/Pagina-nordvitalips/images/Servicios/mantenimiento/mant-1.svg" alt="">
                </div>
                <div class="mant-descrpcon">
                  <h5>Ruta Integral de Atención en Salud para la Población Materno Perinatal</h5>
                  <p>Conjunto de procedimientos y servicios coordinados y diseñados para garantizar el cuidado integral de las mujeres embarazadas y sus recién nacidos</p>
                </div>
              </div><br>
              
              <div class="ocultar-info">
                <ul>
                  <li> Atención para el cuidado preconcepcional.</li>
                  <li> Interrupción voluntaria del embarazo.</li>
                  <li> Atención para el cuidado prenatal.</li>
                  <li> Atención en salud para la valoracion, promocion y apoyo de la lactancia materna.</li>
                  <li> Curso de preparación para la maternidad y la paternidad.</li>
                  <li> Atención en salud bucal.</li>
                  <li> Atención para la promoción de la alimentación y nutrición.</li>
                  <li> Atención del puerperio.</li>
                  <li> Atención para el cuidado recién nacido.</li>
                  <li> Atención para el seguimiento al recién nacido.</li>
                  <li> Educación para la salud.</li>
                  <li> Servicio de Vacunación.</li>
                </ul>
              </div>
              <div class=" d-flex justify-content-center">
                <button class="mantenimiento-btn">Ver más</button>
              </div>
            </div>
            <div class="mantenimiento-item">
                <div class="mantenimiento-contenido">
                  <div class="mant-ico">
                    <img src="/Pagina-nordvitalips/images/Servicios/mantenimiento/mant-2.svg" alt="">
                  </div>
                  <div class="mant-descrpcon">
                    <h5>Mantenimiento de la salud</h5>
                    <p>Se refiere a las actividades y medidas destinadas prevenir enfermedades, detectar problemas de salud en etapas tempranas y promover una vida saludable.</p><br>
                  </div>
                </div>
              <div class="ocultar-info">
                <ul>
                <li> Atención en salud por pediatria, medicina general o familiar, y enfermería para la primera infancia.</li>
                <li> Atención en salud por medicina general, pediatria o medicina familiar, y enfermería para la infancia.</li>
                <li> Servicio de Vacunación.</li>
                <li> Atención en salud por medicina general o familiar y enfermería para la adolescencia.</li>
                <li> Atención en salud por medicina general o familiar para la juventud.</li>
                <li> Atención en salud por medicina general o familiar para la vejez.</li>
                <li> Detección temprana de cáncer de cuello uterino.</li>
                <li> Detección temprana de cáncer de mama.</li>
                <li> Detección temprana de cancer de prostata.</li>
                <li> Detección temprana de cáncer de colon y recto.</li>
                <li> Atención para la planificación familiar y la anticoncepción.</li>
                <li> Fortificación con micronutrientes en polvo.</li>
                <li> Educación y comunicación para la salud.</li>
                </ul>
              </div><br>
              <div class=" d-flex justify-content-center">
                <button class="mantenimiento-btn">Ver más</button>
              </div>
            </div>
          </div>
          
        </div>
      </div><!-- End Pills Tabs -->
  </div>
</div>
</main>
</body>

<?php
require __DIR__ . '/footer.php';
// require __DIR__ . '/chat-nordvital.php';
require __DIR__ . '/notificacion.php';
?></div>