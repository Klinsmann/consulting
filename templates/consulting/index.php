<?php


defined('_JEXEC') or die;

JHtml::_('behavior.framework', true);

$app = JFactory::getApplication();

?>

<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html lang="es" >

<head>

<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />

</head>
<body>
	<section class="container">
    	<header>
        	<div class="content-header">
                <figure class="logo">
                    <a href="<?php echo JURI::base(); ?>
    "><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" title="<?php echo $app->getCfg('sitename'); ?>" /></a>
            </figure>
       </div><!-- fin del div content-header-->
        <nav>
        	<div class="content-nav">
            	<jdoc:include type="modules" name="menutop" style="none" /> 
             </div>
        </nav>
        <div class="slider">
            <jdoc:include type="modules" name="slider" style="none" /> 
        </div><!--fin del div slider-->
        	
        </header>
    	
    
    <section class="contenido">
    	<jdoc:include type="message" />
		<jdoc:include type="component" />
    </section><!--fin de la clase contenido-->
    
    <div class="contacto">
    	<jdoc:include type="modules" name="prefooter" style="none" /> 
    </div><!--fin de la clase prefooter-->
    
    <footer>
    	<jdoc:include type="modules" name="footer" style="none" /> 
        <span>Desarrollado por @<a href="http://twitter.com/Klinsmannf">Klinsmann</a></span>
    </footer><!--fin de la clase footer-->
    </section> <!--fin de la clase container-->
</body>
</html>