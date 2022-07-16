<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- importar fuentes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- importar estilos --}}
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
    {{-- cambia el titulo de la pestaña del navegador --}}
    <title>Carolina Díaz Romero</title>
</head>

<body>
    {{-- encabezado de la pagina --}}
    <header>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
            class="bi bi-browser-chrome" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
        </svg>

        <h1 id="slogan">
            <span class="text-green">D</span>esarrolladora
            <span class="text-green">Web</span>
        </h1>
        {{-- menu de navegacion --}}
        <nav id="nav-desktop">
            {{-- logo --}}
            <a href="" class="text-md font-satisfy" id="logo">Carolina Díaz Romero</a>
            <ul id="menu-desktop">

                <li class="text-sm">
                    <a href="#about" class="font-satisfy">
                        Sobre mi
                    </a>
                </li>

                <li class="text-sm">
                    <a href="#proyects" class="font-satisfy">
                        Proyectos
                    </a>
                </li>

                <li class="text-sm">
                    <a href="#skills" class="font-satisfy">
                        Habilidades
                    </a>
                </li>

                <li class="text-sm">
                    <a href="#contact" class="font-satisfy">
                        Contacto
                    </a>
                </li>

            </ul>
        </nav>
    </header>
    {{-- contenido principal --}}

    <div id="main-content">
        {{-- sobre mi --}}
        <main id="about" class="row w-100 justify-content-center text-center align-items-center bg-transparent">
            <div class="col-10">
                <h3 class="bg-terciary text-primary p-4 text-center rounded shadow-lg fw-bold mb-5">TSU en DSM Carolina
                    Diaz Romero</h3>
            </div>
            <div class="col-12 col-lg-8 fs-4">
                <p>
                    Egresada como Tecnico Superior Universitario en Tecnologias de la informacion area Desarrollo de
                    Software Multiplataforma de la Universidad Tecnologica del Valle de toluca en el año 2021.
                    Desarrolladora de software de nacionalidad mexicana enfocada en el desarrollo web fullstack</p>
                <p>
                    Actualmente Estudio la Ingenieria en Gestion y Desarrollo de Software en la Universidad Tecnologica del Valle
                    de Toluca donde estoy cursando el 9° Cuatrimestre de 11° Cuatrimestrestres totales.
                </p>
                <p>
                    Me apasiona el desarrollo web pues me permite dejar mi mente volar ademas de que me da una salida al mundo laboral y un
                    escape de las cosas del dia a dia, pues requiere tanto que hace que se me olvide el resto de las cosas de mi vida. Quiero
                    convertirme en una desarrolladora profesional y un dia poder observar las cosas de las cuales soy capaz de hacer, pues me siento
                    muy motivada y orgullosa para salir adelante y ver mis avances poco a poco dentro de esta area, pues el desarrollo web me permite
                    explotar mis habilidades al maximo teniendo tantas areas de aplicacion, tantos problemas y tantas formas de dar solucion, crear
                    o innovar tecnologia web.
                </p>
            </div>
        </main>

        <section id="proyects" class="row w-100 justify-content-center align-items-center">

            <div class="col-10">
                <h3 class="bg-terciary text-primary p-4 text-center rounded shadow-lg fw-bold">Proyectos</h3>
            </div>

            <div class="col-11 col-lg-3">
                <div class="card shadow-lg border border-terciary rounded p-4 m-2 me-0">
                    <div class="proyect">
                        <div>
                            <h6><a href="http://www.proyectos.dsgys.com/"
                                    class="link-light link-light text-decoration-none" target="_blank">DI-RO
                                    MUEBLERIA</a></h6>
                        </div>
                        <img src="https://www.elmueble.com/medio/2020/04/20/el-corte-ingles_c6e43c0e_1301x748.jpg"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="http://www.proyectos.dsgys.com/"
                                class="link-light text-decoration-none text-terciary" target="_blank">DI-RO
                                MUEBLERIA</a>
                        </h3>
                        <p class="card-text border border-1 border-secondary p-5 fs-5">
                            Proyecto para la muebleria DI-RO
                            de la familia Díaz donde se requirió un
                            sistema de inventario asi como el control de los pagos en cada venta
                        </p>

                        <a href="http://www.proyectos.dsgys.com/" class="btn btn-terciary text-white">Muebles DiRo</a>
                    </div>
                </div>
            </div>

            <div class="col-11 col-lg-3">
                <div class="card shadow-lg border border-terciary rounded p-5 m-2 ms-0 me-0">
                    <div class="proyect">
                        <div>
                            <h6><a href="http://www.proyectos.dsgys.com/" class="link-light text-decoration-none"
                                    target="_blank">DI-RO
                                    MUEBLERIA</a></h6>
                        </div>
                        <img src="https://www.elmueble.com/medio/2020/04/20/el-corte-ingles_c6e43c0e_1301x748.jpg"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="http://www.proyectos.dsgys.com/"
                                class="link-light text-decoration-none text-terciary" target="_blank">DI-RO
                                MUEBLERIA</a>
                        </h3>
                        <p class="card-text border border-1 border-secondary p-5 fs-5">Proyecto para la muebleria DI-RO
                            de la familia Díaz donde se requirió un
                            sistema de inventario asi como el control de los pagos en cada venta </p>

                        <a href="http://www.proyectos.dsgys.com/" class="btn btn-terciary text-white">Muebles DiRo</a>

                    </div>
                </div>
            </div>

            <div class="col-11 col-lg-3">
                <div class="card shadow-lg border border-terciary rounded p-4 m-2 ms-0">
                    <div class="proyect">
                        <div>
                            <h6><a href="http://www.proyectos.dsgys.com/" class="link-light text-decoration-none"
                                    target="_blank">DI-RO
                                    MUEBLERIA</a></h6>
                        </div>
                        <img src="https://www.elmueble.com/medio/2020/04/20/el-corte-ingles_c6e43c0e_1301x748.jpg"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="http://www.proyectos.dsgys.com/"
                                class="link-light text-decoration-none text-terciary" target="_blank">DI_RO
                                MUEBLERIA</a>
                        </h3>
                        <p class="card-text border border-1 border-secondary p-5 fs-5">Proyecto para la muebleria DI-RO
                            de la familia Díaz donde se requirió un
                            sistema de inventario asi como el control de los pagos en cada venta </p>

                        <a href="http://www.proyectos.dsgys.com/" class="btn btn-terciary text-white">Muebles DiRo</a>
                    </div>
                </div>
            </div>

        </section>

        <section id="skills" class="row w-100 justify-content-center align-items center">

            <div class="col-10">
                <h3 class="bg-terciary text-primary p-4 text-center rounded shadow-lg fw-bold">Habilidades</h3>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png"
                        alt="javascript" class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">JavaScript</h6>
                    <p class="w-75 mx-auto text-center">
                        Desarrollo nativo con el lenguaje de programacion JavaScript para darle vida a las paginas web
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 65%; background: #a5eea0;" aria-valuenow="65" aria-valuemin="0"
                            aria-valuemax="100">65%</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://www.theblocklearning.com/wp-content/uploads/2018/09/logo_php.png"
                        alt="javascript" class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">PHP</h6>
                    <p class="w-75 mx-auto text-center">
                        Desarrollo Backend nativo con uno de los lenguajes mas dominantes de la web hasta la epoca
                        actual
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 85%; background: #a5eea0;" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100">85%</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174854.png" alt="javascript"
                        class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">HTML</h6>
                    <p class="w-75 mx-auto text-center">
                        Lenguaje basico de marcado de hypertexto esencial para la realizacion de paginas web
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 95%; background: #a5eea0;" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/800px-CSS3_logo.svg.png"
                        alt="javascript" class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">CSS</h6>
                    <p class="w-75 mx-auto text-center">
                        Lenguaje basico de estilo para gestionar y administrar las vistas de los sitios web
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 95%; background: #a5eea0;" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                        alt="javascript" class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">Laravel</h6>
                    <p class="w-75 mx-auto text-center">
                        Framework para trabajo acelerado en API - WebServer usando PHP para el desarrollo backend
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 95%; background: #a5eea0;" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="skill-card p-5 m-3 rounded text-center">
                    <img src="https://blog.irontec.com/wp-content/uploads/2016/01/mysql-logo-300x204.png"
                        alt="javascript" class="img-fluid" width="75px" height="75px">
                    <h6 class="text-center my-2 fw-bold fs-3 text-primary">MySQL</h6>
                    <p class="w-75 mx-auto text-center">
                        Gestion de Bases de Datos SQL con MySQL para el dinamismo de aplicaciones web en el resguardo y
                        gestion de datos
                    </p>

                    <div class="progress">
                        <div class="progress-bar text-terciary fs-6" role="progressbar"
                            style="width: 45%; background: #a5eea0;" aria-valuenow="45" aria-valuemin="0"
                            aria-valuemax="100">45%</div>
                    </div>
                </div>
            </div>

        </section>

        <section id="contact" class="row w-100 justify-content-between align-items-center mb-5 p-5 pb-5">

            <div class="col-10 mx-auto my-5">
                <h3 class="bg-terciary text-primary p-4 text-center rounded shadow-lg fw-bold">Contacto</h3>
            </div>

            <div class="col-12 col-lg-6 my-3 text-center">
                <div class="d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <span class="text-secondary fs-4 fw-bold">al221811725@gmail.com</span>
                </div>

                <div class="d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-phone-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                    </svg>
                    <span class="text-secondary fs-4 fw-bold">+52 729 147 3044</span>
                </div>


                <div class="d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-cursor-fill" viewBox="0 0 16 16">
                        <path
                            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                    </svg>
                    <span class="text-secondary fs-4 fw-bold">Jose Martinez de los Reyes #52, Barrio. La
                        Magdalena OTZ,
                        Estado de México, México</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 overflow-hidden">
                <iframe <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.739204419137!2d-99.61520008578317!3d19.337119848739185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d27594b3374663%3A0xa177c5ee1ca4f6ee!2sJuan%20Jos%C3%A9%20Mart%C3%ADnez%20de%20Los%20Reyes%2C%20La%20Magdalena%20Otzacatipan%2C%20San%20Mateo%20Otzacatipan%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1657954240151!5m2!1ses!2smx"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>

    {{-- footer --}}
    <footer>
        <nav id="nav-mobile">

            <ul id="menu-mobile">

                <li class="text-sm">
                    <a href="#about" class="font-satisfy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-file-person-fill" viewBox="0 0 16 16">
                            <path
                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                        </svg>

                    </a>
                </li>

                <li class="text-sm">
                    <a href="#proyects" class="font-satisfy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-folder-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                        </svg>

                    </a>
                </li>

                <li class="text-sm">
                    <a href="#skills" class="font-satisfy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tools" viewBox="0 0 16 16">
                            <path
                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                        </svg>
                    </a>
                </li>

                <li class="text-sm">
                    <a href="#contact" class="font-satisfy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg>
                    </a>
                </li>

            </ul>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
