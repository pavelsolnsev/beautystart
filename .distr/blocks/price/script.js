$(() => {

	$('[data-installment]').on('click', function() {

		let
		$card = $(this).closest('[data-card]'),
		name = $('[data-title]', $card).text() || '',
		price = $('[data-price]', $card).text() || ''
		;

		price = price.replace(/\D/g, '');

		if ( !(typeof tinkoff === 'object' && name && price) ) return;

		tinkoff.create(
			{
				sum: price,
				items: [{ name: name, price: price, quantity: 1 }],
				demoFlow: 'sms',
				promoCode: 'installment_0_0_12_10',
				shopId: 'ced3ea10-21e9-4e3f-995b-86a3577822d8',
				showcaseId: '43bdbf29-d852-490a-b6ff-8386d45a0055'
			},
			{ view: 'modal' }
		);

	});

});
