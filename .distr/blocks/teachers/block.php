{% from './teachers.php' import data as items %}
<section class="teachers lazy" id="teachers">
  <div class="container">
    <h2 class="section-title teachers__title">Преподаватели</h2>
    <div class="teachers__wrapper">

      {% for item in items %}
      <div class="teachers__item">

        {% for foto, name, desc in item.teacher %}
        <div class="teachers__item-elem">
          <img src="img/teachers/teachers/{{ foto | safe }}.png" alt="Преподаватель {{ name | safe }}" class="teachers__item-foto">
          <h3 class="teachers__item-title">{{ name | safe }}</h3>
          <p class="teachers__item-description">{{ desc | safe }}</p>
        </div>
        {% endfor %}

      </div>
      {% endfor %}

    </div>
  </div>
</section>