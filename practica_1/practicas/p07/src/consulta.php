<?php
$vehiculos = array(
    'ABC1234' => array(
        'Auto' => array(
            'marca' => 'HONDA',
            'modelo' => 2020,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Alfonzo Esparza',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'C.U., Jardines de San Manuel'
        )
    ),
    'XYZ5678' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => 2019,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ma. del Consuelo Molina',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '97 oriente'
        )
    ),
    'DEF2345' => array(
        'Auto' => array(
            'marca' => 'TOYOTA',
            'modelo' => 2021,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Carlos García',
            'ciudad' => 'Monterrey, NL',
            'direccion' => 'Av. Universidad 123'
        )
    ),
    'GHI3456' => array(
        'Auto' => array(
            'marca' => 'FORD',
            'modelo' => 2018,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'María López',
            'ciudad' => 'Guadalajara, Jal.',
            'direccion' => 'Calle Reforma 456'
        )
    ),
    'JKL4567' => array(
        'Auto' => array(
            'marca' => 'CHEVROLET',
            'modelo' => 2022,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Pedro Hernández',
            'ciudad' => 'Cancún, Q. Roo',
            'direccion' => 'Av. Bonampak 789'
        )
    ),
    'MNO5678' => array(
        'Auto' => array(
            'marca' => 'NISSAN',
            'modelo' => 2019,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Ana Martínez',
            'ciudad' => 'Ciudad de México',
            'direccion' => 'Av. Insurgentes 101'
        )
    ),
    'PQR6789' => array(
        'Auto' => array(
            'marca' => 'BMW',
            'modelo' => 2020,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Jorge Ramírez',
            'ciudad' => 'León, Gto.',
            'direccion' => 'Blvd. López Mateos 202'
        )
    ),
    'STU7890' => array(
        'Auto' => array(
            'marca' => 'VOLKSWAGEN',
            'modelo' => 2017,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Luis Fernández',
            'ciudad' => 'Tijuana, BC',
            'direccion' => 'Calle Revolución 303'
        )
    ),
    'VWX8901' => array(
        'Auto' => array(
            'marca' => 'KIA',
            'modelo' => 2021,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Sofía Gómez',
            'ciudad' => 'Mérida, Yuc.',
            'direccion' => 'Calle 60 Norte 404'
        )
    ),
    'YZA9012' => array(
        'Auto' => array(
            'marca' => 'HYUNDAI',
            'modelo' => 2020,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Julieta Ruiz',
            'ciudad' => 'Querétaro, Qro.',
            'direccion' => 'Av. Corregidora 505'
        )
    ),
    'BCD0123' => array(
        'Auto' => array(
            'marca' => 'AUDI',
            'modelo' => 2019,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Fernando Castro',
            'ciudad' => 'Toluca, Edo. Mex.',
            'direccion' => 'Paseo Tollocan 606'
        )
    ),
    'EFG1234' => array(
        'Auto' => array(
            'marca' => 'TESLA',
            'modelo' => 2021,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Laura Villanueva',
            'ciudad' => 'Aguascalientes, Ags.',
            'direccion' => 'Blvd. Zacatecas 707'
        )
    ),
    'HIJ2345' => array(
        'Auto' => array(
            'marca' => 'MITSUBISHI',
            'modelo' => 2018,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Oscar Ríos',
            'ciudad' => 'San Luis Potosí, SLP',
            'direccion' => 'Calle Real de Catorce 808'
        )
    ),
    'KLM3456' => array(
        'Auto' => array(
            'marca' => 'SUBARU',
            'modelo' => 2022,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Gloria Mendoza',
            'ciudad' => 'Chihuahua, Chih.',
            'direccion' => 'Av. Revolución 909'
        )
    ),
    'NOP4567' => array(
        'Auto' => array(
            'marca' => 'FIAT',
            'modelo' => 2020,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ramón Díaz',
            'ciudad' => 'Veracruz, Ver.',
            'direccion' => 'Malecón 1010'
        )
    )
);

// Comprobar si se solicitó una matrícula específica
if (isset($_POST['matricula']) && !empty($_POST['matricula'])) {
    $matricula = $_POST['matricula'];
    if (isset($vehiculos[$matricula])) {
        echo "<h2>Información del vehículo con matrícula: $matricula</h2>";
        echo "<pre>";
        print_r($vehiculos[$matricula]);
        echo "</pre>";
    } else {
        echo "No se encontró ningún vehículo con la matrícula $matricula.";
    }
}

// Comprobar si se solicitaron todos los autos
if (isset($_POST['todos'])) {
    echo "<h2>Todos los vehículos registrados:</h2>";
    echo "<pre>";
    foreach ($vehiculos as $matricula => $info) {
        echo "[$matricula] => Array (";
        foreach ($info as $categoria => $detalles) {
            echo "    [$categoria] => Array (\n";
            foreach ($detalles as $clave => $valor) {
                if (is_array($valor)) {
                    echo "        " . "[" . $clave . "] => Array (";
                    foreach ($valor as $subclave => $subvalor) {
                        echo "            [" . $subclave . "] => " . $subvalor . "";
                    }
                    echo "        )";
                } else {
                    echo "        [" . $clave . "] => " . $valor . "";
                }
            }
            echo "    )";
        }
        echo ")";
    }
    echo "</pre>";
}
?>
