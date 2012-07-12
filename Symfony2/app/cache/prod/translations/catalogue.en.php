<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'saludo' => 'Hello!',
    'facebook' => 'Login with Facebook',
    'idioma-selection' => 'idioma-english',
    'media' => 'Media',
    'Bestiario' => 'Bestiary',
    'VerMas' => 'More',
    'LogininFacebook' => 'Login in Facebook',
  ),
));

$catalogue->addFallbackCatalogue(new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false' => 'Este valor debería ser falso',
    'This value should be true' => 'Este valor debería ser verdadero',
    'This value should be of type {{ type }}' => 'Este valor debería ser de tipo {{ type }}',
    'This value should be blank' => 'Este valor debería estar vacío',
    'The value you selected is not a valid choice' => 'El valor seleccionado no es una opción válida',
    'You must select at least {{ limit }} choices' => 'Debe seleccionar al menos {{ limit }} opciones',
    'You must select at most {{ limit }} choices' => 'Debe seleccionar como máximo {{ limit }} opciones',
    'One or more of the given values is invalid' => 'Uno o más de los valores indicados no son válidos',
    'The fields {{ fields }} were not expected' => 'No se esperaban los campos {{ fields }}',
    'The fields {{ fields }} are missing' => 'Faltan los campos {{ fields }}',
    'This value is not a valid date' => 'Este valor no es una fecha válida',
    'This value is not a valid datetime' => 'Este valor no es una fecha y hora válidas',
    'This value is not a valid email address' => 'Este valor no es una dirección de email válida',
    'The file could not be found' => 'No se pudo encontrar el archivo',
    'The file is not readable' => 'No se puede leer el archivo',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'El archivo es demasiado grande ({{ size }}). El tamaño máximo permitido es {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}',
    'This value should be {{ limit }} or less' => 'Este valor debería ser {{ limit }} o menos',
    'This value is too long. It should have {{ limit }} characters or less' => 'Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos',
    'This value should be {{ limit }} or more' => 'Este valor debería ser {{ limit }} o más',
    'This value is too short. It should have {{ limit }} characters or more' => 'Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más',
    'This value should not be blank' => 'Este valor no debería estar vacío',
    'This value should not be null' => 'Este valor no debería ser null',
    'This value should be null' => 'Este valor debería ser null',
    'This value is not valid' => 'Este valor no es válido',
    'This value is not a valid time' => 'Este valor no es una hora válida',
    'This value is not a valid URL' => 'Este valor no es una URL válida',
    'This form should not contain extra fields' => 'Este formulario no debería contener campos adicionales',
    'The uploaded file was too large. Please try to upload a smaller file' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño',
    'The CSRF token is invalid' => 'El token CSRF no es válido',
    'The two values should be equal' => 'Los dos valores deberían ser iguales',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }}',
    'The file is too large' => 'El archivo es demasiado grande',
    'The file could not be uploaded' => 'No se pudo subir el archivo',
    'This value should be a valid number' => 'Este valor debería ser un número válido',
    'This file is not a valid image' => 'El archivo no es una imagen válida',
    'This is not a valid IP address' => 'Esto no es una dirección IP válida',
    'This value is not a valid language' => 'Este valor no es un idioma válido',
    'This value is not a valid locale' => 'Este valor no es una localización válida',
    'This value is not a valid country' => 'Este valor no es un país válido',
    'This value is already used' => 'Este valor ya se ha utilizado',
  ),
  'messages' => 
  array (
    'saludo' => 'Hola!',
    'facebook' => 'Iniciar Sesión con Facebook',
    'idioma-selection' => 'idioma-spanish',
    'media' => 'Media',
    'Bestiario' => 'Bestiario',
    'VerMas' => 'Ver Mas',
    'LogininFacebook' => 'Login in Facebook',
  ),
)));

return $catalogue;
