<?php

namespace App\Lib;

class Persona
{
    public $nombre;
    public $genero;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $correoElectronico;
    public $telefono;
    public $celular;
    public $ciudad;

    public function __construct()
    {
         
    }

    public function crearPersona()
    {
        $this->genero = $this->crearGenero();
        $this->nombre = $this->crearNombre($this->genero);
        $this->apellidoPaterno = $this->crearApellido();
        $this->apellidoMaterno = $this->crearApellido();
        $this->correoElectronico = $this->crearCorreo($this->nombre, $this->apellidoPaterno, $this->apellidoMaterno);
        $this->crearCiudadLADA();
    }

    public function crearGenero()
    {
        $genero = ['hombre', 'mujer'];
        return $genero[(rand(0,1))];
    }

    public function crearNombre($genero)
    {
        $nombresH = ['Daniel','David','Gabriel','Benjamín','Samuel','Lucas','Ángel','José','Adrián','Sebastián','Xavier','Juan','Luis','Diego','Óliver','Carlos','Jesús','Alex','Max','Alejandro','Antonio','Miguel','Víctor','Joel','Santiago','Elías','Iván','Óscar','Leonardo','Eduardo','Alan','Nicolás','Jorge','Omar','Paúl','Andrés','Julián','Josué','Román','Fernando','Javier','Abraham','Ricardo','Francisco','César','Mario','Manuel','Édgar','Alexis','Israel','Mateo','Héctor','Sergio','Emiliano','Simón','Rafael','Martín','Marco','Roberto','Pedro','Emanuel','Abel','Rubén','Fabián','Emilio','Joaquín','Marcos','Lorenzo','Armando','Adán','Raúl','Julio','Enrique','Gerardo','Pablo','Jaime','Saúl','Esteban','Gustavo','Rodrigo','Arturo','Mauricio','Orlando','Hugo','Salvador','Alfredo','Maximiliano','Ramón','Ernesto','Tobías','Abram','Noé','Guillermo','Ezequiel','Lucián','Alonzo','Felipe','Matías','Tomás','Jairo'];
        $nombresM = ['Isabella','Olivia','Alexis','Sofía','Victoria','Amelia','Alexa','Julia','Camila','Alexandra','Maya','Andrea','Ariana','María','Eva','Angelina','Valeria','Natalia','Isabel','Sara','Liliana','Adriana','Juliana','Gabriela','Daniela','Valentina','Lila','Vivian','Nora','Ángela','Elena','Clara','Eliana','Alana','Miranda','Amanda','Diana','Ana','Penélope','Aurora','Alexandría','Lola','Alicia','Amaya','Alexia','Jazmín','Mariana','Alina','Lucía','Fátima','Ximena','Laura','Cecilia','Alejandra','Esmeralda','Verónica','Daniella','Miriam','Carmen','Iris','Guadalupe','Selena','Fernanda','Angélica','Emilia','Lía','Tatiana','Mónica','Carolina','Jimena','Dulce','Talía','Estrella','Brenda','Lilian','Paola','Serena','Celeste','Viviana','Elisa','Melina','Gloria','Claudia','Sandra','Marisol','Asia','Ada','Rosa','Isabela','Regina','Elsa','Perla','Raquel','Virginia','Patricia','Linda','Marina','Leila','América','Mercedes'];
        if($genero == 'hombre')
        {
            if(rand(1,2) == 1)
            {
                return $nombresH[rand(0,99)];
            }
            else
            {
                return $nombresH[rand(0,99)]." ".$nombresH[rand(0,99)];
            }
        }
        else if($genero == 'mujer')
        {
            if(rand(1,2) == 1)
            {
                return $nombresM[rand(0,99)];
            }
            else
            {
                return $nombresM[rand(0,99)]." ".$nombresM[rand(0,99)];
            }
        }
    }

    public function crearApellido()
    {
        $apellidos = ['Garcia','Gonzalez','Rodriguez','Fernandez','Lopez','Martinez','Sanchez','Perez','Gomez','Martin','Jimenez','Ruiz','Hernandez','Diaz','Moreno','Muñoz','Alvarez','Romero','Alonso','Gutierrez','Navarro','Torres','Dominguez','Vazquez','Ramos','Gil','Ramirez','Serrano','Blanco','Molina','Morales','Suarez','Ortega','Delgado','Castro','Ortiz','Rubio','Marin','Sanz','Nuñez','Iglesias','Medina','Garrido','Cortes','Castillo','Santos','Lozano','Guerrero','Cano','Prieto','Mendez','Cruz','Calvo','Gallego','Herrera','Marquez','Leon','Vidal','Peña','Flores','Cabrera','Campos','Vega','Fuentes','Carrasco','Diez','Reyes','Caballero','Nieto','Aguilar','Pascual','Santana','Herrero','Montero','Lorenzo','Hidalgo','Gimenez','Ibañez','Ferrer','Duran','Santiago','Benitez','Vargas','Mora','Vicente','Arias','Carmona','Crespo','Roman','Pastor','Soto','Saez','Velasco','Moya','Soler','Parra','Esteban','Bravo','Gallardo','Rojas'];
        return $apellidos[rand(0,99)];
    }

