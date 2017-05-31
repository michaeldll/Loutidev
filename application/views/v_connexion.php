<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>IUT de Troyes - Etudiants Etrangers</title>

    <meta name="description" content="Site de présentation de l’IUT de Troyes à destination des étudiants étrangers. ">

    <meta name="author" content="Louti">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/rotate.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css">

    <link href="<?php echo base_url() ?>asset/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/jquery-ui.css"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">      <!--[if lt IE 9]>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

    <![endif]-->

    <style type="text/css">
    form{color: white;}
      
    </style>

    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7n7x7298fdvp4atw6uzs08bleeus6klm7c4dxmirw3914o7a'></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            theme: 'modern',
            height: '500px',
            plugins: [
              'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
        });
    </script>

</head>

<body>

<div class="wrapper">

    <header class="header">

        <div class="navhead">

            <div class="container">
            <div class="row">

                <div class="col-sm-1 col-xs-4 mobleft">

                    <div class="text-left">

                        <a href="#" class="logoFA"><i class="fa fa-ravelry" aria-hidden="true"></i></a>

                    </div>

                </div>

                <div class="mobmenu"><i class="fa fa-navicon"></i></div>



                <div class="col-sm-10 col-xs-3 colMenu">

                    <div class="colMenuBack"></div>

                    <div class="text-center">

                        <ul class="list-inline">

                            <li><a href="http://loutidev.michaeldelaborde.com" class="rndbtn">Home</a></li>

                            <li><a href="#" class="rightButMar">Studying at the IUT</a></li>

                            <li><a href="#">Articles</a></li>

                            <li><a href="#">Events</a></li>

                            <li><a href="http://loutidev.michaeldelaborde.com/Connexion">Connexion</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-sm-1 col-xs-4 mcright">

                </div>

            </div>
            </div>

        </div>

<div style="margin-top: 100px;"></div>


<div class="container">
  <div class="row">
    <?= form_open('connexion', ['class' => 'form-horizontal']); ?>

    <?php if (!empty($login_error)): ?>
        <div class="form-group">
          <div class="col-md-offset-2 col-md-10 has-error">
            <span class="help-block"><?= $login_error; ?></span>
          </div>
        </div>
    <?php endif; ?>

    <div class="form-group">
      <?= form_label("Nom d'utilisateur&nbsp;:", "username", ['class' => "col-md-2 control-label"]) ?>
      <div class="col-md-10 <?= empty(form_error('username')) ? "" : "has-error" ?>">
        <?= form_input(['name' => "username", 'id' => "username", 'class' => 'form-control'], set_value('username')) ?>
        <span class="help-block"><?= form_error('username'); ?></span>
      </div>
    </div>

    <div class="form-group">
      <?= form_label("Mot de passe&nbsp;:", "password", ['class' => "col-md-2 control-label"]) ?>
      <div class="col-md-10 <?= empty(form_error('password')) ? "" : "has-error" ?>">
        <?= form_password(['name' => "password", 'id' => "password", 'class' => 'form-control'], set_value('password')) ?>
        <span class="help-block"><?= form_error('password'); ?></span>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-offset-2 col-md-10">
        <?= form_submit("send", "Envoyer", ['class' => "btn btn-default"]); ?>
      </div>
    </div>
    <?= form_close() ?>
  </div>
  
</div>

<div style="margin-top: 50px;"></div>


<div class="container">
<div class="row">
<div class="col-md-12">

    <h2 style="color: white;">juste un test de tinyMCE</h2>

    <!--
    old tinymce just in case
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7n7x7298fdvp4atw6uzs08bleeus6klm7c4dxmirw3914o7a"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <textarea></textarea>-->

    <form method="post">
        <textarea id="myTextarea">Hello, World!</textarea>
    </form>

</div>
</div>
</div>
<!--
old test email db

<div class="container">
<div class="row">
<div class="col-md-12">
<?php/*
$query = $this->db->get('User');

$arrEmail = array();

foreach ($query->result() as $row) {
    $arrEmail[] = $row->u_email;
}
    echo "test email database";
    echo $row[0];
*/
?>
</div>
</div>
</div>-->

<footer class="mtop">

    <div class="container inner clearfix">

        <div class="col-sm-6 col-md-3 col-xs-12">

            <h5>Contact</h5>

            <p>

                <small><b>Address</b></small>

                <small>13 rue des Bidons, Troyes</small>

            </p>

            <p>

                <small><b>Email</b></small>

                <small>stpavut@pavut.com</small>

            </p>

            <p>

                <small><b>Portable</b></small>

                <small>06 07 08 09</small>

            </p>

        </div>

        <div class="col-sm-6 col-md-6 col-xs-12 pull-right">

            <h5>Localisation</h5>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84945.2225780809!2d4.006252218494381!3d48.2924994551982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee9857e787b7b1%3A0x57dd125566e84f75!2sTroyes!5e0!3m2!1sen!2sfr!4v1490185292762" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>

    </div>

    <div class="subfooter">

        Copyright @2016 Saint Pavut

    </div>

</footer>

</div>

<script src="<?php echo base_url() ?>asset/js/jquery.imagelistexpander.js"></script>

<script src="<?php echo base_url() ?>asset/js/wow.min.js"></script>

<script src="<?php echo base_url() ?>asset/js/rotate.js"></script>

<script src="<?php echo base_url() ?>asset/js/scripts.js"></script>

</body>

</html>