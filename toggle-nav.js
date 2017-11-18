// PROJECT OVERVIEW NAV

$(window).load(function() {
    $('#overview').show();
    $('#overview-nav').addClass('active');
});

    $('#overview-nav').click(function() {
        $('#overview').fadeIn();
            $('#overview-nav').addClass('active');
        $('#highlights').hide();
            $('#highlights-nav').removeClass('active');
    });

    $('#highlights-nav').click(function() {
        $('#overview').hide();
            $('#overview-nav').removeClass('active');
        $('#highlights').fadeIn();
            $('#highlights-nav').addClass('active');
    });

// USER RESEARCH NAV

$('#proposal-button').click(function() {
    $('#proposal-button').addClass('active');
    $('#analysis-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#card-button').removeClass('active');
    $('#use-test-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#analysis-button').click(function() {
    $('#analysis-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#card-button').removeClass('active');
    $('#use-test-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#heuristic-button').click(function() {
    $('#heuristic-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#analysis-button').removeClass('active');
    $('#card-button').removeClass('active');
    $('#use-test-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#card-button').click(function() {
    $('#card-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#analysis-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#use-test-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#use-test-button').click(function() {
    $('#use-test-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#analysis-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#card-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#recorded-button').click(function() {
  $('#recorded').fadeIn();
    $('#recorded-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#analysis-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#card-button').removeClass('active');
    $('#use-test-button').removeClass('active');
    $('#use-report-button').removeClass('active');
});

$('#use-report-button').click(function() {
    $('#use-report-button').addClass('active');
    $('#proposal-button').removeClass('active');
    $('#analysis-button').removeClass('active');
    $('#heuristic-button').removeClass('active');
    $('#card-button').removeClass('active');
    $('#use-test-button').removeClass('active');
  $('#recorded').hide();
    $('#recorded-button').removeClass('active');
});
