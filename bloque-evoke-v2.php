<?php
class block_simplehtml extends block_base {
    public function init() {
        $this->title = get_string('simplehtml', 'block_simplehtml');
    }
function get_content() {
        global $CFG, $OUTPUT, $USER, $DB;
        $userId = $USER->id;
        $cv = 100; // Creative Visionary
        $curiosity = 100;
        $imagination = 100;
        $vision = 100;
        $dc = 100; // Deep Collaborator
        $teamwork = 100;
        $communication = 100;
        $generosity = 100;
        $ec = 100; // Activist Empathic
        $empathy = 100;
        $leadership = 100;
        $courage = 100;
        $st = 100; // Systemic Thinker
        $analysis = 100;
        $systemThin = 100;
        $experiment = 100;
        $consulta = $DB->get_records('competency_usercomp', array('userid' => $userId), '', '*', 0, 0);
        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }
        $this->content = new stdClass();
        if(count($consulta)){
            //$this->content->text = '<h3>Hay Registros: '.count($consulta).'</h3>';
                foreach($consulta as $valor){
                        switch($valor->competencyid){
                        // Creative Visionary
                        // Curiosity
                        case 107:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 108:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 198:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 247:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 259:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 267:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 268:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 284:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 308:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        case 316:
                                $cv -= $valor->grade;
                                $curiosity -= 10;
                        break;
                        // Imagination
                        case 188:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 190:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 242:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 249:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break
                        case 262:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 270:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 277:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 294:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        case 305:
                                $cv -= $valor->grade;
                                $imagination -= 11;
                        break;
                        // Vision
                        case 194:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 191:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 203:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 231:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 266:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 289:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 290:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 295:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 314:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        case 318:
                                $cv -= $valor->grade;
                                $vision -= 10;
                        break;
                        // Deep Colaboration
                        // Teamwork
                        case 181:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 254:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 283:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 293:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 303:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 309:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 310:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        case 317:
                                $dc -= $valor->grade;
                                $teamwork -= 12.5;
                        break;
                        // Communication
                        case 183:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 205:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 229:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 238:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 258:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 271:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 273:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 285:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 288:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        case 300:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                         case 320:
                                $dc -= $valor->grade;
                                $communication -= 9;
                        break;
                        // Generosity
                        case 189:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 196:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 206:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 244:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 248:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 262:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                        case 306:
                                $dc -= $valor->grade;
                                $generosity -= 14;
                        break;
                         //Activist Empathic
                        //Empathy
                        case 193:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 182:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 184:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 252:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 269:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 281:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 282:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 299:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                         case 307:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 314:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        case 319:
                                $ec -= $valor->grade;
                                $empathy -= 9;
                        break;
                        //Leadership
                        case 201:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 200:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 240:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 257:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 276:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 286:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 292:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        case 304:
                                $ec -= $valor->grade;
                                $leadership -= 12.5;
                        break;
                        // Courage
                        case 195:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 202:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 235:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 245:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 272:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 280:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 291:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 302:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        case 321:
                                $ec -= $valor->grade;
                                $courage -= 11;
                        break;
                        // Problem Solver
                        // Analysis
                        case 180:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 186:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 237:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 260:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 261:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 275:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 278:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 297:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        case 313:
                                $st -= $valor->grade;
                                $analysis -= 11;
                        break;
                        // System Thinkin
                        case 185:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 204:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 233:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 250:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                         case 264:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 265:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 274:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 298:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        case 312:
                                $st -= $valor->grade;
                                $systemThin -= 11;
                        break;
                        // Experimentation
                        case 197:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 192:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 199:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 256:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 263:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 279:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 296:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 301:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;
                        case 311:
                                $st -= $valor->grade;
                                $experiment -= 11;
                        break;

                        }
                }
        }
$this->content->text .= "<div class='container'>
    <div class='row'>
        <div class='col-5' data-toggle='collapse' href='#collapseCV' style='cursor: pointer;'>

            <img src='https://devcamilo.github.io/assets/Creativo_visionario.png' role='presentation'>

