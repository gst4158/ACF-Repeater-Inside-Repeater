// loop through proficiencies and print to page
$rows = get_field('menu_general_item_repeater');
	
foreach($rows as $row) {
	echo $row['menu_category']->name.'<br>';
			
	foreach($row['subrepeater'] as $item) {
		echo $item['item_text'].'<br>';
		echo $item['item_price'].'<br>';
	}
};
		
