<?php

require_once('../includes/funciones.php');


$a_producto =
    array(
        1 => array(
            'id_producto' => 1,
            "nombre" => "BUZO NIKE HOODIE HERITAGE MUJER NEGRO",
            "descripcion" => "Haz que sea memorable con este buzo con capucha de Nike Sportswear Heritage, un look atemporal confeccionado con un suave tejido de felpa semi cepillado. Posee un corte estándar.
                       <br> Capucha con cordón de ajuste, bolsillo canguro cintura y puños elastizados.
                       <br> Presenta el logo Nike estampado.",
            "id_marca" => 1,
            "precio" => 7.499,
            "id_subcategoria" => 1,
        ),

        2 => array(
            'id_producto' => 2,
            "nombre" => "BUZO NIKE HOODIE HERITAGE MUJER VERDE",
            "descripcion" => "Haz que sea memorable con este buzo con capucha de Nike Sportswear Heritage, un look atemporal confeccionado con un suave tejido de felpa semi cepillado.
            Posee un corte estándar.
            Capucha con cordón de ajuste, bolsillo canguro cintura y puños elastizados.
            Presenta el logo Nike estampado.",
            "id_marca" => 1,
             "precio" => 7.499,
            "id_subcategoria" => 1,
        ),

        3 => array(
            'id_producto' => 3,
            "nombre" => "BUZO NIKE HOODIE HERITAGE MUJER BLANCO",
            "descripcion" => "Hacé que sea memorable con este buzo con capucha de NIKE Sportswear Heritage, un look atemporal confeccionado con un suave tejido de felpa semi cepillado.
            Posee un corte estándar.
            Cuenta con capucha con cordón de ajuste, bolsillo canguro cintura y puños elastizados.
            Presenta el logo NIKE estampado.",
            "id_marca" => 1,
            "precio" => 7.499,
            "id_subcategoria" => 1,
        ),

        4 => array(
            'id_producto' => 4,
            "nombre" => "ZAPATILLA NIKE AIR ZOOM VOMERO 14 MUJER GRIS",
            "descripcion" => "El calzado NIKE Air Zoom Vomero 14 lleva la amortiguación eficaz al siguiente nivel. 
            La unidad Zoom Air de largo completo trabaja con la amortiguación NIKE React para proporcionar una pisada suave y rápida. 
            El diseño elegante de la parte superior está fabricado para brindar soporte a cada paso.
            La tecnología Dynamic Fit complementa los filamentos Flywire con los cordones para ofrecer una sensación de soporte en el mediopié.
            Las cápsulas de espuma rodean la parte trasera del pie para una sensación de ajuste.
            La tecnología Nike React y la unidad Zoom Air brindan una pisada extremadamente suave.
            La parte superior de tela y material sintético transpirable está preparada para brindar soporte y durabilidad.
            Diseñada para corredoras con pisada neutra.",
            "id_marca" => 1,
            "precio" => 16.499,
            "id_subcategoria" => 2,
        ),
        5 => array(
            'id_producto' => 5,
            "nombre" => "ZAPATILLA ADIDAS RESPONSE SR MUJER NEGRA",
            "descripcion" => "Podés correr 100 metros. Un kilómetro. Tal vez tres.
            Estás corriendo y eso es lo más importante.
            Aún mejor si lo hacés con estas zapatillas de running ADIDAS.
            Mediasuela con amortiguación Response Foam, que facilita cada paso.
            Su diseño transpirable con amortiguación te ayuda a seguir trabajando para alcanzar tus metas. 
            Diseñadas para corredoras con pisada neutra.",
            "id_marca" => 2,
            "precio" => 8.199,
            "id_subcategoria" => 2,
        ),
        6 => array(
            'id_producto' => 6,
            "nombre" => "ZAPATILLA FILA LUMIX MUJER ROSA",
            "descripcion" => "Las zapatillas FILA Lumix de mujer sirven para aquellos entrenamientos de media distancia.
            Su capellada con diferentes tejidos facilita el calce.
            La entresuela con tecnologia Energized brinda una exelente amortiguación.
            La suela posee insertos de caucho en puntos especificos para mejor tracción. 
            Diseñadas para corredoras con pisada neutra.",
            "id_marca" => 3,
            "precio" => 5.990,
            "id_subcategoria" => 4,
        ),
        7 => array(
            'id_producto' => 7,
            "nombre" => "ZAPATILLA PUMA X-RAY METALLIC MUJER BLANCA",
            "descripcion" => "Te presentamos las X-Ray, una declaración de amor por lo retro equipada con la mejor tecnología deportiva de PUMA.
            Estas zapatillas incluyen elementos gráficos de gran tamaño que hacen las delicias de los amantes de lo retro y se combinan con una entresuela de EVA moldeada por inyección que te ofrece la mayor comodidad en cada pisada.
            La plantilla Softfoam, proporciona mayor amortiguación, durabilidad óptima y facilita la zancada. ",
            "id_marca" => 3,
            "precio" => 7.299,
            "id_subcategoria" => 2,
        ),
        8 => array(
            'id_producto' => 8,
            "nombre" => "ZAPATILLA ADIDAS ENERGYFALCON AZUL",
            "descripcion" => "Corré para alcanzar tus metas.
            Esta zapatilla de running ADIDAS Energyfalcon presenta un diseño flexible de gran sujeción que proporciona mayor estabilidad y comodidad.
            Su mediasuela Cloudfoam te aporta la amortiguación que necesitás para conseguir todos tus objetivos.
            El talón moldeado protege el tendón de Aquiles y acompaña el movimiento natural del pie, mientras que el refuerzo lateral ofrece mayor sujeción y un ajuste a medida.
            La suela Adiwear es una suela con base de caucho, que proporciona mayor durabilidad al calzado, frente superficies más abrasivas.
            Diseñada para corredores con pisada neutra.",
            "id_marca" => 2,
            "precio" => 7.299,
            "id_subcategoria" => 3,
        ),
        9 => array(
            'id_producto' => 9,
            "nombre" => "ZAPATILLA ADIDAS PULSEBOOST HD AZUL",
            "descripcion" => "La ciudad tiene su propia energía.
            Se siente en el aire y emana del asfalto.
            Aprovechá el poder urbano con estas zapatillas de running ADIDAS.
            Presentan un diseño con amortiguación receptiva que te devuelve la energía que invertís a cada paso y te brinda una sensación de firmeza y conexión con el suelo.
            Incorpora la tecnología Boost HD a la mediasuela para una amortiguación superior.
            Porque no hay ningún otro lugar en el mundo donde preferís estar.
            Diseñadas para corredores con pisada neutra.",
            "id_marca" => 2,
            "precio" => 14.999,
            "id_subcategoria" => 3,
        ),
        10 => array(
            'id_producto' => 10,
            "nombre" => "ZAPATILLA FILA THUNDERBOLT NEGRA",
            "descripcion" => "Las nuevas Thunderbolt de FILA con exclusiva tecnología 3Action en la entresuela, proporcionan una mejor absorción del impacto y respuesta.
            Además, incorpora la tecnología Energized Rubber de alta frecuencia que permite una excelente amortiguación.
            Capellada con sistema de ajuste tipo Slip-On favorece el calce garantizando un buen confort.
            Posee una pieza estabilizadora en su lateral para una mejora estabilidad.
            Suela con insertos de caucho en lugares estratégicos para una mejor tracción y adherencia.",
            "id_marca" => 4,
            "precio" => 5.490,
            "id_subcategoria" => 3,
        ),
        11 => array(
            'id_producto' => 11,
            "nombre" => "ZAPATILLA ADIDAS GALAXY 5 AZUL",
            "descripcion" => "Hacé que cada kilómetro cuente.
            Esta zapatilla ADIDAS hace que cada paso sea bueno.
            Tus pies prácticamente se hunden en el acolchado de felpa. 
            Se siente como si pudieras correr para siempre, o al menos dar otra vuelta.
            La mediasuela CLOUDFOAM, confeccionada en EVA, fue modificada para obtener más propiedades de amortiguación y confort pisada tras pisada.
            La comodidad y el confort pueden ser el complemento perfecto en los entrenamientos para los atletas que van iniciando y/o son ocasionales.
            Diseñada para corredores con pisada neutra.",
            "id_marca" => 2,
            "precio" => 5.399,
            "id_subcategoria" => 4,
        ),
        12 => array(
            'id_producto' => 12,
            "nombre" => "ZAPATILLA ADIDAS RAPIDAFLEX SUMMER.RDY NIÑO NEGRA",
            "descripcion" => "Bienvenidos los días llenos de aventuras, inspiración y nuevas ideas.
            Estas zapatillas ADIDAS para niños les permite jugar durante todo el verano con comodidad.
            Presentan un diseño en malla transpirable que optimiza el flujo de aire, con cordones elásticos y tira ajustable de cierre por contacto para ponerlas y quitarlas rápidamente cuando están entrando y saliendo de la casa constantemente.
            La mediasuela CLOUDFOAM, confeccionada en EVA, fue modificada para obtener más propiedades de amortiguación y confort pisada tras pisada.
            La plantilla antimicrobiana ecológica EcoOrthoLite® proporciona más amortiguación y ventilación, y previene el mal olor.",
            "id_marca" => 2,
            "precio" => 5.999,
            "id_subcategoria" => 4,
        ),
        13 => array(
            'id_producto' => 13,
            "nombre" => "ZAPATILLA NIKE MD RUNNER 2 NIÑO GRIS",
            "descripcion" => "Aprovecha el diseño de las MD Runner 2 para darle a tu hijo el mejor calzado para disfrutar de todos los días.
            Es un calzado ligero confeccionado con una mediasuela acolchada para mayor comodidad durante sus horas de diversión.
            Posee un práctico ajuste de velcro.",
            "id_marca" => 1,
            "precio" => 6.999,
            "id_subcategoria" => 4,
        ),
        14 => array(
            'id_producto' => 14,
            "nombre" => "ZAPATILLA PUMA ST RUNNER V2 NYLON VELCRO NIÑO NEGRA",
            "descripcion" => "Diseñadas para que los más chicos puedan disfrutar todos los días con estilo y comodidad.
            Debido a la naturaleza de exclusiva calidad de la piel y el ante, podría ocurrir que en algunos casos el producto destiñera levemente, sobre todo en condiciones de humedad.
            Mientras esté mojada, se aconseja que la zapatilla no entre en contacto con otras prendas claras hasta que no esté completamente seca.
            Ajuste de velcro.",
            "id_marca" => 3,
            "precio" => 4.799,
            "id_subcategoria" => 4,
        ),
        15 => array(
            'id_producto' => 15,
            "nombre" => "REMERA ADIDAS LINEAR NIÑO NEGRA",
            "descripcion" => "Estás ocupado.
            No tenés tiempo para cambiar de ropa al mediodía.
            Esta remera ADIDAS para niños combina a la perfección con tu ritmo de vida.
            Su tejido jersey de algodón es cómodo y resistente para que puedas moverte sin restricciones.
            El diseño con bloques de color y el logo de ADIDAS en el pecho le dan un look inspirado en el fútbol que no pasa de moda. 
            Presenta el logo ADIDAS estampado.",
            "id_marca" => 2,
            "precio" => 1.799,
            "id_subcategoria" => 5,
        ),
        16 => array(
            'id_producto' => 16,
            "nombre" => "REMERA PUMA ICONIC T7 SLIM NEGRA",
            "descripcion" => "Esta remera se convertirá en una prenda imprescindible, tanto para ir al gimnasio como para hacer cualquier otra cosa.
            Esta prenda clásica de corte ajustado está decorada con el logotipo PUMA de archivo n.º 1 en el pecho y te hará sentir bien por fuera y por dentro gracias a la colaboración de PUMA con la Better Cotton Initiative. 
            Presenta el logo PUMA estampado.",
            "id_marca" => 3,
            "precio" => 2.299,
            "id_subcategoria" => 5,
        ),
        17 => array(
            'id_producto' => 17,
            "nombre" => "BUZO ADIDAS TAN LOGO NEGRO",
            "descripcion" => "Confort total para los días de frío.
            Este buzo forma parte de la colección TAN de ADIDAS, una serie de prendas urbanas inspirados en el mundo del fútbol.
            Su tejido con mezcla de algodón te ofrece la calidez que necesitás.
            El gran logotipo en contraste de la parte frontal muestra tu pasión por el deporte rey. 
            Cintura y puños elastizados.
            Presenta logo estampado.
            Sin friza.",
            "id_marca" => 2,
            "precio" => 4.399 ,
            "id_subcategoria" => 5,
        ),
        18 => array(
            'id_producto' => 18,
            "nombre" => "PANTALON ADIDAS SERENO 19 TRG NEGRO",
            "descripcion" => "Mantenete seco y enfocado.
            El tejido absorbente de este pantalón ADIDAS para hombre aleja el sudor de tu piel mientras entrenás o te relajás.
            Su diseño de piernas cónicas con cierres en los tobillos lo hace fácil de poner y quitar. 
            El tejido Climalite de este pantalón favorece el secado rápido, ya que al ser un tejido ultraligero, absorbe el sudor para alejarlo de la piel y hacer que se evapore rápidamente.
            Cintura elastizada con cordón de ajuste interno.
            Posee bolsillos laterales y botamangas con cierre.
            Presenta el logo ADIDAS estampado.
            Sin friza.",
            "id_marca" => 2,
            "precio" => 4.299,
            "id_subcategoria" => 6,
        ),
        19 => array(
            'id_producto' => 19,
            "nombre" => "PANTALON PUMA EVOSTRIPE MUJER NEGRO",
            "descripcion" => "La ropa sport del futuro llega de la mano de este elegante pantalón Evostripe, diseñado específicamente para ofrecerte una comodidad sostenible.
            Este modelo está confeccionado en tejido dryCELL, que aleja la humedad de la piel y te ayuda a permanecer seca y cómoda, y fibras certificadas de Better Cotton Initiative.
            El corte regular logra un equilibrio cómodo entre holgado y ajustado.
            Cuenta con cintura elastizada con cordón de ajuste interno.
            Posee bolsillos laterales con cierre.
            Presenta el logo PUMA estampado.
            Sin friza.",
            "id_marca" => 3,
            "precio" => 4.599,
            "id_subcategoria" => 6,
        ),
        20 => array(
            'id_producto' => 20,
            "nombre" => "PANTALON CONVERSE CONS NEGRO",
            "descripcion" => "Completá tu look urbano con este pantalón CONVERSE.
            Cuenta con cintura elastizada con cordón de ajuste.
            Posee bolsillos laterales.
            Presenta el logo CONVERSE estampado.
            Sin friza.",
            "id_marca" => 5,
            "precio" => 4.299,
            "id_subcategoria" => 6,
        ),

    );


GrabarArrayArchivo($a_producto, "../json", "productos.json");
