<?php

/* webStudentEtudiantBundle:Etudiant:index.html.twig */
class __TwigTemplate_a511cb5346e91fdd8b05bdd6261668895a8d8c996b6a859d789b9bc2721bef8a extends Twig_Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "! C'est un bon commencement ;)
 ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:index.html.twig";
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
