<!DOCTYPE html>
<html lang="es">
<head>
  <title>El Universo</title>
  <!-- METAS -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="informacion sobre el universo">
  <meta name="keywords" content="universo, planetas, cosmos, marte, la luna, estrellas, Escala de kardashov, galaxias">
  <meta name="author" content="Sebastian Valencia">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">
  <!-- FUENTES -->
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
  <!-- ICONO -->
  <link rel="icon" href="img/Tierra.png" sizes="32x32">
  <!--- CUSTOM CSS --->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilos generales.css">
</head>
<body>
    <!----------------------------------------------------------------------
    ==== HEADER ====
    ----------------------------------------------------------------------->
    <div class="container-fluid header-fluid">
        <header class="row">
            <div class="col-6 d-flex justify-content-center">
                <h1 class="align-self-center">El Universo</h1>
            </div>
    
            <div class="col-6">
            <img src="img/Tierra.png" alt="Planeta tierra" class="header__imagen">
            </div>
        </header>
    </div>
    <!----------------------------------------------------------------------
    ==== HEADER FIN ====
    ----------------------------------------------------------------------->  
    <div class="contenedor"> 
        <!----------------------------------------------------------------------
        ==== NAV ====
        ----------------------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark menu">
        <div class="container">
            <a class="navbar-brand">
            <img src="img/via lactea.png" alt="via lactea" class="icon-nav">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <!----------------------------------------------------------------------
            ==== PLANETAS ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planetas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-categorias">
                        <a href="html/planetas/mercurio.html" class="dropdown-item">Mercurio</a>
                        <a href="html/planetas/venus.html" class="dropdown-item">Venus</a>
                        <a href="html/planetas/marte.html" class="dropdown-item">Marte</a>
                        <a href="html/planetas/jupiter.html" class="dropdown-item">Jupiter</a>
                        <a href="html/planetas/saturno.html" class="dropdown-item">Saturno</a>
                        <a href="html/planetas/urano.html" class="dropdown-item">Urano</a>
                        <a href="html/planetas/neptuno.html" class="dropdown-item">Neptuno</a>
                        <a href="html/planetas/pluton.html" class="dropdown-item">Pluton</a>
                    </div>
                    </li>
                </ul>
            </div>
            
            <!----------------------------------------------------------------------
            ==== LUNAS / ESTRELLAS ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lunas / Estrellas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-categorias">
                            <a href="html/luna.html" class="dropdown-item">Luna</a>
                            <a href="html/lunas/mas-lunas.html" class="dropdown-item">Mas lunas</a>
                            <a href="html/estrellas/sol.html" class="dropdown-item">El sol</a>
                            <a href="html/estrellas/otras estellas.html" class="dropdown-item">Mas estrellas</a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!----------------------------------------------------------------------
            ==== EXOPLANETAS ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Exoplanetas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-categorias">
                        <a href="#" class="dropdown-item">Kepler-186F</a>
                        <a href="#" class="dropdown-item">HD 209458 b</a>
                        <a href="#" class="dropdown-item">Kepler-11</a>
                        <a href="#" class="dropdown-item">Kepler-16b</a>
                        <a href="#" class="dropdown-item">51 Pegasi b</a>
                        <a href="#" class="dropdown-item">CoRoT 7b</a>
                        <a href="#" class="dropdown-item">Kepler-22b</a>
                        <a href="#" class="dropdown-item">Kepler-10b</a>
                        <a href="#" class="dropdown-item">55 Cancri e</a>
                    </div>
                    </li>
                </ul>
            </div>

            <!----------------------------------------------------------------------
            ==== OTROS CUERPOS ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Otros cuerpos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-categorias">
                        <a href="html/otros-cuerpos/otros-cuerpos.html" class="dropdown-item">Otros cuerpos</a>
                    </div>
                    </li>
                </ul>
            </div>
            
            <!----------------------------------------------------------------------
            ==== GALAXIAS ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galaxias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-categorias">
                        <a href="#" class="dropdown-item">Via Lactea</a>
                        <a href="#" class="dropdown-item">Andromeda</a>
                        <a href="#" class="dropdown-item">NGC 6753</a>
                        <a href="#" class="dropdown-item">Palo de Hockey</a>
                        <a href="#" class="dropdown-item">NGC 4248</a>
                        <a href="#" class="dropdown-item">NGC 2500</a>
                    </div>
                    </li>
                </ul>
            </div>
            
            <!----------------------------------------------------------------------
            ==== MAS... ====
            ----------------------------------------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mas...
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menu-categorias">
                        <a href="#" class="dropdown-item">Teoria de cuerdas</a>
                        <a href="#" class="dropdown-item">Agujero de gusano</a>
                        <a href="html/mas/imagenes.html" class="dropdown-item">Imagenes</a>
                        <a href="#" class="dropdown-item">Videos</a>
                        <a href="html/mas/datos-random.html" class="dropdown-item">Datos random</a>
                    </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!----------------------------------------------------------------------
        ==== NAV - FIN ====
        ----------------------------------------------------------------------->

        <!---------------------------------------------------------------------
        ==== SECTION ====
        -----------------------------------------------------------------------> 
        <div class="container aside-section d-flex justify-content-center">
            <main class="row text-center">
                <section class="col-12 col-md-6 align-self-center section">
                    <div class="section__contenedor">
                        <h4 class="text-white">Calcula Tu Peso En Otro Planeta</h4>
                        <input type="number" value="" id="section__peso" class="form-control section__peso my-3" placeholder="¿Cual es tu peso?">
                        <input type="number" value="" id="section__planeta" class="form-control section__planeta my-2" placeholder="Elige un planeta">
                        <button type="button" id="section__calcular" class="section__calcular btn btn-primary btn-block btn-lg my-3">Calcular Peso</button>
                        <input type="text" value="" id="section__pesofinal" class="form-control section__pesofinal my-3" disabled>
                    </div> 
                </section> 
                
                <div class="col-12 col-md-6 align-self-center">
                    <div class="section__cont2">
                        <p class="section__cont2-p">Planetas : <br>#1 La luna, #2 Mercurio, <br>#3 Venus, #4 Marte, <br>#5 Jupiter, #6 Saturno, <br>#7 urano, #8 neptuno, #9 Pluton</p>
                    </div>
                </div>
            </main>
        </div>  
        <!----------------------------------------------------------------------
        ==== SECTION FIN ====
        -----------------------------------------------------------------------> 

        <!----------------------------------------------------------------------
        ==== CAROUSEL ====
        ----------------------------------------------------------------------->
        <div class="container mb-4">
            <div class="row mt-3">
                <div class="col-12 mt-3">
                <div class="carousel slide" id="secondary-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
                    <li data-target="#secondary-carousel" data-slid-to="1"></li>
                    <li data-target="#secondary-carousel" data-slid-to="2"></li>
                    <li data-target="#secondary-carousel" data-slid-to="3"></li>
                    <li data-target="#secondary-carousel" data-slid-to="4"></li>
                    <li data-target="#secondary-carousel" data-slid-to="5"></li>
                    <li data-target="#secondary-carousel" data-slid-to="6"></li>
                    </ol>
        
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-block">
                        <h4>Sistema Solar</h4>
                        </div>
                        <img src="img/carousel1.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Marte</h4>
                        </div>
                        <img src="img/carousel2.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Saturno</h4>
                        </div>
                        <img src="img/carousel3.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Agujero Negro</h4>
                        </div>
                        <img src="img/carousel4.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Sistema Solar</h4>
                        </div>
                        <img src="img/carousel5.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Via Lactea</h4>
                        </div>
                        <img src="img/carousel6.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-block">
                        <h4>Andromeda</h4>
                        </div>
                        <img src="img/carousel7.jpg" alt="">
                    </div>
                    </div>
        
                    <a href="#secondary-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                    </a>
        
                    <a href="#secondary-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                    </a>
                </div>
                </div>
            </div>
        </div>  
        <!----------------------------------------------------------------------
        ==== CAROUSEL FIN ====
        ----------------------------------------------------------------------->

        <!----------------------------------------------------------------------
        ==== MAIN ====
        ----------------------------------------------------------------------->
        <div class="container">
            <div class="row">
                <article class="main__articulo">
                    <h2 class="main__titulo">Nacimiento Del Universo</h2>

                    <p class="main__article-bigbang">
                        En los años 20  George Lemaître un sacerdote belga propuso la teoria del big bang, diciendo que el universo comenzó a partir de un único átomo primigenio, esta idea ganó empuje más tarde gracias a las observaciones de Edwin Hubble de las galaxias alejándose de nosotros a gran velocidad en todas direcciones, y a partir del descubrimiento de la radiación cósmica de microondas, aunque esta teoria deja muchas preguntas importantes sin respuesta,
                        pero aun asi esta teoría es la que mejor explica y la mas aceptada de cómo se formó el universo, Esta teoría establece que en sus inicios todo el universo completo se concentraba en un mismo lugar, dando lugar a la expansión del universo. Al principio, el universo era muy pequeño y denso. A este estado se le conoce como bola de fuego primaria. Durante el primer segundo solo podían existir partículas elementales como los protones, neutrones y electrones. Pero el universo se enfrió y expandió rápidamente. Durante los siguientes 500 000 años, la radiación electromagnética (luz) era lo más importante en el universo, por lo que es conocida como la era radiación. Cuando el universo se enfrió al punto donde los átomos más simples (hidrógeno) se pudieron formar, la radiación dejó de dominar y la materia prevaleció. La radiación de fondo de microondas fue producida en este momento. Así comenzó la era de la materia , en donde actualmente existe el universo, la edad del universo segun los cientificos se estima en unos 13.800 millones de años aproximadamente.
                    </p>

                    <p class="main__article-4fuerzas">
                        <h2>Las 4 fuerzas del universo</h2>
                        Las 4 fuerzas fundamentales o tambien llamadas interacciones fundamentales del modelo estándar de partículas que gobiernan el universo son: la gravedad, la electromagnetica, la nuclear fuerte y la nuclear debil. Todo lo que sucede en el universo es producto de la actuacion de una o varias de estas fuerzas.

                        <h3>Fuerza electromagnetica</h3>
                        Esta fuerza actua sobre todo lo que tenga carga, y practicamente todo tiene carga asi esta este neutralizada, gracias a esta fuerza es por lo que existen los atomos, tambien es la responsable de la luz, la electricidad y casi cualquier fenomeno que vemos a diario, tambien gracias a esta fuerza es que existen los celulares, computadores, altavoces etc...
                        si la fuerza electromagnetica desapareciese todo se desintegraria quedando una sopa de protones, neutrones y electrones.

                        <h3>Fuerza nuclear fuerte</h3>
                        Esta fuerza actua en a niveles muy pequeños, mucho mas que el atomo, esta es la mas fuerte de las 4, sin esta fuerza no podrian existir los atomos, los protones tienen carga positiva, los electrones tienen carga negativa, y los neutrones no tienen carga, los electrones orbitan el nucle porque son atraidos por la carga positiva, las cargas opuestas se atraen debido a la interaccion de la interaccion electromagnetica, el nucleo del atomo esta formado por protones agrupados ¿no deberian repelerse por la fuerza electromagnetica?. Aca entra la fuerza nuclear fuerte encargada de mantener los protones y los neutrones juntos también, mantiene unidas a las partículas que componen los protones y los neutrones.

                        <h3>Fuerza nuclear debil</h3>
                        La fuerza nuclear debil tiene una levisima intensidad, sin esta fuerza el sol no brillaria, tampoco tendriamos elementos como radio o plutonio. La fuerza nuclear debil es la interacción que interviene en su decaimiento y es la responsable de la mayor parte de la radiación que se produce en el Universo, esta fuerza actua a nuvel de los nucleos atomicos y es la que permite las fusiones, esta fuerza puede producir el cambio de identidad de las particulas involucradas es decir, lo que se conoce como una reaccion de particulas subatomicas, esta interaccion esta confinada a muy cortas distancias de poco mas del nucleo atomico.  

                        <h3>La gravitatoria</h3>
                        La interaccion gravitatoria hace que cualquier tipo de materia provista de energia interaccione entre si, esta es una fuerza puramente atractiva ya que dos cuerpos con masa siempre tienden a atraerse por la fuerza de gravedad a diferencia de otras fuerzas en las que tambien se pueden rechazar los objetos esta fuerza es muy debil pero afecta a todas las particulas incluyendo al foton, la interaccion gravitatoria junto con el electromagnetismo son las interaccione que actuan a grandes distancias pero la fuerza gravitatoria solo tiene caracter atractivo, la gravedad apesar de ser una fuerza muy debil y de un solo sentido posee un alcanze infinito.
                    </p>

                    <p class="main__article-composicion">
                        <h2>¿De que se compone el universo?</h2>
                        El Universo es todo, sin excepciones. Materia, energía, espacio y tiempo, todo lo que existe forma parte del Universo. El Universo está compuesto por galaxias y adentro de las galaxias hay planetas, satélites, astros, estrellas, gas y polvo cósmico.
                        <br>
                        La materia barionica (materia ordinaria) solo representa el 5% del universo, seguido por la materia oscura que representa el 25% y el 70% restante esta compuesto por la energia oscura
                    </p>

                    <p class="main__article-materiaOscura">
                        <h3>¿Que es la materia oscura?</h3>
                        La materia oscura no interactúa de ninguna forma con la radiación electromagnética, siendo completamente transparente, Su existencia se puede inferir a partir de sus efectos gravitacionales en la materia, tales como las estrellas o las galaxias, se sabe que estas estan inmersas en materia oscura haciendo que tengan mucha mas masa de la que tendrian unicamente considerando la materia barionica, la materia oscura es muy importante para las galaxias, es fundamental ya que sin la materia oscura las galaxias no podrian existir, ya que las galaxias no ejercerian la suficiente gravedad para mantenerse unidas, el problema principal de la materia oscura es que es muy dificil de detectar experimentalmente porque interactua muy poco con la materia por lo tanto actualmente se sabe muy poco de ella, solo sabemos que esta ahi por los efectos gravitatorios que genera.
                    </p>

                    <p class="main__article-energiaOscura">
                        <h3>¿Que es la energia oscura?</h3>
                        Al igual que la materia oscura, la energia oscura tambien es muy dificil de detectar por lo que tampoco poseemos mucha informacion, lo que si sabemos es que es la causante de que el universo este en expancion acelerada y por culpa de esta las galaxias estan cada vez mas alejadas, cada vez se alejan mas rapido ya que el espacio entre ellas esta creciendo cada dia a mas velocidad, de hecho, entre mas grande es el universo mas materia oscura hay y esta por todo el universo.
                    </p>

                    <p class="main__article-bigRip">
                        <h2>Big Rip, posible fin del universo</h2>
                        La teoria del big rip es una de las teorias mas aceptadas sobre el final del universo, esta teoria afirma que el universo se ira expandiendo cada vez mas deprisa hasta el punto en que la gravedad sera tan debil que las galaxias y todos sus elementos dejaran de estar unidos, el universo se expandira tanto que llegara un punto en el que todo se desgarre, ningun objeto escapara de este destino.
                        de acuerdo con esta teoria a 60 millones de años antes del final solo habria estrellas aisladas. Aproximadamente tres meses antes del fin, los sistemas solares perderían su cohesión gravitatoria. En los últimos minutos, se desbaratarían estrellas y planetas.
                    </p>
                </article>
            </div>
        </div>
        <!----------------------------------------------------------------------
        ==== MAIN FIN ====
        ----------------------------------------------------------------------->

        <!----------------------------------------------------------------------
        ==== KARDADHOV ====
        ----------------------------------------------------------------------->
        <section class="container">
            <div class="row">
                <div class="col kardashov">
                    <h2 class="kardashov__title">Escala de kardashov</h2>
                    <h3 class="kardashov__title-article">¿Que es?</h3>
                    <article class="kardashov__article">
                        La escala de Kardashov es un método para medir el grado de evolución tecnológica de una civilización, propuesto en 1964 por el astrofísico ruso Nikolái Kardashov,​ Tiene tres categorías, llamadas Tipo I, II y III, basadas en la cantidad de energía que una civilización es capaz de utilizar de su entorno.
                    </article>
                    <h3 class="kardashov__title-article2 mt-3">¿Donde Nos Encontramos?</h3>
                    <article class="kardashov__article-2">
                        El ser humano actualmente se encuentra en 0.7, osea, no llega nisiquiera al tipo 1, y se estima que de 100 a 200 años llegaremos al tipo 1, el tipo 2 en algunos sientos de años, y el tipo 3 entre 100.000 a 1.000.000 de años
                    </article>
                    <h3 class="kardashov__title-article3 mt-4">Tipos</h3>
                    <article class="kardashov__article3 my-3">
                        <b>Tipo 1 :</b> Una civilización de tipo 1 es capaz de aprovechar toda la potencia disponible en un unico planeta. O lo mismo que 10<sup>16</sup>W de energia.
                        <br><br>
                        <b>Tipo 2 :</b> Una civilización de tipo 2 es capaz de aprovechar toda la energia de su estrella. O lo mismo que 4*10<sup>26</sup>W de energia, con esta cantidad de energia se podrian sostener 230.000.000.000.000 (billones) de civilizaciónes actuales.
                        <br><br>
                        <b>Tipo 3 :</b> Una civilización de tipo 3 es capaz de aprovechar toda la energia disponible en una galaxia, una civilización de este tipo seria conocedora de todo lo que tiene que ver con la energia y asi convirtiendose en la especie suprema de su galaxia. O lo mismo que 4*10<sup>37</sup>W de energia.
                    </article>
                </div>
            </div>
        </section>
        <!----------------------------------------------------------------------
        ==== KARDASHOV - FIN ====
        ----------------------------------------------------------------------->
    </div>

    
  

    <!----------------------------------------------------------------------
    ==== JAVASCRIPT BOOTSTRAP ====
    ----------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="bootstrap-js/bootstrap.min.js"></script>
    <!----------------------------------------------------------------------
    ==== LIBRERIA ALERTAS ====
    ----------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!----------------------------------------------------------------------
    ==== CONFIGURACION ALERTAS ====
    ----------------------------------------------------------------------->
    <script src="js/sweetAlert.js"></script>
    <!----------------------------------------------------------------------
    ==== CUSTOM CSS ====
    ----------------------------------------------------------------------->
    <script src="js/javascript.js"></script>
    <script src="js/javascript general.js"></script>
</body>
</html>