$ ->
	resizeVideos()
	timer = 0;
	$(window).on "resize", ->
		clearTimeout(timer)
		timer = setTimeout ->
			resizeVideos()
		, 300

resizeVideos = ->
	$videos = $('iframe')
	for video in $videos
		$video = $(video)
		width = $video.attr 'width'
		height = $video.attr 'height'
		real_width = $video.width()
		ratio = height/width
		$video.css 'height', ratio*real_width
