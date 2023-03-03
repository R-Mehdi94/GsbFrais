<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* visiteur/ficheFraisVisiteur.php */
class __TwigTemplate_bf728f39e46000afaa4dd7b07323e458 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.php"));

        // line 1
        echo "<?php
    session_start();
\tuse App\\Modele\\ConnexionBdd;
    \$test = ConnexionBdd::getLigneFraisHorsForfait();
\t
?>


<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <h1>Frais forfait</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Forfait Etape</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisETP\"required> </td>
                    </tr>


                    <tr>
                        <td>Frais Kilométrique</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisKM\"> </td>
                    </tr>


                    <tr>
                        <td>Nuitée Hôtel</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisNUI\"> </td>
                    </tr>
                    

                    <tr>
                        <td>Repas Restaurant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisREP\"> </td>
                    </tr>
                </tbody>
            </table>

            <br/>

            <?php echo \"bonjour\" ?>



            <table>
                <tbody>
                    <tr>
                        <td>Frais hors forfait</td>
                        <td> <input type=\"text\" name=\"libelle\"> </td>
                    </tr>


                    <tr>
                        <td>Date</td>
                        <td> <input type=\"date\" name=\"date\"> </td>
                    </tr>


                    <tr>
                        <td>Montant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"montant\"> </td>
                    </tr>
                </tbody>
            </table>
            <br/>
            <input type=\"submit\" id='submit'  value=\"Soumettre\" >
        </form>

        <table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>id</td>
\t\t\t\t\t\t<td>Libellé</td>
\t\t\t\t\t\t<td>date</td>
                        <td>montant</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<?php foreach( \$ligneFraisHorsForfaits as \$uneLigneFraisHorsForfait ){ ?>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'id' ] ; ?></td>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'libelle' ] ; ?></td>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'date' ] ; ?></td>
                            <td><?php echo \$uneLigneFraisHorsForfait[ 'montant' ] ; ?></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</table>

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/ficheFraisVisiteur.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
    session_start();
\tuse App\\Modele\\ConnexionBdd;
    \$test = ConnexionBdd::getLigneFraisHorsForfait();
\t
?>


<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <h1>Frais forfait</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Forfait Etape</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisETP\"required> </td>
                    </tr>


                    <tr>
                        <td>Frais Kilométrique</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisKM\"> </td>
                    </tr>


                    <tr>
                        <td>Nuitée Hôtel</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisNUI\"> </td>
                    </tr>
                    

                    <tr>
                        <td>Repas Restaurant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"fraisREP\"> </td>
                    </tr>
                </tbody>
            </table>

            <br/>

            <?php echo \"bonjour\" ?>



            <table>
                <tbody>
                    <tr>
                        <td>Frais hors forfait</td>
                        <td> <input type=\"text\" name=\"libelle\"> </td>
                    </tr>


                    <tr>
                        <td>Date</td>
                        <td> <input type=\"date\" name=\"date\"> </td>
                    </tr>


                    <tr>
                        <td>Montant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"montant\"> </td>
                    </tr>
                </tbody>
            </table>
            <br/>
            <input type=\"submit\" id='submit'  value=\"Soumettre\" >
        </form>

        <table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>id</td>
\t\t\t\t\t\t<td>Libellé</td>
\t\t\t\t\t\t<td>date</td>
                        <td>montant</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<?php foreach( \$ligneFraisHorsForfaits as \$uneLigneFraisHorsForfait ){ ?>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'id' ] ; ?></td>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'libelle' ] ; ?></td>
\t\t\t\t\t\t\t<td><?php echo \$uneLigneFraisHorsForfait[ 'date' ] ; ?></td>
                            <td><?php echo \$uneLigneFraisHorsForfait[ 'montant' ] ; ?></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t<?php } ?>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</table>

    </body>
</html>", "visiteur/ficheFraisVisiteur.php", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/ficheFraisVisiteur.php");
    }
}
