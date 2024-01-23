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

/* price/sold.html.twig */
class __TwigTemplate_1d63e092b88b6f6ec5ca9fec44f2a6cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'logo' => [$this, 'block_logo'],
            'legend' => [$this, 'block_legend'],
            'form_save_edit_sales' => [$this, 'block_form_save_edit_sales'],
            'form_search' => [$this, 'block_form_search'],
            'table_total_amount' => [$this, 'block_table_total_amount'],
            'tbody_total_amount' => [$this, 'block_tbody_total_amount'],
            'table_thead_tr' => [$this, 'block_table_thead_tr'],
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "price/sold.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        echo twig_escape_filter($this->env, (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_form_save_edit_sales($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sold_part"]) || array_key_exists("arr_sold_part", $context) ? $context["arr_sold_part"] : (function () { throw new RuntimeError('Variable "arr_sold_part" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sold"]) {
            // line 12
            echo "
                <th>№ Детали</th>
                <th>№ Оригинал</th>
                <th>Производитель</th>
                <th>Описание детали</th>
                <th>Название детали</th>
                <th>Марка</th>
                <th>Сторона</th>
                <th>Кузов</th>
                <th>Перед Зад</th>  
            </tr>
            <tr>
            
                <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 25), "getPartNumbers", [], "method", false, false, false, 25), "html", null, true);
            echo "</th>

                <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 27), "getIdOriginalNumber", [], "method", false, false, false, 27), "getOriginalNumber", [], "method", false, false, false, 27), "html", null, true);
            echo "</th>

                <th>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdManufacturer", [], "method", false, false, false, 29), "getManufacturers", [], "method", false, false, false, 29), "html", null, true);
            echo "</th>

                <th>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 31), "getNameDetail", [], "method", false, false, false, 31), "html", null, true);
            echo "</th>

                <th>";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", false, false, false, 33), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", false, false, false, 35), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", false, false, false, 37), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", false, false, false, 39), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", false, false, false, 41), "")) : ("")), "html", null, true);
            echo "</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>
            <th>";
            // line 54
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantity", [], "method", false, false, false, 54) - twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 54)), "html", null, true);
            echo "</th>

                <th>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 56) / 100) / twig_get_attribute($this->env, $this->source,             // line 57
$context["sold"], "getQuantity", [], "method", false, false, false, 57)), 2, ".", ""), "html", null, true);
            echo "</th>

                <th>";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 59) / 100) - (((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 59) / 100) / twig_get_attribute($this->env, $this->source,             // line 60
