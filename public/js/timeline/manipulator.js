$(function() {

	$('#timebox').dragScroll({});
	var clicked = false, base = count = 0;
	$('.vector.prev').on('mouseover', function(){
		var div = $('#timebox'), 
			pos = div.scrollLeft();
        div.animate({ scrollLeft: div.position().left-100 }, 500);
    });
    $('.vector.next').on('mouseover', function(){
		var div = $('#timebox'), 
			pos = div.scrollLeft();
        div.animate({ scrollLeft: div.position().left+100 }, 500);
    });
	
	var timelineScale = new TimelineScale(1450, 1750), 
		barController = new BarController(timelineScale);
	
	var peopleResourse = {
		0: {
			id: 1, 
			region_id: 1, 
			name_en: 'Elizabeth I of England', 
			title_en: 'Queen of England', 
			birth_year: 15330907, 
			death_year: 16030324, 
		}, 
		1: {
			id: 2, 
			region_id: 2, 
			name_en: 'Richelieu', 
			title_en: 'Prime Minister of France', 
			birth_year: 15850909, 
			death_year: 16421204, 
		}, 
		2: {
			id: 3, 
			region_id: 7, 
			name_en: 'Suleiman I', 
			title_en: 'Ottoman Emperor',  
			birth_year: 14941106, 
			death_year: 15660906, 
		}, 
		3: {
			id: 4, 
			region_id: 3, 
			name_en: 'Leopold I', 
			title_en: 'Holy Roman Emperor',  
			birth_year: 16400609, 
			death_year: 17050505, 
		}, 
		4: {
			id: 5, 
			region_id: 8, 
			name_en: 'Giovanni da Palestrina', 
			title_en: null,  
			birth_year: 15250000, 
			death_year: 15940202, 
		}, 
		5: {
			id: 6, 
			region_id: 9, 
			name_en: 'Gustav II Adolf', 
			title_en: 'King of Sweden',  
			birth_year: 15941209, 
			death_year: 16321106, 
		}, 
		6: {
			id: 7, 
			region_id: 10, 
			name_en: 'Peter the Great', 
			title_en: 'Tsar',  
			birth_year: 16720530, 
			death_year: 17250128, 
		}, 
		7: {
			id: 8, 
			region_id: 11, 
			name_en: 'Leo X', 
			title_en: 'Pope of the Catholic Church',  
			birth_year: 14751211, 
			death_year: 15211201, 
		}, 

	}
	barController.setBars(peopleResourse);
});