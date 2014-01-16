<?php

/* webStudentEntrepriseBundle:Entreprise:indexEntreprise.html.twig */
class __TwigTemplate_c684b0500730681900e89bae98a1a037b06aa0241de40989866e850b4a6cb3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Accueil Entreprise ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1> Gestion des entreprises </h1>

<table border = 0>
\t<tr>
\t\t<td><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Entreprises_consulter_tous");
        echo "\">Consulter toutes les entreprises</td>
\t</tr>
\t<tr>
\t\t<td>Rechercher une entreprise (fonctionnel, manque plus que le formulaire)</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentEntrepriseBundle:Entreprise:indexEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  38 => 5,  35 => 4,  29 => 2,);
    }
}
