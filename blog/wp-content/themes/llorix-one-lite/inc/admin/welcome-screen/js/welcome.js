<<<<<<< HEAD
=======
/* global llorixOneLiteWelcomeScreenObject */
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
jQuery(document).ready(function() {

	/* If there are required actions, add an icon with the number of required actions in the About L One page -> Actions required tab */
    var llorix_one_nr_actions_required = llorixOneLiteWelcomeScreenObject.nr_actions_required;

<<<<<<< HEAD
    if ( (typeof llorix_one_nr_actions_required !== 'undefined') && (llorix_one_nr_actions_required != '0') ) {
=======
    if ( (typeof llorix_one_nr_actions_required !== 'undefined') && (llorix_one_nr_actions_required !== '0') ) {
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
        jQuery('li.llorix-one-lite-w-red-tab a').append('<span class="llorix-one-lite-actions-count">' + llorix_one_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
<<<<<<< HEAD
    jQuery(".llorix-one-lite-dismiss-required-action").click(function(){
=======
    jQuery('.llorix-one-lite-dismiss-required-action').click(function(){
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8

        var id= jQuery(this).attr('id');

        jQuery.ajax({
<<<<<<< HEAD
            type       : "GET",
            data       : { action: 'llorix_one_lite_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : llorixOneLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.llorix-one-lite-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + llorixOneLiteWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
=======
            type       : 'GET',
            data       : { action: 'llorix_one_lite_dismiss_required_action',dismiss_id : id },
            dataType   : 'html',
            url        : llorixOneLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(){
				jQuery('.llorix-one-lite-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + llorixOneLiteWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery('#temp_load').remove(); /* Remove loading gif */
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var llorix_one_lite_actions_count = jQuery('.llorix-one-lite-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof llorix_one_lite_actions_count !== 'undefined' ) {
<<<<<<< HEAD
                    if( llorix_one_lite_actions_count == '1' ) {
=======
                    if( llorix_one_lite_actions_count === '1' ) {
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
                        jQuery('.llorix-one-lite-actions-count').remove();
                        jQuery('.llorix-one-lite-tab-pane#actions_required').append('<p>' + llorixOneLiteWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.llorix-one-lite-actions-count').text(parseInt(llorix_one_lite_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
<<<<<<< HEAD
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
=======
                window.console.log(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
            }
        });
    });

	/* Tabs in welcome page */
	function llorix_one_lite_welcome_page_tabs(event) {
<<<<<<< HEAD
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".llorix-one-lite-tab-pane").not(tab).css("display", "none");
=======
		jQuery(event).parent().addClass('active');
        jQuery(event).parent().siblings().removeClass('active');
        var tab = jQuery(event).attr('href');
        jQuery('.llorix-one-lite-tab-pane').not(tab).css('display', 'none');
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
        jQuery(tab).fadeIn();
	}

	var llorix_one_lite_actions_anchor = location.hash;

<<<<<<< HEAD
	if( (typeof llorix_one_lite_actions_anchor !== 'undefined') && (llorix_one_lite_actions_anchor != '') ) {
		llorix_one_lite_welcome_page_tabs('a[href="'+ llorix_one_lite_actions_anchor +'"]');
	}

    jQuery(".llorix-one-lite-nav-tabs a").click(function(event) {
=======
	if( (typeof llorix_one_lite_actions_anchor !== 'undefined') && (llorix_one_lite_actions_anchor !== '') ) {
		llorix_one_lite_welcome_page_tabs('a[href="'+ llorix_one_lite_actions_anchor +'"]');
	}

    jQuery('.llorix-one-lite-nav-tabs a').click(function(event) {
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
        event.preventDefault();
		llorix_one_lite_welcome_page_tabs(this);
    });

<<<<<<< HEAD
 /* Tab Content height matches admin menu height for scrolling purpouses */
		$tab = jQuery('.llorix-one-lite-tab-content > div');
		$admin_menu_height = jQuery('#adminmenu').height();
    if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
  {
		$newheight = $admin_menu_height - 180;
		$tab.css('min-height',$newheight);
  }
=======
    /* Tab Content height matches admin menu height for scrolling purpouses */
    var $tab = jQuery('.llorix-one-lite-tab-content > div');
    var $admin_menu_height = jQuery('#adminmenu').height();
    if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') ) {
		var $newheight = $admin_menu_height - 180;
		$tab.css('min-height',$newheight);
    }
>>>>>>> 9bcb1a976705dbc2adef6f6607219b55055c73f8
});
