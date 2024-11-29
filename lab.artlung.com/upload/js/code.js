//Based on https://www.sitepoint.com/html5-ajax-file-upload/ (but heavily modified)

var MAX_FILE_SIZE = 33554432; //32MB

function parseFile(file, image_target, callback) {
	//Basic file type validation
	if(file.type != 'image/jpeg' && file.type != 'image/png' && file.type != 'image/gif') {
		alert('Invalid image type. Valid formats: jpg, gif, png');
		return false;
	}

	//File size validation
	if(file.size > MAX_FILE_SIZE) {
		alert('File is too large. Max file size: ' + MAX_FILE_SIZE);
		return false;
	}

	//Toss an image preview in there right from the client-side
	var reader = new FileReader();
	reader.onload = function(e) {
		image_target.siblings('.filedrag-preview').attr('src', e.target.result);
		image_target.siblings('filedrag-filename').html(file.name);
	}
	reader.readAsDataURL(file);

	window[callback];
}

function uploadFile(file, post_target, input_id, onComplete) {
	var xhr = new XMLHttpRequest();
	var response = null;

	//Create progress bar
	$(".filedrag-progress").html('<p>Uploading...</p>');

	//Update progress bar
	xhr.upload.addEventListener("progress", function(e) {
		var pc = parseInt(100 - (e.loaded / e.total * 100));
		$(".filedrag-progress p").css("backgroundPosition", pc + "% 0");
	}, false);

	//Upload finished
	xhr.onreadystatechange = function(e) {
		if (xhr.readyState == 4) {
			if(xhr.status == 200) {
				$(".filedrag-progress p").addClass("success");
				$(".filedrag-progress p").html("Success!");
				$(".filedrag-progress p").fadeOut('slow', function() {
					$(".filedrag-progress p").html("");
					$(".filedrag-progress p").removeClass("success");
				});

				if(!xhr.responseText) {
					$('.filedrag-filename').html('Error fetching post response');
					return false;
				}

				response = JSON.parse(xhr.responseText);
				response.input_id = input_id;

				if(onComplete) { window[onComplete](response); }
			}
			else {
				$('.filedrag-filename').html('Error posting image');
				return false;
			}
		}
	};

	//Start the upload
	xhr.open("POST", post_target + "/filetype/" + file.type.replace("image/", ""), true);
	xhr.setRequestHeader("X-FILENAME", file.name);
	xhr.send(file);
}

function initUploaders(post_target, onComplete) {
	var xhr = new XMLHttpRequest();

	//Only do this stuff if the technology is supported
	if (xhr.upload) {
		//Handle the dragover event
		$('.filedrag-droparea').on("dragover", function(e) {
			e.stopPropagation();
			e.preventDefault();
			if(!$(this).hasClass('hover')) { $(this).addClass('hover'); }
		});

		//And the dragleave event
		$('.filedrag-droparea').on("dragleave", function(e) {
			e.stopPropagation();
			e.preventDefault();
			if($(this).hasClass('hover')) { $(this).removeClass('hover'); }
		});

		//A file was dragged onto the droppable area, do stuff
		$('.filedrag-droparea').on("drop", function(e) {
			//Prevent bubbling or default browser handling of image drag/drop
			e.stopPropagation();
			e.preventDefault();

			//Disable hover state
			if($(this).hasClass('hover')) { $(this).removeClass('hover'); }
			
			//Fetch the images from the FileList object
			var files=e.originalEvent.dataTransfer.files;

			//We'll return this in the response, because it comes in handy sometimes
			var input_id = $(this).siblings('.filedrag-input').attr('id');

			// process all File objects
			for (var i = 0, f; f = files[i]; i++) {
				parseFile(f, $(this));
				uploadFile(f, post_target, input_id, onComplete);
			}
		});

		$('.filedrag-droparea').on("click", function(e) {
			$(this).siblings('.filedrag-input').trigger('click');
		});

		//Handle file select
		$('.filedrag-input').change(function(e){
			var files = e.target.files;

			//We'll return this in the response, because it comes in handy sometimes
			var input_id = $(this).siblings('.filedrag-input').attr('id');

			// process all File objects
			for (var i = 0, f; f = files[i]; i++) {
				parseFile(f, $(this));
				uploadFile(f, post_target, input_id, onComplete);
			}
		});

		//Show the drag and drop area
		$('.filedrag-droparea').show();
		$('.filedrag-input').hide();
	}
}