    public function crearCorreo($nombre, $apellidoP, $apellidoM)
    {
        $correos = ['@hotmail.com', '@gmail.com', '@yahoo.com.mx', '@outlook.com', '@live.com'];
        $nombre = $this->normaliza($nombre);
        $apellidoP = $this->normaliza($apellidoP);
        $apellidoM = $this->normaliza($apellidoM);
        $numero = rand(0,3);

        switch ($numero)
        {
            case 0:
                if(rand(1,2) == 1)
                {
                    return $nombre.".".$apellidoP.strval(rand(0,99)).$correos[rand(0,4)];
                }
                else
                {
                    return $nombre.".".$apellidoM.strval(rand(0,99)).$correos[rand(0,4)];
                }
                break;
            case 1:
                if(rand(1,2) == 1)
                {
                    return $nombre."_".$apellidoP.strval(rand(0,99)).$correos[rand(0,4)];
                }
                else
                {
                    return $nombre."_".$apellidoM.strval(rand(0,99)).$correos[rand(0,4)];
                }
                break;
            case 2:
                if(rand(1,2) == 1)
                {
                    return $nombre."-".$apellidoP.strval(rand(0,99)).$correos[rand(0,4)];
                }
                else
                {
                    return $nombre."-".$apellidoM.strval(rand(0,99)).$correos[rand(0,4)];
                }
                break;
            case 3:
                if(rand(1,2) == 1)
                {
                    return $nombre.$apellidoP.strval(rand(0,99)).$correos[rand(0,4)];
                }
                else
                {
                    return $nombre.$apellidoM.strval(rand(0,99)).$correos[rand(0,4)];
                }
                break;
        }
    }

    public function crearCiudadLADA()
    {
        $ciudadLada = [['Acapulco',744],['Aguascalientes',449],['Apizaco',241],['Atlixco',244],['Campeche',981],['Cancún',998],['Celaya',461],['Ciudad Cuauhtémoc',625],['Ciudad de México',55],['Ciudad del Carmen',938],['Ciudad Delicias',639],['Ciudad Guzmán',341],['Ciudad Juárez',656],['Ciudad Lázaro Cárdenas',753],['Ciudad Mante',831],['Ciudad Obregón',644],['Ciudad Valles',481],['Ciudad Victoria',834],['Coatzacoalcos',921],['Colima',312],['Córdoba',271],['Cuautla',735],['Cuernavaca',777],['Culiacán',667],['Chetumal',983],['Chihuahua',614],['Chilpacingo',747],['Chinameca',922],['Durango',618],['Ensenada',646],['Fresnillo',493],['Guadalajara',33],['Guanajuato',473],['Guaymas',622],['Hermosillo',662],['Irapuato',462],['Ixtepec',971],['Jalapa',228],['Jiménez',878],['La Paz',612],['La Piedad',352],['Lagos de Moreno',474],['León',477],['Lerma',728],['Los Mochis',668],['Manzanillo',314],['Matamoros',868],['Mayanalán',733],['Mazatlán',669],['Mérida',999],['Mexicali',686],['Monclova',866],['Monterrey',81],['Morelia',443],['Moroleón',445],['Navojao',642],['Nogales',631],['Nuevo Laredo',867],['Oaxaca',951],['Ocotlán',392],['Orizaba',272],['Pachuca',771],['Parral',627],['Polotitlán',427],['Poza Rica',782],['Puebla',222],['Puerto Vallarta',322],['Querétaro',442],['Reynosa',899],['Sabinas',861],['Sahuayo',353],['Salamanca',464],['Saltillo',844],['San José del Cabo',624],['San Luis Potosí',444],['San Luis Río Colorado',653],['San Marcos Nepantla',594],['San Martín Texmelucan',248],['San Miguel de Allende',415],['Singuilucan',775],['Tampico',833],['Tapachula',962],['Taxco',762],['Tehuacán',238],['Tepatitlan',378],['Tepeji del Rio',773],['Tepic',311],['Texcoco',595],['Tijuana',664],['Tlaxcala',246],['Toluca',722],['Torreón',871],['Tuxpan',783],['Tuxtla Gutiérrez',961],['Uruapan',452],['Veracruz',229],['Villahermosa',993],['Zacatecas',492],['Zacatepec',734],['Zamora',351],['Zihuatanejo',755]];
        $num = rand(0,100);
        $this->ciudad = $ciudadLada[$num][0];
        $numlength = strlen((string)$ciudadLada[$num][1]);
        if($numlength == 3)
        {
            $this->telefono = '('.$ciudadLada[$num][1].') '.(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9));
            $this->celular = '('.$ciudadLada[$num][1].') '.(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9));
        }
        if($numlength == 2)
        {
            $this->celular = '('.$ciudadLada[$num][1].') '.(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9));
            $this->telefono = '('.$ciudadLada[$num][1].') '.(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9)).(rand(0,9));
        }
        
    }

    function normaliza($cadena)
    {
        $cadena = str_replace(' ', '', $cadena);
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        $cadena = strtolower($cadena);
        return utf8_encode($cadena);
    } 
}
