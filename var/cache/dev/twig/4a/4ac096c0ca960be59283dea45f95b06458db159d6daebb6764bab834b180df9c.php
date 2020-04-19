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

/* errors/error.html.twig */
class __TwigTemplate_98d49810ef3db9b0e60c11cc1ca59025f2ff63eca06155d2c2015c21ea9bb263 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "errors/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</title>

\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"canonical\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase");
        echo "\">
\t\t<link href=\"https://cdn.uvdesk.com/uvdesk/css/main.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"error-dialog\">
\t\t\t<h1>Error ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"section-separator\"></div>
\t\t\t<p style=\"margin: unset; font-size: 16px; line-height: 1.4em\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</p>
\t\t</div>
\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "errors/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  96 => 41,  63 => 11,  59 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"UTF-8\" />
\t\t<meta name=\"robots\" content=\"INDEX,FOLLOW\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t
\t\t<title>{{ code }} - {{ message }}</title>

\t\t<link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\">
\t\t<link rel=\"canonical\" href=\"{{ path('helpdesk_knowledgebase') }}\">
\t\t<link href=\"https://cdn.uvdesk.com/uvdesk/css/main.css\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

\t\t<style>
\t\t\t.error-dialog {
\t\t\t\tpadding: 25px;
\t\t\t\tposition: fixed;
\t\t\t\ttop: 50%;
\t\t\t\tleft: 50%;
\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t}

\t\t\t.error-dialog h1 {
\t\t\t\tcolor: #6F6F6F;
\t\t\t\tfont-size: 21px;
\t\t\t\tfont-weight: 700;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tmargin: unset;
\t\t\t\tline-height: 1.4em;
\t\t\t}

\t\t\t.section-separator {
\t\t\t\twidth: 50px;
\t\t\t\tborder: 1px solid #6F6F6F;
\t\t\t\tmargin: 14px 0px 20px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"error-dialog\">
\t\t\t<h1>Error {{ code }}</h1>
\t\t\t<div class=\"section-separator\"></div>
\t\t\t<p style=\"margin: unset; font-size: 16px; line-height: 1.4em\">{{ description }}</p>
\t\t</div>
\t</body>
</html>", "errors/error.html.twig", "/home/users/sanjeev.papnoi/www/html/uvdeskos/uvdesk-community-v1.0.9/templates/errors/error.html.twig");
    }
}
