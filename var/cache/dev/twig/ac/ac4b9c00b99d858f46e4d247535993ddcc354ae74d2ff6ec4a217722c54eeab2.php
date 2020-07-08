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

/* @UVDeskCoreFramework/Snippets/createMemberTicket.html.twig */
class __TwigTemplate_91296e99699fac84f99aa04e7bb13bd67f43d5493dcc742473894f82ee493ede extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        // line 1
        $context["isTicketViewPage"] = ("helpdesk_member_ticket" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1));
        // line 2
        echo "
<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            ";
        // line 9
        echo "            ";
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "                ";
            // line 11
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer full name"), "html", null, true);
            echo "</span>
                </div>

                ";
            // line 20
            echo "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer email address"), "html", null, true);
            echo "</span>
                </div>
            ";
        } else {
            // line 28
            echo "                ";
            // line 29
            echo "                <span class=\"uv-field-info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket will be created with current ticket's customer"), "html", null, true);
            echo "</span>
            ";
        }
        // line 31
        echo "
            ";
        // line 33
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        echo "</option>

                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketTypeCollection"]) || array_key_exists("ticketTypeCollection", $context) ? $context["ticketTypeCollection"] : (function () { throw new RuntimeError('Variable "ticketTypeCollection" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 40
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </select>
                </div>
                <span class=\"uv-field-info\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 48
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 58
        echo "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        echo "</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" class=\"uv-field create-ticket\" type=\"text\"></textarea>
                </div>
                
                <span class=\"uv-field-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 68
        echo "            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        echo "</span>
                </label>
            </div>

            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>

";
        // line 81
        if ( !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", [0 => "_route"], "method", false, false, false, 81), [0 => "helpdesk_member_ticket"])) {
            // line 82
            echo "    ";
            echo twig_include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
            echo "
";
        }
        // line 84
        echo "
<script type=\"text/javascript\">
    \$(function () {
        ";
        // line 87
        if ((isset($context["removeMe"]) || array_key_exists("removeMe", $context))) {
            // line 88
            echo "            \$.each(";
            echo json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 88, $this->source); })()));
            echo ", function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        ";
        }
        // line 92
        echo "
        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: {
                ";
        // line 109
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 109, $this->source); })())) {
            // line 110
            echo "                    'name' : {
                        required : true,
                        msg : \"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },
                    'from' : 
                    [{
                        required : true,
                        msg : \"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            echo "\"
                    },{
                        pattern : /^([\\w-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([\\w-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)\$/,
                        msg : \"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            echo "\"
                    }],
                ";
        }
        // line 123
        echo "                'type' : {
                    required : true,
                    msg : \"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
                'subject' : {
                    required : true,
                    msg : \"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
                'reply' : {
                    required : true,
                    msg : \"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
                },
            },
            urlRoot : \"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        echo "\"
        });

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('";
        // line 144
        echo (((isset($context["errors"]) || array_key_exists("errors", $context))) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 144, $this->source); })())) : ("{}"));
        echo "');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            }
        });

        new CreateTicketForm();
    });\t
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 144,  290 => 136,  284 => 133,  277 => 129,  270 => 125,  266 => 123,  260 => 120,  254 => 117,  246 => 112,  242 => 110,  240 => 109,  221 => 92,  213 => 88,  211 => 87,  206 => 84,  200 => 82,  198 => 81,  189 => 75,  181 => 70,  177 => 68,  171 => 64,  163 => 59,  160 => 58,  154 => 54,  146 => 49,  143 => 48,  137 => 44,  133 => 42,  122 => 40,  118 => 39,  113 => 37,  107 => 34,  104 => 33,  101 => 31,  95 => 29,  93 => 28,  87 => 25,  80 => 21,  77 => 20,  71 => 16,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isTicketViewPage = ('helpdesk_member_ticket' == app.request.attributes.get('_route')) %}

<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"{{ path('helpdesk_member_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            {# Customer Details #}
            {% if not isTicketViewPage %}
                {# Name #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer full name'|trans }}</span>
                </div>

                {# Email #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer email address'|trans }}</span>
                </div>
            {% else %}
                {# Retrieve customer details from the current ticket being visited #}
                <span class=\"uv-field-info\">{{ \"Ticket will be created with current ticket's customer\"|trans }}</span>
            {% endif %}

            {# Ticket Type #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">{{ 'Select type'|trans }}</option>

                        {% for type in ticketTypeCollection %}
                            <option value=\"{{ type.id }}\">{{ type.description }}</option>
                        {% endfor %}
                    </select>
                </div>
                <span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
            </div>

            {# Ticket Subject #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
            </div>

            {# Ticket Message #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" class=\"uv-field create-ticket\" type=\"text\"></textarea>
                </div>
                
                <span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
            </div>

            {# Ticket Attachment #}
            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                </label>
            </div>

            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
            </div>
        </form>
    </div>
</div>

{% if not(app.request.attributes.get('_route') in ['helpdesk_member_ticket']) %}
    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
{% endif %}

<script type=\"text/javascript\">
    \$(function () {
        {% if(removeMe is defined) %}
            \$.each({{ removeMe | json_encode |raw }}, function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        {% endif %}

        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: {
                {% if not isTicketViewPage %}
                    'name' : {
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },
                    'from' : 
                    [{
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },{
                        pattern : /^([\\w-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([\\w-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)\$/,
                        msg : \"{{ 'Email address is invalid'|trans }}\"
                    }],
                {% endif %}
                'type' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'subject' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'reply' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
            },
            urlRoot : \"{{ path('helpdesk_member_create_ticket') }}\"
        });

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanegd',
                'change input[type=file].create-ticket': 'formChanegd',
            },
            formChanegd: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            }
        });

        new CreateTicketForm();
    });\t
</script>", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig", "/home/users/sanjeev.papnoi/www/html/uvdeskos/uvdesk-community-v1.0.9/vendor/uvdesk/core-framework/Resources/views/Snippets/createMemberTicket.html.twig");
    }
}
