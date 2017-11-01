<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5cd6fe74fa4a0d5e450c1e735f64ae49cf2c3e9d5757f18c65ad1bdf463abe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55fab74c1ecc2feb05948bc04552750d25fa56b3d1442f1f3fe1d9eebb586f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55fab74c1ecc2feb05948bc04552750d25fa56b3d1442f1f3fe1d9eebb586f6->enter($__internal_a55fab74c1ecc2feb05948bc04552750d25fa56b3d1442f1f3fe1d9eebb586f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fcb8d33373e59cb0bb4068fde7dfd824c598a0c5ae082a710754872bef71ff68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb8d33373e59cb0bb4068fde7dfd824c598a0c5ae082a710754872bef71ff68->enter($__internal_fcb8d33373e59cb0bb4068fde7dfd824c598a0c5ae082a710754872bef71ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55fab74c1ecc2feb05948bc04552750d25fa56b3d1442f1f3fe1d9eebb586f6->leave($__internal_a55fab74c1ecc2feb05948bc04552750d25fa56b3d1442f1f3fe1d9eebb586f6_prof);

        
        $__internal_fcb8d33373e59cb0bb4068fde7dfd824c598a0c5ae082a710754872bef71ff68->leave($__internal_fcb8d33373e59cb0bb4068fde7dfd824c598a0c5ae082a710754872bef71ff68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7758f994cc04e8227ccd3bdb09e147da430c0f28275d36f918486f1b4472d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7758f994cc04e8227ccd3bdb09e147da430c0f28275d36f918486f1b4472d8c->enter($__internal_c7758f994cc04e8227ccd3bdb09e147da430c0f28275d36f918486f1b4472d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5a4c3ae8fbdfb714e4c430c7496795575bca0fb45696e797dee987b63e7c44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a4c3ae8fbdfb714e4c430c7496795575bca0fb45696e797dee987b63e7c44e->enter($__internal_b5a4c3ae8fbdfb714e4c430c7496795575bca0fb45696e797dee987b63e7c44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b5a4c3ae8fbdfb714e4c430c7496795575bca0fb45696e797dee987b63e7c44e->leave($__internal_b5a4c3ae8fbdfb714e4c430c7496795575bca0fb45696e797dee987b63e7c44e_prof);

        
        $__internal_c7758f994cc04e8227ccd3bdb09e147da430c0f28275d36f918486f1b4472d8c->leave($__internal_c7758f994cc04e8227ccd3bdb09e147da430c0f28275d36f918486f1b4472d8c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21cb9bcb9c5ab88ab60044dec4210a4f07f44ec13d308346b124691bbcd9863d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cb9bcb9c5ab88ab60044dec4210a4f07f44ec13d308346b124691bbcd9863d->enter($__internal_21cb9bcb9c5ab88ab60044dec4210a4f07f44ec13d308346b124691bbcd9863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_431845d24eb60a4f4905ce1bdb25d5446f4e3ff2c2d1300610cd711b437be658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431845d24eb60a4f4905ce1bdb25d5446f4e3ff2c2d1300610cd711b437be658->enter($__internal_431845d24eb60a4f4905ce1bdb25d5446f4e3ff2c2d1300610cd711b437be658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_431845d24eb60a4f4905ce1bdb25d5446f4e3ff2c2d1300610cd711b437be658->leave($__internal_431845d24eb60a4f4905ce1bdb25d5446f4e3ff2c2d1300610cd711b437be658_prof);

        
        $__internal_21cb9bcb9c5ab88ab60044dec4210a4f07f44ec13d308346b124691bbcd9863d->leave($__internal_21cb9bcb9c5ab88ab60044dec4210a4f07f44ec13d308346b124691bbcd9863d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8525df5b69dde4ba6ee9eedbdc332572283dd12f233d438b6ee9f2baaed0ead8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8525df5b69dde4ba6ee9eedbdc332572283dd12f233d438b6ee9f2baaed0ead8->enter($__internal_8525df5b69dde4ba6ee9eedbdc332572283dd12f233d438b6ee9f2baaed0ead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82aaa9ab3a2f7777aee5886fe80638be65291c86e8be0a858857c28fd1f131c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aaa9ab3a2f7777aee5886fe80638be65291c86e8be0a858857c28fd1f131c3->enter($__internal_82aaa9ab3a2f7777aee5886fe80638be65291c86e8be0a858857c28fd1f131c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_82aaa9ab3a2f7777aee5886fe80638be65291c86e8be0a858857c28fd1f131c3->leave($__internal_82aaa9ab3a2f7777aee5886fe80638be65291c86e8be0a858857c28fd1f131c3_prof);

        
        $__internal_8525df5b69dde4ba6ee9eedbdc332572283dd12f233d438b6ee9f2baaed0ead8->leave($__internal_8525df5b69dde4ba6ee9eedbdc332572283dd12f233d438b6ee9f2baaed0ead8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
