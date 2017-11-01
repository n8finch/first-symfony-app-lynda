<?php

/* base.html.twig */
class __TwigTemplate_cf37b30e0235cc27f98d7b0fd7d1c1510ca9cbebe54f97865cd09f2968533dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36527f19fd8907671bb3f4ad805a903ab71699f471ac858245e49f306f033fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36527f19fd8907671bb3f4ad805a903ab71699f471ac858245e49f306f033fef->enter($__internal_36527f19fd8907671bb3f4ad805a903ab71699f471ac858245e49f306f033fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5e054edeb648c27796084e05696b635b356c098e5fdfcb10dd6940c6fa059c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e054edeb648c27796084e05696b635b356c098e5fdfcb10dd6940c6fa059c5f->enter($__internal_5e054edeb648c27796084e05696b635b356c098e5fdfcb10dd6940c6fa059c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>";
        
        $__internal_36527f19fd8907671bb3f4ad805a903ab71699f471ac858245e49f306f033fef->leave($__internal_36527f19fd8907671bb3f4ad805a903ab71699f471ac858245e49f306f033fef_prof);

        
        $__internal_5e054edeb648c27796084e05696b635b356c098e5fdfcb10dd6940c6fa059c5f->leave($__internal_5e054edeb648c27796084e05696b635b356c098e5fdfcb10dd6940c6fa059c5f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_36a85d6629b222f5510dc4c203107c2ac81f46fdcb9ec2d396c06d8c0fea18bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a85d6629b222f5510dc4c203107c2ac81f46fdcb9ec2d396c06d8c0fea18bb->enter($__internal_36a85d6629b222f5510dc4c203107c2ac81f46fdcb9ec2d396c06d8c0fea18bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2a2fceeeac1c1de8cdad8ab65cc4f469202f840916f3c5f41b993964cd424989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2fceeeac1c1de8cdad8ab65cc4f469202f840916f3c5f41b993964cd424989->enter($__internal_2a2fceeeac1c1de8cdad8ab65cc4f469202f840916f3c5f41b993964cd424989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " ";
        
        $__internal_2a2fceeeac1c1de8cdad8ab65cc4f469202f840916f3c5f41b993964cd424989->leave($__internal_2a2fceeeac1c1de8cdad8ab65cc4f469202f840916f3c5f41b993964cd424989_prof);

        
        $__internal_36a85d6629b222f5510dc4c203107c2ac81f46fdcb9ec2d396c06d8c0fea18bb->leave($__internal_36a85d6629b222f5510dc4c203107c2ac81f46fdcb9ec2d396c06d8c0fea18bb_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11273530bb77979a33ae28c485ff36a16101222403d40f027899eb3a4fb2b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11273530bb77979a33ae28c485ff36a16101222403d40f027899eb3a4fb2b5b->enter($__internal_f11273530bb77979a33ae28c485ff36a16101222403d40f027899eb3a4fb2b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f5cb124cd149f85efc1360f50030387c84b64e56450228511d5394846450758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5cb124cd149f85efc1360f50030387c84b64e56450228511d5394846450758->enter($__internal_7f5cb124cd149f85efc1360f50030387c84b64e56450228511d5394846450758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_7f5cb124cd149f85efc1360f50030387c84b64e56450228511d5394846450758->leave($__internal_7f5cb124cd149f85efc1360f50030387c84b64e56450228511d5394846450758_prof);

        
        $__internal_f11273530bb77979a33ae28c485ff36a16101222403d40f027899eb3a4fb2b5b->leave($__internal_f11273530bb77979a33ae28c485ff36a16101222403d40f027899eb3a4fb2b5b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 32,  144 => 6,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  86 => 33,  84 => 32,  71 => 22,  67 => 21,  63 => 20,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        {% block stylesheet %} {% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"{{ path('home') }}\">Home</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('index_clients') }}\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('reservations') }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    {% block body %} {% endblock %}

    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>", "base.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_02/final/app/Resources/views/base.html.twig");
    }
}
