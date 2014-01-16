<?php

/* webStudentEtudiantBundle:Etudiant:consulterSection.html.twig */
class __TwigTemplate_97610e5c78ea20d5602ee8a3dff417eac2dcc62e0b352478615ed04f28d0ca78 extends Twig_Template
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
        // line 1
        echo "La section que vous avez demandé: ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
