<?php

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];

$form['form-1'] = array(

	'fields' => array(

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'question' => array(
			'title' => 'Скидка на товар',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'city' => array(
			'title' => 'Город',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Запрос персональной скидки',
		'title' => 'Персональная скидка',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)

);

$form['form-2'] = array(

	'fields' => array(

		'email' => array(
			'title' => 'E-mail',
			'validate' => array(
				'minlength' => '5',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Подписка на акции',
		'title' => 'Подписка на акции',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-3'] = array(

	'fields' => array(

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Заяказа звонка с сайта',
		'title' => 'Заказ звонка',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-4'] = array(

	'fields' => array(

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'city' => array(
			'title' => 'Город'
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Запрос адреса магазина',
		'title' => 'Получить адрес по смс',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-5'] = array(

	'fields' => array(

		'products' => array(
			'title' => 'Заказ'
		),

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Покупка в 1 клик',
		'title' => 'Покупка в 1 клик',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Спасибо за заказ',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-6'] = array(

	'fields' => array(

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'email' => array(
			'title' => 'E-mail',
			'validate' => array(
				'minlength' => '5',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'city' => array(
			'title' => 'Город',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		),

		'subscribe' => array(
			'title' => 'Подписаться на рассылку'
		),

		'products' => array(
			'title' => 'Заказ'
		),

		'delivery_method' => array(
			'title' => 'Способ доставки',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Выберите способ доставки',
			)
		),

		'country_step_2' => array(
			'title' => 'Страна',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'region_step_2' => array(
			'title' => 'Область',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'city_step_2' => array(
			'title' => 'Город',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'street_step_2' => array(
			'title' => 'Улица',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'house_step_2' => array(
			'title' => 'Дом',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'housing_step_2' => array(
			'title' => 'Корпус',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'building_step_2' => array(
			'title' => 'Строение',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'apartment_step_2' => array(
			'title' => 'Квартира',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'index_step_2' => array(
			'title' => 'Индекс',
			'validate' => array(
				'minlength' => '6',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'payment_method' => array(
			'title' => 'Способ оплаты',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Выберите способ оплаты',
			)
		),

		'comment' => array(
			'title' => 'Комментарий'
		)

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Заявка с сайта',
		'title' => 'Оформление заказа',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_email' => 'v.trunov@3owls.ru, ',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Спасибо за заказ',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-7'] = array(

	'fields' => array(

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'city' => array(
			'title' => 'Город',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'product_name' => array(
			'title' => 'Выбранный продукт',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'model' => array(
			'title' => 'Модель',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'brand' => array(
			'title' => 'Бренд',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'price' => array(
			'title' => 'Цена покупки по чеку',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'serial_numb' => array(
			'title' => 'Уникальный номер прибора',
			'validate' => array(
				'minlength' => '5',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'use_term' => array(
			'title' => 'Срок использования',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'efficiency' => array(
			'title' => 'Работоспособность',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'usage' => array(
			'title' => 'Степень износа',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'noize' => array(
			'title' => 'Шум при работе',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		)

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Заявка с сайта',
		'title' => 'Трейд-ин',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-8'] = array(

	'fields' => array(

		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'minlength' => '3',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'email' => array(
			'title' => 'E-mail',
			'validate' => array(
				'minlength' => '5',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'message' => array(
			'title' => 'Сообщение'
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		)

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Запрос на сотрудничество',
		'title' => 'Сотрудничество',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['form-9'] = array(

	'fields' => array(

		'tel' => array(
			'title' => 'Телефон',
			'validate' => array(
				'minlength' => '11',
			),
			'messages' => array(
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),

		'private' => array(
			'title' => 'Персональные данные',
			'validate' => array(
				'required' => 'checked',
			),
			'messages' => array(
				'required' => 'Необходимо согласие на обработку персональных данных',
			)
		)

	),

	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Запись на тест-драйв',
		'title' => 'Запись на тест-драйв',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'send@massager-market.ru',
		'from_name' => '"send@massager-market.ru"',
		'to_email' => 'terekhof@ya.ru, v.trunov@3owls.ru, callmassagermarket@gmail.com, massage.m.marketing@gmail.com, forw.ork@yandex.ru',
		'to_name' => 'noreply1, noreply2, noreply3',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

if($act == 'cfg') {
	$jsonBox['configs'] = ExportConfigs($form);
	die(json_encode($jsonBox));
}

function ExportConfigs($form) {
	$need = array('antispam','antispamjs','notify');
	$conf = array();
	foreach($form as $name => $data) {
		foreach($data['cfg'] as $k => $cfg) {
		if(in_array($k, $need)) {
			$conf[$name]['cfg'][$k] = $cfg;
		}
		}
	}
	return $conf;
}

if(isset($form[$act])) {

	$form = $form[$act];
	$getdata = array();
	$sb = array(); // subject и body

	foreach($form['fields'] as $name => $field) {

			$title = (isset($field['title'])) ? $field['title'] : $name;
			$getdata[$name]['title'] = $title;
			$rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

			  if(isset($field['validate'])) {              

				  $def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
				  // -0-
				  if(isset($field['validate']['required']) &&
					  empty($rawdata)) {
					  $error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
									 (isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
				  }
				  // -1-
				  if(isset($field['validate']['minlength']) &&
					  mb_strlen($rawdata) < $field['validate']['minlength']) {
					  $error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
				  }
				  // -2-
				  if(isset($field['validate']['maxlength']) &&
					mb_strlen($rawdata) > $field['validate']['maxlength']) {
						$error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
				  }
				  // -3-
				  if(isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 &&
					  !preg_match($field['validate']['preg'], $rawdata)) {
					  $error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
				  }
				  // -4-
				  if(isset($field['validate']['substr']) &&
					  mb_strlen($rawdata) > $field['validate']['substr']) {
					  $rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
				  }

			   $outdata = htmlspecialchars($rawdata);

			   $getdata[$name]['value'] = $outdata;

			  }
			   else {
				 $getdata[$name]['value'] = htmlspecialchars($rawdata);
			  }

			   if(empty($getdata[$name]['value'])) {
					 unset($getdata[$name]);
				  }

	  }

	if(isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']])) {
		if(!empty($_POST[$form['cfg']['antispam']])) {
		 $error[] = $form['cfg']['spam'];
		}
	}
	 if(isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']])) {
		 if(!empty($_POST[$form['cfg']['antispamjs']])) {
			 $error[] = $form['cfg']['spam'];
		 }
	 }

	if(count($error) == 0) {

	  if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
	  $get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
	  $get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);

	  $fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
	  $sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];
	  
	  $toName = trim($form['cfg']['to_name'], " ,");
	  $toEmail = trim($form['cfg']['to_email'], " ,");
 
	  if(strpos($toName, ",") !== false) { 
		 $exp_toName = explode(",", $toName);   
		 $c = count($exp_toName);
		  for($i=0; $i<$c; $i++) {
		   $exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
		  } 
	   } 
		else {
		  $toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
	   }
	   
	  if(strpos($toEmail, ",") !== false) { 
		 $exp_toEmail = explode(",", $toEmail);
	  }         
	  
	  $To = '';
	  
	   if(isset($exp_toEmail)) {
		$c = count($exp_toEmail);
		  for($i=0; $i < $c; $i++) { 
			   $To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName) . " <".trim($exp_toEmail[$i]).">";
			   if($i < ($c-1)) $To .= ", ";
		   }
	   } 
		else {
		   $To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
	   }

	  $headers = "Return-Path: <".$get_fromEmail.">\r\n";
	  $headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
	  $headers .= "X-Mailer: Feedback, v0.3 (http://artuelle.com)\r\n";
	  $headers .= "X-Priority: 3\r\n";
	  $headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
	  //$headers .= "To: ".$To."\r\n";
	  $headers .= "MIME-Version: 1.0\r\n";
	  $headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
	  $headers .= "Content-Transfer-Encoding: 8bit\r\n";

	  $sb['body'] = "";
	  // парсим шаблон
	  if($form['cfg']['tpl']) {
	   $out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
	   if(is_string($out)) {
		  $sb['body'] = $out;
	   }
	 }
	  // или отдаем голый текст
		if(mb_strlen(trim($sb['body'])) < 10) {
		  if(isset($form['cfg']['title']))
			  $sb['body'] .= $form['cfg']['title']."\r\n\r\n";
		  foreach($getdata as $name => $data) {
			  $sb['body'] .= $data['title'].": ".$data['value']."\r\n";
		  }
		  if($form['cfg']['referer'])
			  $sb['body'] .= "\r\n\r\n\r\n\r\n".$ref;
	  }

	  $queryUrl = '';
	  $queryData = http_build_query(array(
	  'fields' => array(
		  'TITLE' => 'Заявка с сайта', // НАЗВАНИЕ
		  'NAME' => $_POST['name'], // ИМЯ
		  'PHONE' => Array(
			  "n0" => Array(
				  "VALUE" => $_POST['tel'],
				  "VALUE_TYPE" => "WORK",
			  )), // РАБОЧИЙ ТЕЛЕФОН в массиве
		  'OPENED' => 'Y', // Доступно для всех
		  'SOURCE_ID' => "WEB", //Источник вебсайт
		  'EMAIL' => Array(
			  "n0" => Array(
				  "VALUE" => $_POST['email'],
				  "VALUE_TYPE" => "WORK",
			  ),
		  ), // Рабочая эл. почта
		  'UTM_SOURCE' => $_POST['utm'], // UTM метка
		  'ASSIGNED_BY_ID' => 107, // Ид ответственного
		  // 'ASSIGNED_BY_ID' => 1, // Ид ответственного
	  ),
	  'params' => array("REGISTER_SONET_EVENT" => "Y")
	  )); 
	  $curl = curl_init();
	  curl_setopt_array($curl, array(
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_POST => 1,
		  CURLOPT_HEADER => 0,
		  CURLOPT_RETURNTRANSFER => 1,
		  CURLOPT_URL => $queryUrl,
		  CURLOPT_POSTFIELDS => $queryData,
	  ));
	  $result = curl_exec($curl);
	  curl_close($curl);

	  // если есть что добавить
	   if(isset($form['cfg']['adds']) &&
		  is_array($form['cfg']['adds'])) {
		  $sb = adds($sb);
	   }

	  //отправка письма
	  $mail = mail($To, $sb['subject'], $sb['body'], $headers);

	  if($mail) {
		  $jsonBox['ok'] = 1;
		  $info[] = $form['cfg']['okay'];

		  $thanks__to = $_POST['email'];
		  $thanks__subject = "Ваша заявка принята";
		  $thanks__message = '
		  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
		  <html style="background-color: #F2F4F2;">
		  <head>
		  <title></title>
		  </head>
		  <body style="margin: 0px;padding: 0px;color: #333; font: 16px Arial, sans-serif; line-height: 24px; -webkit-text-size-adjust:none; display: block;letter-spacing: 0.2px;min-width: 700px;-webkit-font-smoothing: antialiased;">
		  <table bgcolor="#F2F4F2" border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tbody>
			  <tr>
			  <td style="padding: 80px 40px;">
				  <table border="0" cellpadding="0" cellspacing="0" style="margin:0 auto; padding:0px 0px;background-color: white;width: 100%;max-width: 650px;">
				  <td style="padding: 48px;">
					  <!-- content -->
					  <h1 style="margin-top: 0px;margin-bottom: 16px;">Ваша заявка принята</h1>
					  <p style="line-height: 24px;">В ближайшее время наши специалисты свяжутся с Вами.</p>
					  
					  <!-- contacts -->
					  <div style="width: 100%;height: 1px; background-color: #DDDDDD;margin-top: 48px; margin-bottom: 32px;"></div>
					  <div style="width: 100%:">
					  <div style="width: 50%;float: left;text-align: left; ">С уважением,<br><b>Массажер.Маркет</b></div>
					  </div>
				  </td>
				  </table>
			  </td>
			  </tr>
		  </tbody>
		  </table>
		  </body>
		  </html>
		  ';
		  $thanks__headers = "Return-Path: <".$get_fromEmail.">\r\n";
		  $thanks__headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
		  $thanks__headers .= "X-Mailer: Feedback, v0.3 ()\r\n";
		  $thanks__headers .= "X-Priority: 3\r\n";
		  $thanks__headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
		  $thanks__headers .= "MIME-Version: 1.0\r\n";
		  $thanks__headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
		  $thanks__headers .= "Content-Transfer-Encoding: 8bit\r\n";
		  mail($thanks__to, $thanks__subject, $thanks__message, $thanks__headers);
		
	  }
	  else {
		   $info[] = $form['cfg']['fuck'];
	  }

	}

 } else {
	$error[] = 'Нет настроек формы с именем #'.$act;
 }
	
	if(count($error) > 0) {
		$jsonBox['errors'] = $error;
	}
	if(count($info) > 0) {
		$jsonBox['infos'] = $info;
	}

	die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars) {
	global $form;
	$adds = $form['cfg']['adds'];
	foreach($adds as $key => $opts) {
		if(is_string($key)) {
			$one = array();
			$two = array();
			foreach($opts as $i => $val) {
				if(isset($_POST[$val])) {
				  $one[] = '%%'.$val.'%%';
				  $two[] = $_POST[$val];
				}
			}
		   $vars[$key] = str_replace($one, $two, $vars[$key]);
		}
	}
	   return $vars;
}
/*
 * парсер шаблона
 */
 function tpl($vars) {
	$tpl = 'tpl/'.$vars['name'].'.tpl';
	if(file_exists($tpl)) {
	 $template = file_get_contents($tpl);
		foreach($vars['getdata'] as $name => $data) {
			$template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array($data['title'], $data['value']), $template);
		}
		return $template;
	}
	 else {
	  return false;
	}
 }
