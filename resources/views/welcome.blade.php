<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Preguntas.css') }}">
</head>
<body>
    <img src="{{ asset('imagen.jpeg') }}" alt="Imagen" class="img-fluid">

    <div class="border rounded p-4 bg">

<div class="Preguntas_formulario">   
    <h2>Formulario</h2>
<p>A continuación, encontrarás una serie de preguntas sobre diferentes aspectos de tu vida académica, personal y socioeconómica. Te invitamos a responder de manera sincera y consciente. Tus respuestas no tendrán ninguna repercusión en tu proceso de legalización ni en la continuidad de tu beneficio; únicamente serán utilizadas con fines de caracterización y análisis para fortalecer el acompañamiento que Sapiencia brinda a sus beneficiarios.
    Es indispensable para la solicitud del beneficiario diligenciar completamente este Formulario</p>
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf   
@if ($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
    
<div class="row mb-3">
            <div class="col-md-3">
                <div class="nombre">
                    <div class="pb-2 was-validated">
    <label for="nombre1" class="form-label mb-2">Primer nombre</label>
    <input type="text" id="nombre1" name="nombre1" class="form-control" required>
        </div>
    </div>
</div>
    <div class="col-md-3"> 
            <div class="pb-2 was-validated">
    <label for="nombre2" class="form-label mb-2">Segundo nombre</label>
    <input type="text" id="nombre2" name="nombre2" class="form-control">
    </div>
</div>
        <div class="col-md-3">  
            <div class="pb-2 was-validated">
        <label for="apellido1" class="form-label mb-2">Primer apellido</label>
    <input type="text" id="apellido1" name="apellido1" class="form-control" required>
        </div>
    </div>     
    <div class="col-md-3">
        <div class="pb-2 was-validated">
        <label for="apellido2" class="form-label mb-2">Segundo apellido</label>
    <input type="text" id="apellido2" name="apellido2" class="form-control">
            </div>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="pb-2 was-validated">
        <label for="tipodocumento" class="form-label mb-2">Tipo de documento</label>
        <select name="tipodocumento" id="tipodocumento" class="form-select" required>
        <option value="" selected disabled>Seleccionar</option>
        <option value="1">CC</option>
        <option value="2">TI</option>
        <option value="3">RC</option>
        <option value="4">PPT</option>
        <option value="5">NES</option>
        <option value="6">NUIP</option>
        <option value="7">PAP</option>
        <option value="8">PED</option>
        <option value="9">CE</option>
            </select>
        </div>
    </div> 

    <div class="col-md-6">
        <div class="pb-2 was-validated">
        <label for="documento" class="form-label mb-2">Número de documento</label>
    <input type="text" id="documento" name="documento" class="form-control" minlength="5" maxlength="10" 
    pattern="[0-9]+" required>
            </div>
        </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="descripcion" class="form-label mb-2">¿Cómo describirías tu relación con el estudio hasta ahora?</label>
    <select name="descripcion" id="descripcion" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('descripcion') == 'a')>A) Me resulta fácil y disfruto aprender</option>
        <option value="2" @selected(old('descripcion') == 'b')>B) Me esfuerzo y obtengo buenos resultados</option>
        <option value="3" @selected(old('descripcion') == 'c')>C) Me cuesta, pero lo logro</option>
        <option value="4" @selected(old('descripcion') == 'd')>D) Ha sido una lucha constante</option>
        <option value="5" @selected(old('descripcion') == 'e')>E) Nunca me lo había preguntado</option>
    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="investigacioncarrera" class="form-label mb-2">Antes de elegir esta carrera, ¿qué tanto investigaste sobre ella?</label>
    <select name="investigacioncarrera" id="investigacioncarrera" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('investigacioncarrera') == 'a')>A) La conozco muy bien, investigué bastante</option>
        <option value="2" @selected(old('investigacioncarrera') == 'b')>B) Tengo una idea general</option>
        <option value="3" @selected(old('investigacioncarrera') == 'c')>C) Sé poco, me guie por intuición</option>
        <option value="4" @selected(old('investigacioncarrera') == 'd')>D) No la elegí yo</option>
        <option value="5" @selected(old('investigacioncarrera') == 'e')>E) Estoy en proceso de conocerla mejor</option>
    </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="preocupacioncosto" class="form-label mb-2">¿Qué es lo que más te preocupa o te ha costado en tu vida universitaria?</label>
    <select name="preocupacioncosto" id="preocupacioncosto" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('preocupacioncosto') == 'a')>A) El nivel académico</option>
        <option value="2" @selected(old('preocupacioncosto') == 'b')>B) Organizarme y ser disciplinado</option>
        <option value="3" @selected(old('preocupacioncosto') == 'c')>C) Aspectos económicos</option>
        <option value="4" @selected(old('preocupacioncosto') == 'd')>D) Mantener mi red de apoyo</option>
        <option value="5" @selected(old('preocupacioncosto') == 'e')>E) Aún no lo sé, estoy comenzando</option>
    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="familiauniversidad" class="form-label mb-2">¿Tienes familia o amigos que estudian en la universidad?</label>
    <select name="familiauniversidad" id="familiauniversidad" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('familiauniversidad') == 'a')>A) Ninguna</option>
        <option value="2" @selected(old('familiauniversidad') == 'b')>B) 1 persona</option>
        <option value="3" @selected(old('familiauniversidad') == 'c')>C) 2-3 personas</option>
        <option value="4" @selected(old('familiauniversidad') == 'd')>D) Más de 3</option>
        <option value="5" @selected(old('familiauniversidad') == 'e')>E) No lo sé con certeza</option>
    </select>
            </div>
        </div>
    </div>

   <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="responsabilidades" class="form-label mb-2">Además de estudiar ¿Cuáles son tus responsabilidades actuales?</label>
    <select name="responsabilidades" id="responsabilidades" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('responsabilidades') == 'a')>A) Trabajar</option>
        <option value="2" @selected(old('responsabilidades') == 'b')>B) Cuidar hijos</option>
        <option value="3" @selected(old('responsabilidades') == 'c')>C) Cuidar a un familiar</option>
        <option value="4" @selected(old('responsabilidades') == 'd')>D) Sostenerme económicamente</option>
        <option value="5" @selected(old('responsabilidades') == 'e')>E) Apoyar económicamente a mi familia</option>
        <option value="6" @selected(old('responsabilidades') == 'f')>F) Ninguna adicional</option>    
    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="conquienvivira" class="form-label mb-2">¿Con quién vivirás durante tus estudios y con quien?</label>
    <select name="conquienvivira" id="conquienvivira" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('conquienvivira') == 'a')>A) Solo</option>
        <option value="2" @selected(old('conquienvivira') == 'b')>B) Con familiares</option>
        <option value="3" @selected(old('conquienvivira') == 'c')>C) Con amigos</option>
        <option value="4" @selected(old('conquienvivira') == 'd')>D) Más de 3</option>
        <option value="5" @selected(old('conquienvivira') == 'e')>E) No lo sé con certeza</option>
    </select>
            </div>
        </div>
    </div>

   <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="trabajo" class="form-label mb-2">¿Trabajas actualmente o planeas hacerlo mientras estudias?</label>
    <select name="trabajo" id="trabajo" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('trabajo') == 'a')>A) No</option>
        <option value="2" @selected(old('trabajo') == 'b')>B) Sí, menos de 20 horas semanales</option>
        <option value="3" @selected(old('trabajo') == 'c')>C) Sí, más de 20 horas semanales</option>
        <option value="4" @selected(old('trabajo') == 'd')>D) Trabajo de forma informal u ocasional</option>
        <option value="5" @selected(old('trabajo') == 'e')>E) No sé aún</option>    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="llegadauniversidad" class="form-label mb-2">¿Cómo llegas o planeas llegar a la universidad?</label>
    <select name="llegadauniversidad" id="llegadauniversidad" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('llegadauniversidad') == 'a')>A) En transporte propio o familiar</option>
        <option value="2" @selected(old('llegadauniversidad') == 'b')>B) En transporte público, lo tengo resuelto</option>
        <option value="3" @selected(old('llegadauniversidad') == 'c')>C) En transporte público, es un gasto que me preocupa</option>
        <option value="4" @selected(old('llegadauniversidad') == 'd')>D) Depende del día, no siempre tengo o tendré como</option>
        <option value="5" @selected(old('llegadauniversidad') == 'e')>E) He buscado o me interesa buscar apoyo en la universidad para esto</option>
    </select>
            </div>
        </div>
    </div>

       <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="almuerzo" class="form-label mb-2">¿Dónde almuerzas o planeas almorzar en tus días de universidad?</label>
    <select name="almuerzo" id="almuerzo" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('almuerzo') == 'a')>A) Llevo o llevaré comida de casa</option>
        <option value="2" @selected(old('almuerzo') == 'b')>B) Como o comeré en la universidad o cerca</option>
        <option value="3" @selected(old('almuerzo') == 'c')>C) Como o comeré donde pueda según el día</option>
        <option value="4" @selected(old('almuerzo') == 'd')>D) Muchas veces no almuerzo o no podré almorzar</option>
        <option value="5" @selected(old('almuerzo') == 'e')>E) He buscado o me interesa buscar apoyo en la universidad para esto</option>    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="reaccionantedificultad" class="form-label mb-2">Cuando las cosas se ponen difíciles ¿qué haces normalmente?</label>
    <select name="reaccionantedificultad" id="reaccionantedificultad" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('reaccionantedificultad') == 'a')>A) Busco ayuda en alguien de confianza</option>
        <option value="2" @selected(old('reaccionantedificultad') == 'b')>B) Lo resuelvo solo(a)</option>
        <option value="3" @selected(old('reaccionantedificultad') == 'c')>C) Busco orientacion en servicios de apoyo institucional</option>
        <option value="4" @selected(old('reaccionantedificultad') == 'd')>D) Me bloqueo y lo postergo</option>
        <option value="5" @selected(old('reaccionantedificultad') == 'e')>E) Depende mucho de la situación</option>
    </select>
            </div>
        </div>
    </div>

           <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="animoestudio" class="form-label mb-2">¿Cómo describirías tu estado de ánimo actual frente al estudio?</label>
    <select name="animoestudio" id="animoestudio" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('animoestudio') == 'a')>A) Bien, con energía y claridad</option>
        <option value="2" @selected(old('animoestudio') == 'b')>B) Motivado(a) pero nervioso(a) o con presiones</option>
        <option value="3" @selected(old('animoestudio') == 'c')>C) Inseguro(a), con muchas dudas</option>
        <option value="4" @selected(old('animoestudio') == 'd')>D) Bajo mucha presión</option>
        <option value="5" @selected(old('animoestudio') == 'e')>E) Constantemente me siento confundido</option>    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="reaccionantedificultad" class="form-label mb-2">Cuando las cosas se ponen difíciles ¿qué haces normalmente?</label>
    <select name="reaccionantedificultad" id="reaccionantedificultad" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('reaccionantedificultad') == 'a')>A) Busco ayuda en alguien de confianza</option>
        <option value="2" @selected(old('reaccionantedificultad') == 'b')>B) Lo resuelvo solo(a)</option>
        <option value="3" @selected(old('reaccionantedificultad') == 'c')>C) Busco orientacion en servicios de apoyo institucional</option>
        <option value="4" @selected(old('reaccionantedificultad') == 'd')>D) Me bloqueo y lo postergo</option>
        <option value="5" @selected(old('reaccionantedificultad') == 'e')>E) Depende mucho de la situación</option>
    </select>
            </div>
        </div>
    </div>
    <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="apoyoproceso" class="form-label mb-2">¿Tienes al menos una persona cercana que te apoye en este proceso?</label>
    <select name="apoyoproceso" id="apoyoproceso" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('apoyoproceso') == 'a')>A) Sí, varias</option>
        <option value="2" @selected(old('apoyoproceso') == 'b')>B) Sí, una persona</option>
        <option value="3" @selected(old('apoyoproceso') == 'c')>C) Quizás exista alguien</option>
        <option value="4" @selected(old('apoyoproceso') == 'd')>D) Prefiero manejarlo de forma independiente</option>
        <option value="5" @selected(old('apoyoproceso') == 'e')>E) No tengo a nadie cercano</option>    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="actividadsentirbien" class="form-label mb-2">Por fuera del estudio ¿qué actividad te recarga o te hace sentir bien?</label>
    <select name="actividadsentirbien" id="actividadsentirbien" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('actividadsentirbien') == 'a')>A) Deporte o actividad física</option>
        <option value="2" @selected(old('actividadsentirbien') == 'b')>B) Arte, música o expresión creativa</option>
        <option value="3" @selected(old('actividadsentirbien') == 'c')>C) Estar con personas</option>
        <option value="4" @selected(old('actividadsentirbien') == 'd')>D) Estar solo(a), leer, series, videojuegos</option>
        <option value="5" @selected(old('actividadsentirbien') == 'e')>E) No tengo una actividad así actualmente</option>
    </select>
            </div>
        </div>
    </div>
    <div class="row mb-3">
    <div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="interes" class="form-label mb-2">¿Qué tanto te interesa conectarte con otros estudiantes y participar en actividades culturales, deportivas, grupos de estudio, semilleros de investigación, voluntariados, entre otras? </label>
    <select name="interes" id="interes" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('interes') == 'a')>A) Mucho, si surge naturalmente</option>
        <option value="2" @selected(old('interes') == 'b')>B) Algo, si surge naturalmente</option>
        <option value="3" @selected(old('interes') == 'c')>C) Poco, prefiero mantener enfocado(a) en lo académico</option>
        <option value="4" @selected(old('interes') == 'd')>D) Me gustaría, pero me cuesta relacionarme</option>
        <option value="5" @selected(old('interes') == 'e')>E) No lo había pensado</option>    </select>