        </div>
        <div class='col-7' data-toggle='collapse' href='#collapseCV' style='cursor: pointer'>
            <p style='font-size: 25px'>Creador</p>
            <p style='font-size: 25px'>Visionario</p>
            <p style='text-align: right; margin-top: -20px;'>".round((((100 - $cv) * 100) / 156),1)."%</p>
            <hr style='border: 3px solid #294374;'>
            <hr style='border: 2px solid #87eafd;
                                                                                        margin-left: 0%;
                                                                                        margin-right: ".(100 - round((((100 - $cv) * 100) / 156),1))."%;
                        margin-top: -20px'>
        </div>
    </div>
 <div  class=' row collapse' id='collapseCV' style='background-color: #19222E'>
        <div class='col-3'> <!--Curiosidad-->
        </div>
        <div class='col-3'>
           <img src='https://devcamilo.github.io/assets/Poder_Curiosidad.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Curiosidad</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$curiosity."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Imaginacion-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Imaginacion.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Imaginaci  n</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$imagination."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Vision-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Vision.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Visi  n</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$vision."%; margin-top: -20px'>
        </div>
    </div>
    <div class='row'>
        <div class='col-5' data-toggle='collapse' href='#collapseDC' style='cursor: pointer'>
            <img src='https://devcamilo.github.io/assets/Colaborador_profundo.png' role='presentation'>
        </div>
        <div class='col-7' data-toggle='collapse' href='#collapseDC' style='cursor: pointer'>
            <p style='font-size: 25px'>Colaborador</p>
            <p style='font-size: 25px'>Profundo</p>
            <p style='text-align: right; margin-top: -20px;'>".round((((100 - $dc) * 100) / 144),1)."%</p>
            <hr style='border: 3px solid #294374;'>
            <hr style='border: 2px solid #87eafd;
                                                                                        margin-left: 0%;
                                                                                        margin-right: ".(100 - round((((100 - $dc) * 100) / 144),1))."%;
                        margin-top: -20px'>
        </div>
        </div>
<div  class=' row collapse' id='collapseDC' style='background-color: #19222E'>
        <div class='col-3'> <!--Trabajo en Equipo-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Trabajo_Equipo.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Trabajo en Equipo</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$teamwork."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Comunicacion-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Comunicacion.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Comunicaci  n</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$communication."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Generosidad-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Generosidad.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Generosidad</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$generosity."%; margin-top: -20px'>
        </div>
    </div>
     <div class='row'>
            <div class='col-5' data-toggle='collapse' href='#collapseEC' style='cursor: pointer'>
                <img src='https://devcamilo.github.io/assets/Activista_emp%C3%A1tico.png' role='presentation'>
            </div>
            <div class='col-7' data-toggle='collapse' href='#collapseEC' style='cursor: pointer'>
                <p style='font-size: 25px'>Activista</p>
                <p style='font-size: 25px'>Emp  tico</p>
                <p style='text-align: right; margin-top: -20px;'>".round((((100 - $ec) * 100) / 141),1)."%</p>
                <hr style='border: 3px solid #294374;'>
                <hr style='border: 2px solid #87eafd;
                                                                                            margin-left: 0%;
                                                                                            margin-right: ".(100 - round((((100 - $ec) * 100) / 141),1))."%;
                            margin-top: -20px'>
            </div>
        </div>
   <div  class=' row collapse' id='collapseEC' style='background-color: #19222E'>
        <div class='col-3'> <!--Empatia-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Empatia.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Empat  a</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$empathy."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Liderazgo-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Liderazgo.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Liderazgo</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$leadership."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Coraje-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Coraje.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Coraje</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$courage."%; margin-top: -20px'>
        </div>
    </div>
     <div class='row'>
            <div class='col-5' data-toggle='collapse' href='#collapseST' style='cursor: pointer'>
                <img src='https://devcamilo.github.io/assets/Pensador_sist%C3%A9mico.png' role='presentation'>
            </div>
            <div class='col-7' data-toggle='collapse' href='#collapseST' style='cursor: pointer'>
                <p style='font-size: 25px'>Solucionador</p>
                <p style='font-size: 25px'>Problemas</p>
                <p style='text-align: right; margin-top: -20px;'>".round((((100 - $st) * 100) / 149),1)."%</p>
                <hr style='border: 3px solid #294374;'>
                <hr style='border: 2px solid #87eafd;
                                                                                            margin-left: 0%;
                                                                                            margin-right: ".(100 - round((((100 - $st) * 100) / 149),1))."%;
                            margin-top: -20px'>
            </div>
        </div>
   <div  class=' row collapse' id='collapseST' style='background-color: #19222E'>
        <div class='col-3'> <!--Analisis-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_Analisis.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>An  lisis</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$analysis."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Pensamiento-->
        </div>
        <div class='col-3'>
           <img src='https://devcamilo.github.io/assets/Poder_Pensamiento_Sistematico.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Pensamiento sist  mico</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$systemThin."%; margin-top: -20px'>
        </div>
        <div class='col-3'> <!--Experimentacion-->
        </div>
        <div class='col-3'>
          <img src='https://devcamilo.github.io/assets/Poder_experimentacion.png' role='presentation'>
        </div>
        <div class='col-6 align-items-center'>
          <p style='font-size: 15px'>Experimentaci  n</p>
          <hr style='border: 3px solid #294374;'>
          <hr style='border: 2px solid #87eafd; margin-left: 0%; margin-right: ".$experiment."%; margin-top: -20px'>
        </div>
    </div>

    </div>";
    $this->content->items = array();
    $this->content->icons = array();
    return $this->content;
}

    public function applicable_formats() {
    return array('all' => false,
                 'site' => true,
                 'site-index' => true,
                 'course-view' => true,
                 'course-view-social' => false,
                 'mod' => true,
                 'mod-quiz' => false);
}

public function instance_allow_multiple() {
      return true;
}

function has_config () {return true;}
}
