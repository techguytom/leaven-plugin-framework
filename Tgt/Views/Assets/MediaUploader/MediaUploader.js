/**
 * Originally created by Mike Jolley
 * https://gist.githubusercontent.com/mikejolley/3a3b366cb62661727263/raw/9108a6c8b4ed91bbc332c3736822d97a344855b7/gistfile1.php
 */
var file_frame;

jQuery('.upload_image_button').live('click', function( event ){

    event.preventDefault();
    // If the media frame already exists, reopen it.
    if ( file_frame ) {
        file_frame.open();
        return;
    }

    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
        title: jQuery( this ).data( 'uploader_title' ),
        button: {
            text: jQuery( this ).data( 'uploader_button_text' ),
        },
        multiple: false  // Set to true to allow multiple files to be selected
    });

    // When an image is selected, run a callback.
    file_frame.on( 'select', function() {
        // We set mulitple to true so we get multiple images
        // attachment = attachment.toJSON();
        // We set multiple to false so only get one image from the uploader
        attachment = file_frame.state().get('selection').first().toJSON();

        // Do something with attachment.id and/or attachment.url here
        jQuery('.file-upload-url').val(attachment.url);
        jQuery('.file-upload-id').val(attachment.id);
        jQuery('.file-upload-title').val(attachment.title);
    });

    // Finally, open the modal
    file_frame.open();
});

