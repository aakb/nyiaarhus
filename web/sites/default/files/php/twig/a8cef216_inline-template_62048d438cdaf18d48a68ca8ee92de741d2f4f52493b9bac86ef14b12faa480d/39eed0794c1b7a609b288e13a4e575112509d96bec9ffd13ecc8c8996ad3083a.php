<?php

/* {# inline_template_start #}<div id="js-cookieterms" class="cookies">
  <div class="cookies--inner">
    <span class="cookies--text">{{ text }}.
    {% if not (read_more_url is empty or read_more_text is empty) %}
    <a href="{{ read_more_url }}">{{ read_more_text }}</a>.
    {% endif %}
    </span>
    <span class="cookies--agree">
      <span id="js-cookieterms--agree" class="cookieterms--button button">{{ accept_button_text }}</span>
    </span>
  </div>
</div> */
class __TwigTemplate_b1d991e358d00b21fb013ccc079ab1e696cb6916cd2cf0f14ab5ba35517e5b2e extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"js-cookieterms\" class=\"cookies\">
  <div class=\"cookies--inner\">
    <span class=\"cookies--text\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true));
        echo ".
    ";
        // line 4
        if ( !(twig_test_empty((isset($context["read_more_url"]) ? $context["read_more_url"] : null)) || twig_test_empty((isset($context["read_more_text"]) ? $context["read_more_text"] : null)))) {
            // line 5
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["read_more_url"]) ? $context["read_more_url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["read_more_text"]) ? $context["read_more_text"] : null), "html", null, true));
            echo "</a>.
    ";
        }
        // line 7
        echo "    </span>
    <span class=\"cookies--agree\">
      <span id=\"js-cookieterms--agree\" class=\"cookieterms--button button\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["accept_button_text"]) ? $context["accept_button_text"] : null), "html", null, true));
        echo "</span>
    </span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div id=\"js-cookieterms\" class=\"cookies\">
  <div class=\"cookies--inner\">
    <span class=\"cookies--text\">{{ text }}.
    {% if not (read_more_url is empty or read_more_text is empty) %}
    <a href=\"{{ read_more_url }}\">{{ read_more_text }}</a>.
    {% endif %}
    </span>
    <span class=\"cookies--agree\">
      <span id=\"js-cookieterms--agree\" class=\"cookieterms--button button\">{{ accept_button_text }}</span>
    </span>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  72 => 7,  64 => 5,  62 => 4,  58 => 3,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div id=\"js-cookieterms\" class=\"cookies\">
  <div class=\"cookies--inner\">
    <span class=\"cookies--text\">{{ text }}.
    {% if not (read_more_url is empty or read_more_text is empty) %}
    <a href=\"{{ read_more_url }}\">{{ read_more_text }}</a>.
    {% endif %}
    </span>
    <span class=\"cookies--agree\">
      <span id=\"js-cookieterms--agree\" class=\"cookieterms--button button\">{{ accept_button_text }}</span>
    </span>
  </div>
</div>", "");
    }
}
