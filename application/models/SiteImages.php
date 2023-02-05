<?php
class SiteImages extends CI_Model 
{
	
	function bg($img = NULL)
	{
        if($img == NULL)
        {
            return "style='background-image:url(".base_url()."assets/images/bg1.jpg)'";
        }
        else
        {
            return "style='background-image:url(".base_url()."assets/images/$img)'";
        }
	}
	function img($img = NULL)
	{
        if($img == NULL)
        {
            return "style='background-image:url(".base_url()."assets/images/bg1.jpg)'";
        }
        else
        {
            return "style='background-image:url(".base_url()."assets/images/$img)'";
        }
	}
	
}