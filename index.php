<!DOCTYPE html>
<html lang="
" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="style.css">

    <?php

        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>

  </head>

  <body>

    <?php
      foreach ($db as $nomi => $info ){
        foreach ($info as $dato) {
          $name = $dato['name'];
          $surname = $dato['lastname'];

          echo "<div class= '{$nomi}'> {$name} {$surname} </div>";
        }

      }
    ?>

  </body>
</html>
