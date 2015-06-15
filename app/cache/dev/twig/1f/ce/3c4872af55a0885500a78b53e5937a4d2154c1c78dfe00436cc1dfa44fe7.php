<?php

/* ItechSupQuestionnaireBundle:Default:index.html.twig */
class __TwigTemplate_1fce3c4872af55a0885500a78b53e5937a4d2154c1c78dfe00436cc1dfa44fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ItechSupQuestionnaireBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "Veuillez vous connecter
<br>
<br>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        // line 9
        echo "

";
    }

    public function getTemplateName()
    {
        return "ItechSupQuestionnaireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
