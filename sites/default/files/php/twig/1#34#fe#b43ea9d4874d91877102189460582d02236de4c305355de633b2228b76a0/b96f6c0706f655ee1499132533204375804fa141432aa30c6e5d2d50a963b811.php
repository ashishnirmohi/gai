<?php

/* core/themes/seven/templates/admin-block-content.html.twig */
class __TwigTemplate_34feb43ea9d4874d91877102189460582d02236de4c305355de633b2228b76a0 extends Twig_Template
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
        // line 19
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 20
            echo "  <ul";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "      <li><a href=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
                echo "\"><span class=\"label\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</span><div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 24,  30 => 22,  26 => 21,  21 => 20,  19 => 19,);
    }
}