</div>
</div>
<div class="col-md-6">
    <div class="pb-2 was-validated">
    <label for="perteneceequipo" class="form-label mb-2">¿Perteneces o has pertenecido a algún grupo, equipo o comunidad organizada?</label>
    <select name="perteneceequipo" id="perteneceequipo" class="form-select" required>
        <option value="" disabled selected>Selecciona una opción...</option>
        <option value="1" @selected(old('perteneceequipo') == 'a')>A) Sí, actualmente</option>
        <option value="2" @selected(old('perteneceequipo') == 'b')>B) Sí, antes pero ya no</option>
        <option value="3" @selected(old('perteneceequipo') == 'c')>C) No, pero me gustaría</option>
        <option value="4" @selected(old('perteneceequipo') == 'd')>D) Lo he intentado, pero no he encontrado el espacio adecuado</option>
        <option value="5" @selected(old('perteneceequipo') == 'e')>E) No, y no es algo que me interese</option>
    </select>
            </div>
        </div>
    </div>
    <input type="hidden" name="periodo" value="16">
<div class="mb-3 text-center">
<button type="submit" class="btn btn-outline-success">
    Enviar formulario completo
</button> </div>
</form>
                </div>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <script src="{{ asset('js/app.js') }}"></script>

                </body>
</html>
