<?php

/* webStudentStageBundle:Entreprise:consulterEntreprise.html.twig */
class __TwigTemplate_f8b2663a32d9fa0ee66073e31475f54fe5093c07b0b75df27fd6f1682d6d553f extends Twig_Template
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
        echo " Entreprise ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nom"), "html", null, true);
        echo "  ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1> Information concernant l'entreprise ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nom"), "html", null, true);
        echo " </h1>

<table border = 1>
\t<tr>
\t\t<th>Nom</th>
\t\t<th>Activité</th>
\t\t<th>Numero rue</th>
\t\t<th>Nom rue</th>
\t\t<th>Code Postal</th>
\t\t<th>Ville</th>
\t\t<th>Telephone</th>
\t\t<th>Mail</th>
\t</tr>
\t<tr>
\t    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nom"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "activite"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroRue"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nomRue"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "codePostal"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "ville"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroTel"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "adresseMail"), "html", null, true);
        echo "</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentStageBundle:Entreprise:consulterEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  43 => 6,  40 => 5,  37 => 4,  29 => 2,);
    }
}
