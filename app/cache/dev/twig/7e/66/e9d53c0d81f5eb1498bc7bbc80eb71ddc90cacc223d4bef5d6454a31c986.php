<?php

/* webStudentEtudiantBundle:Etudiant:consulterEtudiant.html.twig */
class __TwigTemplate_7e66e9d53c0d81f5eb1498bc7bbc80eb71ddc90cacc223d4bef5d6454a31c986 extends Twig_Template
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
        echo "Voici les informations le concernant

<table border = 1>
\t<tr>
\t\t<th>Nom</th>
\t\t<th>Prenom</th>
\t\t<th>Numero rue</th>
\t\t<th>Nom rue</th>
\t\t<th>Code Postal</th>
\t\t<th>Ville</th>
\t\t<th>Telephone</th>
\t\t<th>Mail</th>
\t\t<th>Section</th>
\t</tr>
\t<tr>
\t    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "numeroRue"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nomRue"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "codePostal"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "ville"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "section"), "libelle"), "html", null, true);
        echo "</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
