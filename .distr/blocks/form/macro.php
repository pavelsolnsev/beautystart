{% macro form(form, form_class, title_class, button_class, title, button, form_text, add_fields, exclude_fields) %}
<form action="<?= $action; ?>&form={{ form }}" class="form {{form_class}}">
  <div class="form__title {{ title_class }}">{{ title | safe }}</div>

  {% if form_text.length %}
  <div class="form__text">{{ form_text | safe }}</div>
  {% endif %}

  <div class="form__fields">
    {% if not exclude_fields.name %}
    {{ form_item( 'name', 'text', '', 'Имя', true ) }}
    {% endif %}

    {% if not exclude_fields.email %}
    {{ form_item( 'email', 'email', '', 'Почта', true ) }}
    {% endif %}

    {% if not exclude_fields.phone %}
    {{ form_item( 'phone', 'text', '', 'Телефон', true ) }}
    {% endif %}

    {% if add_fields.length %}
    {% for item in add_fields %}
    {{ form_item( item.name, item.type, item.value, item.placeholder, item.required ) }}
    {% endfor %}
    {% endif %}

    <button class="button form__button form__button-fields {{ button_class }}" type="submit">{{ button }}</button>
  </div>

  <div class="form__bottom">
    <label class="form__footer">
      <div class="form__footer_checkbox">
        <input type="checkbox" name="personalDataAgree" checked>
        <div class="form__footer_check_icon"></div>
      </div>
      <div class="form__footer_text">
        Я&nbsp;согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" data-fancybox>политикой конфиденциальности</a>.
      </div>
    </label>
    <!-- <button class="button form__button {{ button_class }}" type="submit">{{ button }}</button> -->
  </div>

</form>
{% endmacro %}


{% macro form_item(name, type, value, placeholder, required) %}
<div class="form__item {{ 'd-none' if type == 'hidden' }}">
  {% if type == 'textarea' %}
  <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__textarea" {{ 'required' if required }}></textarea>
  {% else %}
  <input name="{{ name }}" type="{{ type }}" value="{{ value }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }}>
  {% endif %}
</div>
{% endmacro %}