$context["sold"], "getQuantity", [], "method", false, false, false, 60)) * twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 60))), 2, ".", ""), "html", null, true);
            echo "</th>
                                
            ";
            // line 63
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 63, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sold_price")]);
            echo "
            ";
            // line 65
            echo "                ";
            $context["quantity_sold_price"] = "";
            // line 66
            echo "                ";
            $context["price_sold_price"] = "";
            // line 67
            echo "                ";
            $context["date_sold_price"] = "";
            // line 68
            echo "                ";
            $context["id_hidden"] = ((twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", false, false, false, 68), "")) : (""));
            // line 69
            echo "
                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["hidden_sold"], "method", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["value_id_hidden"]) {
                echo "  
                    ";
                // line 71
                $context["id_hidden"] = $context["value_id_hidden"];
                // line 72
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_hidden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 73, $this->source); })()), "hidden_sold", [], "any", false, false, false, 73), 'widget', ["value" => (isset($context["id_hidden"]) || array_key_exists("id_hidden", $context) ? $context["id_hidden"] : (function () { throw new RuntimeError('Variable "id_hidden" does not exist.', 73, $this->source); })())]);
            echo "

                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["quantity_sold_sold"], "method", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["value_quantity_sold"]) {
                echo "  
                    ";
                // line 76
                $context["quantity_sold_price"] = $context["value_quantity_sold"];
                // line 77
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 78, $this->source); })()), "quantity_sold", [], "any", false, false, false, 78), 'widget', ["value" => (isset($context["quantity_sold_price"]) || array_key_exists("quantity_sold_price", $context) ? $context["quantity_sold_price"] : (function () { throw new RuntimeError('Variable "quantity_sold_price" does not exist.', 78, $this->source); })())]);
            echo "<br>
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "flashes", ["[quantity_sold_error]"], "method", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 80
                echo "                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 82, $this->source); })()), "quantity_sold", [], "any", false, false, false, 82), 'errors');
            echo "</th>

                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["price_sold_sold"], "method", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["value_price_sold"]) {
                echo "  
                    ";
                // line 85
                $context["price_sold_price"] = $context["value_price_sold"];
                // line 86
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 87, $this->source); })()), "price_sold", [], "any", false, false, false, 87), 'widget', ["value" => (isset($context["price_sold_price"]) || array_key_exists("price_sold_price", $context) ? $context["price_sold_price"] : (function () { throw new RuntimeError('Variable "price_sold_price" does not exist.', 87, $this->source); })())]);
            echo "<br>
                ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 88, $this->source); })()), "price_sold", [], "any", false, false, false, 88), 'errors');
            echo "</th>

                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["date_sold_sold"], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["value_date_sold"]) {
                echo "  
                    ";
                // line 91
                $context["date_sold_price"] = $context["value_date_sold"];
                // line 92
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_date_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 93, $this->source); })()), "date_sold", [], "any", false, false, false, 93), 'widget', ["value" => (isset($context["date_sold_price"]) || array_key_exists("date_sold_price", $context) ? $context["date_sold_price"] : (function () { throw new RuntimeError('Variable "date_sold_price" does not exist.', 93, $this->source); })())]);
            echo "<br>
                ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 94, $this->source); })()), "date_sold", [], "any", false, false, false, 94), 'errors');
            echo "</th>

                ";
            // line 96
            $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 96, $this->source); })()), "id_invoice", [], "any", false, false, false, 96), 'widget');
            // line 97
            echo "                                            
                <th>";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 98, $this->source); })()), "button", [], "any", false, false, false, 98), 'widget', ["label" => "Продать", "attr" => ["class" => "save"]]);
            echo "</th>

            ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 100, $this->source); })()), 'form_end');
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "
    <h2>Для продолжения продажи выберите прайс в меню или завершите сделку</h2>  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "     
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", ["error_сount_receipt_change_number"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "  
       <h2> ";
            // line 107
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h2> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 113
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 114
            echo "        ";
            if ($context["sale_list"]) {
                // line 115
                echo "            ";
                $context["total_amount_transaction"] = ((isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 115, $this->source); })()) / 100);
                // line 116
                echo "

            <th>Цена общая - ";
                // line 118
                echo twig_escape_filter($this->env, (isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 118, $this->source); })()), "html", null, true);
                echo "</th>

            ";
                // line 120
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 120, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("complete_sales")]);
                echo "

                <th>";
                // line 122
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 122, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 122), 'label');
                echo "<br>
                ";
                // line 123
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 123, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 123), 'widget');
                echo "
                ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 124, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 124), 'errors');
                echo "</th>   
                
                <th>";
                // line 126
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 126, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 126), 'label');
                echo "<br>
                ";
                // line 127
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 127, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 127), 'widget');
                echo "
                ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 128, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 128), 'errors');
                echo "</th>   

                <th>";
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 130, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 130), 'label');
                echo "<br>
                ";
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 131, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 131), 'widget');
                echo "
                ";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 132, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 132), 'errors');
                echo "</th>   

                <th>";
                // line 134
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 134, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 134), 'label');
                echo "<br>
                ";
                // line 135
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 135, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 135), 'widget');
                echo "
                ";
                // line 136
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 136, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 136), 'errors');
                echo "</th>  

                 ";
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 138, $this->source); })()), "hidden_complete_sales", [], "any", false, false, false, 138), 'widget', ["value" => (isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 138, $this->source); })())]);
                echo "
                                                    
                <th>";
                // line 140
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 140, $this->source); })()), "button_complete_sales", [], "any", false, false, false, 140), 'widget', ["label" => "Завершить сделку", "attr" => ["class" => "save"]]);
                // line 141
                echo "</th>
            
            ";
                // line 143
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 143, $this->source); })()), 'form_end');
                echo "  

        ";
            }
            // line 146
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 150
        echo "    ";
        if ((isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 150, $this->source); })())) {
            // line 151
            echo "        <th>Последний чек<br>Смена Номер</th>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 156
        echo "    ";
        if ((isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 157, $this->source); })()), 0, [], "array", false, false, false, 157), "getReceiptChange", [], "method", false, false, false, 157), "html", null, true);
            echo " 
             &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp;
                ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 159, $this->source); })()), 0, [], "array", false, false, false, 159), "getReceiptNumber", [], "method", false, false, false, 159), "html", null, true);
            echo "</th>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 163
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 164
        echo " 
    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 165, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 166
            echo "        ";
            if ($context["sale_list"]) {
                // line 167
                echo "            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        ";
            }
            // line 179
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 183
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 184
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_sale_list"]) {
            // line 185
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value_sale_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
                echo "       
            <tr>
                <td>";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 187), "getIdDetails", [], "method", false, false, false, 187), "getPartNumbers", [], "method", false, false, false, 187), "html", null, true);
                echo "</td>

                <td>";
                // line 189
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 189), "getIdDetails", [], "method", false, true, false, 189), "getIdPartName", [], "method", false, true, false, 189), "getPartName", [], "method", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 189), "getIdDetails", [], "method", false, true, false, 189), "getIdPartName", [], "method", false, true, false, 189), "getPartName", [], "method", false, false, false, 189), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 191
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 191), "getIdDetails", [], "method", false, true, false, 191), "getIdCarBrand", [], "method", false, true, false, 191), "getCarBrand", [], "method", true, true, false, 191)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 191), "getIdDetails", [], "method", false, true, false, 191), "getIdCarBrand", [], "method", false, true, false, 191), "getCarBrand", [], "method", false, false, false, 191), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 193
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 193), "getIdDetails", [], "method", false, true, false, 193), "getIdSide", [], "method", false, true, false, 193), "getSide", [], "method", true, true, false, 193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 193), "getIdDetails", [], "method", false, true, false, 193), "getIdSide", [], "method", false, true, false, 193), "getSide", [], "method", false, false, false, 193), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 195
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 195), "getIdDetails", [], "method", false, true, false, 195), "getIdAxle", [], "method", false, true, false, 195), "getAxle", [], "method", true, true, false, 195)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 195), "getIdDetails", [], "method", false, true, false, 195), "getIdAxle", [], "method", false, true, false, 195), "getAxle", [], "method", false, false, false, 195), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 197), "html", null, true);
                echo "</td>

                <td>";
                // line 199
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 199), "getPrice", [], "method", false, false, false, 199) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 200
$context["sale_list"], "getIdInvoice", [], "method", false, false, false, 200), "getQuantity", [], "method", false, false, false, 200)) * twig_get_attribute($this->env, $this->source,                 // line 201
$context["sale_list"], "getQuantitySold", [], "method", false, false, false, 201)), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 203), "html", null, true);
                echo "</td>

                <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sale_list"], "getPriceSold", [], "method", false, false, false, 205) / 100), 2, ".", ""), "html", null, true);
                echo "</td>      

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"";
                // line 209
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 209), "getId", [], "method", false, false, false, 209), "html", null, true);
                echo "\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 215), "getId", [], "method", false, false, false, 215), "html", null, true);
                echo "\">Удалить</button></td>
                                    
                </form>
            </tr> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "price/sold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  728 => 219,  717 => 215,  708 => 209,  701 => 205,  696 => 203,  691 => 201,  690 => 200,  689 => 199,  684 => 197,  679 => 195,  674 => 193,  669 => 191,  664 => 189,  659 => 187,  651 => 185,  646 => 184,  636 => 183,  625 => 180,  619 => 179,  605 => 167,  602 => 166,  598 => 165,  595 => 164,  585 => 163,  572 => 159,  566 => 157,  563 => 156,  553 => 155,  541 => 151,  538 => 150,  528 => 149,  514 => 146,  508 => 143,  504 => 141,  502 => 140,  497 => 138,  492 => 136,  488 => 135,  484 => 134,  479 => 132,  475 => 131,  471 => 130,  466 => 128,  462 => 127,  458 => 126,  453 => 124,  449 => 123,  445 => 122,  440 => 120,  435 => 118,  431 => 116,  428 => 115,  425 => 114,  420 => 113,  410 => 112,  398 => 108,  390 => 107,  384 => 106,  381 => 105,  372 => 102,  365 => 100,  360 => 98,  357 => 97,  355 => 96,  350 => 94,  345 => 93,  339 => 92,  337 => 91,  331 => 90,  326 => 88,  321 => 87,  315 => 86,  313 => 85,  307 => 84,  301 => 82,  292 => 80,  288 => 79,  283 => 78,  277 => 77,  275 => 76,  269 => 75,  263 => 73,  257 => 72,  255 => 71,  249 => 70,  246 => 69,  243 => 68,  240 => 67,  237 => 66,  234 => 65,  229 => 63,  224 => 60,  223 => 59,  218 => 57,  217 => 56,  212 => 54,  196 => 41,  191 => 39,  186 => 37,  181 => 35,  176 => 33,  171 => 31,  166 => 29,  161 => 27,  156 => 25,  141 => 12,  136 => 11,  133 => 10,  123 => 9,  104 => 7,  85 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

    {% for sold in arr_sold_part %}

                <th>№ Детали</th>
                <th>№ Оригинал</th>
                <th>Производитель</th>
                <th>Описание детали</th>
                <th>Название детали</th>
                <th>Марка</th>
                <th>Сторона</th>
                <th>Кузов</th>
                <th>Перед Зад</th>  
            </tr>
            <tr>
            
                <th>{{ sold.getIdDetails().getPartNumbers() }}</th>

                <th>{{ sold.getIdDetails().getIdOriginalNumber().getOriginalNumber() }}</th>

                <th>{{ sold.getIdManufacturer().getManufacturers() }}</th>

                <th>{{ sold.getIdDetails().getNameDetail() }}</th>

                <th>{{ sold.getIdDetails().getIdPartName().getPartName()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdSide().getSide()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdBody().getBody()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdAxle().getAxle()|default('') }}</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>
            <th>{{ sold.getQuantity() - sold.getQuantitySold() }}</th>

                <th>{{ ((sold.getPrice() / 100) 
                        / sold.getQuantity())|number_format(2, '.', '') }}</th>

                <th>{{ ((sold.getPrice() / 100) - (((sold.getPrice() / 100) 
                / sold.getQuantity()) * sold.getQuantitySold()))|number_format(2, '.', '') }}</th>
                                
            {#Форма продажи детали#}
            {{ form_start(form_sold, {'action': path('sold_price')}) }}
            {#{{ dump(arr_sale_list[0].getDateSold()) }}#}
                {% set quantity_sold_price = '' %}
                {% set price_sold_price = '' %}
                {% set date_sold_price = '' %}
                {% set id_hidden = sold.getId()|default('') %}

                {% for value_id_hidden in app.flashes('hidden_sold') %}  
                    {% set id_hidden = value_id_hidden %}
                {% endfor %}
                {{ form_widget(form_sold.hidden_sold, {value : id_hidden}) }}

                {% for value_quantity_sold in app.flashes('quantity_sold_sold') %}  
                    {% set quantity_sold_price = value_quantity_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.quantity_sold, {value : quantity_sold_price}) }}<br>
                {% for message in app.flashes('[quantity_sold_error]') %}
                    {{ message }}
                {% endfor %}
                {{ form_errors(form_sold.quantity_sold) }}</th>

                {% for value_price_sold in app.flashes('price_sold_sold') %}  
                    {% set price_sold_price = value_price_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.price_sold, {value : price_sold_price}) }}<br>
                {{ form_errors(form_sold.price_sold) }}</th>

                {% for value_date_sold in app.flashes('date_sold_sold') %}  
                    {% set date_sold_price = value_date_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.date_sold, {value : date_sold_price}) }}<br>
                {{ form_errors(form_sold.date_sold) }}</th>

                {% do form_widget(form_sold.id_invoice) %}
                                            
                <th>{{ form_widget(form_sold.button, {'label': 'Продать', 'attr': {'class': 'save'} }) }}</th>

            {{ form_end(form_sold) }}
    {% else %}

    <h2>Для продолжения продажи выберите прайс в меню или завершите сделку</h2>  

    {% endfor %}     
    {% for message in app.flashes('error_сount_receipt_change_number') %}  
       <h2> {{ message }}</h2> 
    {% endfor %}    

