<?php

/* webStudentStageBundle:Stage:consulterLesEntreprises.html.twig */
class __TwigTemplate_f214c9405fb01cc99ffdfd3d4303286f96ecb99e1575256d09e7e09c34cac9a9 extends Twig_Template
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
        echo "<h1>Voici la liste des entreprises enregistrées</h1>

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
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEntreprises"]) ? $context["listeEntreprises"] : $this->getContext($context, "listeEntreprises")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 15
            echo "\t<tr>
\t    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nom"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "activite"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nomRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "codePostal"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "ville"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroTel"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "adresseMail"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentStageBundle:Stage:consulterLesEntreprises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
