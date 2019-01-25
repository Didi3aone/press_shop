<?php

/* @PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig */
class __TwigTemplate_7752dcb4f54b17461feca7984605c1dc2d973c7998c34003fadc4ac2ffd16349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 26);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        list($context["handlingForm"], $context["carrierOptionsForm"]) =         array($this->getAttribute(($context["form"] ?? null), "handling", array()), $this->getAttribute(($context["form"] ?? null), "carrier_options", array()));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 34
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 34)->display($context);
        // line 35
        echo "
      ";
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", 37)->display($context);
        // line 38
        echo "    </div>
  ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 39,  49 => 38,  46 => 37,  43 => 35,  40 => 34,  34 => 31,  31 => 30,  27 => 26,  25 => 28,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/preferences.html.twig", "/var/www/html/press_shop/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/preferences.html.twig");
    }
}
