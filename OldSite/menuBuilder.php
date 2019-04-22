<?php
				
	$pages = array(
			array('new menu part' => 'navigationColumn1'),
			array(
				'image' => '/img/m1.png',
				'link'  => '/',
				'name'  => 'index',
				'alt'   => 'Главная',
				'skip'  => true),
			array(
				'image' => '/img/m2.png',
				'link'  => '/study.php',
				'name'  => 'study',
				'alt'   => 'Обучение'),
			array(
				'image' => '/img/m3.png',
				'link'  => '/sheet.php',
				'name'  => 'sheet',
				'alt'   => 'Ноты'),
			array(
				'image' => '/img/m4.png',
				'link'  => '/video.php',
				'name'  => 'video',
				'alt'   => 'Бесплатные видеоуроки'),
		
			array('end menu part' => true),
			array('new menu part' => 'navigationColumn2'),
			array(
				'image' => '/img/m5.png',
				'link'  => '/buy.php',
				'name'  => 'buy',
				'alt'   => 'Купить видеоуроки',
				'skip'  => true),
			array(
				'image' => '/img/m6.png',
				'link'  => '/contacts.php',
				'name'  => 'contacts',
				'alt'   => 'Контакты'),
			array(
				'image' => '/img/m7.png',
				'link'  => '/teacher.php',
				'name'  => 'teacher',
				'alt'   => 'Учитель Алексей Трифонов'),
			array(
				'image' => '/img/m8.png',
				'link'  => '/students.php',
				'name'  => 'students',
				'alt'   => 'Ученики'),		
			array('end menu part' => true)
			);
	
	function echoMenuItem($image, $link, $altText)
	{
		echo '<li>';
		if (!empty($link))
			echo '<a href="' . $link . '">';
		echo '<img src="' . $image . '" alt="' . $altText . '" />';
		if (!empty($link))
			echo '</a>';
		echo '</li>';
	}
	
	for ($i = 0; $i < count($pages); $i++)
	{
		if (isset($pages[$i]['skip']) && $pages[$i]['skip'] === true)
		{
			continue;
		}
		
		if (isset($pages[$i]['end menu part']))
		{
			echo '</div>';
			continue;
		}
		
		if (isset($pages[$i]['new menu part']))
		{
			echo '<div id="' . $pages[$i]['new menu part'] . '" class="navigationColumn">';
			echo "\r\n";
			continue;
		}
		
		echoMenuItem(
			$pages[$i]['image'], 
			($page == $pages[$i]['name'] ? null : $pages[$i]['link']), 
			$pages[$i]['alt']);
		echo "\r\n";
	}
?>