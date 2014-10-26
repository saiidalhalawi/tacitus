$(function() {
	var timelineScale = new TimelineScale(1500, 1700), 
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
	}
	barController.setBars(peopleResourse);
});