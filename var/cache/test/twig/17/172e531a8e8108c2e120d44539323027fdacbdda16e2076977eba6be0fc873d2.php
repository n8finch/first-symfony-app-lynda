<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_777c56351415cd77b2a0ed4abe55679a681edc45c83f013ba4afbd0065d005e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a925be3c9ea87819dc0ae489295707718c4117ecdab9dee6d22a7640b5cb85dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a925be3c9ea87819dc0ae489295707718c4117ecdab9dee6d22a7640b5cb85dc->enter($__internal_a925be3c9ea87819dc0ae489295707718c4117ecdab9dee6d22a7640b5cb85dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e581c51d7773370fb2face93b833766e81147a3d1b823a842b6ea4ed44724095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e581c51d7773370fb2face93b833766e81147a3d1b823a842b6ea4ed44724095->enter($__internal_e581c51d7773370fb2face93b833766e81147a3d1b823a842b6ea4ed44724095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a925be3c9ea87819dc0ae489295707718c4117ecdab9dee6d22a7640b5cb85dc->leave($__internal_a925be3c9ea87819dc0ae489295707718c4117ecdab9dee6d22a7640b5cb85dc_prof);

        
        $__internal_e581c51d7773370fb2face93b833766e81147a3d1b823a842b6ea4ed44724095->leave($__internal_e581c51d7773370fb2face93b833766e81147a3d1b823a842b6ea4ed44724095_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_02/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
