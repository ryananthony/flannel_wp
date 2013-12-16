

$(document).ready(function() {

  /* Keeps height of sidebar equal to height of page wrapper */

  (function() {
    var $sidebar  = $('#dynamic-sidebar'),
        $main     = $('#main'),
        $page     = $('#page .main_grid_16'),
        $second   = $('#secondary');

    //$sidebar.height($page.height());

    //TODO -> Need to resize main div when sidebar is too tall.
    if ($main.height() < $sidebar.height()) {
      $second.hide();
    }
    //this isn't working correctly ^
  })();


  /* ********************************************
          Image Replacement for Sidebar

      Assumes 2 character extention and last 
      character of the new image's filename 
      to end in the letter 'b' 
  ********************************************* */

  $('.sidebar-social img').hover(
    function over() {
      $.data(this, 'old_path', $(this).attr('src'));
      var path     = $(this).attr('src'),
          new_path = path.substring(0, path.length - 5) + 'b' + path.substring(path.length - 4);

      $(this).attr('src', new_path);
    }, 
    function andout() {
      $(this).attr('src', $.data(this, 'old_path'));
    });

});