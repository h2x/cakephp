
<!DOCTYPE html>
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>

<html>
<head>

    <title>
        MiaMiaLandscapes
    </title>

    <!-- <!--CSS FILES-->
    <?php echo $this->Html->css('bootstrap');?>
    <?php echo $this->Html->css('bootstrap.min');?>
    <?php echo $this->Html->css('bootstrap-responsive');?>
    <?php echo $this->Html->css('bootstrap-responsive.min');?>
    <!--JAVASCRIPT/JQUERY FILES-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <?php echo $this->Html->script('bootstrap');?>
    <?php echo $this->Html->script('bootstrap.min');?>
    <!--THIS CALLS THE SCRIPTS TO LOADED-->
    <?php echo $this->fetch('meta');?>
    <?php echo $this->fetch('css');?>
    <?php echo $this->fetch('script');?>

    <!--THIS IS FOR RESPONSIVE DESIGN-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="span4">
            <?php echo $this->Html->image('MiaMiaLogo.png', array('id'=>'logoFrontPage','url' => array('controller'=>'pages', 'action'=>'home'),'style'=>'padding-top:10px;margin-left:auto;margin-right:auto;display: block;')); ?>
        </div>
        <div class="offset2 span6" style="margin-top: 50px">
            <ul class="nav nav-tabs">
                <li><?php echo $this->Html->link('<i class="icon-home"></i> Home', array('controller'=>'pages', 'action'=>'home'),array('escape'=>false));?></li>
                <li><?php echo $this->Html->link('<i class="icon-picture"></i> Gallery', array('controller'=>'Galleries', 'action'=>'index'),array('escape'=>false));?></li>
                <li><?php echo $this->Html->link('<i class="icon-envelope"></i> Enquiry', array('controller'=>'Enquiries', 'action'=>'index'),array('escape'=>false));?></li>
                <!--<li><?php /*echo $this->Html->link('<i class="icon-usd"></i> Payment', array('controller'=>'', 'action'=>'index'),array('escape'=>false));*/?></li>-->
            </ul>
        </div>
    </div>
    <div id="content">
        <?php echo $this->fetch("content");?>
    </div>
</div>
</body>

</html>


