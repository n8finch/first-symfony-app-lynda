<?php

/* admin/index.html.twig */
class __TwigTemplate_9f7dc82c4d5c0a140617543c6f2bb4c8194392dbe2e284de8e9482e93f4f3877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd4c9916a15841a182792935cf6fe3f2271aac8503b84ad4c41a7ff98214c784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4c9916a15841a182792935cf6fe3f2271aac8503b84ad4c41a7ff98214c784->enter($__internal_fd4c9916a15841a182792935cf6fe3f2271aac8503b84ad4c41a7ff98214c784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_5ed3be9b3a46078a3fb2380dbab4f8efcae129b1e753ffa01fcaa4c1c418251f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed3be9b3a46078a3fb2380dbab4f8efcae129b1e753ffa01fcaa4c1c418251f->enter($__internal_5ed3be9b3a46078a3fb2380dbab4f8efcae129b1e753ffa01fcaa4c1c418251f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4c9916a15841a182792935cf6fe3f2271aac8503b84ad4c41a7ff98214c784->leave($__internal_fd4c9916a15841a182792935cf6fe3f2271aac8503b84ad4c41a7ff98214c784_prof);

        
        $__internal_5ed3be9b3a46078a3fb2380dbab4f8efcae129b1e753ffa01fcaa4c1c418251f->leave($__internal_5ed3be9b3a46078a3fb2380dbab4f8efcae129b1e753ffa01fcaa4c1c418251f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_60122e0c3a58ae414c155f8caaa7548eab6c0281c81751e24ab8f1aeee3911a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60122e0c3a58ae414c155f8caaa7548eab6c0281c81751e24ab8f1aeee3911a0->enter($__internal_60122e0c3a58ae414c155f8caaa7548eab6c0281c81751e24ab8f1aeee3911a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9aef5fb89080b6d7db752dbbd02f2c895a698aac36778bf243226ee13d9e34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9aef5fb89080b6d7db752dbbd02f2c895a698aac36778bf243226ee13d9e34d->enter($__internal_d9aef5fb89080b6d7db752dbbd02f2c895a698aac36778bf243226ee13d9e34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
";
        
        $__internal_d9aef5fb89080b6d7db752dbbd02f2c895a698aac36778bf243226ee13d9e34d->leave($__internal_d9aef5fb89080b6d7db752dbbd02f2c895a698aac36778bf243226ee13d9e34d_prof);

        
        $__internal_60122e0c3a58ae414c155f8caaa7548eab6c0281c81751e24ab8f1aeee3911a0->leave($__internal_60122e0c3a58ae414c155f8caaa7548eab6c0281c81751e24ab8f1aeee3911a0_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_02/final/app/Resources/views/admin/index.html.twig");
    }
}
