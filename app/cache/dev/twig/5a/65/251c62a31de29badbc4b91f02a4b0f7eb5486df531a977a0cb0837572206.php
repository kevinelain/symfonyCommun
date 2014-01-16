<?php

/* webStudentEtudiantBundle:Etudiant:consulterLesEtudiants.html.twig */
class __TwigTemplate_5a65251c62a31de29badbc4b91f02a4b0f7eb5486df531a977a0cb0837572206 extends Twig_Template
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
        echo "<h1>Voici la liste des étudiants enregistrés</h1>

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
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiants"]) ? $context["listeEtudiants"] : $this->getContext($context, "listeEtudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 16
            echo "\t<tr>
\t    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "numeroRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nomRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "codePostal"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "ville"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "section"), "libelle"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterLesEtudiants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  42 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