{% endblock form_save_edit_sales %}

{% block form_search %}
    {% for sale_list in arr_sale_list %}
        {% if sale_list %}
            {% set total_amount_transaction = (total_amount_transaction / 100) %}


            <th>Цена общая - {{ total_amount_transaction }}</th>

            {{ form_start(form_complete_sales, {'action': path('complete_sales')}) }}

                <th>{{ form_label(form_complete_sales.id_payment_method_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.id_payment_method_complete_sales) }}
                {{ form_errors(form_complete_sales.id_payment_method_complete_sales) }}</th>   
                
                <th>{{ form_label(form_complete_sales.receipt_change_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_change_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_change_complete_sales) }}</th>   

                <th>{{ form_label(form_complete_sales.receipt_number_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_number_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_number_complete_sales) }}</th>   

                <th>{{ form_label(form_complete_sales.receipt_date_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_date_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_date_complete_sales) }}</th>  

                 {{ form_widget(form_complete_sales.hidden_complete_sales, {value : total_amount_transaction}) }}
                                                    
                <th>{{ form_widget(form_complete_sales.button_complete_sales
                    , {'label': 'Завершить сделку', 'attr': {'class': 'save'} }) }}</th>
            
            {{ form_end(form_complete_sales) }}  

        {% endif %}
    {% endfor %}
{% endblock form_search %}

