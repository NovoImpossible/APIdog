<?

	/**
	 * Тексты описаний ошибок
	 */
	$textErrors = [
		3 => "Ошибка доступа. Попытка использования администрируемых методов невалидным маркером",
		5 => "Пропущен обязательный параметр",
		6 => "Не https?:\\/\\/(m\\.)?vk\\.com\\/",
		7 => "Обязательный параметр для выполнения метода пропущен или некорректен",
		8 => "Неизвестный метод",
		9 => "Пользователь не авторизован",
		10 => "Такой сессии не существует",
		11 => "Доступ запрещен",
		21 => "Не все поля заполнены",
		22 => "Слишком много запросов в последнее время. Может быть, Вы - Zf Grivachenko?",
		23 => "Доступ запрещен",
		24 => "Тикет не найдена",
		25 => "Доступ к полномочиям администратора для данного пользователя запрещен",
		26 => "Доступ запрещен",
		27 => "Файл слишком большой",
		28 => "Неожиданная ошибка при загрузки изображения",
		34 => "Ответ слишком короткий",
		47 => "Ошибка записи комментария в базу данных",
		48 => "Не нужно слать одни смайлики без текста. Они сбивают агентов поддержки. Спасибо!",
		49 => "invalid data url",
		51 => "Вы не имеете права создавать тикеты и отвечать в тикетах",
		52 => "Не допускается использование мата",
		29 => "Данный пользователь запретил показывать время своего последнего захода",
		30 => "Пользователь не найден",
		31 => "Введена не ссылка",
		32 => "Ссылка содержит не изображение",
		33 => "Ссылка содержит файл более 3МБ",
		40 => "Неверный идентификатор приложения",
		41 => "Просроченый access_token",
		42 => "Пользовательский access_token (user_token) не передан",
		44 => "Не удалось загрузить файл",
		45 => "Файл слишком большой",
		46 => "Ошибка! Вы не можете удалить это объявление!",
		50 => "Поисковой запрос пуст!",
		53 => "authKey/authId/userId is empty",
		54 => "authKey disabled",
		55 => "security error",
		69 => "Неизвестная ошибка",
		70 => "Не все поля заполнены",
		71 => "Некорректное приложение",
		72 => "Неверная пара логин/пароль",
		73 => "%system% NeedCaptcha",
		74 => "%system% NeedValidation",
		75 => "",
		76 => "",
		77 => "",
		120 => "Не заполнены все обязательные поля",
		121 => "Вы уже отвечали в опросе. Повторно нельзя.",
		140 => "",
		141 => "Вы не можете создать более 5 тем.",
		142 => "Не все поля заполнены",
		143 => "Некорректный CSS-код",
		144 => "Некорректный идентификатор темы",
		145 => "Тема не найдена",
		146 => "Ошибка доступа к теме",
		101 => "Метод отключен",
		501 => "У вас нет прав на исполнение этого метода",
		502 => "Ошибка при пересборке файла"
	];

	/**
	 * Возвращает текст ошибки по ID
	 * @param  int $id Идентификатор ошибки
	 * @return string  Текст ошибки
	 */
	function getErrorTextById($id) {
		global $textErrors;
		return $textErrors[$id] ?? "{e" . $id . "}";
	};