<?php

insert([
    'title' => $values['title'],
    'ingredients' => $values['ingredients'],
    'email' => $values['email']
],"Pizza",$conn,"http://localhost:8000");