{% block table_total_amount %}
    {% if last_check %}
        <th>Последний чек<br>Смена Номер</th>
    {% endif %}
{% endblock table_total_amount %}
   
{% block tbody_total_amount %}
    {% if last_check %}
            <th>{{ last_check[0].getReceiptChange() }} 
             &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp;
                {{ last_check[0].getReceiptNumber() }}</th>
    {% endif %}
{% endblock tbody_total_amount %}

{% block table_thead_tr %}
 
    {% for sale_list in arr_sale_list %}
        {% if sale_list %}
            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        {% endif %}
    {% endfor %}

{% endblock table_thead_tr %}

{% block tbody %}
    {% for value_sale_list in arr_sale_list %}
        {% for sale_list in value_sale_list %}       
            <tr>
                <td>{{ sale_list.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdPartName().getPartName()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdSide().getSide()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdAxle().getAxle()|default('') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (((sale_list.getIdInvoice().getPrice() / 100) 
                            / sale_list.getIdInvoice().getQuantity()) 
                                * sale_list.getQuantitySold())|number_format(2, '.', '') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (sale_list.getPriceSold() / 100)|number_format(2, '.', '') }}</td>      

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Удалить</button></td>
                                    
                </form>
            </tr> 
        {% endfor %}    
    {% endfor %}
{% endblock tbody %}", "price/sold.html.twig", "/var/www/templates/price/sold.html.twig");
    }
}
