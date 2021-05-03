<?php

// 1. Include the php dependencies/configuration
//  (remember to set config params for your environment in conf/config.inc.php)
include_once '../lib/index.inc.php';

// 2. Create the form controls
$name = new Input([
  'name' => 'name',
  'required' => true,
  'message' => 'NAME is required'
]);
$email = new Input([
  'type' => 'email',
  'label' => 'Email Address',
  'name' => 'email',
  'required' => true
]);
$address = new Input([
  'type' => 'address',
  'label' => 'Flat number',
  'name' => 'address',
  'required' => true
]);

$occupancy = new Select([
  'name' => 'Do you live here as...',
  'options' => [
    '' => 'Choose an option',
    'owner' => 'Owner',
    'tenant' => 'Renter'
  ],
  'required' => true
]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Example</title>
  </head>
  <body>

<?php

// 4. Render the form
$form->render();

?>

    <script src="js/index.js"></script>
  </body>
</html>
