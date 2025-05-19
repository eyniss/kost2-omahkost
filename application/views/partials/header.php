<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> 
<title><?= isset($title) ? $title : 'Omah Kost' ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> 

</head> 
<body> 
  <?php $this->load->view('partials/navbar');
  
  ?>