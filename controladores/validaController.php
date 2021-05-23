<?php
$values = ['email' => '','title' => '','ingredients' => ''];
$errores = ['email' => '','title' => '','ingredients' => ''];
if(isset($_POST['submit'])) {

    /**
     * Cuando se utiliza la validacion diferente a vacio 
     * no es necesario comprobar vacio porque 
     * por default la funcion validar si se quiere
     * comprobar otros criterios un valor vacio 
     * automaticamente es como un valor incorrecto
     * pero por si o por no le recomiendo agregar la validacion 
     * de campos vacios para que su formulario sea mas
     * seguro y evitar que cosas raras sucedan =)
     */

    #comprobamos que el email no este vacio
    (is_array(validar("vacio","email"))) ? $errores['email'] = validar("vacio","email")[1] : $values['email'] = validar("vacio","email");
    #comprobamos que el email sea valido
    (is_array(validar("correo","email"))) ? $errores['email'] .= "<br>".validar("correo","email")[1] : $values['email'] = validar("correo","email");

    #comprobamos que el title no este vacio
    (is_array(validar("vacio","title"))) ? $errores['title'] = validar("vacio","title")[1] : $values['title'] = validar("vacio","title");
    #comprobamos que el title sea valido
    (is_array(validar("letrasOnly","title"))) ? $errores['title'] .= "<br>".validar("letrasOnly","title")[1] : $values['title'] = validar("letrasOnly","title");

    #comprobamos que los ingredientes no este vacio
    (is_array(validar("vacio","ingredients"))) ? $errores['ingredients'] = validar("vacio","ingredients")[1] : $values['ingredients'] = validar("vacio","ingredients");
    #comprobamos que el email sea valido
    (is_array(validar("lista","ingredients"))) ? $errores['ingredients'] .= "<br>".validar("lista","ingredients")[1] : $values['ingredients'] = validar("lista","ingredients");

}