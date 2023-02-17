<div class="popup popup_reg" id="popup-reg">
  {{ form.form('reg', form_class='', title='Оставьте заявку на участие в программе', button='Оставить заявку') }}
</div>

<div class="popup popup_installments" id="popup-installments">
  {{ form.form('installments', form_class='', title='Оставьте заявку на участие в программе', button='Оставить заявку') }}
</div>

// payment
<div class="popup popup_reg" id="popup-pay">

    {%
      set add_fields=[
      {
      name: 'product_id',
      type: 'hidden',
      value: '97235007'
      },
      {
      name: 'unit',
      type: 'hidden',
      value: 'payments'
      },
      {
      name: 'type',
      type: 'hidden',
      value: 'ticketless'
      },
      {
      name: 'callbackSuccess',
      type: 'hidden',
      value: 'https://synergy.online/lp/beautystart/thanks/'
      },
      {
      name: 'new_tab',
      type: 'hidden',
      value: '1'
      }
      ]
    %}

  {{ form.form('pay', form_class='', title='Заполните форму, чтобы зарегистрироваться', button='Купить', add_fields=add_fields) }}
</div>

<div class="popup popup_reg" id="popup-pay-expert">

    {%
      set add_fields=[
      {
      name: 'product_id',
      type: 'hidden',
      value: '106119903'
      },
      {
      name: 'unit',
      type: 'hidden',
      value: 'payments'
      },
      {
      name: 'type',
      type: 'hidden',
      value: 'ticketless'
      },
      {
      name: 'callbackSuccess',
      type: 'hidden',
      value: 'https://synergy.online/lp/beautystart/thanks/'
      },
      {
      name: 'new_tab',
      type: 'hidden',
      value: '1'
      }
      ]
    %}

  {{ form.form('pay', form_class='', title='Заполните форму, чтобы зарегистрироваться', button='Купить', add_fields=add_fields) }}
</div>

<div class="popup popup_reg" id="popup-pay-business">

    {%
      set add_fields=[
      {
      name: 'product_id',
      type: 'hidden',
      value: '106119906'
      },
      {
      name: 'unit',
      type: 'hidden',
      value: 'payments'
      },
      {
      name: 'type',
      type: 'hidden',
      value: 'ticketless'
      },
      {
      name: 'callbackSuccess',
      type: 'hidden',
      value: 'https://synergy.online/lp/beautystart/thanks/'
      },
      {
      name: 'new_tab',
      type: 'hidden',
      value: '1'
      }
      ]
    %}

  {{ form.form('pay', form_class='', title='Заполните форму, чтобы зарегистрироваться', button='Купить', add_fields=add_fields) }}
</div>