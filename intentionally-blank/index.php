<?php
/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    html,body{
        font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:13px;line-height:1.4em;margin:0
    }
    body{
        background-color: #f5f5f5; 
        background-size:cover
    }
    .site-title-bg{
        background:rgba(0,0,0,0.5);
        color:#fff;
        padding:5px
    }
    .site-title h1,.site-title p{
        font-size:16px;
        display:inline-block;
        padding:5px 0 5px 5px;
        margin:0
    }
    .site-title h1 a{
        color:#fff;
        font-weight:700;
        text-decoration:none
    }
    .custom-logo{
        display:block;
        position:absolute;
        left:50%;
        top:50%;
        -ms-transform:translate(-50%,-50%);
        -webkit-transform:translate(-50%,-50%);
        transform:translate(-50%,-50%);
        max-width:100%;
        height:auto
    }
    #colophon{
        position:absolute;
        width:100%;
        left:0;
        bottom:0;
        padding:10px 0;
        text-align:center;
        color:#333;
        background-color:rgba(241,241,241,0.4)
    }
    #colophon a{
        text-decoration:none; 
        color: #333;
    }
    
    #button-one {
		border-radius: 74px;
		background: linear-gradient(145deg, #e6e6e6, #ffffff);
		box-shadow:  14px 14px 38px #ababab, 
					 -14px -14px 38px #ffffff;
	}
	
	#button-two {
		border-radius: 74px;
		background: linear-gradient(145deg, #b3a08a, #d5bea4);
		box-shadow: 14px 14px 31px #857767, 
             	-14px -14px 31px #ffedcb;
	}
	
	#box-up-one, #box-up-two {
		border-radius: 29px;
		background: linear-gradient(145deg, #ffffff, #e6e6e6);
		box-shadow:  14px 14px 38px #ababab, 
             		-14px -14px 38px #ffffff;
	}
	
	#box-down-one, #box-down-two {
		border-radius: 29px;
		background: linear-gradient(145deg, #ffffff, #e6e6e6);
		box-shadow:  14px 14px 38px #ababab, 
            		 -14px -14px 38px #ffffff;
	}
	
	#glass-beer {
		border-radius: 50%;
		background: linear-gradient(145deg, #e6e6e6, #ffffff);
		box-shadow:  14px 14px 38px #ababab, 
					 -14px -14px 38px #ffffff;
	}
	
	#button-three {
		border-radius: 50px;
		background: linear-gradient(145deg, #cad6bf, #f0ffe3);
		box-shadow:  14px 14px 38px #969f8e, 
					 -14px -14px 38px #ffffff;
	}
	
	#button-four {
		border-radius: 74px;
		background: linear-gradient(145deg, #b3a08a, #d5bea4);
		box-shadow: 14px 14px 31px #857767, 
             	-14px -14px 31px #ffedcb;
	}
    
</style>
<html>
<head>
<?php wp_head(); ?>
</head>
    <body> <?php body_class(); ?>>
<?php blank_custom_logo(); ?>

<?php wp_footer(); ?>

<?php 
    //Tilføjelse af the_content for at muliggøre Elementor Edit og Elementor Pro editor
the_content(); ?> 
        

</body></html>
